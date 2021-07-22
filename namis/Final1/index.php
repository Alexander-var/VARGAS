<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>index</title>
</head>

<body>
    <main>
        <section>
            <div class="container border border-dark mt-5">
                <div class="row">
                    <div class="col-12 border bg-warning" id="cabeza">
                        <div class="row">
                            <div class="col-12 col-sm-3">
                                <img src="imagenes\usfx.png" alt="" class=" p-5">
                            </div>
                            <div class="col-12 col-sm-6 mt-5">
                                <h5 class="text-danger">UNIVERSIDAD DE SAN FRANCICO XAVIER</h5>
                                <span class="text-primary m-0">Facultad de tecnologia </span>
                                <span class="text-danger">Sucr</span>
                                <span class="text-light  ">e-Bol</span>
                                <span class="text-success inline">ivia</span>
                                <p class="m-0">Carreras: Ing de Sistemas, Ing en ciencias de la computacion</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-2 p-0 " id="menu">
                        <ul class="nav flex-column bg-primary pr-3 ">
                            <li class="nav-item bg-primary border border-white">
                                <a class="nav-link active text-light" href="#" onclick="cargar('pregunta1.php')">pregunta1</a>
                            </li>
                            <li class="nav-item bg-primary border border-white">
                                <a class="nav-link  text-light " href="#" onclick="cargar('pregunta2.php')">pregunta2</a>
                            </li>
                            <li class="nav-item bg-primary border border-white">
                                <a class="nav-link  text-light " href="#" onclick="cargar('pregunta3.html')">pregunta3</a>
                            </li>
                            <li class="nav-item bg-primary border border-white">
                                <a class="nav-link  text-light " href="#" onclick="cargar('login.html')" >pregunta4</a>
                            </li>
                            <li class="nav-item bg-primary border border-white">
                                <a class="nav-link  text-light " href="#">pregunta5</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-10 col-sm-10 bg-light" id="cuerpo">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 bg-danger text-white" id="pie">
                    <p class="mt-2">Alumno: ALEXANDER VARGAS RIVERA</p>
                    <p>CU:35-4337</p>
                     </div>
                </div>
            </div>
        </section>
    </main>
    <script src="ajax.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>