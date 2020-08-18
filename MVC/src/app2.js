let origin="\n            <div class=\"title\">\n                <div class=\"none\">1</div>\n                <div class=\"active\">2</div>\n            </div>\n            <p class=\"disappear\">content11</p>\n            <p class=\"\">content22</p>\n        "

let sty=localStorage.getItem("change") ||JSON.stringify (origin) 
sty=JSON.parse(sty)
document.querySelector('#app2').innerHTML=sty
let select=document.querySelector('.title')
let content=document.querySelectorAll('p')
select.childNodes[3].onclick=()=>{
    select.childNodes[1].className='none'
    select.childNodes[3].className='active'
    content[1].className='disappear'
    content[2].className=''
    localStorage.setItem("change",JSON.stringify(document.querySelector('#app2').innerHTML))
}
console.log(document.querySelector('#app2').innerHTML)
select.childNodes[1].onclick=()=>{
    select.childNodes[3].className='none'
    select.childNodes[1].className='active'
    content[2].className='disappear'
    content[1].className=''
    localStorage.setItem("change",JSON.stringify(document.querySelector('#app2').innerHTML))
}