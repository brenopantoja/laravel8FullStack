@extends('layouts.main')
@section('title', ' P. Engenharia')
@section ('content')
<!DOCTYPE html>

<html>
    <title> P. Engenharia</title>
    <body>
    @if(session ('msg'))
<div class  ="alert alert-success"><p>{{session('msg')}}</p>
@endif



<div class="search-container">


    <h1> Busque um Produto:</h1>

    <form action="/" method="GET">
    <input type ="text" id="search" name="search" class="Form-control" placeholder="Procure um Produto">


</div>
</form>

<div id="events-container" class="col-md-12">
@if($search)
<h2><b> Buscando por: {{$search}}<b></h2>
<a href="/" classe="nav-link"> Clique aqui </a>para retornar a página inicial<br>

@else

<h1> Produtos disponíveis:</h1>
@endif

</div>
    <p class="subtitle"> Clique aqui e veja os Produtos</p>



<div id="cards-containder" class="row">
{{-- It has taking data of database (Column 'name' and description)   --}}

 @foreach($event as $event)
    <div class="card col-md-3">
    <img src="/img/events/{{$event-> image}}" alt="{{$event-> nome}}"/>
    <div class="card-body">
    <p class= "card-date">{{date('d/m/y', strtotime($event->date)) }}</p>
    <h5 class="card-title">  A Matrícula do Produto:{{$event-> id}} <br>O Título do Produto: {{$event ->nome}}</h5>
  {{--  <a href="/events/{{$event->id}}" class="btn btn-primary">Clique para saber mais</a>--}}

    <a href="/events/edit/{{$event->id}}" class="btn btn-primary">Clique para saber mais</a>

     {{-- <a>    A descrição do Evento: {{$event -> description}}</a><br>--}}
</div>
    </div>
          @endforeach

     @if (count([$event])!=0 && $search)

    <p> Foi possivel encontrar um Produto com o título {{$search}}!!!!<a href="/"> Ver todos </a></p>
    @elseif (count([$event])==0 )

    <p> Não existem Produtos disponíveis!!</p>

    @endif

    {{--
        @if(count([$event])==0 && $search)

        @if(count($event)==0)
    <p><b> Não há Albúms disponíveis<b></p>

    @endif
        --}}

    <br>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">


            <div class ="collapse navbar-collpase" id="navbar">
    </div>
            </nav>
</div>
        </header>
<!-- Comentario em HTML-->

{{-- Comentario do blade    --}}
</div>
</body>
<footer>

</footer>

</html>
@endsection
