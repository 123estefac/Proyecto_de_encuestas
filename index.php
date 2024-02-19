<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de encuestas</title>
</head>
<body>
<form method="post" action="save.php">
    <h1 class="titulo"><center>Encuestas sobre uso de la tecnologia</center></h1>
    <label> 1. ¿Con que frecuencia utiliza interner para fines educativos?</label> <br>
    <input type="radio" name="con_que_frecuencia_utiliza_el_internet" value="a diario"> A Diario <br>
    <input type="radio" name="con_que_frecuencia_utiliza_el_internet" value="Varias veces a la semamas"> Varias veces a la semamas <br>
    <input type="radio" name="con_que_frecuencia_utiliza_el_internet" value="ocasionalmente"> Ocasionalmente <br>
    <input type="radio" name="con_que_frecuencia_utiliza_el_internet" value="raramente"> Raramente <br>
    <input type="radio" name="con_que_frecuencia_utiliza_el_internet" value="nunca" > Nunca <br>  
  <br>  
    <img src="./IMAGES/computadora y ordenador.gif" alt="tecnologia">
    <label>2. ¿Que herramientas tecnologicas utilizas en clases?</label>  <br>
    <input type="radio" name="que_herramienta_utilizas" value="proyectores"> Proyectores <br>
    <input type="radio" name="que_herramienta_utilizas" value="Pizzarras Digitales"> Pizzarras Digitales <br>
    <input type="radio" name="que_herramienta_utilizas" value="Plataformas de aprendizajes en línea "> Plataformas de aprendizajes en línea <br>
    <input type="radio" name="que_herramienta_utilizas" value="Correo electronico"> Correo electronico <br>
    <label>espesifica Otras</label>
    <input type="text" class="texto" name="espesifique_otras" ><br>
 
  <br><br>
    <label>3. ¿Te sientes cómodo/a utilizando software de edición de documentos (por ejemplo, Microsoft Word o Google Docs)?</label> <br>
    <input type="radio" name="te_sientes_comodo_utilizando_software" value="si"> Si <br>
    <input type="radio" name="te_sientes_comodo_utilizando_software" value="no"> No <br>
    <input type="radio" name="te_sientes_comodo_utilizando_software" value="No estoy seguro/a"> No estoy seguro/a <br>
  <br>
    <label>4. ¿Has recibido capacitación formal en el uso de tecnología educativa?</label> <br>
    <input type="radio" name="has_recibido_capacitacion" value="si"> Si <br>  
    <input type="radio" name="has_recibido_capacitacion" value="no"> No <br>
    <input type="radio" name="has_recibido_capacitacion" value="No, pero me gustaria recibir capacitacion"> No, ||| pero me gustaria recibir capacitacion <br> 
  <br>
<img src="./IMAGES/computadora y ordenador.gif" alt="tecnologia">
    <label>5. ¿Qué aspectos tecnológicos te gustaría aprender más?</label> <br>
    <input type="radio" name="que_te_gustaria_aprender" value="Creacion de contenido multimedia"> Creacion de contenido multimedia <br>
    <input type="radio" name="que_te_gustaria_aprender" value="programacion"> Programacion <br>
    <input type="radio" name="que_te_gustaria_aprender" value="Uso avanzado de herramientas de oficina"> Uso avanzado de herramientas de oficina <br>

<a href="enviar.php">
    <button class="boton">Enviar</button>
</a>
</body>
</html>