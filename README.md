Read me:

It is a system made in Laravel Framework 8 be able of managing store: Electronic Products.

Data Base has creating with name: pengenharia, if case change in file env.

The system has all, login password and, it is able user to create a account (liveware).

It has needing to acess the page: http://localhost:8000/register

Firstly, it is required to access the page: And it does the register (login, password, email). After, just fill in the fields like:

Product name, description, voltage, mark, date of creation of the product, Image of the product.

Also It has Creation, Read, Update, Delete (CRUD) tables and with join between them, session, Java Script and bootstrap.


Downloads: It does download of the Xampp, MySQL and of the Visual Studio Core.

API has 4 pages, where it is able look for product by the name or type.

Routes:

//It has creating products

Route:: get ('/events/create', [EventController::class, 'create']) ->middleware('auth');

//It has creating products

Route:: post ('/event', [EventController::class, 'store']) ->middleware('auth');

 //It has showing products of the user
 
Route:: get('dashboard',[EventController::class,'dashboard'])->middleware('auth') ;

//It has delete products

Route:: delete ('/events/{id}', [EventController::class, 'destroy'])->middleware('auth') ;

//It has updating data base

Route:: put('events/update/{id}',[EventController::class,'update']) ->middleware('auth');


Return of datas:

System has return all the products datas and It can delete, add or update all the data of products.

Messages of the sytem are showing in screen.


Case need, it use the commands:

composer update

php artisan migrate

php artisan serve

Join it!


E-mail:



breno.r.pantoja@gmail.com

brenopantoja@icloud.com


Breno Pantoja
