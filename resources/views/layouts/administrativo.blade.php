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
    <style>
      
    
        .pusher {
            padding-top: 60px;
            padding-left: 20px;
            padding-right: 20px;
        }
    </style>
</head>
<body>
    
        <div class="ui sidebar vertical left inverted menu">

            <a href="admin.html" class="item">Cadastros</a>
            <a href="graficos.html" class="item">Gráficos</a>
            <a href="#" class="item">Relatório</a>
        </div>
            <div class="ui basic icon top fixed menu">
                <a id="toggle" class="item">
                    <i class="sidebar icon"></i>
                    Menu
                </a>
                
                        <!-- <a class="yellow item active">
                          Inicio
                        </a> -->
                        <a class=" orange item active" data-tab="first">
                          Frota de Carros
                        </a>
                        <a  class=" orange item" data-tab="second">
                          Clientes
                        </a>
                        <a  class=" orange item" data-tab="third">
                          Funcionários
                        </a>
                        <a  class=" orange item right" >
                          
                            <!-- ui pointing dropdown link item -->
                        
                                <div class="ui pointing inline dropdown">
                                  <div class="text">
                                    <img class="ui avatar image" src="https://semantic-ui.com/images/avatar/small/matt.jpg">
                                    Endrick
                                  </div>
                                  <i class="dropdown icon"></i>
                                  <div class="menu">

                                    <div class="item">
                                        <i class="red power off icon"></i>
                                      Sair
                                    </div>
                                  </div>
                                </div>
                              

                            
                        </a>
                        
                        
            </div>
            <div class="pusher">
                <div class="ui fluid container">
                    
                      <div class="ui bottom attached tab  active" data-tab="first">

                         
                                  <div class="ui right small labeled  green icon button">
                                    <i class="car icon"></i> Cadastrar
                                  </div>
                        
                          <table class="ui very compact celled fixed selectable sortable green table">
                              <thead>
                                <tr>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Ano</th>
                                    <th>Kilometragem</th>
                                    <th >Ações</th>
                                </tr>
                              </thead>
                              <tbody>
                                
                                <tr>                                
                                  <td>Toyota</td>
                                  <td>Corolla</td>
                                  <td>2012</td>
                                  <td>28.000Km</td>
                                  <td><button class="ui icon inverted yellow button">
                                      <i class="edit  outline icon"></i>
                                    </button>
                                    <button class="ui icon inverted red  button">
                                      <i class="trash alternate outline  icon"></i>
                                    </button></td>
                                </tr>
                                <tr>
                                  <td>Chevrolet</td>
                                  <td>Cruze</td>
                                  <td>2018</td>
                                  <td>5.000Km</td>
                                  <td><button class="ui icon inverted yellow button">
                                      <i class="edit outline icon"></i>
                                    </button>
                                  <button class="ui icon inverted red  button">
                                      <i class="trash alternate outline icon"></i>
                                    </button></td>
                                </tr>
                                
                              </tbody>
                              
                            </table>
                            
                      </div>
                      <!-- SEGUNDA TAB -->
                      <div class="ui bottom attached tab " data-tab="second">
                          <div class="ui right small labeled primary  icon button">
                              <i class="user plus icon"></i> Cadastrar
                            </div>
                            

                    <table class="ui very compact celled fixed selectable sortable blue table">
                        <thead>
                          <tr>
                              <th>Nome</th>
                              <th>Email</th>
                              <th>CPF</th>
                              <th>Data De Nascimento</th>
                              <th >Ações</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          
                          <tr>                                
                            <td>Toyota</td>
                            <td>Corolla</td>
                            <td>2012</td>
                            <td>28.000Km</td>
                            <td><button class="ui icon inverted yellow button">
                                <i class="edit  outline icon"></i>
                              </button>
                              <button class="ui icon inverted red  button">
                                <i class="trash alternate outline  icon"></i>
                              </button></td>
                          </tr>
                          <tr>
                            <td>Chevrolet</td>
                            <td>Cruze</td>
                            <td>2018</td>
                            <td>5.000Km</td>
                            <td ><button class="ui icon inverted yellow button">
                                <i class="edit outline icon"></i>
                              </button>
                              <button class="ui icon inverted red  button">
                                <i class="trash alternate outline icon"></i>
                              </button></td>
                          </tr>
                          
                        </tbody>
                        
                      </table>
                      
                      </div>
                      <div class="ui bottom attached tab " data-tab="third">
                          Funcionários
                      </div>

                </div>
            </div>  


        

    </body>



<script src="/js/app.js"></script>
<script type="text/javascript" src="/js/calendar.min.js"></script>
<script>
    $('#toggle').click(function(){
    $('.ui.sidebar').sidebar('toggle');
        });
      
    $(document).ready(function() {
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
$('.menu .item')
.tab()
;

</script>



</html>