const max_ang = 40;
const PERSP = "perspective(1500px) ";
const DEF_ROT = "rotateX(0deg) rotateY(0deg) ";
const SCALE = "scale3d(1,1,1) ";
$(".img-envelope, .gallery-pic").mousemove(function(e) {
  if (this !== e.target) return;
  $(this).removeAttr("style");
  var norm_w = e.offsetX / this.clientWidth - 0.5;
  var norm_h = -(e.offsetY / this.clientHeight - 0.5);
  var rot =
    "rotateX(" +
    max_ang * norm_h +
    "deg) " +
    "rotateY(" +
    max_ang * norm_w +
    "deg)";
  e.target.style.setProperty("transform", PERSP + rot + SCALE);
});
$(".img-envelope, .gallery-pic").mouseleave(function(e) {
  if (this !== e.target) return;
  e.target.style.setProperty("transform", PERSP + DEF_ROT + SCALE);
});
