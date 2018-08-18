$(document).ready(function() {
  $('.myBoss').click(function() {
      $('.BossImage').css('background-image', 'url(images/codingape.jpg)');
      $('.BossImage').css('background-repeat', 'no-repeat');
      $('.BossImage').css('background-size', '600px');
      $('.BossImage').css('height', '600px');
  });
});
function getPassword() {
  var Password = document.getElementById('enterPassword').value;
  if(Password == 121111) {
    $('.gifImage').attr('src', 'images/Us.jpg');
    $('.caption').append('<h6>這是我們ＸＤＤ</h6>');
  }else {
    alert("數字可能在這個畫面裡！密碼有六個數字");
  }
}
