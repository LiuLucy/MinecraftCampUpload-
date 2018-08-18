<?php
header("Content-Type:text/html; charset=utf-8");
if (isset($_POST['className'])) {
    $selectStudentList = $_POST['className'];
      if ($file = fopen("../model/".$selectStudentList.".txt", "r")) {
        while(!feof($file)) {
           $line = fgets($file);
           $line = str_replace("\n","",$line);
           $dirName = "../upload/".$selectStudentList."/".$line;
           if(mkdir($dirName, 0777,true))
            echo "成功"."<br/>";
          else
            echo "失敗"."<br/>";
         }
         fclose($file);
      } else {
       echo "file not found";
      }
    }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Manager</title>

  </head>
  <body>
    <form class="" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
      <select name="className" class="opts">
          <option selected value="false">請選擇</option>
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
          <input type="submit" name="createStudentsDir" value="創建學員資料夾">
      </form>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="../function/manager.js"></script>
      <script type="text/javascript" src="../function/addCityCamp.js"></script>
  </body>
</html>
