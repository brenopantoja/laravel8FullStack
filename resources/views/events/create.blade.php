@extends('layouts.main')
@section('title',  'Criar Album')
@section ('content')
<hmtl>
<div id="event-create-container" class="col-md-6 offset-md-3">

<h1> Esta é página criar Album </h1>
<!--<img src="/img/background.png" alt="Banner"> -->


<body>
<header>
<br>
@if(session ('msg'))
<p class ="msg">{{session('msg')}}</p>
@endif

<form action ="/event" method ="POST" enctype ="multipart/form-data">
@csrf {{--  diretive of the Laravel   --}}

<div class="form-group">

<label for = "image"> Imagem do Album: </label>
{{--   It is be able to creat file in html enctype ="multipart/form-data"   --}}
<input type = "file" name ="image" id= "image" class = "form-control -file" >
</div>


<div class="form-group">

<label for = "title"> Nome do Albúm: </label>
<input textarea = "text" class = "form-control" name ="title" id="title" placeholder ="Informe o Nome do Albúm">
</div>

<br>

<div class="form-group">

<label for = "date"> Data de Criação do Album </label>
<input type = "date" class = "form-control" name ="date" id="date" >
</div>

<br>


<div class="form-group">

<label for = "title"> Duração do Album (Em minutos): </label>
<input type = "text" class = "form-control" name ="duracaoalbum" id="duracaoalbum" placeholder ="Informe duração do Albúm">
<!--<textarea name= "description" id="description" class="form-control" placeholder="Qual a descrição do Evento"></textarea> -->

</div>

<div class="form-group">

<label for = "title"> Duração de cada faixa (Em minutos): </label>
<!--<input type = "text" class = "form-control" name ="duracaoalbum" id="duracaoalbum" placeholder ="Informe duração do Albúm">-->
<textarea name= "faixa" id="faixa" class="form-control" placeholder="Informe a faixa e sua duração em minutos"></textarea>

</div>


{{--<div class="form-group">
    <label for = "title"> Adicione itens de infraestrutura: </label>

<div class="form-group">
    <input type="checkbox" name="items[]" id="items[]" value="Cadeiras"> Cadeiras
</div>


<br>

<div class= "form - group">
    <input type="checkbox" name="items[]"  id="items[]" value="Palco"> Palco
</div>


<br>

<div class="form-group">
    <input type="checkbox" name="items[]"  id="items[]" value="Cerveja Gratis"> Cervejas Grátis
</div>


<br>

<div class= "form-group">

    <input type="checkbox" name="items[]"  id="items[]" value="Open Bar" > Open Bar
</div>


<br>


<div class= "form-group">
    <input type="checkbox" name="items[]"  id="items[]" value="Brides"> Brindes
</div>

</div>

<br>



<div class="form-group">
<label for = "title"> Cidade: </label>
<input type = "text" class = "form-control" name ="city" id="city" placeholder ="Nome da cidade">
</div>
<br>

<div class="form-group">

<label for = "title"> Evento é privado: </label>
<select name="private" id="private" class="form-control">
<option value="0"> Não</option>
<option value="1">Sim </option>--}}
</div>

<br>
<br>

<br>

<input type="submit" class="btn btn-primary" value = "Criar Album">

</form>
<br>
</header>

</body>

</html>
@yield ('content')
<a href="/"> Voltar para Home</a>
<footer>

</footer>
@endsection
