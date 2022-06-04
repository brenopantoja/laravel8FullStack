
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title> @yield('title')</title>
    <!--<div id="event-create-container" class="col-md-6 offset-md-3"> -->

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
        <ul class= "nav-item">
            <a href="/login" class="nav-link"> Entrar</a>

        </ul>
        <ul class= "nav-item">
            <a href="/events/create" class="nav-link"> Criar Albúm</a>

        </ul>
        <ul class= "nav-item">
            <a href="/dashboard" class="nav-link"> Meus Albúns</a>

        </ul>
</div>
</nav>
{{-- It has taking data of database (Column 'title' and description)   --}}

<ul class ="nav-item">

    <li class="nav-item">
        <a href="/events/create" class="nav-link"> Criar Albúns </a>
    </li>

    {{-- Auth login --}}
    @auth
    <li class="nav-item">
        <a href="/dashboard" class="nav-link"> Meus Albúns </a>
    </li>
    <li class="nav-item">
    <form action="/logout" method="POST">
    @csrf

    <a class="nav-link" onclick ="event.preventDefault();
    this.closest('form').submit();"
    >

    Sair
    </a>

    </form>
    </li>

    @endauth

    @guest
    <li class="nav-item">
        <a href="/login" class="nav-link"> Entrar </a>
    </li>

    <li class="nav-item">
        <a href="/register" class="nav-link"> Cadastrar </a>
    </li>
    @endguest
</ul>

    @yield('content')
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class ="collapse navbar-collpase" id="navbar">

</div>

<!-- Source of the Google  and CSS BootStrap-->

<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">


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
