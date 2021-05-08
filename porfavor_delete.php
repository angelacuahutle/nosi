<?php include 'twilio.php';

if ($_POST['sid']) {
  $client->account->recordings->delete($_POST['sid']);
}

?><!doctype html>
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

    <div id="recordings-list">
      <? foreach($client->account->recordings as $recording): ?>
        <? $date = date("j/M/Y", strtotime($recording->date_created)) ?>
        <div class="recording" data-sid="<?= $recording->sid ?>" data-duration="<?= $recording->duration ?>">
          <p><span class="date"><?= $date ?></span></p>
          <form action="" method="post">
            <button name="sid" value="<?= $recording->sid ?>">Delete</button>
          </form>
          <audio src="https://api.twilio.com/2010-04-01/Accounts/<?=$accountSid?>/Recordings/<?=$recording->sid?>.mp3" controls preload="auto" autobuffer></audio>
        </div>
      <? endforeach ?>
    </div>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script src="js/plugins.js"></script>
  <script>
    (function(){

      function del(e) {
        e.preventDefault();
        if(confirm('Segura Maya?')) {
          $.ajax({
            type: "POST",
            url: '',
            data: {sid: $(this).val()},
            context: this
          }).success(function() {
            $(this).closest('.recording').slideUp();
          })
        }

      }

      $(document).on('click', 'button[name=sid]', del);

    })()
  </script>

</html>