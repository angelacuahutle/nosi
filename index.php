<?php include 'twilio.php' ?><!doctype html>
<html>
  <meta charset="utf8"></meta>
	<title>Empowerment that Glistens - myringproject.com</title>
  <link href="css/main.css" rel="stylesheet"/>
  <script src="js/modernizr.js"></script>
  <script type="text/javascript">
    WebFontConfig = {
      google: { families: [ 'Asap:400,700,400italic,700italic:latin' ] }
    };
    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })(); </script>

  <div id="rules">
    <p class="darkbrown">The rules of the project are simple. Each participant is to be a temporary owner of the ring for three days, after which they should pass it on to its new owner. After or during your encounter you may return to <a class="purple italic" href="http://myringproject.com">myringproject.com</a> to publish your experiences, opinion, location, date, or anything you think is important to record.</p>
  </div>

  <div id="myringproject">

    <h2 class="purple">A ring made for 100% of the world’s population</h2>

    <p id="slogan"><strong>Empowerment that Glistens</strong></p>

    <div id="do">

      <div id="record" class="col">
    		<h3 class="darkbrown">Join the myringproject community</h3>
    		<button id="call" class="btn">Begin Recording</button>
        <img id="oooo" src="img/oneorganismoneorgasm.png">
      </div>

      <div id="archive" class="col">
        <h3 class="darkbrown">Or listen to the archive</h3>
        <div id="recordings"></div>
      </div>

    </div>

    <p id="track">Track this <em class="purple">Dynamic Dazzler</em></p>



  </div>

  <script>window.TWILIO_TOKEN = "<?= $token->generateToken() ?>";</script>
	<script type="text/javascript" src="//media.twiliocdn.com/sdk/js/client/v1.7/twilio.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/twilio.js"></script>
	<script src="js/myringproject.js"></script>

</html>
