@extends('layouts.main')
@section('title',  'Editando: '.$event->nome)
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">

<h1> Editando: {{$event->nome}}</h1>

<h1> Edite o seu Produto </h1>
<br>
@if(session ('msg'))
<p class ="msg">{{session('msg')}}</p>
@endif

<form action ="/events/update/{{$event->id}}" method ="POST" enctype ="multipart/form-data">
@csrf {{--  diretive of the Laravel   --}}
@method('PUT')

<div class= "form - group">
<br>
<label for = "image"> Imagem do Produto: </label>
{{--   It is be able to creat file in html enctype ="multipart/form-data"   --}}

<input type = "file" name ="image" id= "image" class = "form-control -file" ></input>

</div>

<img src= "/img/events/{{$event->image}}"  alt="{{$event->title}}" class=" img-preview">

<div class= "form - group"> </div>

<label for = "title"> Edite o Título do seu Produto: </label>
<input type = "text" class = "form-control" name ="nome" id="nome" placeholder ="Nome do Produto" value="{{$event->nome}}">
</div>
<br>

<div class= "form - group"> </div>

<label for = "date"> Data da Criação do Produto </label>
<input  type = "date" class = "form-control " name="date" id="date"  value="{{   date('Y-m-d', strtotime($event->date)) }}" >
</div>

<br>
{{--

    {{ date('Y-m-d', strtotime($event->date)) }}

    'date_format:d/m/Y'--}}

    <div>
<label for = "title"> Descrição do produto </label>
{{--<input type ="text" name= "faixa" id="faixa" class="form-control" value="{{$event->faixa}}"></input>--}}
<input type="textarea"   type ="textarea" name= "descricao" id="descricao" class="form-control" value="{{$event->descricao}}"></textarea>


<div class= "form - group"> </div>

<label for = "tensao"> Tensão Elétrica do Produto </label>
<input type ="text" name= "tensao" id="tensao" class="form-control" value="{{$event->tensao}}"></input>

</div>

<div>
<label for = "title"> Marca do Produto </label>
{{--<input type ="text" name= "faixa" id="faixa" class="form-control" value="{{$event->faixa}}"></input>--}}
<input type="textarea"   type ="textarea" name= "marca" id="marca" class="form-control" value="{{$event->marca}}"></textarea>


</div>

<br>
<input type="submit" class="btn btn-primary" value = " Editar Produto">

</form>
<br>

@yield ('content')

@endsection
