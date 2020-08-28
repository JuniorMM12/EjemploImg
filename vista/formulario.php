
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

    <main>
        <h2 class="centrar-text fw-300">Cargar Imagenes</h2>
      
            <form  method="POST" enctype="multipart/form-data" id="formulario-publicacion">
                    <div class="Imagenes">
                        <div class = "contenedor-img">
                                <div class = "entrada-img">
                                <h3 class="no-margin centrar-text fw-300">1</h3>
                                <div class="img">
                                    <input type="file" name="Img1" value="" id="img1" required>
                                </div>  
                            </div>
                        </div>
                        <div class = "contenedor-img">
                                <div class = "entrada-img">
                                <h3 class="no-margin centrar-text fw-300">2</h3>
                                <div class="img">
                                    <input type="file" name="Img2" value="" id="img2" required>
                                </div>   
                            </div>
                        </div>
                        <div class = "contenedor-img">
                                <div class = "entrada-img">
                                <h3 class="no-margin centrar-text fw-300">3</h3>
                                <div class="img">
                                    <input type="file" name="Img3" value="" id="img3" required>
                                </div>   
                            </div>
                        </div>
                        
                    </div>
                    <div class = "mensajes-btn">
                        <div class = "btn">
                            <button type="submit" class ="btn-enviar" id = "enviar">Enviar</button>
                        </div>
                        <div class = "mensaje">
                           
                        </div>
                    </div>
            </form>
    </main>

    <script src="assets/js/app.js"></script>
</body>
</html>