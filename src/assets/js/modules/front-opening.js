function titleAnimation() {
  //   if ($(window).width() > 1024) {
  var rXP = 300;
  var rYP = 300;
  $(".container").mousemove(function(e) {
    var rXP = e.pageX - this.offsetLeft - $(this).width() / 2;
    var rYP = e.pageY - this.offsetTop - $(this).height() / 2;
    //just one
    $(".front__contents__siteTitle").css(
      "text-shadow",
      rXP / 10 + "px " + rYP / 12 + "px rgba(206, 60, 40, 0.3)"
    );
  });
  //   }
}
function frontOpening() {
  var tl = new TimelineLite();
  $(".front__contents__siteTitle")
    .contents()
    .each(function(_, node) {
      node.parentNode.removeChild(node);
      switch (node.nodeType) {
        case Node.TEXT_NODE:
          var text_split = node.textContent.split("");

          function animate() {
            text_split.forEach(function(val) {
              if (val == " ") {
                $(".front__contents__siteTitle").append(
                  "<span>" + "&nbsp;" + "</span>"
                );
              } else {
                $(".front__contents__siteTitle").append(
                  "<span>" + val + "</span>"
                );
              }
            });
          }
          animate();
          break;
        default:
          $(".front__contents__siteTitle").append(node);
      }
    });
  tl.staggerFrom(
    $(".front__contents__siteTitle span"),
    1,
    {
      ease: Power1.easeOut,
      opacity: 0,
      display: "inline-block",
      y: -500
    },
    0.3
  );
  tl.from($(".front__contents__siteSubTitle"), 1, {
    ease: Power1.easeOut,
    y: 100,
    opacity: 0,
    onComplete: function() {
      titleAnimation();
    }
  });
  //   tl.from($(".logoBack"), 4, {
  //     ease: Power1.easeOut,
  //     width: "0px",
  //     opacity: 1
  //   });
  //   tl.to($(".logo"), 1, {
  //     ease: Bounce.easeOut,
  //     top: "5%",
  //     autoAlpha: 1
  //   });
  //   tl.to($(".hamburger"), 1, {
  //     top: "5%",
  //     right: "4%",
  //     autoAlpha: 1,
  //     onComplete: function() {
  //       $(".skipAnimationBtn").remove();
  //       $(".animationDiv").remove();
  //     }
  //   });
  //   if ($(window).width() > 1024) {
  //     tl.staggerTo(
  //       navLists,
  //       0.5,
  //       {
  //         opacity: 1,
  //         ease: Power4.easeOut
  //       },
  //       0.2
  //     );
  //   }
}
