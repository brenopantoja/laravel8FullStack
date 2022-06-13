@extends('layouts.main')
@section('title',  'Dashboard')
@section('content')

    <br>
<div class ="col-md-10 offset-md-1">
<meta name="csrf-token" content="{{ csrf_token() }}">
@if(session ('msg'))
<div class="alert alert-success">
   <p> {{session('msg')}}</p>
@endif
    <h2> Meus Produtos:</h2>

</div>

    <div class= "cards-containder">
    <div class="row">


        <!--<table class="table">  It has working Bootstrap-->
        <table class="table table-striped table-bordered table-condensed table-hover">

            <thead>
                <tr>

                    <th scop="col">#</th>
                    <th scop="col">Nome</th>
                    <th scop="col">Descrição </th>
                    <th scop="col"> Tensão </th>
                    <th scop="col">Marca</th>
                    <th scop="col">Data</th>
                    <th scop="col">Imagem</th>
                </tr>

            </thead>
            <tbody>

        @foreach($event as  $event)
            <tr><div id="card col-md-3">
            <td scopt = "row"> {{$loop->index + 1}}</td>
            {{--<td> <a href="/events/{{$event->id}}"> {{$event->nome}}</a></td>--}}
            <td>{{$event->nome}}</a></td>
            <td>{{$event->descricao}}</a></td>
            <td>{{$event->tensao}}</td>
            <td>{{$event->marca}}</td>
           {{-- <td>{{$event->date}}</td>--}}
        <td>   {{ date('Y-m-d', strtotime($event->created_at))}}</td>
            <td><img src="/img/events/{{$event   -> image}} " width= "150" heigth= "100"/></td>

            <td><a href="/events/edit/{{$event->id}}" class="btn btn-primary"> <ion-icon name="create-outline"></icon-icon>Editar </a> </td>
                <form action ="/events/{{$event->id}}" method="POST">
                    @csrf
                    @method('DELETE')

              <td>      <button type="submit" class="btn btn-danger delete-btn"> <icon-icon name="trash-outline"></icon-icon>Deletar</button>
            </td>
                </form>
            </tr>
            {{-- class="btn btn-primary"
                <a href="events/edit/{{$event->id}" class="btn btn-infor edit-btn"> <ion-icon name="create-outline"></icon-icon>Editar </a>

                --}}
        @endforeach
        </tbody></div>
        </table>


        {{--<p> Você não tem eventos <a href="/events/create"> Criar Evento</p>--}}

        {{-- It has taking data of database (Column 'items') as list form  --}}



    </div>


    </div>
        <br>

        <div class ="col-md-10 offset-md-1 dashboard-title-container">


        {{--

            {{print_r($event->title)}}



            --}}

        </tbody>
        </table>


    </div>
        <br>



    {{-- It has taking data of database (Column 'title' and description)   --}}


<!-- Comentario em HTML-->

{{-- Comentario do blade    --}}


@endsection
