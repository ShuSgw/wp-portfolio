function openNav() {
  var humBtn = $(".hamburger");
  var humLines = $(".hamburger__line");
  var menuToggle = new TimelineMax({
    paused: true,
    reversed: true
  });
  menuToggle.staggerTo(humLines, 0.1, {
    cycle: {
      scale: [1, 0.5, 1],
      height: ["3px", "3px", "3px"],
      display: ["block", "block", "block"],
      rotation: [45, 0, -45],
      display: ["", "none", ""],
      top: ["50%", "50%", "50%"]
    }
  });
  humBtn.click(function() {
    // when the btn is clicked
    if (menuToggle.reversed()) {
      menuToggle.restart();
      $(".sidebar.right").trigger("sidebar:open");
    } else {
      menuToggle.reverse();
      $(".sidebar.right").trigger("sidebar:close");
    }
  });
  // when the list is clicked
  $(".global__ul__li").on("click", function() {
    if (!menuToggle.reversed()) {
      menuToggle.reverse();
      $(".sidebar.right").trigger("sidebar:close");
    }
  });
  // when the screen is clicked and the nav is opened
  $(".container").on("click", function() {
    if (!menuToggle.reversed()) {
      menuToggle.reverse();
      $(".sidebar.right").trigger("sidebar:close");
    }
  });
}

// function slidesFunctions() {
//   // when it is open
//   $(".sidebar.right").on("sidebar:opened", function() {
//     $(".container").on("click", function() {
//       $(".sidebar.right").trigger("sidebar:close");
//     });
//   });
//   // to close when the page is clicked
//   $(".global__ul__li").on("click", function() {
//     $(".sidebar.right").trigger("sidebar:close");
//   });

//   $("#globalNav").on("click", function() {
//     $(".sidebar.right").trigger("sidebar:toggle");
//   });
// }
