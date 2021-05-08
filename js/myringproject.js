$(document).ready(function(){

  var $rules = $('#rules');
  var $recordings = $('#recordings');
  $rules.hide().fadeIn(10000, showText)
  var $myringproject = $('#myringproject')

  function showText() {
    $('#myringproject').fadeIn()
    $.smoothScroll({
      offset: 0,
      speed: 2000,
      scrollTarget: $myringproject
    })
  }

  function loadRecordings() {
    $recordings.hide().load('recordings.php', function() {
      $recordings.slideDown()
    })
  }

  if (document.location.host === 'localhost') showText();
  loadRecordings();


});