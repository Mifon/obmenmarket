<div data-name="[[+cookieName]]" data-value="[[+cookieValue]]" data-days="[[+cookieDays]]"  class="alert alert-warning alert-dismissible fade in text-center [[+class]]" role="alert">
  
  <p>
    Мы используем cookie, чтобы сайт был удобным и быстрым, но при этом, мы не храним и не передаём в них вашу личную информацию и пароли! <a title="View our cookie policy" href="[[+idCookiePolicy:gt=`0`:then=`[[~[[+idCookiePolicy]]]]`:else=`/`]]">Всё законно!)</a> Просто закройте это уведомление, если оно вам мешает
  </p>
  
  <p>
    <button type="button" class="btn btn-info" data-dismiss="alert">Закрыть</button>
  </p>
  
</div>

<script>
  $(function() 
  {
    $(".[[+class]] button").click(function ()
    {
      $(".[[+class]]").mabCookieSet({onDone: function(){$(".[[+class]]").hide();}});
    });
  });
</script>