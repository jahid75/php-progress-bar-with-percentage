jQuery(document).ready(function($) {
  $("#startProcessing").on("click", function(e) {
    //e.preventDefaut();
    eventStart();
  });
});

function eventStart() {
  jQuery("#progessResults").slideDown(200);
  var fileName = new Date().getTime();
  jQuery.ajax({ url: "query.php?filename=" + fileName });
  var evSrc = new EventSource("stream.php?filename=" + fileName);
  evSrc.addEventListener("message", function(e) {
    console.log(e.data);
    updateProgress(e.data);
    if (100 == e.data) {
      evSrc.close();
    }
  });
}

function updateProgress(status) {
  var p_bar = jQuery("#progessResults").find(".progress-bar");
  status = parseInt(status);
  p_bar.css("width", status + "%");
}
