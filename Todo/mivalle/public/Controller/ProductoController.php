<?php

// Chiphysi programación suscribete 
// V 0.1 original 
// Autor: Chiphysi  Autor: Jhonatan Cardona  
// Derechos de autor(Suscribete)  

session_start();
if(isset($_GET["page"])){
	$page=$_GET["page"];
}else{
	$page=0;
}

require_once '../conexion.php';
require_once '../Factura.php';

switch($page){

	case 1:
		$objfactura = new factura();
		$json = array();
		$json['msj'] = 'factura Agregada';
		$json['success'] = true;
	
		if (isset($_POST['factura_id']) && $_POST['factura_id']!='' && isset($_POST['cantidad']) && $_POST['cantidad']!='') {
			try {
				$cantidad = $_POST['cantidad'];
				$factura_id = $_POST['factura_id'];
				
				$resultado_factura = $objfactura->getById($factura_id);
				$factura = $resultado_factura->fetchObject();
				$descripcion = $factura->descripcion;
				$precio = $factura->precio;
				
				$subtotal = $cantidad * $precio;
				
				$_SESSION['detalle'][$factura_id] = array('id'=>$factura_id, 'factura'=>$descripcion, 'cantidad'=>$cantidad, 'precio'=>$precio, 'subtotal'=>$subtotal);

				$json['success'] = true;

				echo json_encode($json);
	
			} catch (PDOException $e) {
				$json['msj'] = $e->getMessage();
				$json['success'] = false;
				echo json_encode($json);
			}
		}else{
			$json['msj'] = 'Ingrese un servicio y/o ingrese cantidad';
			$json['success'] = false;
			echo json_encode($json);
		}
		break;

	case 2:
		$json = array();
		$json['msj'] = 'Servicio Eliminado';
		$json['success'] = true;
	
		if (isset($_POST['id'])) {
			try {
				unset($_SESSION['detalle'][$_POST['id']]);
				$json['success'] = true;
	
				echo json_encode($json);
	
			} catch (PDOException $e) {
				$json['msj'] = $e->getMessage();
				$json['success'] = false;
				echo json_encode($json);
			}
		}
		break;

}
?>