const NAV_MAP = {
        187: { dir:  1, act: 'zoom', name: 'in' } /* + */,
        61: { dir:  1, act: 'zoom', name: 'in' } /* + WTF, FF? */,
        189: { dir: -1, act: 'zoom', name: 'out' } /* - */,
        173: { dir: -1, act: 'zoom', name: 'out' } /* - WTF, FF? */,
        37: { dir: -1, act: 'move', name: 'left', axis: 0 } /* ⇦ */,
        38: { dir: -1, act: 'move', name: 'up', axis: 1 } /* ⇧ */,
        39: { dir:  1, act: 'move', name: 'right', axis: 0 } /* ⇨ */,
        40: { dir:  1, act: 'move', name: 'down', axis: 1 } /* ⇩ */
    },
    _SVG = document.querySelector('svg'),
    VB = _SVG.getAttribute('viewBox').split(' ').map(c => +c),
    DMAX = VB.slice(2), WMIN = 8, NF = 32;


let nav = null, tg = Array(4), f = 0, rID = null;

function update(){
    let k = ++f/NF, j = 1 - k, cvb = VB.slice();

    if(nav.act === 'zoom'){
        for(let i = 0; i < 4; i++){
            cvb[i] = j*VB[i] + k*tg[i]
        }
    }
    else if(nav.act === 'move') {
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

addEventListener('keydown', e => { e.preventDefault() }, false);
addEventListener('keypress', e => { e.preventDefault() }, false);

addEventListener('keyup',e => {
    if(e.keyCode in NAV_MAP) {
        nav = NAV_MAP[e.keyCode];

        if(nav.act === 'zoom'){
            if ((nav.dir === -1 && VB[2] >= DMAX[0]) ||
                (nav.dir === 1 && VB[2] <= WMIN)){
                console.log('cannot zoom ${nav.name} more');
            }
            for(let i = 0; i < 2 ; i++) {
                tg[i + 2] = VB[i + 2] / Math.pow(2, nav.dir);
                tg[i] = .5 * (DMAX[i] - tg[i + 2])
            }
        }
        else if(nav.act === 'move'){
            if ((nav.dir === -1 && VB[nav.axis] <= 0) ||
                (nav.dir === 1 && VB[nav.axis] >= DMAX[nav.axis] - VB[nav.axis] + 2)){
                console.log('cannot move ${nav.name} more');
                return
            }
            tg[nav.axis] = VB[nav.axis] + .5*nav.dir*VB[nav.axis + 2]
        }

        update()

    }
},false);

function update2() {
    let k = ++f/NF, j = 1 - k, cvb = VB.slice();

    for(let i = 0; i < 4; i++){
        cvb[i] = j*VB[i] + k*tg[i]
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

function update3(){
    let k = ++f/NF, j = 1 - k, cvb = VB.slice();

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

let buttonSelection = document.getElementsByClassName('but');

buttonSelection.addEventListener('click', e => {
    if ((-1 === -1 && VB[2] >= DMAX[0]) ||
        (-1 === 1 && VB[2] <= WMIN)) {
        console.log('cannot zoom in or out more');
    }
    if (e.target.id === "B1") {
        for (let j = 0; j < 4; j++) {
            for (let i = 0; i < 2; i++) {
                tg[i + 2] = VB[i + 2] / Math.pow(8, -1);
                tg[i] = 0.5 * (DMAX[i] - tg[i + 2])
            }
        }
        update2()
    }
    else if (e.target.id === "B2"){
        for (let j = 0; j < 4; j++) {
            for (let i = 0; i < 2; i++) {
                tg[i + 2] = VB[i + 2] / Math.pow(8, 1);
                tg[i] = 0.5 * (DMAX[i] - tg[i + 2])
            }
        }
        update2()
    }
    else {
        update3()
    }
});






