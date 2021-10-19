var button = document.querySelector("#btn1")

button.addEventListener("mouseover", function(){
  this.style.background = "#3FC699";
})

button.addEventListener("mouseout", function(){
  this.style.background = "#E7E7E7";
})

// console.log(button.value)
console.log("connected")
