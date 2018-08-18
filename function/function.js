$("#Taipei1CheckAndUpload").submit(function(event) {
  var name = $("#Taipei1studentName").val();
  alert(name);
  haveUploadFile();
});
function checkStudentName() {
  alert($("#studentName option:select").text());
}
function haveUploadFile() {
  if(document.getElementById("studentFile").files.length == 0)
    alert("同學！你忘記上傳檔案了");
}
function OpenModdingPage() {
window.location.href="./Modding.php";
}
function OpenPythonPage() {
 window.location.href='./Python.php';
}
