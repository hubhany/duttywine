<?php
$to      = 'hany9@poczta.fm';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: ' . $_POST['email'] . "\r\n" .
	'Content-type: text/html; charset=utf-8';

mail($to, $subject, $message, $headers);
echo 'Zapytanie dostarczone do DuttyWine!';
?>

<!-- <html>
  <head>
    <meta http-equiv="refresh" content="0; url=http://test23472.futurehost.pl/" />
  </head>
  <body>
  </body>
</html> -->
