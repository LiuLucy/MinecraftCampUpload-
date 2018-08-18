<?php
  include("MentorCard.php");
  include("NavgationBar.php");
  include("ShowList.php");
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>猿創力程式設計學校冬令營</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/function/moddingFunction.js"></script>
    <script type="text/javascript" src="/function/function.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style/moddingStyle.css">
    <link rel="stylesheet" href="/style/style.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="/images/codingape.jpg"/>
  </head>
  <body>
      <?php ShowNavgationBar("Modding"); ?>
       <div class="container">
          <div class="row">
            <?php MentorCardData("Lucy","Modding台北第一梯"); ?>
            <?php MentorCardData("Eric","Modding新竹第一梯"); ?>
            <?php MentorCardData("Eric","Modding台北第二梯"); ?>
            <?php MentorCardData("G5","Modding台中第一梯"); ?>
            <?php MentorCardData("JJ","Modding台南第一梯"); ?>
            <?php MentorCardData("Kevin","Modding高雄第一梯"); ?>
          </div>
       </div>
  </body>
</html>
