<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ely Fotografía</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="contenedor">
      <div id="container">
       <header id="encabezado">
           <ul class="fa-ul">
                  <li><i class="fa fa-mobile fa-2x" aria-hidden="true"></i> <a href="#">644 000 0000</a></li>
                  <li><i class="fa fa-phone fa-lg" aria-hidden="true"></i> <a href="#">644 000 0000</a></li>
           </ul>
           <a href="index.php"><img class="logo" src="img/sin_curvas.png" alt="Ely Fotografía cd.obregon"></a>
           
       </header>
       
          
           <?php include 'nav.php'?>
           
       
       <script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
        </script>
       <section id="cuerpo">
          <div id="contenido">
             <?php include 'contentexito.php' ?>
             
                        
              
          </div>
                
           
           
       </section>
       <footer id="pie">
           
           <aside>
               <p>La fotografía es un arte que permite trasmitir
               <br/>-y resguardar toda la vida- la escencia de
               <br/>las situaciones.
               <br/>Sabemos que para usted este evento es el
               <br/>MAS IMPORTANTE y queremos ser parte del mismo.               
               </p>
               
               <div>Derechos reservados de concepto y forma de este sitio web. Power by: <a href="http://www.guebsite.com">Guebsite MEXICO</a></div>
               
           </aside>
           <section> 
           <img class="logopie" src="img/logopie.png" alt="Fotografía Profesional Ciudad Obregón">
           <ul>
              <li><a href=""><img src="img/facebook.png" alt=""></a></li>
              <li><a href="#"><img src="img/instagram-logo.png" alt=""></a></li>
              
           </ul>        
           <span id="tel">Tel: <a href="tel://6441164048">644 116 4048</a></span>
           </section>        
           
       </footer>       
    </div>
    </div>
</body>
</html>