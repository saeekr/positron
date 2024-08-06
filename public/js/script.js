$(document).ready(function () {
    let allVids = $("#myCarousel").find(".carousel-item");
  
    allVids.each(function (index, el) {
      if (index !== 0) {
        $(this).find("video")[0].pause();
      }
    });
  
    $("#myCarousel").on("slide.bs.carousel", function (ev) {
      let slides = $(this).find(".carousel-item");
      let pvid = slides[ev.from].querySelectorAll("video")[0];
      let vid = slides[ev.to].querySelectorAll("video")[0];
  
      pvid.pause();
      vid.play();
    });
  
    $("video").on("play", function () {
      $("video")
        .not(this)
        .each(function () {
          this.pause();
        });
    });
  
    $("video").on("click touchstart", function (e) {
      e.stopPropagation();
    });
  });
  
  $(document).ready(function () {
    $(".scroll-top").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        return false;
    });
  });
  