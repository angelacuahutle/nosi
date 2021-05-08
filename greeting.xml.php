<?php
header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='UTF-8'?>";
?>
<Response>
    <Play>http://www.myringproject.com/mp3/00greeting.mp3</Play>
	  <Record action="goodbye.xml.php" method="GET" finishOnKey="#"/>
    <Say>I did not hear a recording. Goodbye.</Say>
</Response>