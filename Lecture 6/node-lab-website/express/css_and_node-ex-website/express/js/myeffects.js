function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

$("#bandheader").click(function (){
  console.log(getRandomColor())
  $('#bandheader').css("color", getRandomColor())
})

$("#img1").hover(function() {
    $("#img1").stop().animate({opacity:1},'slow');
}, function() {
    $("#img1").stop().animate({opacity:0.6},'slow');
});

$("#img2").hover(function() {
    $("#img2").stop().animate({opacity:1},'slow');
}, function() {
    $("#img2").stop().animate({opacity:0.6},'slow');
});

$("#img3").hover(function() {
    $("#img3").stop().animate({opacity:1},'slow');
}, function() {
    $("#img3").stop().animate({opacity:0.6},'slow');
});

$('#welmusic').click(function() {
  $('#welmusic').animate(
    { deg: 360 },
    {
      duration: 1200,
      step: function(now) {
        $(this).css({ transform: 'rotate(' + now + 'deg)' });
      }
    }
  );
});

$("#para1").click(function(){
  $("#para1").toggleClass("turnred")
})
