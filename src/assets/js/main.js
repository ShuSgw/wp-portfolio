// background
window.onload = function() {
  Particles.init({
    selector: ".background",
    connectParticles: true,
    maxParticles: 55,
    color: ["#DA0463", "#404B69", "#DBEDF3"]
  });
};

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

function slide() {
  var sides = ["left", "top", "right", "bottom"];
  for (var i = 0; i < sides.length; ++i) {
    var cSide = sides[i];
    $(".sidebar." + cSide).sidebar({ side: cSide });
  }
  $(".btn[data-action]").on("click", function() {
    var $this = $(this);
    var action = $this.attr("data-action");
    var side = $this.attr("data-side");
    $(".sidebar." + side).trigger("sidebar:" + action);
    return false;
  });
  console.log("hello");
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
    // onReady: {
    // duration: 1000,
    // render: function() {
    // 	console.log("変わる直前");
    // }
    // },
    onAfter: function($wrap) {
      addBlacklistClass();
      $("#fullpage").fullpage();
      slide();
    }
  };
  addBlacklistClass();
  slide();
  $("#wrap").smoothState(settings);
  $("#fullpage").fullpage();
});
