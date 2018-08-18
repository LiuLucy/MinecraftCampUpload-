<?php
session_start ();
function loginForm() {
    echo '
   <div id="loginform">
   <form action="chatroom.php" method="post">
       <p>請輸入你的英文名字或中文名字</p>
       <h6>不要輸入怪怪的名字喔！</h6>
       <label for="name">輸入名字:</label>
       <input type="text" name="name" id="name" />
       <input class="btn btn-primary" type="submit" name="enter" id="enter" value="進入聊天室" />
       <div class="BossImage"></div>
   </form>
   </div>
   <div class="myBoss"><p>我們家的老大們</p></div>
   ';
}
if (isset ( $_POST ['enter'] )) {
    if ($_POST ['name'] != "") {
        $_SESSION ['name'] = stripslashes ( htmlspecialchars ( $_POST ['name'] ) );
        $fp = fopen ( "log.html", 'a' );
        fwrite ( $fp, "<div class='msgln'><i>" . $_SESSION ['name'] . " 小朋友進來跟你們一起聊天瞜！</i><br></div>" );
        fclose ( $fp );
    } else {
        echo '<span class="error">Please type in a name</span>';
    }
}
if (isset ( $_GET ['logout'] )) {

    // Simple exit message
    $fp = fopen ( "log.html", 'a' );
    fwrite ( $fp, "<div class='msgln'><i>" . $_SESSION ['name'] . " 小朋友離開了聊天室！</i><br></div>" );
    fclose ( $fp );

    session_destroy ();
    header ( "Location: chatroom.php" ); // Redirect the user
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>猿創力聊天室</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="/style/chatstyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="/function/function.js"></script>
<link rel="Shortcut Icon" type="image/x-icon" href="/images/codingape.jpg"/>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Modding上傳位置</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="https://www.codingapeschool.com">猿創力程式設計</a></li>
        <li><a href="#">台北一</a></li>
        <li><a href="#">台北二</a></li>
        <li><a href="#">新竹一</a></li>
        <li><a href="#">台中一</a></li>
        <li><a href="#">台南一</a></li>
        <li><a href="#">高雄一</a></li>
        <li><a href="snake.html">貪食蛇</a></li>
        <li><a href="chatroom.php">Minecraft 聊天室</a></li>
      </ul>
    </div>
  </nav>
    <?php
    if (! isset ( $_SESSION ['name'] )) {
        loginForm ();
    } else {
        ?>
<div id="wrapper">
        <div id="menu">
            <h1>歡迎各個地區的小朋友</h1>
            <h6>跟大家聊天吧～～</h6>
            <p>請勿輸入髒話！ <br>不然會關閉聊天室！</p>
            <p class="welcome">
                歡迎你, <b><?php echo $_SESSION['name']; ?> 小朋友</b>
            </p>
            <p class="logout">
                <a class="btn btn-primary" id="exit" href="#">離開聊天室</a>
            </p>
            <div style="clear: both"></div>
        </div>
        <div id="chatbox"><?php
        if (file_exists ( "log.html" ) && filesize ( "log.html" ) > 0) {
            $handle = fopen ( "log.html", "r" );
            $contents = fread ( $handle, filesize ( "log.html" ) );
            fclose ( $handle );

            echo $contents;
        }
        ?></div>
        <form name="message" action="">
            <input name="usermsg" type="text" id="usermsg" size="63" />
            <input name="submitmsg" type="submit" id="submitmsg" value="輸入" />
        </form>
    </div>
    <script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type="text/javascript">
// jQuery Document
$(document).ready(function(){
});

//jQuery Document
$(document).ready(function(){
    //If user wants to end session
    $("#exit").click(function(){
        var exit = confirm("確定要離開聊天室嗎?");
        if(exit==true){window.location = 'chatroom.php?logout=true';}
    });
});

//If user submits the form
$("#submitmsg").click(function(){
        var clientmsg = $("#usermsg").val();
        $.post("post.php", {text: clientmsg});
        $("#usermsg").attr("value", "");
        loadLog;
    return false;
});

function loadLog(){
    var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
    $.ajax({
        url: "log.html",
        cache: false,
        success: function(html){
            $("#chatbox").html(html); //Insert chat log into the #chatbox div

            //Auto-scroll
            var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
            if(newscrollHeight > oldscrollHeight){
                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
            }
        },
    });
}

setInterval (loadLog, 1000);
</script>
<?php
    }
    ?>
    <script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type="text/javascript">
</script>
</body>
</html>
