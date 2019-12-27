

let scrollbarWrap = document.querySelector('.jmh-scrollbar-wrap');
let scrollbar = scrollbarWrap.querySelector('.jmh-scrollbar');
let dot = scrollbar.querySelector('.jmh-scrollbar--dot');
let body = document.querySelector('body');
let mousepostion = 0;
let scrollYAtCatch = 0;
let visible, scrollbarHeight, allhight, multiplicator, catched;


function updateDynamicChangingValues() {
    allhight = body.getBoundingClientRect().height - Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
    multiplicator = allhight / scrollbarHeight;
}

function init() {
    
    updateDynamicChangingValues();
    visible = allhight > 0;
    if (visible) {
        scrollbarWrap.classList.add('jmh-scrollbar-visible');
        scrollbarHeight = scrollbar.getBoundingClientRect().height;
        multiplicator = allhight / scrollbarHeight;
       
    }
}

init();



function initListerners() {

    dot.addEventListener('mousedown', catchDot, false);

    body.addEventListener('mouseup', releaseDot);

    document.addEventListener('mouseout', (e) => {
        e = e ? e : window.event;
        var from = e.relatedTarget || e.toElement;
        if (!from || from.nodeName == "HTML") {
            releaseDot();
        }
    })

    scrollbar.addEventListener('mousedown', (e) => {
        if (!catched) {
            window.scrollTo({
                top: (e.offsetY * multiplicator),
                behavior: 'smooth',
            });
        }
    })

    body.onresize = () => {
        init();
    }

    body.onscroll = () => {
        updateDynamicChangingValues();
        setDot();
       
    }

}

if(visible){
    initListerners();
}


function setDot() {
    let top = (scrollbarHeight / 100) * (scrollY / (allhight / 100));
    dot.style.top = top + 'px';
}

function setWindow(dif) {
    let top = scrollYAtCatc + (dif * multiplicator);
    window.scrollTo(0, top);
}

function catchDot(e) {
    mousepostion = e.clientY;
    scrollYAtCatc = scrollY;
    e.preventDefault();
    catched = true;
    body.addEventListener('mousemove', mouseMove)
    scrollbarWrap.classList.add('scrolldot-catched');
}

function releaseDot() {
    catched = false;
    body.removeEventListener('mousemove', mouseMove)
    scrollbarWrap.classList.remove('scrolldot-catched');
}

function mouseMove(e) {
    setWindow((e.clientY - mousepostion));
}




class JmhScrollbar {

    constructor(){
        this.scrollbarWrap = document.querySelector('.jmh-scrollbar-wrap');
        this.scrollbar = scrollbarWrap.querySelector('.jmh-scrollbar');
        this.dot = scrollbar.querySelector('.jmh-scrollbar--dot');
        this.body = document.body;
        this.mousepostion = 0;
        this.scrollYAtCatch = 0;
        this.visible=false;
        this.scrollbarHeight;
        this.allhight; 
        this.multiplicator; 
        this.catched;
        this.bodyHeight= this.body.getBoundingClientRect().height     
    }


   
    resetDynamicValues(){

    }
    setWindowScroll(){

    }
    setDot(){

    }
}

new JmhScrollbar();