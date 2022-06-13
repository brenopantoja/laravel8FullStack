<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;


class EventController extends Controller

{
    //
     public function index(){

        //It has doing the search in Data Base
        $search = request('search');
        if($search){
            $event =  Event:: where([
            ['nome', 'like', '%'.$search.'%' ]

            ]) ->get() ;

        }
        else{

            $event = Event::all();//It has calling all events of database

        }


        return view ('welcome',['event'=> $event, 'search'=>$search]);// It has sending these parameter

     }

     //For event of the data base
     public function destroy($id)
     {
        Event:: findOrFail($id)-> delete();//It has deleting by the primary code
        session()->flash('msg', ' Produto Excluído  com sucesso !!');

        return redirect('/dashboard');


     }

            public function store( Request $request){
            $event = new Event;

            $event -> nome =$request->nome;
            $event -> descricao = $request -> descricao;
            $event -> tensao = $request ->tensao;
            $event -> marca = $request ->marca;
            $event -> date = $request ->date;

            //created_at It has taking real time
            $event -> updated_at	= $request -> updated_at	;
            $event -> image = $request -> image;


            //For It has working with image:
            if($request-> hasfile('image') && $request->file('image')->isValid())
            {
                $requestImage = $request-> image;

                $extension= $requestImage->extension();

                //It has taking real time and It puts the file MD5

                $imageName = md5($requestImage -> getClientOriginalName().strtotime('now')) . "." .$extension;

                    //It has putting in project public_path
                $requestImage ->move(public_path('img/events'),$imageName);
                $event-> image = $imageName;//It has saving in Data Base
            }


            // It has taking the login user of the data base
            $user= auth()->user();
            $event-> user_id = $user->id;
            $request->validate([
                'nome' => 'required',
                'descricao'=> 'required ',
                'tensao'=> 'required',
                'marca'=> 'required',
                          'date' => 'nullable|date',

            ]);



            $event -> save();
           // For It has creating msg to user

            session()->flash('msg', 'Produto criado com sucesso');

            return redirect('/', );

        }


        public function create(){
            return view ('/events.create');

        }

        public function dashboard(){

            $user = auth()->user();
            $event= $user->events;//It has using data of the model

            $eventsAsParticipant= $user->eventsAsParticipant;


            return view('events.dashboard', ['event'=>$event, 'eventasparticipant' => $eventsAsParticipant]);


        }
              public function showAll(){
            $events = Event::all();//It has calling all events of database


            return view ('/events.showcopy', ['event'=> $events]);

                }
                //It has doing all event's edic
                public function edit($id)
                {//It has taking data of the data base

                    $user= auth() -> user();


                    $event= Event::findOrFail($id);
                    //It has checking if user can use or to see event
                    if($user->id != $event->user_id){


                        return redirect('/dashboard');
                    }



                    return view('events.edit', ['event'=>$event]  );
                }

                public function update(Request $request){
                    $data = $request->all();




                    //For It has working with image:
                    if($request-> hasfile('image') && $request->file('image')->isValid())
                    {
                        $requestImage = $request-> image;

                        $extension= $requestImage->extension();

                        //It has taking real time and It puts the file MD5

                        $imageName = md5($requestImage -> getClientOriginalName().strtotime('now')) . "." .$extension;

                            //It has putting in project public_path
                        $requestImage ->move(public_path('img/events'),$imageName);
                        $data ['image']=$imageName;//It has saving in Data Base
                    }
                    Event::findOrFail($request->id) ->update($data);
                    session()->flash('msg', ' Dados do Produto atualizados com sucesso !!');


                    return redirect('/dashboard');

                }


}
