<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>single path - PT</title>
</head>
<body>

<div id="container">
	<h1>CodeIgniter</h1>
	<h2>Przemysław Tomasiewicz</h2>
	<hr>
	<?php $count = 0; foreach ($categories as $category) { ?>
		<?php if($count != 0) { echo '->'; } ?>
		<?= $category->name ?>
	<?php $count++; } ?>
</div>

</body>
</html>