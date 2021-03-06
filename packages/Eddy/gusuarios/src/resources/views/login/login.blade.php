<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Autenticacion con laravel</title>
</head>
<body>
   
    <div class="container">

        {{ Form::open(['url'=>'login'])}}

            @if(Session::has('error_message'))
                {{Session::get('error_message')}}
            @endif
            
            <h2>Log in</h2>

            {{Form::label('username','Username')}} 
            {{Form::text('username')}}

            {{Form::label('password','Password')}}
            {{Form::password('password')}}
            <label>
            {{Form::checkbox('remember',true)}} Remenber me
            </label>
            {{Form::submit('Log in',['class'=>'btn btn-primary btn-block'])}}   
       
        {{Form::close()}}
        
    </div>
</body>
</html>