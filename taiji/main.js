let content = document.getElementById("content");
let image = document.querySelector("#image");
let style = document.getElementsByTagName("style");
let string = `大家好，我是Aaron，
我是一名刚学前端不久的新人。
现在我在这里构建出一个太极图。 
首先是显示出太极图的显示为范围area， 
然后得出太极图的轮廓line1， 
接下来就是内部的分割线line2，
随后，两个鱼眼的轮廓线line3， 
最后上色color。 
`;
let n = 0;
let string2 = " ";
let string3 = " ";
let step = () => {
  setTimeout(() => {
    if (string[n] + string[n + 1] + string[n + 2] + string[n + 3] === "area") {
      string2 += `#image{height:200px;width:200px; border: 1px
solid black; position:absolute; top:0; left:50%; transform:translateX(-50%)}`;
      style[0].innerHTML = string2;
      n += 3;
    } else if (string[n] === "\n") {
      console.log(string3);
      string3 += "<br>";
    } else if (
      string[n] +
        string[n + 1] +
        string[n + 2] +
        string[n + 3] +
        string[n + 4] ===
      "line1"
    ) {
      string2 += `#image{border-radius: 50%;}`;
      style[0].innerHTML = string2;
      n += 4;
    } else if (
      string[n] +
        string[n + 1] +
        string[n + 2] +
        string[n + 3] +
        string[n + 4] ===
      "line2"
    ) {
      string2 += `#div1{ position:absolute; width:100px;
height:100px; top:0; left:50%; transform:translateX(-50%) rotate(-90deg); border-top:1px solid black; border-radius: 50% } #div2{ position:absolute; width:100px; height:100px; bottom:0; left:50%; transform:translateX(-50%) rotate(90deg);  border-radius: 50% } `;
      style[0].innerHTML = string2;
      n += 4;
    } else if (
      string[n] +
        string[n + 1] +
        string[n + 2] +
        string[n + 3] +
        string[n + 4] ===
      "line3"
    ) {
      string2 += ` #div1 div{ position:absolute; width:50px; height:50px; top:50%;
left:50%; transform:translateX(-50%) translateY(-50%); border:1px solid black; border-radius: 50% } #div2 div{ position:absolute; width:50px; height:50px; top:50%; left:50%; transform:translateX(-50%) translateY(-50%); border:1px solid black; border-radius:
50% } `;
      style[0].innerHTML = string2;
      n += 4;
    } else if (
      string[n] +
        string[n + 1] +
        string[n + 2] +
        string[n + 3] +
        string[n + 4] ===
      "color"
    ) {
      console.log("ttt");
      string2 += ` #image{ background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 50%,
rgba(0,0,0,1) 50%, rgba(0,0,0,1) 100%); } #div1 {background:black} #div1 div {background:white} #div2 {background:white} #div2 div {background:black} `;
      style[0].innerHTML = string2;
      n += 4;
    } else {
      string3 += string[n];
    }
    content.innerHTML = string3;
    if (n + 1 < string.length) {
      step();
      n++;
    }
  }, 0);
};
step();
