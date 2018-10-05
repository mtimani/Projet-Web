const NAV_MAP = {
    187: { act: 'zoom', dir:  1, name: 'in' },
    189: { act: 'zoom', dir: -1, name: 'out'},
    37:  { act: 'move', dir: -1, name: 'left', axis: 0 },
    38:  { act: 'move', dir: -1, name: 'up', axis: 1 },
    39:  { act: 'move', dir:  1, name: 'right', axis: 0 },
    40:  { act: 'move', dir:  1, name: 'down', axis: 1 }
    },
    _SVG = document.querySelector('svg'),
    VB = _SVG.getAttribute('viewBox').split(' ').map(c => +c),
    DMAX = VB.slice(2), WMIN = 8, NF = 32;


let nav = null, tg = Array(4), f = 0, rID = null;

function update(){
    let k = ++f/NF, j = 1 - k, cvb = VB.slice();

    if(nav.act == 'zoom'){
        for(let i = 0; i < 4; i++){
            cvb[i] = j*VB[i] + k*tg[i]
        }
    }
    else if(nav.act == 'move') {
        cvb[nav.axis] = j*VB[nav.axis] + k*tg[nav.axis]
    }

    _SVG.setAttribute('viewBox',cvb.join(' '));

    if(!(f%NF)){
        cancelAnimationFrame(rID);
        rID = nav = null;
        f = 0;
        tg = Array(4);
        VB.splice(0,4, ...cvb);
        return
    }

    rID = requestAnimationFrame(update)
}

addEventListener('keyup',e => {
    if(e.keyCode in NAV_MAP) {
        nav = NAV_MAP[e.keyCode];

        if(nav.act == 'zoom'){
            if ((nav.dir == -1 && VB[2] >= DMAX[0]) ||
                (nav.dir == 1 && VB[2] <= WMIN)){
                console.log('cannot zoom ${nav.name} more');
            }
            for(let i = 0; i < 2 ; i++) {
                tg[i + 2] = VB[i + 2] / Math.pow(2, nav.dir);
                tg[i] = .5 * (DMAX[i] - tg[i + 2])
            }
        }
        else if(nav.act == 'move'){
            if ((nav.dir == -1 && VB[nav.axis] <= 0) ||
                (nav.dir == 1 && VB[nav.axis] >= DMAX[nav.axis] - VB[nav.axis] + 2)){
                console.log('cannot move ${nav.name} more');
                return
            }
            tg[nav.axis] = VB[nav.axis] + .5*nav.dir*VB[nav.axis + 2]
        }

        update()

    }
},false);