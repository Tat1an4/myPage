<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/7e6fc33cb9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@100..700&family=Slabo+27px&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-principal">
        <div class="container-fluid">
            <p class="navbar-brand w-100">
                <img src="{{asset('img/logo-bmw.png')}}"
                    width="40px"
                    height="40px"
                />
                BMW, el placer de conducir
            </p>
        </div>
    </nav>
    <div class="menu">
        <form class="menu">
            <a class="btn btn-outline-secondary me-2" type="button" href="{{ route('home') }}">Inicio</a>
            <a class="btn btn-outline-secondary me-2" type="button" href="{{ route('user.create') }}">Sorteo</a>
            <button class="btn btn-outline-secondary me-2" type="button">Contactanos</button>
        </form>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <div>
        <nav class="navbar navbar-expand-lg navbar-footer" style="margin-top: 20px;">
            <div class="container-fluid">
                <p class="navbar-brand w-100">
                    <img src="{{asset("img/logo-bmw.png")}}"
                        width="40px"
                        height="40px"
                    />
                    BMW
                </p>
            </div>
        </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
    })
</script>
<style>
    .navbar{
        background-color: #4a9aa9;
        height: 50px;
    }
    .navbar-brand{
        text-align: center;
        margin-top: 16px;
        position: absolute;
        color: white;
    }
    .logo{
        background-image: url({{asset("img/logo-bmw.png")}});
    }
    .menu{
        width: 100%;
        height: 100px;
        text-align: center;
        margin-top: 50px;
        box-shadow: 0px 5px 5px #dcdcdc;
    }
    .me-2{
        height: auto;
        width: 10%;
    }
    .title{
        font-family: "M PLUS 1 Code", monospace;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
        font-size: 60px;
    }
    hr{
        border-style: solid;
        border-width: 2px;
        width: 50%;
        color: black;
        margin: auto;
        margin-top: 30px;
        margin-bottom: 20px;
    }
    #number {
        width:200px;
        height:200px;
        border-radius:50%;
        border: solid 5px goldenrod;
        overflow:hidden; 
        margin: auto;
        vertical-align: middle;
        margin-block: 15px;
    }
    .count{
        font-size: 80px;
        vertical-align: middle;
        position: absolute;
        margin-top: 30px;
        margin-left: -45px;
    }
    .col-md-4 {
        flex: 0 0 auto;
        width: 49.333333%;
    }
    .info-card{
        margin-top: 15px;
        text-align: justify;
    }
    .register{
        font-family: "Slabo 27px", serif;
        font-weight: 400;
        font-style: normal;
        font-size: 40px; 
    }
    .benefit{
        font-family: "Dancing Script", cursive;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
        font-size: 60px; 
    }
</style>