<?php
header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='ISO-8859-1'?>";
?>
<Response>
	<Play>http://www.myringproject.com/mp3/03thankyou.mp3</Play>
  <Play><?= $_REQUEST['RecordingUrl'] ?></Play>
	<Play>http://www.myringproject.com/mp3/04advertise.mp3</Play>
</Response>