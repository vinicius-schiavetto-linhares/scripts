<?php

switch($_SERVER['REQUEST_METHOD'])
{
case 'GET':
 $a1= $_GET["a1"];
 $a2= $_GET["a2"];
 break;
case 'POST':
 $a1= $_POST["a1"];
 $a2= $_POST["a2"];
 break;
default:
 $a1= $_REQUEST["a1"];
 $a2= $_REQUEST["a2"];
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
  </head>

  <body>

    

    

    <div class="container">
      <div class="card-deck mb-3 text-center">
        
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Razão da PA</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted">r = a2 - a1</small></h1>
            <form action="razao.php" method="get">
            <div class="input-group">
              <label for="firstName">a1</label>
              <input type="text" class="form-control" id="a1" name="a1" placeholder="Primeiro termo da PA" <?php echo isset($a1) ? ('value="'.$a1.'"') : ('value=""') ?> required>
            </div>
            <div class="input-group">
              <label for="firstName">a2</label>
              <input type="text" class="form-control" id="a2" name="a2" placeholder="Segundo termo da PA" <?php echo isset($a2) ? ('value="'.$a2.'"') : ('value=""') ?> required>
            </div>
            <input type="submit" class="btn btn-lg btn-block btn-primary" value="Calcular Razão">
            </form>
            <?php
		  if(isset($a1) && isset($a2)){
			require_once("classpa.php");
			$pa = new PA;
			$razao = $pa->razao($a1, $a2);
			echo "A Razão é: " . $razao;
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
