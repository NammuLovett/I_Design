<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <!-- charset  unicode, todos los idiomas, emojis... -->
    <meta name="description" content="This is my first webpage ... " />
    <!-- en name pones el nombre del metadato. y en content el metadato: En desctiption es una descripción en lenguaje natural  -->
    <meta name="keywords" content="coding, html, programming" />
    <!-- keywords ayuda a posicionarnos frente a los motores de búsqueda -->
    <meta name="author" content="Manuel Gómez Lora" />
    <!-- Autor de la página web -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Para dar soporte a las versiones antiguas de IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- El conjunto de cosas que se muestra en pantalla, es decir si no se pone, las páginas responsives no se muestran, es la referencia de estas-->
    <meta name="generator" content="Programa" />
    <!-- Si nuestra página web ha sido creada de forma automáticamente con un programa -->
    <link rel="stylesheet" href="style.css" />
    <!-- Señalar contenido que tiene relación con el html de la web, tienes que poner en rel la palabra cable -->
    <link rel="icon" href="img/favicon.ico" />
    <!-- Favicon de la web -->
    <title>FORM 2</title>
  </head>

  <body>
    <section>
      <nav>
        <a href="../index.html">HOME</a> |
        <a href="./html/tournaments.html">TOURNAMENTS</a> |
        <a href="./html/events.html">EVENTS</a> |
        <a href="./html/media.html">MEDIA</a> |
        <a href="./html/aboutus.html">ABOUT US</a> | <a href="#">FORM 1</a> |
        <a href="form2.html">FORM 2</a>
      </nav>
    </section>

    <?php
    if (!isset($_GET["name"])) {
    ?>
    <form action="#" method="GET">
      <fieldset>
        <legend>Datos Personales</legend>
        <p>
          <label for="name">Nombre: </label>
          <input type="text" name="name" id="name" />
        </p>
        <p>
          <label for="surname">Primer apellido:</label>
          <input type="text" name="surname" id="surname" />
        </p>
        <p>
          <label for="surname2">Segundo apellido:</label>
          <input type="text" name="surname2" id="surname2" />
        </p>
        <p>
          <label for="adress">Dirección:</label>
          <input type="text" name="adress" id="adress" />
        </p>
        <p>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" />
        </p>
        <p>
          <label for="date">fecha de nacimiento</label>
          <input type="date" name="date" id="date" />
        </p>
      </fieldset>
      <fieldset>
        <legend>Otros datos</legend>
      </fieldset>
      <p>
        <label for="tlf"> Teléfono</label>
        <input type="text" name="tlf" id="tlf" />
      </p>
      <p>
        <label for="color"> Color Favorito</label>
        <input type="color" name="color" id="color" value="#CB1363" />
      </p>
      <p>
        <label for="web"> Página inicio</label>
        <input type="web" name="web" id="web" />
      </p>
      <p><input type="submit" value="enviar" /></p>
    </form>

    <?php
    } else {
        $name = $_GET["name"];
        $surname = $_GET["surname"];
        $surname2 = $_GET["surname2"];
        $adress = $_GET["adress"];
        $email = $_GET["email"];

        echo "Bienvenido a la mazmorra $name $surname $surname2, vives en la calle $adress y tu email es $email con fecha de nacimiento $date";
    }
    ?>

    <!-- 
    <form name="formulario" action="#" method="get">
        <fieldset>
            <legend>Datos Personales</legend>
            <p>
                <label for="input1"> Nombre</label>
                <input type="text" name="input1" id="input1" size="15" maxlength="25" autofocus spellcheck="false" />
            </p>
            <p>
                <label for="input2"> Apellidos</label>
                <input type="text" name="input2" id="input2" size="30" maxlength="50" />
            </p>
            <p>
                <label for="input3"> Edad</label>
                <input type="number" name="input3" id="input3" value="18" step="5" min="15" max="95" />
            </p>
            <p>
                <label for="input4"> Fecha nacimiento</label>
                <input type="date" name="input4" id="input4" value="2000-01-01" />
            </p>
        </fieldset>
        <fieldset>
            <legend>Otros datos</legend>
            <p>
                <label for="input5"> Dirección</label>
                <input type="text" name="input5" id="input5" />
                <label for="input6"> Email</label>
                <input type="text" name="input6" id="input6" />
            </p>
            <p>
                <label for="input7"> Teléfono</label>
                <input type="text" name="input7" id="input7" />
            </p>
            <p>
                <label for="input8"> Color Favorito</label>
                <input type="color" name="input8" id="input8" value="#CB1363" />
            </p>
            <p>
                <label for="input8"> Página inicio</label>
                <input type="web" name="input8" id="input8" />
            </p>
        </fieldset>
        <fieldset>
            <legend>Opinión</legend>
            <strong>
                <p>¿Qué piensas de esta basura?</p>
            </strong>
            <p>
                <input type="radio" id="si" name="radio" value="1" checked>
                <label for="si">Me puto flipa chavalada</label>
                <input type="radio" id="no" name="radio" value="2">
                <label for="no">Me da cringe</label>
                <input type="radio" id="nsnc" name="radio" value="3">
                <label for="nsnc">Soy especial<label>
            </p>
            <hr>
            <strong>
                <p>¿A qué te quieres dedicar?</p>
            </strong>
            <p>
                <label for="o1">Informática</label>
                <input type="checkbox" name="o1" value="a" checked>
                <br>
                <label for="o2">Logística</label>
                <input type="checkbox" name="o2" value="b">
                <br>
                <label for="o3">Marketing</label>
                <input type="checkbox" name="o3" value="c">
                <br>
                <label for="o4">Administración</label>
                <input type="checkbox" name="o4" value="d">

            </p>


        </fieldset>

        <fieldset>
            <legend>Un par de lista</legend>
            <p>
                <label for="lista1">Asignatura Favorita:</label>
                <select name="lista1" id="lista1" required>
                    <option value="" selected disabled hidden>Seleccione una opción</option>
                    <option value="l1">Diseño Web</option>
                    <option value="l2">Sistemas informáticos</option>
                    <option value="l3">Empresa</option>
                    <option value="l4">Entorno</option>
                </select>
            </p>

            <p>
                <label for="lista2">Mes favorito</label>

                <select name="lista2" id="lista2">
                    <option value="" selected disabled hidden>Seleccione una opción</option>
                    <optgroup label="primavera">
                        <option value="p1">Marzo</option>
                        <option value="p2">Abril</option>
                        <option value="p3">Mayo</option>
                    </optgroup>
                    <optgroup label="Verano">
                        <option value="v1">Junio</option>
                        <option value="v2">Julio</option>
                        <option value="v3">Agosto</option>
                    </optgroup>
                    <optgroup label="Otoño">
                        <option value="o1">Septiembre</option>
                        <option value="o2">Octubre</option>
                        <option value="o3">Noviembre</option>
                    </optgroup>
                    <optgroup label="Invierno">
                        <option value="i1">Diciembre</option>
                        <option value="i2">Enero</option>
                        <option value="i3">Febrero</option>
                    </optgroup>
                </select>
            </p>

            <p>
                <label for="milista">Provincias Andaluzas:</label>
                <input list="lista3" id="milista" name="milista">
                <datalist id="lista3" name="lista3">
                    <option value="p1">Jaén</option>
                    <option value="p2">Córdoba</option>
                    <option value="p3">Sevilla</option>
                    <option value="p4">Huelva</option>
                    <option value="p5">Cádiz</option>
                    <option value="p6">Málaga</option>
                    <option value="p7">Granada</option>
                    <option value="p8">Almería</option>
                </datalist>
            </p>
        </fieldset>

        <p>


            </fieldset>


        <p>
            <input type="reset" value="limpiar" />
            <input type="submit" value="enviar" />
        </p>
    </form> -->
  </body>
</html>
