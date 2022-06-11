@extends('layouts.main')
@section('title',  'Dashboard')
@section('content')

    <br>
<div class ="col-md-10 offset-md-1">

    <h2> Meus Albúm:</h2>

</div>

    <div class= "cards-containder">
    <div class="row">


        <!--<table class="table">  It has working Bootstrap-->
        <table class="table table-striped table-bordered table-condensed table-hover">

            <thead>
                <tr>
                    <!--
                    <th scop="col">#</th>
                    <th scop="col">Nome do Albúm</th>
                    <th scop="col">Duração total do Albúm </th>
                    <th scop="col"> Faixas e Duração de cada Faixa </th>
                    <th scop="col">Hora</th>


                    <th scop="col">Imagem</th>
-->

<th scop="col">#</th>
                    <th scop="col">Nome</th>
                    <th scop="col">Descrição </th>
                    <th scop="col"> Tensão </th>
                    <th scop="col">Marca</th>


                    <th scop="col">Imagem</th>
                </tr>

            </thead>
            <tbody>

        @foreach($event as  $event)
            <tr><div id="card col-md-3">
            <td scopt = "row"> {{$loop->index + 1}}</td>
            {{--<td> <a href="/events/{{$event->id}}"> {{$event->title}}</a></td>--}}
            <td>  {{$event->title}}</a></td>

            <td>{{$event->duracaoalbum}}</td>
            <td>{{$event->faixa}}</td>
           {{-- <td>{{$event->date}}</td>--}}
            <td>{{$event->created_at}}</td>

            <td><img src="/img/events/{{$event   -> image}}"/></td>

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
