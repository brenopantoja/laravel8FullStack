@extends('layouts.main')
@section('title',  'Editando: '.$event->title)
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">

<h1> Editando: {{$event->title}}</h1>

<h1> Crie o seu evento </h1>
<br>
@if(session ('msg'))
<p class ="msg">{{session('msg')}}</p>
@endif

<form action ="/events/update/{{$event->id}}" method ="POST" enctype ="multipart/form-data">
@csrf {{--  diretive of the Laravel   --}}
@method('PUT')

<div class= "form - group">
<br>
<label for = "image"> Imagem do Evento: </label>
{{--   It is be able to creat file in html enctype ="multipart/form-data"   --}}

<input type = "file" name ="image" id= "image" class = "form-control -file" ></input>

</div>

<img src= "/img/events/{{$event->image}}"  alt="{{$event->title}}" class=" img-preview">

<div class= "form - group"> </div>

<label for = "title"> Edite o Título do Albúm: </label>
<input type = "text" class = "form-control" name ="title" id="title" placeholder ="Nome do Albúm" value="{{$event->title}}">
</div>
<br>

<div class= "form - group"> </div>

<label for = "date"> Data da Criação do Albúm </label>
<input  type = "date" class = "form-control " name="date" id="date"  value="{{   date('Y-m-d', strtotime($event->date)) }}" >
</div>

<br>
{{--

    {{ date('Y-m-d', strtotime($event->date)) }}

    'date_format:d/m/Y'--}}

<div class= "form - group"> </div>

<label for = "title"> Duração do Album (Em minutos): </label>
<input type ="text" name= "duracaoalbum" id="duracaoalbum" class="form-control" value="{{$event->duracaoalbum}}"></input>

</div>

<label for = "title"> A faixa e  duração (Em minutos): </label>
{{--<input type ="text" name= "faixa" id="faixa" class="form-control" value="{{$event->faixa}}"></input>--}}
<input textarea   type ="textarea"name= "faixa" id="faixa" class="form-control" value="{{$event->faixa}}"></textarea>


</div>

<br>
<input type="submit" class="btn btn-primary" value = " Editar Album">

</form>
<br>

@yield ('content')
<a href="/"> Voltar para Home</a>
</div>
@endsection
