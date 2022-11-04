<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
        body{
            background: black;
            color: blue;

        }
      
    </style>
</head>

<body>
    <?php
    echo "soy la historia"
    ?>
    <center>
    <div class="form-floating">
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <label for="floatingSelect">Works with selects</label>
    </div>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">navegar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">ir comprar boleto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">ver</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled">quedarse aqui</a>
        </li>
    </ul>
    <div class="card" style="width: 18rem;">
        <img src="/img/img2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">BOSQUES DE PIEDRA DE HUALLAY</h5>
            <p class="card-text"> El Bosque de piedras de Huayllay está ubicado en el distrito de Huayllay, provincia y departamento de Pasco, Perú tiene una extensión de 6000 ha.
                ​ Está protegido desde 1974 por el establecimiento del Santuario nacional de Huayllay. Constituye una maravilla natural andina, a 4,310 metros sobre el nivel del mar.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="/img/img2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">HUAGURUNCHO NEVADO</h5>
            <p class="card-text">El distrito de Huachón es uno de los trece que conforman la provincia peruana de Pasco situada en la parte suroccidental del departamento homónimo. 3400 m s. n. m. 5511 hab.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    </center>
</body>

</html>