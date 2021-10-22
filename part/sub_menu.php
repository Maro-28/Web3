<div class="btn-container">
	<a href="index.php?page=tienda&action=tienda&categoria=&subcategoria=" class="btn btn-info">Limpiar Filtros</a>
	<?php
	$arrayCategoria = json_decode(file_get_contents('../array/categoria.json'), TRUE);
	foreach ($arrayCategoria as $categoria) {
	?>
		<a class="btn btn-info" href="index.php?page=tienda&action=tienda&categoria=<?php echo $categoria['id'] ?>&subcategoria=<?php echo (	isset($_GET['subcategoria']))?$_GET['subcategoria']:"";?>"> <?php echo $categoria['categoria'] ?> </a>
	<?php
	}
	?>
</div>
<div class="btn-container">
		<?php
	$arraysubcategoria = json_decode(file_get_contents('../array/subCategoria.json'), TRUE);
	foreach ($arraysubcategoria as $subcategoria) {
	?>
		<a class="btn btn-info" href="index.php?page=tienda&action=tienda&subcategoria=<?php echo $subcategoria['id'] ?>&categoria=<?php echo (	isset($_GET['categoria']))?$_GET['categoria']:"";?>"> <?php echo $subcategoria['subcategoria'] ?> </a>
	<?php
	}
	?>
</div>