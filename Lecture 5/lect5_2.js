button2 = document.querySelector("#btn2");
var arrow = document.querySelector("#arrow");

arrow.style.position= 'relative';
arrow.style.left = '0px'; 

button2.addEventListener("click", function(){
 arrow.style.left = parseInt(arrow.style.left) + 10 + 'px';
 console.log('clicked')
})

console.log('connected')
