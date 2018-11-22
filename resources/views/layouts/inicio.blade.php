<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" id="toekn" content="{{csrf_token()}}">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="css/calendar.css">
    <title>Locadora</title>
</head>
<body>
    <div class="ui main container">       
           <main role="main">
              @hasSection ('body')
                  @yield('body')    
              @endif
           </main>     
    </div>
</body>



<script src="/js/app.js"></script>
<script type="text/javascript" src="/js/calendar.min.js"></script>
<script>
  
  $('.ui.dropdown')
  .dropdown()
;
$('#rangestart').calendar({
  // type: 'date',
  endCalendar: $('#rangeend')
});
$('#rangeend').calendar({
  // type: 'date',
  startCalendar: $('#rangestart')
});
$(document)
    .ready(function() {
      $('.ui.menu .ui.dropdown').dropdown({
        on: 'hover'
      });
      $('.ui.menu a.item')
        .on('click', function() {
          $(this)
            .addClass('active')
            .siblings()
            .removeClass('active')
          ;
        })
      ;
    })
  ;
  $('.ui.checkbox')
  .checkbox()
;

</script>



</html>