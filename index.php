<?php
$enlace = mysqli_connect ('localhost:3306',  'user', 'pass');
 
$consulta = "SELECT EAI, AppName FROM dbapps.dbapp";
$result=mysqli_query($enlace, $consulta);
?>
<?php
function ceai(){
if(isset($_POST['submit'])){
// As output of $_POST['Ceai'] is an array we have to use foreach Loop to display individual value
foreach ($_POST['sqllist'] as $select)
{
echo $select."<br>"; }
}
}
?>
<?php
function ceais(){
if(isset($_POST['submit'])){
// As output of $_POST['Ceai'] is an array we have to use foreach Loop to display individual value
foreach ($_POST['sqllist'] as $select)
{
$consulta2 = "SELECT AppName FROM dbapps.dbapp WHERE EAI = '{$EAI}'";
$result2= mysqli_query($enlace, $consulta2);
$row = mysqli_fetch_row($result2);
echo $select." "; }
echo $row['0']."<br>";;
}
}
?>
<?php
function nincide(){
if(isset($_POST['submit'])){
foreach ($_POST['nincide'] as $nincide)
{
echo $nincide."<br>"; }
}
}
?>
<?php
function nproble(){
if(isset($_POST['submit'])){
foreach ($_POST['nproble'] as $nproble)
{
echo $nproble."<br>"; }
}
}
?>
<?php
function lpriori(){
if(isset($_POST['submit'])){
foreach ($_POST['lpriori'] as $lpriori)
{
echo $lpriori."<br>"; }
}
}
?>
<?php
function eincide(){
if(isset($_POST['submit'])){
foreach ($_POST['eincide'] as $eincide)
{
echo $eincide."<br>"; }
}
}
?>
<?php
function ioperat(){
if(isset($_POST['submit'])){
foreach ($_POST['ioperat'] as $ioperat)
{
echo $ioperat."<br>"; }
}
}
?>
<?php
function accurso(){
if(isset($_POST['submit'])){
foreach ($_POST['accurso'] as $accurso)
{
echo $accurso."<br>"; }
}
}
?>
<?php
function ahistor(){
if(isset($_POST['submit'])){
foreach ($_POST['ahistor'] as $ahistor)
{
echo $ahistor."<br>"; }
}
}
?>
<?php
function linvest(){
if(isset($_POST['submit'])){
foreach ($_POST['linvest'] as $linvest)
{
echo $linvest."<br>"; }
}
}
?>
<?php
function finicio(){
if(isset($_POST['submit'])){
foreach ($_POST['finicio'] as $finicio)
{
echo $finicio."<br>"; }
}
}
?>
<?php
function ffin(){
if(isset($_POST['submit'])){
foreach ($_POST['ffin'] as $ffin)
{
echo $ffin."<br>"; }
}
}
?>
<!doctype html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<!-- Minified Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- Minified JS library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Minified Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
		<script src="js/bootstrap-datetimepicker.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
		</script> 
		<script type="text/javascript" src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
		</script>
		<script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
		</script>
		<link rel="stylesheet" href="https://raw.githubusercontent.com/murrigo/Files/master/bootstrap-datetimepicker.min.css">
		<script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
		</script>

		<title>Comunicado Interno</title>
	</head> 

	<body>
   	<div class="container"> <!-- inicio container Formularios -->
			<form action="#" method="post">
				<div class="row">
					<div class="col-12  text-center align-items-center text-uppercase font-weight-bold text-light" style="background-color: MediumAquaMarine"> 
					Comunicado interno
					<br>
					Incident Management
					<br>
        			</div>
				</div>
				<div class="row"> <!-- inicio row 1 form inc prb lprioridad -->
					<div class="col">  # INC<!--Obtener Valor INC-->
						<input name="nincide[]" type="text" ng-model="nincide" class="form-control" placeholder="Ingrese # de Incidente"> 
					</div>
					<div class="col"># PRB<!--Obtener Valor PRB-->
						<input  name="nproble[]" type="text" ng-model="nproble" class="form-control" placeholder="Ingrese # de Problem"> 
					</div>
					<div class="col">lprioridad<!--Obtener Valor formulario lprioridad-->
						<select name="lpriori[]" ng-model="iprio" class="form-control">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select>
					</div>
					<div class="col">Incident State
					<select name="eincide[]" ng-model="eincide" class="form-control" > 
					<option value="Incidente Crítico - En Atención" class="ICri">Incidente Crítico - En Atención </option>
					<option value="Incidente Alto - En Atención" class="IAlt">Incidente Alto - En Atención    </option>
					<option value="Incidente Medio - En Atención" class="IMed">Incidente Medio - En Atención   </option>
					<option value="Incidente Bajo - En Atención" class="IBaj">Incidente Bajo - En Atención    </option>
					<option value="Servicio Restaurado" class="SRes">Servicio Restaurado             </option>
					</select>
					</div>
				</div>
				<div class=row>
					<div class="col-3"><!--Listado de aplicaciones-->
					Aplicacion(es) afectada(s):<br>
						<select name="sqllist[]" multiple> 
						<?php 
						$rows = mysqli_fetch_all ( $result, MYSQLI_ASSOC);
						$names = array_column($rows, 'EAI', 'AppName');
						$sqllist = isset($_POST['submit']) ? $_POST['sqllist'] : [];
						foreach ($rows as $row)
						{
						// If the id for this row is in the sqllist, set the selected attribute
						$selected = in_array($row['EAI'],$sqllist) ? 'selected' : '';
						echo utf8_encode("<option $selected value='" .$row['EAI']."'>".$row['EAI']."  ".$row['AppName']."</option>");
						error_reporting(0);
						}
						?>
						</select>
					</div>
					<div class="col-3">Fecha de Inicio:
						<div id="datetimepicker" class="input-append date">
						<input name="finicio[]" type="text"></input>
						<span class="add-on">
							<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
						</span> 
						<script type="text/javascript">
						$('#datetimepicker').datetimepicker(
						{
						format: 'dd/MM/yyyy hh:mm:ss',
						language: 'es-MX'
						}
						);
						</script>
						</div>
					</div>
					<div class="col-3">Fecha de Fin:
						<div id="datetimepicker2" class="input-append date">
						<input name="ffin[]"type="text"></input>
						<span class="add-on">
							<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
						</span>
						<script type="text/javascript">
						$('#datetimepicker2').datetimepicker(
						{
						format: 'dd/MM/yyyy hh:mm:ss',
						language: 'es-MX'
						}
						);
						</script>
						</div>
					</div>
				</div>
				<div class="row">Impacto Operativo      
				<textarea name="ioperat[]" class="form-control" ng-model="ioperat" value="ioperat" rows="1"></textarea>  
				</div> 
				<div class="row">Acciones en curso
				<textarea name="accurso[]" class="form-control" ng-model="accurso" value="accurso" rows="1"></textarea>  
				</div>  
				<div class="row">Histórico
				<textarea name="ahistor[]" class="form-control" ng-model="ahistor" value="ahistor" rows="1"></textarea>  
				</div>  
				<div class="row"> Lineas de investigación
				<textarea name="linvest[]" class="form-control" ng-model="linvest" value="linvest" rows="1"></textarea>  
				</div>  
				<div class="row">
					<div class="col-sm-10">
					<button type="submit" name="submit" class="btn btn-primary btn-lg">
					<span type="submit" name="submit" class="glyphicon glyphicon-envelope" aria-hidden="false"></span> Agregar
					</button>        
					</div>
				</div>
			</form>
		</div>
		<!-- fin container 1 -->


		<!-- inicio container comunicado --> 
		<div class="container  border border-secondary">    
				<div class="row">
					<div class="col-12  text-right"><br><img src="https://upload.wikimedia.org/wikipedia/en/c/c6/MetLife_logo.svg" > 
					</div>
				</div>
				<div class="row" style="height: 5px;">
					<div class="col align-items-center h-100"> 
					</div>  
				</div> 
				<div class="row"><!--Valor App #Inc lprioridad--> 
					<div class="col-1 align-items-center text-center ">
					<?= ceai();?> 
					</div>
					<div class="col-4 align-items-center">             
					<?php 
					foreach ($sqllist as $EAI) 
					{
					$consulta2 = "SELECT AppName FROM dbapps.dbapp WHERE EAI = '{$EAI}'";
					$result2= mysqli_query($enlace, $consulta2);
					$row = mysqli_fetch_row($result2);
					echo $row['0']."<br>";;
					}
					?>        
					</div>
					<div class="col-1 text-center font-weight-bold text-uppercase"><?= nincide(); ?>
					<?= nproble(); ?>
					</div> 
					<div class="col-5 text-right font-weight-bold text-uppercase">P
					<?= lpriori(); ?>
					</div> 
				</div>
				<div class="row" style="height: 30px;"> <!--Valor Incident State--> 
					<div class="col  align-items-center text-center text-align-middle text-light font-weight-bold  font-size: 16px;";><h4>
					<?= eincide(); ?></h4>
					</div> 
				</div> 
				<div class="row"><!--Etiqueta Estado actual e ioperat--> 
					<div class="col-2 align-items-center text-uppercase  font-weight-bold">Estado Actual e Impacto Operativo:
					</div> 
					<div class="col-8 ">
					<?= ioperat(); ?>
					</div> 
				</div> 
				<div class="row" style="background-color: lightgray;"> <!--Valores de Horas-->
					<div class="col-1 text-right text-uppercase  font-weight-bold">Inicio      
					</div>
					<div class="col-2">
					<?= finicio(); ?>            
					</div>
					<div class="col-1 text-right text-uppercase  font-weight-bold">Fin         
					</div> 
					<div class="col-2"> 
					<?= ffin(); ?>            
					</div> 
					<div class="col-1 text-uppercase  font-weight-bold"> total hrs  
					</div>
					<div class="col                                                                 ">            
					</div> 
				</div>
				<div class="row" style="height: 20px;"><!--espacio en blanco-->
					<div class="col align-items-center h-100"> 
					</div>  
				</div> 
				<div class="row" style="background-color: lightgray;"> <!--Etiqueta Sistemas Afectados--> 
					<div class="col align-items-center text-uppercase font-weight-bold"> Sistemas Afectados  
					</div> 
				</div> 
				<div class="row" style="background-color: lightblue;"> <!--Etiqueta Linea de Negocio EAI Applicacion ioperat-->
					<div class="col-2 align-items-center text-uppercase    font-weight-bold              ">Linea de Negocio  
					</div> 
					<div class="col-1 align-items-center text-uppercase    font-weight-bold  text-center ">EAI               
					</div>
					<div class="col-3 align-items-center text-uppercase    font-weight-bold              ">Applicacion       
					</div>
					<div class="col-5 align-items-center text-uppercase    font-weight-bold              ">Impacto Operativo            
					</div> 
				</div>
				<div class="row"> 
					<div class="col-2 align-items-center">Individual/Public  
					</div>  
					<div class="col-1 align-items-center text-center ">
					<?= ceai();?> 
					</div>
					<div class="col-3 align-items-center">             
					<?php 
					foreach ($sqllist as $EAI)
					{
					$consulta2 = "SELECT AppName FROM dbapps.dbapp WHERE EAI = '{$EAI}'";
					$result2= mysqli_query($enlace, $consulta2);
					$row = mysqli_fetch_row($result2);
					 echo $row['0']."<br>";;
					}
					?>        
					</div>
					<div class="col-5 align-items-center">
					<?php 
					foreach ($sqllist as $EAI)
					{
					$consulta3 = "SELECT Impacto FROM dbapps.dbapp WHERE EAI = '{$EAI}'";
					$result3= mysqli_query($enlace, $consulta3);
					$row = mysqli_fetch_row($result3);
					 echo utf8_encode($row['0']."<br>");
					}
					?>    
					</div> 
				</div>    
				<div class="row" style="background-color: darkgray;"> <!--etiqueta acciones en curso-->
					<div class="col align-items-center font-weight-bold text-uppercase">Acciones en Curso
					</div> 
				</div>   
				<div class="row"> <!--valores comentarios acciones en curso-->
					<div class="col">
					<?= accurso(); ?>
					</div> 
				</div> 
				<div class="row" style="background-color: darkgray;"> <!--Etiqueta historico-->
					<div class="col align-items-center font-weight-bold text-uppercase">Historico
					</div> 
				</div> 
				<div class="row"><!--valores comentarios historicos--> 
					<div class="col">
					<?= ahistor(); ?>
					</div> 
				</div> 
				<div class="row" style="background-color: darkgray;"><!--etiquetas lineas de investigacion-->
					<div class="col align-items-center font-weight-bold text-uppercase">Lineas de investigacion
					</div> 
				</div> 
				<div class="row"> <!--valores lineas de investigacion-->
					<div class="col">
					<?= linvest(); ?>
					</div> 
				</div> 
				<div class="row" style="background-color: lightgray;">  <!--codigo de lprioridad etiqueta-->
					<div class="col text-center">Código de Prioridad
					</div> 
				</div> 
				<div class="row" style="height: 5px;"> <!--espacio en blanco-->
					<div class="col align-items-center h-100"> 
					</div>  
				</div>          
				<div class="row"> <!--codigo de lprioridad por colores-->
					<div class="col text-center text-light font-weight-bold" style="background-color: rgba(255,0,0)  ;">Incidente Crítico  
					</div> 
					<div class="col text-center text-light font-weight-bold" style="background-color: rgba(204,102,0);">Incidente Alto     
					</div>
					<div class="col text-center text-light font-weight-bold" style="background-color: rgba(255,153,0);">Incidente Medio    
					</div>
					<div class="col text-center text-light font-weight-bold" style="background-color: rgba(0,176,240);">Incidente Bajo     
					</div>
					<div class="col text-center text-light font-weight-bold" style="background-color: rgba(0,176,80) ;">Servicio Restaurado
					</div>
				</div>
		</div>
	</body>
</html>