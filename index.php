

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Páscoa Solidária</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="hugo.css">
    <link rel="shorcut icon" href="imagens/CAMPANHA-SOLIDARIA-2023.png">
</head>

<body>
          
        <nav class="navbar navbar-expand-lg bg-dark">
                <div class="container-fluid">
                    <a class="text-center" href="home">
                        <img src="imagens/LOGO.png" alt="PASCOA">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
         <div id="carouselExampleControls" class="carousel-slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="imagens/Páscoa2022-23 1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="imagens/Páscoa2022-15 1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="imagens/Páscoa2022-25 1.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                <img class="    d-block w-100" src="imagens/WhatsApp Image 2022-04-18 at 10.28.47 (2) 1.jpeg" alt="Four slide">
                </div>
                <div class="carousel-item">
                <img class="    d-block w-100" src="imagens/WhatsApp Image 2022-04-18 at 10.28.47 (3) 1.jpeg" alt="Five slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <div class="pix">

                <div>
                    <p>Apoie o Quanto Quiser e Ajude a Fazer a Páscoa Solidária Muito mais Feliz.Doe através do Pix, Com sua Doação, Você faz a Diferença na Vida de Crianças que mais Precisam.</p>                                                                                     
                    <h1>Chave Pix:</h1>
                </div>
                <div class="button">
                    <input disabled="true" style="width: 260px; border:0; background-color:#fff" type="text" value="instituto.mariogazin@gazin.com.br" id="textarea" />
                    <button onclick="copy()">COPIAR CHAVE PIX &#10070;</button>
                </div>
            </div>

            <div class="locais">
                <h1><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Locais atendidos</h1>
                <div class="colum">
                    <li>Douradina (Distritos: Vila Formosa, Jardim do Ivaí e Moradias Pioneira)</li>
                    <hr>
                    <li>Ivaté (Distritos: Herculandia, jardim Eldorado)</li>
                    <hr>
                    <li>Icaraima (Distritos: Porto Camargo e Vila Rica)</li>
                    <hr>
                    <li>Santa Elisa</li>
                    <hr>
                    <li>São José</li>
                    <hr>
                    <li>Santa felicidade</li>
                    <hr>
                    <li>Tapira</li>
                    <hr>
                </div>
            </div>
    <footer class="bg-dark">
        <p class="text-center text-white p-3 m-0" ><img style="height: 20px" src="imagens/jeitogazin.png" alt="instituto "href="" ></p>
        <a href="https://institutomariogazin.com.br/" target="_blank"><p class="text-center text-white p-3 m-0" ><img style="height: 80px" src="imagens/logo mario.png" alt="instituto" ></p></a>
    </footer>
</body>

</html>
<div class="chavepix">
    <script>
        function copy() {
            var temp = document.createElement("textarea");
            document.body.appendChild(temp);
            temp.value= 'instituto.mariogazin@gazin.com.br';
            temp.select();
            document.execCommand("copy");
            document.body.removeChild(temp);
            
            alert("Copiado!");

        }
    </script>
</div>