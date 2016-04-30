<?php 
include 'conexion.php';
$query1='SELECT * FROM area ORDER BY nombre';
$query2='SELECT * FROM proyecto ORDER BY nombre';
if(!$c1=$conexion->query($query1)){
	die($conexion->error);
}
if(!$c2=$conexion->query($query2)){
	die($conexion->error);
}


	echo '<form>';
		echo '<input type="text" id="nombreevento" placeholder="Escribe el Nombre de tu Evento"><br><br>';
		echo '<textarea id="descripcionevento" placeholder="Escribe una Descripcion" style="margin: 0px; width: 344px; height: 151px;"></textarea><br><br>';
		echo '<input type="text" id="Fechainicioevento" placeholder="Fecha de inicio"><br><br>';
		echo '<select>';
			echo '<option value="0">Escoje el proyecto al que pertenesera tu evento</option>';
			while($r2=$c2->fetch_array()){
				echo '<option class="proyectoevento" value="'.$r2['idproyecto'].'">'.$r2['nombre'].'</option>';
			}
		echo '</select><br><br>';
		echo '<select>';
			echo '<option value="0">Escoje la area al que pertenesera tu evento</option>';
			while($r1=$c1->fetch_array()){
				echo '<option class="areaevento" value="'.$r1['idarea'].'">'.$r1['nombre'].'</option>';
			}
		echo '</select><br><br>';
		echo '<button id="aceptarevento">Registrar</button>';
	echo '</form>';
?>