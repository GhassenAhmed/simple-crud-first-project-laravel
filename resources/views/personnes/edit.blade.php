<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Create</title>
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
    /* From uiverse.io by @alexruix */
.input {
 line-height: 28px;
 border: 2px solid transparent;
 border-bottom-color: #777;
 padding: .2rem 0;
 outline: none;
 background-color: transparent;
 color: #0d0c22;
 transition: .3s cubic-bezier(0.645, 0.045, 0.355, 1);
 width: 500px;
}

.input:focus, input:hover {
 outline: none;
 padding: .2rem 1rem;
 border-radius: 1rem;
 border-color: #7a9cc6;
}

.input::placeholder {
 color: #777;
}

.input:focus::placeholder {
 opacity: 0;
 transition: opacity .3s;
}    
.inputs{
    margin-right: 200px;
}
#icon{
    font-size: 50px;
}
button{
    width: 100px;
}
</style>
<body>
    <div class="container mt-5">
        <span id="icon" class="mt-5"><a href="{{url('/personnes')}}"><i class="bi bi-arrow-left"></i></a> </span>
        <h2 >Edit Person</h2>

        
                <form action="" method="POST">
                     {{ csrf_field() }}
                    <div class="inputs d-flex flex-column mt-5 py-5">
                        <label for="" class="py-3">First Name </label>
                        <input placeholder="Username" type="text" class="input py-3" required="" name="nom" value="{{$data->nom}}">
                        <label for="" class="py-3">Last Name </label>
                        <input placeholder="Username" type="text" class="input py-3" required="" name="prenom" value="{{$data->prenom}}">
                        <label for="" class="py-3">Phone </label> 
                        <input placeholder="Username" type="text" class="input py-3" required="" name="telephone" value="{{$data->telephone}}">
                        <button type="submit"  class="btn btn-success mt-4" >Update</button>
                    </div>
                </form>
                
            
            
        
    </div>
    
</body>
</html>