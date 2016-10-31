<html>
<head>
	<title>clase08</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	
	<script type="text/javascript" src="js/funciones.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
	<table>
		<tr>
			<td>
				<div id="frmIngreso" class="widget clearfix">
					<h2 class="form-ingreso-heading">Ingrese sus datos</h2>
					<input type="text" id="user" placeholder="User" class="form-control" value="<?php if(isset($_COOKIE["registro"])){ echo $_COOKIE["registro"];} ?>"/>
					<input tpye="password" id="pass" placeholder="Pass" class="form-control"/>		
					<input type="button" onclick="Ingresar()" value="Ingresar" class="btn">
					<div id="test"></div>
				</div>
				
			</td>
		</tr>
	</table>

	
</body>
</html>