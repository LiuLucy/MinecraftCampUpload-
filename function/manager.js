$(function(){
//得到下拉式目前選取的值 (value)
//get the text value of a selected option
  var $cSel = $('select[name="course"]'); //指定要處理的特定元素物件名稱
    $cSel.on('change', function() {
      $( ".test" ).text( "你切換了下拉式的選項" + $cSel.val() );
  });

});
