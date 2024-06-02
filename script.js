const htmlPath=document.getElementsByClassName('HTMLPATH');
function RectClick1(revealed, status){

    for(let i=0; i<revealed.length; i++){
        revealed[i].style.display='block';
    }
    status="revealed";
    
   
}

function checkHTML(C,java,python){
    if(C==="revealed" && java==="revealed" && python==="revealed"){
        htmlPath.style.display='block';
     }
}

function RectClick2(status){
    status="revealed";
    console.log(status);

   
}

const RectC=document.getElementById('cRect');
let cStatus="hidden";
const Cchildren=document.getElementsByClassName('Cplus');

RectC.addEventListener('click', ()=>{
   RectClick1(Cchildren,cStatus);
   checkHTML(cStatus,javaStatus,pythonStatus);
});

const javaRect=document.getElementById('java');
let javaStatus="hidden";
const pythonRect=document.getElementById('python');
let pythonStatus="hidden";

javaRect.addEventListener('click', ()=>{
    RectClick2(javaStatus);
    checkHTML(cStatus,javaStatus,pythonStatus);
})

pythonRect.addEventListener('click', ()=>{
    RectClick2(pythonStatus);
    checkHTML(cStatus,javaStatus,pythonStatus);
})


