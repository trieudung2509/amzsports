$(document).ready(function() {
  if (window.matchMedia("(max-width: 767px)").matches)
  {
    $(".navbar-menu .navbar-nav .nav-item").hover(function() {
      $data = $(this).data("menu");
      $(this).addClass("active");
      $(this).parents(".menu-block").find(".children-menu." + $data).addClass("active");
    }, function() {
      $data = $(this).data("menu");
      $(this).removeClass("active");
      $(this).parents(".menu-block").find(".children-menu." + $data).removeClass("active");
    });
  }
});
