
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title> @yield('title')</title>
    <div id="search-container" class="col-md-12" >
  <!--  <img src="/img/background.png" alt="João Carreiro" style="float:right;width:200px"> -->
<style>
    body{

background-image: url("/img/background.png");
background-repeat: no-repeat;
background-attachment: fixed;

}
</style>

    {{-- CSS --}}
    <script> src="/js/script.js"</script>
    <link= rel="styesheet" href="/resources/css/styles.css">


<body>



    <h1> Discografia- Tião Carreiro </h1>
    <nav class="navbar navbar-expand navbar-light">

<div class= "collapse navbar-collapse"  id="navbar">
    <a href="" class="navbar-brand">
<img src="/img/logo.png" alt="João Carreiro" >
    </a>
    @guest
    <lu class="nav-item">
        <a href="/login" class="nav-link"> Entrar </a>
    </lu>

    <lu class="nav-item">
        <a href="/register" class="nav-link"> Cadastrar </a>
    </lu>
    @endguest



        <lu class="nav-item">
        <a href="/dashboard" class="nav-link"> Meus Albúns </a>
    </lu>
    <ul class= "nav-item">
            <a href="/events/create" class="nav-link"> Criar Albúm</a>

        </ul>
        <ul class= "nav-item">
            <a href="/" class="nav-link"> Ir para Página Inicial</a>

        </ul>



    {{-- Auth login --}}
    @auth<!--
    <lu class="nav-item">
        <a href="/dashboard" class="nav-link"> Meus Albúns </a>
    </lu> -->


    <lu class="nav-item">
    <form action="/logout" method="POST">
    @csrf

    <a class="nav-link" onclick ="event.preventDefault();
    this.closest('form').submit();"
    >  Sair
    </a>

    </form>
    </lu>

    @endauth



        <!--<ul class= "nav-item">
            <a href="/login" class="nav-link"> Entrar</a>

        </ul> -->





</div>
</nav>
{{-- It has taking data of database (Column 'title' and description)   --}}





    @yield('content')
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class ="collapse navbar-collpase" id="navbar">

</div>

<!-- Source of the Google  and CSS BootStrap-->

<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

</div>
 </header>
  </body>

<!-- Comentario em HTML-->

{{-- Comentario do blade    --}}


<footer>
<p> Tião Cerreiro LDTA &copy; 2022</p>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<!--<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>
