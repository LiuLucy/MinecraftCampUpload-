<?php
include("ShowList.php");
include("DownloadCard.php");
include("NavgationBar.php");
include("FileToZipDownload.php");
function ShowStudentsWorks() {
  $cityCamp= $_GET['cityCamp'];
  ShowStudentsList($cityCamp);
}
if($_POST['downloadFile']) {
  if(isset($_POST['files']) and count($_POST['files']) > 0) {
    DownloadStudentsWorks($_POST['files'],$_GET['cityCamp']);
  } else {
    echo "<script>alert('請選擇小朋友');</script>";
  }

}



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>猿創力程式設計學校冬令營</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/function/download.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style/studentWorksDownload.css">
    <link rel="stylesheet" href="/style/style.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="/images/codingape.jpg"/>
  </head>
  <body>
    <?php ShowNavgationBar("全部"); ?>
       <div class="container">
              <div class="card text-center">
                <div class="card-header">
                  學員檔案下載
                </div>
                <div class="card-block">
                  <form class="" method="get">
                      <select class="" id="cityCamp" name="cityCamp">
                        <option value="false">請選擇營隊</option>
                        <option value="Modding台北第一梯">Modding台北第一梯</option>
                        <option value="Python台北第一梯">Python台北第一梯</option>
                        <option value="Modding台北第二梯">Modding台北第二梯</option>
                        <option value="Python台北第二梯">Python台北第二梯</option>
                        <option value="Modding新竹第一梯">Modding新竹第一梯</option>
                        <option value="Python新竹第一梯">Python新竹第一梯</option>
                        <option value="Modding台中第一梯">Modding台中第一梯</option>
                        <option value="Python台中第一梯">Python台中第一梯</option>
                        <option value="Modding台南第一梯">Modding台南第一梯</option>
                        <option value="Python台南第一梯">Python台南第一梯</option>
                        <option value="Modding高雄第一梯">Modding高雄第一梯</option>
                        <option value="Python高雄第一梯">Python高雄第一梯</option>
                      </select>
                      <input type="submit" name="selectCamp" href="#" class="btn btn-primary" value="確定營隊">
                    </form>
                  <h4 class="card-title">在這幾天小朋友都很努力的發會創意</h4>
                  <p class="card-text">從不會到會，經過四天的學習小朋友對Python有一定的認識，也在Modding上學到了如何創作</p>
                  <br />
                  <br />
                  <br />
                  <form  method="post" action="">
                       <table class="table table-bordered">
                         <thead>
                            <tr>
                                 <th class="tableStudentName">*</th>
                                 <th class="tableStudentName">學員名字</th>
                            </tr>
                            <?php ShowStudentsWorks(); ?>
                            <tr>
                                 <td colspan="2"><input  type="submit" name="downloadFile" value="下載學生作品" />&nbsp;
                                 <input type="reset" name="reset" value="重選" /></td>
                            </tr>
                          </thead>
                       </table>
                  </form>
                </div>
                <div class="card-footer text-muted">
                  猿創力程式設計學校
                </div>
            </div>
       </div>
  </body>
</html>
