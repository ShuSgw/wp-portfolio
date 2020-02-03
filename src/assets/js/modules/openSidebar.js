function openSidebar() {
  var projectMenu = $(".projectMenuBtn");
  //   var humLines = $(".hamburger__line");
  var menuToggle = new TimelineMax({
    paused: true,
    reversed: true
  });
  projectMenu.click(function() {
    // when the btn is clicked
    if (menuToggle.reversed()) {
      menuToggle.restart();
      $(".sidebar.left").trigger("sidebar:open");
      if ($(".fp-enabled").length) {
        $(".fullpage").fullpage.setAllowScrolling(false);
      }
    } else {
      menuToggle.reverse();
      $(".sidebar.left").trigger("sidebar:close");
      if ($(".fp-enabled").length) {
        $(".fullpage").fullpage.setAllowScrolling(true);
      }
    }
  });
  // when the list is clicked
  $(".sidebar.left")
    .find("li")
    .on("click", function() {
      if (!menuToggle.reversed()) {
        menuToggle.reverse();
        $(".sidebar.left").trigger("sidebar:close");
        if ($(".fp-enabled").length) {
          $(".fullpage").fullpage.setAllowScrolling(true);
        }
      }
    });
  // when the screen is clicked and the nav is opened
  $(".container").on("click", function() {
    if (!menuToggle.reversed()) {
      menuToggle.reverse();
      $(".sidebar.left").trigger("sidebar:close");
      if ($(".fp-enabled").length) {
        $(".fullpage").fullpage.setAllowScrolling(true);
      }
    }
  });
}
