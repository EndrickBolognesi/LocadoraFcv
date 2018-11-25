  <!-- MENU -->
  <style>
      #btn {
        margin-left: 3px;
  } 
  </style>
  <div class="pusher">
        <div class="ui segment">
          
          <div class="ui  secondary pointing menu">
          <a href="/" @if( $current == "inicio") class="yellow item active" @else class="yellow item" @endif>
              Inicio
            </a>
            <a href="/categorias" @if( $current == "categorias") class="red item active" @else class="red item" @endif>
              Categorias
            </a>
            <a href="/marcas"  @if( $current == "marcas") class="blue item active" @else class="blue item" @endif>
              Marcas
            </a>
            <a href="/produtos" @if( $current == "produtos") class="olive item active" @else class="olive item" @endif>
              Produtos e Serviços
            </a>
            <a  @if( $current == "sobre") class="teal item active" @else class="teal item" @endif>
              Sobre
            </a>
            <a  @if( $current == "contato") class="pink item active" @else class="pink item" @endif>
            Contato
            </a>
            <div class="right menu">
                <div class="item">
                  <a href="/login" class="ui red basic button">Registrar</a>
                  <a href="/registar" id="btn" class="ui green basic button">Logar</a>
                </div>
                   
          </div>
          
          </div>
        </div>
