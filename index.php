<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acuarios_Nemo</title>

    <!--tipos de fuentes-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abel&family=EB+Garamond&family=Red+Hat+Display:wght@300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abel&family=EB+Garamond&family=Red+Hat+Display:wght@300&family=Rubik&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/39866f6cf0.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

   
    <header class="encabezado" id="inicio">

        <div class="contenido-navegacion">
            <div class="logo">
                <h2>VIDA <span> ACUATICA</span></h2>
            </div>

            <nav class="navegacion ocultar">
                <a href="#inicio">Inicio</a>
                <a href="#nosotros">Nosotros</a>
                <a href="#servicios">Servicios</a>
                <a href="#contacto">Contacto</a>
            </nav>
            <div class="hamburguesa">
                <span></span><span></span><span></span>
            </div>
        </div>

        <div class="contenido-encabezado contenedor">
            <div class="texto-encabezado">
                <h1></h1>

            </div>

            <!--contacto -->

            <form method="post" class="formulario-encabezado">
                <h2>Ingresa para asesorarte</h2>

                <div class="input-encabezado">
                    <input type="text" name="name" placeholder="Nombre" required>
                </div>

                <div class="input-encabezado">
                    <input type="email" name="email" placeholder="Correo" required>
                </div>

                <div class="input-encabezado">
                    <input type="tel" name="phone" placeholder="Telefono" required>
                </div>

                <div class="boton-encabezado">
                    <input class="btn azul" type="submit" name="send" value="Enviar">
                </div>

            </form>

<?php
include("send.php");
?>

        </div>

    </header>

    <!--servicios-->

    <div class="ventajas">
        <div class="contenido-ventajas contenedor">
            <div class="ventaja">
                <i class="fa-solid fa-clock"></i>
                <h3>Damos prioridad a nuestros clientes</h3>
                <p>En nuestra tienda de peces, nos enorgullece contar |con una diversa y apasionada comunidad de clientes 
                    que comparten un interés común en el fascinante mundo acuático. 
                    Desde entusiastas principiantes hasta experimentados aficionados, atendemos a clientes de todos los niveles de 
                    experiencia. Nuestro equipo está comprometido a brindar un servicio personalizado, asesoramiento experto y productos
                    de alta calidad para satisfacer las necesidades específicas de cada cliente. Nos emociona ver cómo nuestros 
                    clientes transforman sus acuarios en vibrantes ecosistemas, creando hábitats saludables y hermosos para sus peces.
                     La retroalimentación positiva de nuestra comunidad es la fuerza impulsora que nos impulsa a mejorar continuamente 
                     y a ofrecer siempre lo mejor en el cuidado de los peces y la acuarofilia. Estamos agradecidos por la confianza 
                     que nuestros clientes depositan en nosotros y esperamos seguir siendo su elección preferida para todo lo relacionado
                     con el fascinante mundo de los peces y los acuarios.</p>
            </div>
            <div class="ventaja">
                <i class="fa-solid fa-house"></i>
                <h3>Diseños personalizados</h3>
                <p>Celebramos la diversidad de acuarios como un reflejo vibrante de la creatividad 
                    y singularidad de nuestros clientes. Desde acuarios de agua dulce con una explosión de colores y variedad de plantas,
                    hasta cautivadores acuarios marinos que recrean auténticos arrecifes, ofrecemos una amplia gama de opciones para 
                    satisfacer los gustos y preferencias de todos los amantes de los peces. Además, promovemos la diversidad biológica
                     con una selección extensa de especies de peces, invertebrados y plantas acuáticas, permitiendo a nuestros clientes
                     crear ecosistemas únicos y equilibrados. Nuestro equipo está comprometido a proporcionar asesoramiento experto para 
                     ayudar a nuestros clientes a seleccionar los elementos adecuados y garantizar el bienestar de sus peces en ambientes
                      que reflejen la diversidad asombrosa de la vida acuática. En nuestra tienda, reconocemos que cada acuario es una 
                      expresión única del amor y la dedicación de sus cuidadores, y nos enorgullece ser parte de esta maravillosa
                      diversidad acuática.                  
                </p>
            </div>
            <div class="ventaja">
                <i class="fa-solid fa-trowel-bricks"></i>
                <h3>Trabajos de calidad</h3>
                <p>
                Diseño de Acuarios Personalizados: Hemos creado acuarios únicos y personalizados que reflejan la visión y estilo de nuestros clientes, desde ambientes tropicales vibrantes hasta paisajes marinos cautivadores.
                Sistemas de Filtración Avanzados: Hemos instalado sistemas de filtración de última generación para garantizar la calidad del agua y el bienestar de los peces, utilizando tecnología innovadora para mantener un entorno acuático saludable.
                Asesoramiento en Selección de Peces: Nuestro equipo de expertos ha brindado orientación detallada sobre la selección de peces, asegurando la compatibilidad y la armonía en cada acuario, teniendo en cuenta las necesidades específicas de cada especie.
                Reparación y Mantenimiento: Nos hemos encargado de reparar acuarios con fugas, problemas de iluminación o mal funcionamiento de equipos, garantizando que los sistemas vuelvan a funcionar eficientemente.
                </p>
            </div>
        </div>

    </div>

    <!--Compañia-->

    <section class="nosotros contenedor" id="nosotros">
        <h2>Sobre nosotros</h2>
        <div class="contenido-nosotros">

            <div class="texto-nosotros">
                <h3>Sumérgete en un mundo de maravillas acuáticas</h3>
                <p>
                En nuestra tienda de peces, nos esforzamos constantemente por brindar a nuestros clientes una experiencia excepcional 
                y gratificante. Desde el momento en que ingresan, nos dedicamos a proporcionar un servicio cálido y personalizado que 
                refleje nuestra pasión por el mundo acuático. Nuestro personal capacitado está siempre dispuesto a ofrecer asesoramiento
                 experto, responder preguntas y compartir conocimientos para garantizar que cada cliente se sienta confiado en sus 
                 decisiones para el cuidado de sus peces. Además, nos enorgullece ofrecer productos de alta calidad que satisfacen las 
                 necesidades específicas de cada aficionado, contribuyendo así al éxito y bienestar de sus acuarios. Valoramos la
                  retroalimentación de nuestros clientes, ya que nos impulsa a mejorar continuamente y a superar sus expectativas. 
                  La satisfacción de nuestros clientes es nuestra mayor recompensa, y nos llena de alegría ser parte de sus experiencias 
                  positivas mientras exploran, aprenden y disfrutan del fascinante universo de los peces y los acuarios.
                   Estamos comprometidos a seguir siendo el destino preferido para todos los amantes de los peces que buscan una 
                   experiencia única y enriquecedora.
                </p>

                <a href="#" class="btn bordes">saber más...</a>
            </div>

        </div>
    </section>

    <!--servicios-->

    <section class="servicios contenedor" id="servicios">
        <h2>Servicios</h2>
        <div class="contenido-servicios">
            <div class="servicio">
                <i class="fa-solid fa-headphones"></i>
                <h3>Soporte</h3>
                <p> El servicio al cliente es una piedra angular de nuestra filosofía empresarial.
                     Nos dedicamos a proporcionar un servicio excepcional que va más allá de simplemente vender productos. 
                     Nuestro equipo de atención al cliente está altamente capacitado y comprometido a brindar asistencia experta, 
                     orientación personalizada y soluciones efectivas a cada cliente. Estamos aquí para responder preguntas, ofrecer
                     asesoramiento sobre el cuidado de peces, recomendar productos adecuados y abordar cualquier inquietud que pueda 
                     surgir. Valoramos la relación a largo plazo con nuestros clientes y nos esforzamos por construir una confianza 
                     mutua. Siempre estamos dispuestos a compartir nuestro conocimiento sobre las últimas tendencias en acuarofilia, 
                     técnicas de mantenimiento de acuarios y cualquier otra información relevante para garantizar que nuestros clientes 
                     se sientan seguros y satisfechos en cada paso de su experiencia de compra. En nuestra tienda, el compromiso con un
                      servicio al cliente excepcional es una prioridad, y estamos listos para superar las expectativas de aquellos que 
                      confían en nosotros para sus necesidades acuáticas.</p>

            </div>

            <div class="servicio">
                <i class="fa-solid fa-paint-roller"></i>
                <h3>Reparacion</h3>
                <p>Comprendemos la importancia de mantener los acuarios en condiciones óptimas para el 
                    bienestar de los habitantes acuáticos. Nuestro servicio de reparación de acuarios está diseñado para ofrecer a 
                    nuestros clientes tranquilidad y soluciones efectivas en caso de problemas. Ya sea una fuga, un problema con el 
                    sistema de filtración o cualquier otro inconveniente, nuestro equipo de técnicos especializados está listo para
                     abordar y resolver cualquier problema que pueda surgir. Nos enorgullece contar con profesionales con experiencia
                      que pueden diagnosticar y reparar eficientemente cualquier avería, asegurando que los acuarios vuelvan a funcionar 
                      correctamente. Además, nos comprometemos a brindar un servicio rápido y eficiente para minimizar las interrupciones
                       en la vida acuática de nuestros clientes. En nuestra tienda, la satisfacción y el bienestar de los peces son 
                       nuestra prioridad, y nuestro servicio de reparación de acuarios refleja nuestro compromiso inquebrantable con 
                       la salud y la felicidad de los habitantes acuáticos</p>
            </div>

        </div>
    </section>

    <!---Contacto-->

    <section class="contacto" id="contacto">
        <h2>Contactanos</h2>
        <div class="contenido-contacto">
            <div class="informacion-contacto">
                <h3>Informacion de contacto</h3>
                <p>edissonayala681@gmail.com</p>
                <p>3124923342</p>
            </div>

<!--segundo formulario de contacto-->

            <form method="post" class="formulario-contacto">
                <div class="input-contacto">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="name" id="nombre" placeholder="Nombre" required>
                </div>

                <div class="input-contacto">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Correo" required>
                </div>

                <div class="input-contacto">
                    <label for="telefon">Telefono</label>
                    <input type="tel" name="phone" id="telefono" placeholder="Telefono" required>
                </div>

                <div class="input-contacto">
                    <label for="mensaje">Mensaje</label>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="input-contacto">
                    <input type="submit" name="send2" value="Enviar" class="btn azul">
                </div>
            </form>
            <?php
        include("send2.php");
        ?>
        </div>
        
    </section>

    <footer class="footer">
        <div class="logo">
            <h2>Acuarios_Nemo <span> para su hogar</span></h2>
        </div>
        <p>Todos los derechos reservados <span class="fecha"></span> &copy; Visita nuestra tienda fisica</p>

    </footer>


    <script src="js/app.js"></script>

</body>

</html>