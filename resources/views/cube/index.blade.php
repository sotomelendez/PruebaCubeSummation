<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Prueba Backend</title>
    
    {!! Html::style('assets/css/bootstrap.css') !!}

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-primary text-center">
				Prueba Cube Summation por Ernesto Soto
			</h3>
			<br/>
			
			<!--<form action="result.php" method="POST">-->
			{{ Form::open(array('url' => 'result', 'method' => 'post')) }}
            
			<div class="row">
				<div class="col-md-12" >
					<textarea id="entrada" name="entrada" style="width:50%; height:300px; margin: 0 auto; display:block;"></textarea>
				</div>
			</div> 
			<br/>
			<div style="margin: 0 auto; text-align:center">
				
				<!--<button type="submit" class="btn btn-success btn-lg">
					Ejecutar
				</button> -->
				{{ Form::submit('Ejecutar', array('class' => 'btn btn-success btn-lg')) }}
				<button type="button" class="btn btn-lg btn-danger" onclick="cleanText();">
					Limpiar
				</button>
			</div>
			{{ Form::close() }}
			<!--</form>-->
		</div>
	</div>
</div>

	{!! Html::script('assets/js/bootstrap.min.js') !!}
	<script type="text/javascript">
		function cleanText(){
			document.getElementById('entrada').value = "";
			document.getElementById('entrada').innerHTML = "";
		}
	</script>
  </body>
</html>