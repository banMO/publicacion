<?php  
	session_start();
	$UsuarioActivo = $_SESSION['usuario'];

	$CritEliminar = $_POST['CriterioEliminar'];

	include '../Modelo/conexion.php';
						                    
	$conect = new conexion();

	$formularios = "";

	$ResIdC = $conect->consulta("SELECT ID_CRITERIO_C FROM criteriocalificacion WHERE NOMBRE_CRITERIO_C = '$CritEliminar' AND NOMBRE_U = '$UsuarioActivo'");

	$IdC = mysql_fetch_row($ResIdC);

	$ResBuscar = $conect->consulta("SELECT ID_FORM FROM from_crit_c WHERE ID_CRITERIO_C = '$IdC[0]'");

	while ($rowBuscar = mysql_fetch_row($ResBuscar)) {
		
		$Buscar[] = $rowBuscar;
	}


	if (isset($Buscar) and is_array($Buscar)) {

		for ($i=0; $i < count($Buscar) ; $i++) { 

			$BuscarFormulario = $conect->consulta('SELECT NOMBRE_FORM FROM formulario WHERE ID_FORM = '.$Buscar[$i][0].'');

			$NomForm = mysql_fetch_row($BuscarFormulario);

			//$formularios = $formularios.' '.$NomForm[$i][0];		
	
		}

		//var_dump($formularios);

		echo'<script>BootstrapDialog.alert("El Criterio esta un uso por los siguientes formularios:'.$NomForm[0].' primero debe eliminar esos formularios");</script>';
		die();
	
	}

	$EliminarIndicadores = $conect->consulta("DELETE FROM indicador WHERE ID_CRITERIO_C = '$IdC[0]'");

	$EliminarCriterio = $conect->consulta("DELETE FROM criteriocalificacion WHERE ID_CRITERIO_C = '$IdC[0]'");

	if ($EliminarIndicadores and $EliminarCriterio) {

		echo'<script>BootstrapDialog.alert("Se elimino el criterio correctamente");</script>';
		
	}

?>