function initialSlide() {
  var sides = ["left", "top", "right", "bottom"];
  for (var i = 0; i < sides.length; ++i) {
    var cSide = sides[i];
    $(".sidebar." + cSide).sidebar({ side: cSide });
  }
}
