Scotch Logo
SCOTCH
Video
Courses
Written
Tutorials
News
Bar Talk
Weekly
Newsletter
...

Search scotchy scotch...

#
react
#
vue
#
angular
#
javascript
#
laravel
#
css
#
python
Dependent Select Box for Laravel Beginners
emmanueladegor
June 12, 2017
9 Comments
17,943 Views
 Bookmark
Dependent Select Box for Laravel Beginners
Be the first to like this post.
Hello There! Today we're going to create a very simple dependent select box, Using Ajax in Laravel(5.*)

Let's get a very [sarcasm]detailed[/sarcasm] description of Laravel and Ajax.

Laravel- Php MVC Framework.(MVC- Model View Controller) Ajax- asynchronous JavaScript and XML(XML- Extensible Markup Language)

That's all for Description winks

Now to get Started we'll need(What i used for this very tutorial):

Xammp(to handle our Mysql DB) (Create a Database from your phpmyadmin [i use "select" as my db name])
Fresh Laravel Project(We'll achieve this using composer)-On Cmd [for windows in C:] type:
composer create-project --prefer-dist laravel/laravel dependentSelectBox
Goto .env and \app\config\database and do this respectively `php DB_DATABASE=select
'mysql' =>[ 'database' => env('DB_DATABASE', 'select'), ],

4. And every other thing is history *winks*

Let's roll **rolls Drum**

Step1: Create Tables (Countries and States)
We could achieve this using Laravel migrations

```php
php artisan make:migration create_country_state_tables
Add this block of code to Up function in the migration file:

 public function up()
    {
        Schema::create('country', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('state', function(Blueprint $table){

            $table->increments('id');
            $table->integer('country_id');
            $table->string('name');
            $table->timestamps();
        });
    }
And..

php artisan migrate
In your SELECT database, do this in sql command box:

INSERT INTO `country` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nigeria', '2017-06-02 02:18:05', '2017-06-16 04:18:10'),
(2, 'America', '2017-06-05 04:41:25', '2017-05-12 12:30:14');

and

INSERT INTO `state` (`id`, `country_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lagos', '2017-04-10 07:16:44', '2017-09-19 12:18:28'),
(2, 1, 'Delta', '2017-06-14 07:14:27', '2017-06-07 06:40:12'),
(3, 2, 'Texas', '2017-06-08 11:35:34', '2017-06-20 06:15:26'),
(4, 2, 'Carlifonia', '2017-06-07 08:14:35', '2017-06-07 06:26:26');
To insert data for country and state(You could also achieve this using SEED in laravel)

Step 2: ADD this codes to your Routes [..\route\web.php]

Route::get('/', 'HomeController@index');
Route::get('states/get/{id}', 'HomeController@getStates');
Step 3: Add controller: app\http\Controllers\HomeController.php

php artisan make:controller HomeController
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()

    {
        $countries = DB::table('country')->pluck("name","id");
        return view('home',compact('countries'));
    }

     public function getStates($id) {
        $states = DB::table("state")->where("country_id",$id)->pluck("name","id");

        return json_encode($states);

    }

}
Step 4: Create Your Home Blade file : \resources\views\home.blade.php

<html>
<head>
    <title>Dependent select Dropdown box</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href=" https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <style>
   #loader{
   visibility:hidden;
   }
   </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading"><h2>DEPENDENT SELECT BOX(Country & States)</h2></div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="">
                            {{ csrf_field() }}
                            <div class="form-group-sm">

                                <div class="col-md-6">
                                    <select name="country" class="form-control">
                                        <option value="">--Select Country--</option>
                                        @foreach ($countries as $country => $value)
                                        <option value="{{ $country }}"> {{ $value }}</option>   
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="state" class="form-control">
                                     <option>--State--</option>

                                 </select>
                             </div><div class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>

                         </div>
                     </form>
                 </div>

                 <div class="panel-footer">- By: [Your Name]</div>
             </div>
         </div>
     </div>
 </div>
 <script src="{{ asset('js/app.js') }}"></script>
 <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
Step 5: Create a custom.js file in \public\js\custom.js and add this

 $(document).ready(function() {

    $('select[name="country"]').on('change', function(){
        var countryId = $(this).val();
        if(countryId) {
            $.ajax({
                url: '/states/get/'+countryId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="state"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="state"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="state"]').empty();
        }

    });

});
So We're all set and done(Comment below incase some parts are vague) Thanks.

Working Project Github:


We detected some connectivity issues, therefore, we’re unable to load Conversation
Retry
emmanueladegor
emmanueladegor
Dependent Select Box for Laravel Beginners
scotch
Top shelf learning. Dev tutorials explaining the code and the choices behind it all.

Made with 💖 by Chris and Nick.

 
 
We can't send Scotch drinks...
but we can send cool dev articles

Message
 
Email
 
Name
 
Email
📧
Images hosted and processed by
Cloudinary
Real-time search by
Algolia
Hosted by
Digital Ocean
Advertise
Privacy
Terms
Rules
Contact
1853-2019 © Scotch.io, LLC