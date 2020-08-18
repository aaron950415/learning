let num =parseInt(document.querySelector("#num").innerHTML)
let arr =document.querySelectorAll('button')

for(let i=0;i<arr.length;i++){
    arr[i].onclick=()=>{
       parseInt (hash[i]());
       document.querySelector("#num").innerHTML=num;
    }
}
let hash={
    0:add,
    1:red,
    2:mul,
    3:div
}

function add(){
    num+=1
}
function red(){
    num-=1
}
function mul(){
    num*=2
}
function div(){
    num/=2
}