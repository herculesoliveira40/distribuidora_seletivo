<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="/img/cbf.png" sizes="42x42" type="image/png">
    <title>@yield('title')</title>
                    <!-- CSS e JS Interno -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> 
    
    <script type="text/javascript" src="/js/cnpj_receitaws.js"></script>
 
                    <!-- Boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
                    <!-- Icones Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
                    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

</head>

<body class="antialiased">

<nav class="navbar navbar-light bg-dark justify-content-between">
              
    <a class="nav-link" href="/">
    <img src="/img/cbf.png" alt="" height="60px" width="120px" class="d-inline-block align-text-top">
        Home
    </a>
    
        

        <a class="nav-link" aria-current="page" href="/produtos/dashboard">Produtos</a>
        @auth
              <li class="nav-item">
                <a class="nav-link btn btn-outline-danger" aria-current="page" href="/clientes/dashboard">Painel Clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-outline-danger" aria-current="page" href="/fornecedores/dashboard">Painel Fornecedor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-outline-danger" aria-current="page" href="/produtos/dashboard">Painel Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-outline-danger" aria-current="page" href="/orcamentos/dashboard">Painel Orcamento</a>
              </li>

              <li class="nav-item">
                  <!-- Button trigger modal -->
                  <button type="button" class="nav-link btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Sair <i class="bi bi-door-open-fill"></i>
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Escalha a op????o desejada: </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-warning" role="alert"> 
                            Tem certeza que quer sair? ;-; 
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</a>
                          <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="btn btn-danger" onclick="event.preventDefault(); this.closest('form').submit();">
                              Sair <i class="bi bi-door-open-fill"></i>
                            </a>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
              </li>
        @endauth
        @guest
              <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Entrar
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Escolha a op????o desejada:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <a href="/login" class="btn btn-primary" >Login</a>
                  </div>
                  <div class="modal-footer">
                    <a href="/login" class="btn btn-primary" >J?? tem conta?</a>
                    <a href="/register" class="btn btn-success">Cadastre-se</a>
                  </div>
                </div>
              </div>
            </div>
        @endguest  

            
</nav>
<main>
    <div class="container-fluid">
        <div class="row">
            @if(session('mensagem'))
                <p class="alert alert-success">{{ session('mensagem') }}</p>
            
            @elseif(session('alerta'))
                <p class="alert alert-danger">{{ session('alerta') }}</p>   
            @endif
            
            @yield('content')
        </div>
    </div>
</main>
<footer class="text-center bg-danger text-light">
    
        <p>  2022 <a href="https://github.com/herculesoliveira40" target="_blank"> Shelby  &copy;</a> </strong> </p>
</footer>
</body>
<script type="text/javascript" src="/js/script_modal.js"></script>
<script type="text/javascript" src="/js/viacep.js"></script>
</html>