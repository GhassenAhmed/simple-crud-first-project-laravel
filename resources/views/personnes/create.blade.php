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
</style>
<body>
    <div class="container mt-5">
        <h2 >Add New Person</h2>

        <div class="inputs">
            <input placeholder="Username" type="text" class="input" required="">
            <input placeholder="Username" type="text" class="input" required="">
            <input placeholder="Username" type="text" class="input" required="">
        </div>
    </div>
    
</body>
</html>