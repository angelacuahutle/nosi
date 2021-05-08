<?php
include 'twilio.php';
$count = 0;
?>

<? foreach($client->account->recordings as $recording): ?>
  <? $date = date("j/M/Y", strtotime($recording->date_created)) ?>
  <div class="recording" data-sid="<?= $recording->sid ?>" data-duration="<?= $recording->duration ?>">
    <p><span class="date"><?= $date ?></span></p>
    <audio src="https://api.twilio.com/2010-04-01/Accounts/<?=$accountSid?>/Recordings/<?=$recording->sid?>.mp3" controls preload="auto" autobuffer></audio>
  </div>
  <? if (++$count >= 5 ) break; ?>
<? endforeach ?>