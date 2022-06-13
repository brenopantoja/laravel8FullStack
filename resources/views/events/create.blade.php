@extends('layouts.main')
@section('title',  'Criar Registro')
@section ('content')
<hmtl>
<div id="event-create-container" class="col-md-6 offset-md-3">


<h1> Esta é página registrar um eletrodoméstico </h1>


<body>
<header>
<br>
@if(session ('msg'))
<p class ="msg">{{session('msg')}}</p>
@endif

{{--@dd($error->has ('nome'))
@dump($errors->has ('nome'), $errors->get('nome'))--}}


<form action ="/event" method ="POST" enctype ="multipart/form-data" name="form1" id="form1">
<!--<form action ="/event" method ="POST" enctype ="multipart/form-data" name="form1" id="form1"><form action ="/event" method ="POST" enctype ="multipart/form-data" name="form1" id="form1">-->
@csrf {{--  diretive of the Laravel   --}}

<div class="form-group">

<label for = "image"> Imagem do Produto: </label>
{{--   It is be able to creat file in html enctype ="multipart/form-data"   --}}
<input type = "file" name ="image" id= "image" class = "form-control -file" >
</div>



<div class="form-group">

<label for = "nome"> Nome do Produto: </label>
<input input = "text" class = "form-control " name ="nome" id="nome" placeholder ="Informe o Nome do Produto">
<!--<input input = "text" class = "form-control @if($errors->has('nome'))is-invalid @endif" name ="nome" id="nome" placeholder ="Informe o Nome do Produto"> -->

<!--<input textarea = "text" class = "form-control @if($errors->has('nome'))is-invalid @endif" name ="nome" id="nome" placeholder ="Informe o Nome do Produto">-->
        @if($errors->has('nome'))

    <div class="invalid-feedback">

    {{--$errors->get('nome')--}}



    @foreach($errors->get('nome') as $error)

        {{$error}}
    @endforeach

        @endif


    </div>

</div>

<br>

<div class="form-group">

<label for = "date"> Data obtenção do Produto: </label>
<input type = "date" class = "form-control" name ="date" id="date" >
</div>

<br>


<div class="form-group">

<label for = "descricao"> Descrição do Produto: </label>
<textarea name= "descricao" id="descricao" class="form-control" placeholder="Informe a Descrição do produto"></textarea>


</div>
<!--<textarea name= "description" id="description" class="form-control" placeholder="Qual a descrição do Evento"></textarea> -->

<div class="form-group">

<label for = "tensao"> Informe a tensão elétrica do Produto: </label>

<input textarea= "text" id="tensao" name="tensao" class="form-control" placeholder="Informe a tensão do produto">

</div>

<div class="form-group">

<label for = "marca"> Informe a marca do Produto: </label>

<!--<input type= "text" id="marca" class="form-control" placeholder="Informe a marca do produto"> -->
<input type = "text" class = "form-control" name ="marca" id="marca" placeholder ="Informe a marca do produto">
</div>

<br>
<br>

<br>

<input type="submit"  class="btn btn-primary" value = "Criar Produto" onclick="return validar()>
    {{--<input type="submit"  onclick="return validar()">--}}

</form>
<br>
</header>

</body>
</html>

@yield ('content')


<footer>

</footer>
@endsection
