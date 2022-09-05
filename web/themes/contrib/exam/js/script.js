if (Drupal.jsEnabled) {
  $(document).ready(function () {
    $(".toggle").click(function (event) {
      $(".mm-menu").toggleClass("active");
    });
  });
}
