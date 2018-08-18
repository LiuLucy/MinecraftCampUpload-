<?php
session_start();
if(isset($_SESSION['name'])){
    $text = $_POST['text'];

    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'>".$_SESSION['name']."小朋友說</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
    fclose($fp);
}
?>
