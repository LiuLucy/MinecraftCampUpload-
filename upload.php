<?php
# 取得上傳檔案數量
$fileCount = count($_FILES['my_file']['name']);
$whereClass = $_GET["id"];
$success = false;
for ($i = 0; $i < $fileCount; $i++) {
  # 檢查檔案是否上傳成功
  if ($_FILES['my_file']['error'][$i] === UPLOAD_ERR_OK){
    // echo '檔案名稱: '.$_FILES['my_file']['name'][$i].'<br/>';
    // echo '檔案類型: '.$_FILES['my_file']['type'][$i].'<br/>';
    // echo '檔案大小: '.($_FILES['my_file']['size'][$i] / 1024).' KB<br/>';
    // echo '暫存名稱: '.$_FILES['my_file']['tmp_name'][$i].'<br/>';
    # 檢查檔案是否已經存在
    if (file_exists("upload/{$_GET['cityCamp']}/{$_POST['studentName']}/".$_FILES['my_file']['name'][$i])){
      echo "<script>alert('檔案重複囉！！重新命名再傳一次吧');history.go(-1);</script>";
    } else {
      $file = $_FILES['my_file']['tmp_name'][$i];
      $dest = "upload/{$_GET['cityCamp']}/{$_POST['studentName']}/".$_FILES['my_file']['name'][$i];
      # 將檔案移至指定位置
      move_uploaded_file($file, $dest);
      $success=true;
    }
  } else {
    echo "<script>alert('請選擇檔案後上傳');history.go(-1);</script>";
  }
}
if ($success){//全部上傳完再給一個alert
  echo "<script>alert('助教!{$_POST['studentName']}已經上傳完成了');history.go(-1);</script>";
}
?>
