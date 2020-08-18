console.log(document.querySelector('#app3').childNodes[1])
let init ="<div></div>"
 let pos=localStorage.getItem("change1")||JSON.stringify(init)
 document.querySelector('#app3').innerHTML=JSON.parse (pos)

document.querySelector('#app3').firstChild.onclick=function(){
    this.className !=='active2' ? this.className='active2' :this.className=''
    localStorage.setItem("change1",JSON.stringify(document.querySelector('#app3').innerHTML))
}