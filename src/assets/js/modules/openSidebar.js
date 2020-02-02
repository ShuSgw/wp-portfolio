function openSidebar() {
  var projectMenu = $(".projectMenuBtn");
  //   var humLines = $(".hamburger__line");
  var menuToggle = new TimelineMax({
    paused: true,
    reversed: true
  });
  //   menuToggle.staggerTo(humLines, 0.1, {
  //     cycle: {
  //       scale: [1, 0.5, 1],
  //       height: ["3px", "3px", "3px"],
  //       display: ["block", "block", "block"],
  //       rotation: [45, 0, -45],
  //       display: ["", "none", ""],
  //       top: ["50%", "50%", "50%"]
  //     }
  //   });
  projectMenu.click(function() {
    // when the btn is clicked
    if (menuToggle.reversed()) {
      menuToggle.restart();
      $(".sidebar.left").trigger("sidebar:open");
    } else {
      menuToggle.reverse();
      $(".sidebar.left").trigger("sidebar:close");
    }
  });
  // when the list is clicked
  $(".sidebar.left")
    .find("li")
    .on("click", function() {
      if (!menuToggle.reversed()) {
        menuToggle.reverse();
        $(".sidebar.left").trigger("sidebar:close");
      }
    });
  // when the screen is clicked and the nav is opened
  $(".container").on("click", function() {
    if (!menuToggle.reversed()) {
      menuToggle.reverse();
      $(".sidebar.left").trigger("sidebar:close");
    }
  });
}
