let squ=document.querySelector('#app3').childNodes[1]
console.log(squ)
squ.onclick=()=>{
    squ.className !=='active2' ? squ.className='active2' :squ.className=''
}