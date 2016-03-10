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
			<div class="row">
				<div class="col-md-12" >
					<textarea id="salida" name="salida" style="width:50%; height:300px; margin: 0 auto; display:block;" disabled>
					    <?= $output ?>
					</textarea>
				</div>
			</div> 
			<br/>
			<div style="margin: 0 auto; text-align:center">
				{!! HTML::link('/', 'Volver', array('class' => 'btn btn-info btn-lg')); !!}
			</div>
		</div>
	</div>
</div>

    {!! Html::script('assets/js/bootstrap.min.js') !!}
  </body>
</html>