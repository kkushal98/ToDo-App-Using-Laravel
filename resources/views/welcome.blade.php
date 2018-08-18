<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<div id="content">

        <!-- Styles -->
        <style>
            html, body {
                background-color:blue;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: black;
  
            }

        li {
            float: right;
            }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }   

    li a:hover {
    background-color: grey;
    }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
    

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #Task{
                color:white;
            }
            #todotask{
                text-align: center;
            }
            #Descriptionlabel{
                color:white;
            }
            #Todolist{
                float:right;
            }

        </style>
    </head>
    <body>
    <ul>
   <li> <a href="todo"> ToDoList </a>
  <li><a href="#home">Home</a></li>
  </li>
    </ul> 
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
             <a href="/todo" id="Todolist" class="btn btn-info"> ToDo List </a>
                <form class="form-horizontal" method="POST" action="/todo">

                   <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                   <div class="form-group">
                       <label id="Task" class="col-md-4 control-label">Task</label>
                       <div class="col-md-6">
                           <input id="todotask" type="text" class="form-control" name="name" min="1" max="50">
                       </div>
                   </div>

                   <div class="form-group">
                       <label id="Descriptionlabel" class="col-md-4 control-label">Description</label>
                       <div class="col-md-6">
                       <textarea name="description" rows=10 cols=50 ng-model="description" id="Description">
                        Description</textarea>
                       </div>
                   </div>
                   
                   <div class="form-group">
                       <div class="col-md-6 col-md-offset-4">
                           <button type="submit" class="btn btn-primary">
                               Create
                           </button>
                   
                       </div>
                   </div>
               </form>
            </div>
        </div>
    </body>
</html>
