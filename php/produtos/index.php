<?php

switch($_SERVER['REQUEST_METHOD'])
{
case 'GET':
 $i = $_GET["quant"];
 for($j=0; $j<$i; $j++){
 	$nomes[$j] = $_GET["nome".($j+1)];
 }
 for($j=0; $j<$i; $j++){
 	$grupos[$j] = $_GET["grupo".($j+1)];
 }
 for($j=0; $j<$i; $j++){
 	$precos[$j] = $_GET["preco".($j+1)];
 }
 break;
case 'POST':
 $i = $_POST["quant"];
 for($j=0; $j<$i; $j++){
 	$nomes[$j] = $_POST["nome".($j+1)];
 }
 for($j=0; $j<$i; $j++){
 	$grupos[$j] = $_POST["grupo".($j+1)];
 }
 for($j=0; $j<$i; $j++){
 	$precos[$j] = $_POST["preco".($j+1)];
 }
 break;
default:
 $i = $_REQUEST["quant"];
 for($j=0; $j<$i; $j++){
 	$nomes[$j] = $_REQUEST["nome".($j+1)];
 }
 for($j=0; $j<$i; $j++){
 	$grupos[$j] = $_REQUEST["grupo".($j+1)];
 }
 for($j=0; $j<$i; $j++){
 	$precos[$j] = $_REQUEST["preco".($j+1)];
 }
 break;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
	.container {
	  max-width: 960px;
	}
	
	.border-top { border-top: 1px solid #e5e5e5; }
	.border-bottom { border-bottom: 1px solid #e5e5e5; }
	.border-top-gray { border-top-color: #adb5bd; }
	
	.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
	
	.lh-condensed { line-height: 1.25; }
    </style>
    <script>
        var produto = 1;
    	function adicionar(){
    		produto++;
    		var ad  = '<div class="row"><div class="col-md-4 mb-3"><label for="nome">Nome do Produto ' + produto + '</label><input type="text" class="form-control" id="nome'+produto+'" name="nome'+produto+'" placeholder="" value="" required><div class="invalid-feedback">Valid first name is required.</div></div><div class="col-md-4 mb-3"><label for="gripo">Grupo</label><input list="prod" class="form-control" id="grupo'+produto+'" name="grupo'+produto+'" placeholder="" value="" required><datalist id="prod"><option value="Grupo A"><option value="Grupo B"></datalist><div class="invalid-feedback">Valid last name is required.</div></div><div class="col-md-4 mb-3"><label for="preco">Preço de Venda</label><input type="number" class="form-control" id="preco'+produto+'" name="preco'+produto+'" placeholder="" value="" required><div class="invalid-feedback">Valid first name is required.</div></div></div>';
            
    		$("#produtos").append(ad);
    		$("#quant").attr('value', produto);
    	}
    </script>
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <h2>Produtos</h2>
      </div>

      <div class="row">
        
        <div class="col-md-12 order-md-1">
          <form action="index.php" method="post" class="needs-validation" novalidate>
            <div id="produtos">
            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="nome">Nome do Produto 1</label>
                <input type="text" class="form-control" id="nome1" name="nome1" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="grupo">Grupo</label>
                <input list="prod" class="form-control" id="grupo1" name="grupo1" placeholder="" value="" required>
                <datalist id="prod">
		  <option value="Grupo A">
		  <option value="Grupo B">
		</datalist>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="preco">Preço de Venda</label>
                <input type="number" class="form-control" id="preco1" name="preco1" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
            </div>
            </div>
	    <hr class="mb-4">
	    <input type="hidden" id="quant" name="quant" value="1">
	    <button class="btn btn-secundary btn-lg btn-block" onclick="adicionar();return false;">Adicionar</button>
	    <button class="btn btn-primary btn-lg btn-block" type="submit">Calcular</button>
            <?php
            	if(isset($i)){
            		for($j=0; $j<$i; $j++){
            			echo "<br><b>Produto ".($j+1)."</b><br>";
			 	echo "Nome: " . $nomes[$j];
			 	echo "; Grupo: " . $grupos[$j];
			 	if(strcmp($grupos[$j], "Grupo A") == 0){
			 		$valorFabric = $precos[$j] * 0.8;
			 	}elseif(strcmp($grupos[$j], "Grupo B") == 0){
			 		$valorFabric = $precos[$j] * 0.7;
			 	}else{
			 		$valorFabric = $precos[$j] * 0.9;
			 	}
			 	echo "; Preço de Fábrica: " . $valorFabric;
			 	echo "; Preço de Venda: " . $precos[$j];
			 	echo "<br>";
			 }
            	}
            ?>

            

          </form>
        </div>
      </div>

      
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
