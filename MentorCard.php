<?php
function MentorCardData($mentorName,$cityCamp) {
  echo '<div class="col-sm-6 col-md-4 TaipeiClass1">
    <div class="thumbnail">
      <img class="gifImage" src="/images/mentor/'.$mentorName.'.jpg" alt="...">
      <div class="caption">
        <h2>'.$cityCamp.'</h2>
        <h3 class="mentorName">我是'.$mentorName.'老師</h3>
        <form id="Taipei1CheckAndUpload" method="post" enctype="multipart/form-data" action="upload.php?cityCamp='.$cityCamp.'">
          <select id="Taipei1studentName" name="studentName">
              <option value="false">我的名字</option>';
               StudentsList($cityCamp);
          echo '</select>
          <input type="file" name="my_file[]" class="studentFile" multiple>
          <input type="submit" value="上傳">
        </form>
      </div>
    </div>
  </div><!-- 台北第一梯 -->';
}
 ?>
