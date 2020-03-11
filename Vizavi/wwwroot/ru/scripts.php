<script src="/ru/assets/scripts/vendor.js"></script>
<script src="/ru/assets/scripts/app.js"></script>
<script src="/ru/assets/scripts/jquery.cookie.js"></script>
<script type="text/javascript">
	$(function() {
  // Проверяем запись в куках о посещении 
  // Если запись есть - ничего не происходит
     if (!$.cookie('hideModal')) {
  // если cookie не установлено появится окно
  // с задержкой 5 секунд
    var delay_popup = 1000;
    setTimeout("document.querySelector('.bottom__cookie-block').style.display='inline-block'", delay_popup);
     }
     $.cookie('hideModal', true, {
   // Время хранения cookie в днях
    expires: 30,
    path: '/'
   });
});
 
// Закрытие полосы cookie
 
 
$('.ok').click(function(){
    $('.bottom__cookie-block').fadeOut();
});
</script>>