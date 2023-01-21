<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Simple CRUD</title>
</head>
<style>
    body{
        background: #E3F6FF;
    }
    h2{
        color: #13005A;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 50px;
        text-align: center;
    }
    #icon{
    font-size: 50px;
}
</style>
<body>
    <div class="container mt-5">
         <h2>Simple CRUD </h2>
         <span id="icon" class="mt-5"><a href="{{url('/')}}"><i class="bi bi-arrow-left"></i></a> </span>
         <a href="{{url('/personnes/create')}}" class="btn btn-success float-end">Add</a>
         <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Telephone</th>
                <th scope="col">Operations</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($personnes as $pers)
                <tr>
                    <th scope="row">{{$pers->id}}</th>
                    <td>{{$pers->nom}}</td>
                    <td>{{$pers->prenom}}</td>
                    <td>{{$pers->telephone}}</td>
                    <td>
                        
                        <a class="btn btn-info" href="/personnes/{{$pers->id}}">Show</a>
                        <a class="btn btn-danger" href="/personnes/{{$pers->id}}">Delete</a>
                    </td>
                  </tr>
                @endforeach
             
            </tbody>
          </table>
    </div>
    
    
</body>
</html>