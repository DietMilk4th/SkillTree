const htmlPath=document.getElementsByClassName('HTMLPATH');

let statuses={
    c:'hidden',
    java:'hidden',
    python:'hidden'
};


function RectClick1(revealed, status){

    for(let i=0; i<revealed.length; i++){
        revealed[i].style.display='block';
    }
    statuses[status]='revealed';
    console.log(statuses[status]);
    checkHTML(statuses.c, statuses.java,statuses.python);
   
}


function RectClick2(status){
    statuses[status]='revealed';
    console.log(statuses[status]);
    checkHTML(statuses.c,statuses.java, statuses.python);
   
}

function RectClick3(revealed){
    for(let i=0;i<revealed.length; i++){
        revealed[i].style.display='block';
    }
}

function checkHTML(C, java, python){
    if(C==='revealed' && java==='revealed' && python==='revealed'){
        
        for(let i=0; i<htmlPath.length; i++){
            htmlPath[i].style.display='block';
        }
     }
}


const RectC=document.getElementById('cRect');

const javaRect=document.getElementById('java');
const pythonRect=document.getElementById('python');

const Cchildren=document.getElementsByClassName('Cplus');

RectC.addEventListener('click', ()=>{
   RectClick1(Cchildren,'c');
});






javaRect.addEventListener('click', ()=>{
    RectClick2('java');
    
})

pythonRect.addEventListener('click', ()=>{
    RectClick2('python');
    
})

const CSSJS=document.getElementsByClassName('CSSJS');
const htmlR=document.getElementById('HTMLR');
htmlR.addEventListener('click', ()=>{
    RectClick3(CSSJS);
})

const CSSrect=document.getElementById('CSS');
const CSSchildren=document.getElementsByClassName('CSSchildren');

CSSrect.addEventListener('click', ()=>{
    RectClick3(CSSchildren);
})


const script=document.getElementById('JS');
const JSchildren=document.getElementsByClassName('JSchildren');
script.addEventListener('click', ()=>{
    RectClick3(JSchildren);
})
