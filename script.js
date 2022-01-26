var autorotate = true;
function rotate(el) {
  $(".stack .imagewrap.selected").removeClass("selected");
  el.addClass("selected");
  setTimeout(function () {
    $(".stack").prepend($(".stack .imagewrap.selected"));
    setTimeout(function () {
      $(".stack .imagewrap.selected").removeClass("selected");
    }, 200);
  }, 250);
}
function loadactions() {
  $("body")
    .off("click", ".stack .imagewrap:not(:first-child)")
    .on("click", ".stack .imagewrap:not(:first-child)", function () {
      $(".stack .imagewrap.selected").removeClass("selected");
      $(this).addClass("selected");
      setTimeout(function () {
        $(".stack").prepend($(".stack .imagewrap.selected"));
        setTimeout(function () {
          $(".stack .imagewrap.selected").removeClass("selected");
        }, 200);
      }, 250);
    });
}

$(function () {
  loadactions();
  if (autorotate == true) {
    setInterval(function () {
      rotate($(".stack .imagewrap:last-child"));
    }, 1500);
  }
});