<?php

switch($_SERVER['REQUEST_METHOD'])
{
case 'GET':
 $numero = $_GET["numero"];
 break;
case 'POST':
 $numero = $_POST["numero"];
 break;
default:
 $numero = $_REQUEST["numero"];
 break;
}

?>



<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link href="bootstrap.min.css" rel="stylesheet">
    <style>
	html {
	  font-size: 14px;
	}
	.container {
	  max-width: 500px;
	}
	.pricing-header {
	  max-width: 700px;
	}
	.card-deck .card {
	  min-width: 220px;
	  margin-top: 50px;
	}
	.border-top { border-top: 1px solid #e5e5e5; }
	.border-bottom { border-bottom: 1px solid #e5e5e5; }
	.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
	.btn {
		margin: 20px 0;
	}
	label{
		margin-right: 20px;
	}
	.input-group{
		margin: 40px 0;
	}
	
	@media (min-width: 768px) {
	  html {
	    font-size: 16px;
	  }
	  .card-deck .card {
	    margin-top: 200px;
	  }
	}
    </style>
    <script>
    	function validar(){
    		var num = parseInt(document.getElementById("numero").value);
    		if(num <= 1){
    			alert("Número deve ser maior que 1.");
    			return false;
    		}else if(num > 1000){
    			alert("Número deve ser menor que 1000.");
    			return false;
    		}else if(num % 5 == 0){
    			alert("Número não deve ser divisível por 5");
    			return false;
    		}
    	}
    </script>
  </head>

  <body>

    

    

    <div class="container">
      <div class="card-deck mb-3 text-center">
        
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Fatorial</h4>
          </div>
          <div class="card-body">
            <form action="index.php" method="get">
            <div class="input-group">
              <input type="text" class="form-control" id="numero" name="numero" placeholder="Número" <?php echo isset($numero) ? ('value="'.$numero.'"') : ('value=""') ?> required>
            </div>
            <input type="submit" class="btn btn-lg btn-block btn-primary" value="Calcular Fatorial" onclick="return validar()">
            </form>
            <?php
		  if(isset($numero)){
			require_once("classFatorial.php");
			$pa = new Fatorial;
			$fatorial = $pa->calcFatorial($numero);
			echo "O fatorial de $numero é <b>$fatorial</b>";
		  }
	    ?>
          </div>
        </div>
        
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    <script src="jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
