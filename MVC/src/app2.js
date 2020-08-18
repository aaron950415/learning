let select=document.querySelector('.title')
let content=document.querySelectorAll('p')
select.childNodes[3].onclick=()=>{
    select.childNodes[1].className='none'
    select.childNodes[3].className='active'
    content[1].className='disappear'
    content[2].className=''
}
console.log(select.childNodes[3])
select.childNodes[1].onclick=()=>{
    select.childNodes[3].className='none'
    select.childNodes[1].className='active'
    content[2].className='disappear'
    content[1].className=''
}