<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Show</title>
</head>
<style>
    body{
        background-color: aliceblue;
    }
    h2{
     font-size: 50px;
     text-align: center;
     margin-top: 30px;
     color: #A555EC;
     font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .center{
        width: 100%;
    }
    #icon{
    font-size: 50px;
}
</style>
<body>
    <h2>show person</h2>

    <div class="container ">
        <span id="icon" class="mt-5"><a href="/personnes"><i class="bi bi-arrow-left"></i></a> </span>
        <div class="center d-flex justify-content-center align-items-center mt-5">
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
                    
                    <tr>
                        <th scope="row">{{$personne->id}}</th>
                        <td>{{$personne->nom}}</td>
                        <td>{{$personne->prenom}}</td>
                        <td>{{$personne->telephone}}</td>
                        <td>
                            <a class="btn btn-danger">Delete</a>
                            <a class="btn btn-danger" href={{"edit/".$pers->id}}>Update</a>
                        </td>
                      </tr>
                   
                 
                </tbody>
              </table>
        </div>
    </div>
</body>
</html>