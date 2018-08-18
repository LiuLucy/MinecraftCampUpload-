<?php
function ShowNavgationBar($campName) {
  echo '<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">回首頁</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="https://www.codingapeschool.com">'.$campName.'營隊</a></li>
        <li><a href="ModdingInstallTeaching.php">Modding 安裝教學</a></li>
        <li><a href="PythonInstallTeaching.php">Python 安裝教學</a></li>
        <li><a href="CampStudentWorksDownload.php">學生作品</a></li>
        <li><a href="snake.html">貪食蛇</a></li>
        <!-- <li><a href="chatroom.php">Minecraft 聊天室</a></li> -->
      </ul>
      <div class="navbar-form navbar-left">s
        <div class="form-group">
          <input name="enterPassword" id="enterPassword" type="text" class="form-control" placeholder="輸入密碼可以找到驚喜！"/>
        </div>
          <button onclick="getPassword()" class="btn btn-primary">小驚喜</button>
      </div>
    </div>
  </nav>';
}


 ?>
