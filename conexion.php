<?php	
		
		
    /*Conectarse a la base de datos con PHP*/

    include("datos.php");

    $conexion = mysqli_connect($servidor, $usuario, $pass) or die ("¡Fallo en la conexion! ¡Imposible conectarse a la BD!");

    print ("Conexion realizada con exito\n");

    $db = mysqli_select_db($conexion,$basededatos) or die ("¡No se ha podido seleccionar la base de Datos");

    echo  "<br>";
    print ("\nBase de datos seleccionada");










        

		/*
        $consulta = "SELECT mercancia.nombre, modelo, existencia, precioVenta, precioCompra, almacen, marca.nombre
            from mercancia
            inner join marca
            on mercancia.idMarca = marca.idMarca;";
        $resultadoPrueba = $mysql_query ($consulta)
            or die ("Consulta fallida");





		$venta = "SELECT id, paterno, materno, nombre, colonia, calle, numExt, numInt, telefono, correo, cantidad, producto, precio FROM orden ORDER BY id DESC LIMIT 1";
		
			mysqli_query($conexion,"insert into orden 
			(paterno,materno,nombre,colonia,calle,numExt,numInt,telefono,correo,cantidad,producto,precio)
			values 
			('$_POST[paterno]','$_POST[materno]','$_POST[nombre]','$_POST[colonia]','$_POST[calle]','$_POST[numExt]','$_POST[numInt]','$_POST[telefono]','$_POST[correo]',
			'$_POST[cantidad]','$_POST[producto]','$_POST[precio]')");
			
			echo  '<center><h1>Datos personales </h1></center>';
			$paterno = $_POST['paterno'];
			$materno = $_POST['materno'];
			$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
			$colonia = $_POST['colonia'];
			$calle = $_POST['calle'];
			$numExt = $_POST['numExt'];
			$numInt = $_POST['numInt'];
			$telefono = $_POST['telefono'];
			$producto = $_POST['producto'];
			$cantidad = $_POST['cantidad'];
			$precio= $_POST['precio'];

			$total = $cantidad * $precio;

			echo '<br>';
			echo '<p> Nombre: '.$paterno.' '.$materno. ' '. $nombre. '</p>'; 
			echo '<p> Correo: '.$correo. '</p>';
			echo '<p> Colonia: ' .$colonia. '</p>';
			echo '<p> Calle: ' .$calle. '</p>';
			echo '<p> N° Exterior: ' .$numExt. '</´p>';
			echo '<p> N° Interior: ' .$numInt. '</p>';
			echo '<p> Telefono: ' .$telefono.'</p>';


$resultado = mysqli_query($conexion, $venta) or die ("Error en consulta de datos");
	
	echo "<center> <table border= '0'>";
	echo 	"<tr>";
	echo 		"<th> <h3> <center> Comprobante de Compra </h3></center></th>";
	echo 	"</tr>";
	
	while($columna = mysqli_fetch_array($resultado))
	{
		echo "<tr>";
		echo 	"<td><center>" .$columna['id']. "</td></center>";
		echo "</tr>";
	}
	echo "</table> </center> ";
			echo '<p> Producto: ' .$producto.'</p>';			
			echo '<p> Cantidad: ' .$cantidad. '</p>'; 
			echo '<p> Precio: $' .$precio.'</p>';
			echo '<p> Total a pagar: $' .$total. '</p>';
			echo '<br>';
			echo '<br>';
	
	mysqli_close($conexion);
	*/
	?>