<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BodytecH</title>
    <link href="https://fonts.googleapis.com/css2?family=Lekton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body  class="container">
    <header class="logo1">
          <!-- Image and text -->
          <nav class="navbar navbar-light bg-transparent">
            <a class="navbar-brand" href="#">
                <img src="gimnacio1/bodytech-logo.png" width="30%" height="30%" class="d-inline-block align-top" alt="" loading="lazy">
            </a>
            <div class="d-flex justify-content-end d-flex align-items-end">
                <a class="color1 mr-5" href="#">afiliate ya</>
                <a class="color1  " href="#">ingresa</a>
            </div>
        </nav>

    </header>
    <section>
          <h1 class="mt-5">CALCULADORA DE ÍNDICE DE MASA CORPORAL (IMC)</h1>
        

    </section>
    <section>
        <div>
        <h2 class="resultado">

        <?php
        if(!$_POST){
            header( 'location: index.html');

        }
            $pes = "";
            $alt = "";

           if(isset($_POST['validar'])){ 

              $pes = $_POST['peso'];
              $alt = $_POST['altura'];

             $imc = $pes/($alt*$alt);

            if ($imc <= 18.4) {

                echo number_format ($imc). ' tiene insuficincia de peso ';
        # code...
            } else if (18.5 <= $imc && $imc <= 24.9) {

                echo number_format ($imc,2). ' su peso es normal ';
   
                }else if (25<= $imc && $imc <= 29.9) {

                    echo number_format ($imc,2). ' tiene sobrepeso ';
            # code...
                    }else if  (30 <= $imc && $imc <= 34.9) {

                        echo number_format ($imc,2). ' esta en etapa de obesidad 1 ';
           # code...
                        } else if (35 <= $imc && $imc <= 39.9) {

                            echo number_format ($imc,2). ' esta en etapa de obesidad 2 ';
           # code...
                            }else 
                                    
                            echo number_format ($imc,2). ' esta en etapa de obesidad 3 ';
                                                 # code...
      }
            ?>
            </h2> 
            </div>


            <button  class="calculo btn-lg btn-block regresar"><a id="regreso"  href="index.html">REGRESAR</a></button>
        
    </section>


    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js " integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV " crossorigin="anonymous "></script>
    
</body>
</html>