function addBlacklistClass() {
  $("a").each(function() {
    if (
      this.href.indexOf("/wp-admin/") !== -1 ||
      this.href.indexOf("/wp-login.php") !== -1
    ) {
      $(this).addClass("wp-link");
    }
  });
}
function gatheringFuncForSmoothJs() {
  // for adjust mobile URL bar
  var hSize = $(window).height();
  $(".js-viewPointHeigt").css("min-height", hSize);
  $(".front").css("min-height", hSize);
  // contents__main
  addBlacklistClass();
  $("#fullpage").fullpage({
    // scrollingSpeed: 400,
    menu: "#projectMenu"
  });
  initialSlide();
  openNav();
  openSidebar();
  var h = $("#wrap").height();
  var isPlaying = false;
  $(".audioBtn").click(function() {
    var audio = document.getElementById("audio");
    if (isPlaying) {
      audio.pause();
    } else {
      audio.play();
    }
    audio.onplaying = function() {
      isPlaying = true;
    };
    audio.onpause = function() {
      isPlaying = false;
    };
  });

  var timer = null;
  $(".sidebars").on("mousewheel", function() {
    $("body").css({ overflow: "hidden" });
    clearTimeout(timer);
    timer = setTimeout(function() {
      $("body").css({ overflow: "inherit" });
    }, 200);
  });

  $(".global_widget ul").hide();
  $(".global_widget")
    .find(".widget__heading")
    .on("click", function() {
      $(this)
        .next("ul")
        .stop()
        .slideToggle(250, function() {
          if (
            $(this)
              .prev(".widget__heading")
              .hasClass("openedArrow")
          ) {
            $(this)
              .prev(".widget__heading")
              .stop()
              .removeClass("openedArrow");
          } else {
            $(this)
              .prev(".widget__heading")
              .stop()
              .addClass("openedArrow");
          }
        });
    });
}

$(function() {
  var settings = {
    anchors: "a",
    blacklist: ".wp-link",

    onStart: {
      duration: 280, // ms
      render: function($wrap) {
        var $container = $wrap.find(".container");
        $container.addClass("slide-out");
        TweenMax.to($container, 1, {
          ease: Back.easeOut.config(1.7),
          y: -100,
          opacity: 0
        });
        // to stop using fullpage multiple times
        if ($(".fp-enabled").length) {
          setTimeout(function() {
            $(".fullpage").fullpage.destroy("all");
          }, 1);
        }
      }
    },
    onAfter: function($wrap) {
      gatheringFuncForSmoothJs();
      var $container = $wrap.find(".container");
      TweenMax.fromTo(
        $container,
        1,
        {
          y: -100
        },
        {
          y: 0,
          opacity: 1,
          ease: Back.easeOut.config(1.7)
        }
      );
    }
  };
  $("#wrap").smoothState(settings);

  frontOpening(); // only when the website is opened
  gatheringFuncForSmoothJs();
});

// background
window.onload = function() {
  Particles.init({
    selector: ".background",
    connectParticles: true,
    maxParticles: 55,
    color: ["#DA0463", "#404B69", "#DBEDF3"]
  });
};
// global__ul__li
// $(".sidebar.right").on("sidebar:closed", function () {
//   console.log("closed");
// });
// $(".my-sidebar").trigger("sidebar:close", [{ isClosed: 0 }]);
// $("#sample2").on("click", function () {
//   $(".sidebar.right").trigger("sidebar:close");
// });
