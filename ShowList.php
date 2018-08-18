<?php
function StudentsList($cityCamp) {
  if ($file = fopen("./model/".$cityCamp.".txt", "r")) {
    while(!feof($file)) {
       $line = fgets($file);
       echo "<option value=".$line.">".$line."</option>";
     }
  } else {
    echo "<option value=''>學生沒有找到</option>";
  }
}

function CampList($mentorName) {
  echo "./model/mentorCampList/".$mentorName.".txt";
  if ($file = fopen("./model/mentorCampList/".$mentorName.".txt", "r")) {
    while(!feof($file)) {
       $line = fgets($file);
       echo "<option value=".$line.">".$line."</option>";
     }
  } else {
    echo "<option value=''>營隊沒有找到</option>";
  }
}


function ShowStudentsList($cityCamp) {
  if ($file = fopen("./model/".$cityCamp.".txt", "r")) {
    while(!feof($file)) {
       $line = fgets($file);
      echo "<tr>";
          echo '<td><input type="radio" name="files" value='.$line.'/></td>';
            echo '<td class="tableStudentName">'.$line.'</td>';
       echo "</tr>";
     }
     echo '</select>';
  } else {
    echo '<p class="pleaseSelectCamp">＊選擇營隊名稱</p>';
  }
}

?>
