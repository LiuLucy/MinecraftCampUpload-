<?php
function DownloadStudentsWorks($studentName,$cityCamp) {
      $zip = new ZipArchive();
      $zipName = $studentName.'.zip';
      $zip->open($zipName, ZIPARCHIVE::CREATE);
      $files = scandir("upload/{$cityCamp}/{$studentName}");
      unset($files[0],$files[1]);

      foreach ($files as $file) {
        $zip->addFile("upload/{$cityCamp}/{$studentName}/{$file}",$file);
      }

      $zip->close();
      // push to download the zip
      header('Content-type: application/zip');
      header('Content-Disposition: attachment; filename='.$zipName.'');
      readfile($zipName);
      // remove zip file is exists in temp path
      unlink($zipName);
}
?>
