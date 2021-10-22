//bouce
$("#ball").click(function() {
    doBounce($(this), 3, '40px', 300);
    console.log('clicked');
});


function doBounce(element, times, distance, speed) {
    for(var i = 0; i < times; i++) {
        element.animate({marginTop: '-='+distance}, speed)
            .animate({marginTop: '+='+distance}, speed);
    }
}

//fadeout
$("#fadeout").click(function(){
  $("#fadeout").slideDown();
  console.log('clicked');
})

//slidetoggle
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});

//fadetoggle
$(document).ready(function(){
  $("#fade").click(function(){
    $("#panel1").fadeToggle();
  });
});

//hide/show
$(document).ready(function(){
  $("#hide").click(function(){
    $("#lorem").hide();
  });
  $("#show").click(function(){
    $("#lorem").show();
  });
});

console.log('connected');
