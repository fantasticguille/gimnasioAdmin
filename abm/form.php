<?php
if($_GET['accion']=='guardar') {
	print_r($_POST);
}
?>
<form action="?accion=guardar" method="post">
<table>
	<tr>
		<td>Descripcion</td>
		<td><input type="text" name="descripcion"/></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit"></td>
	</tr>
</table>
</form>