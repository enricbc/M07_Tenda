
$(function() {
  var shine = new Shine(document.getElementById('shine'));

  shine.light.position.x = window.innerWidth * 0.5;
  shine.light.position.y = window.innerHeight * 0.5;
  shine.draw(); // make sure to re-draw
});
