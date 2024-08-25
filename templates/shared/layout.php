<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $this->e($title) ?></title>
</head>
<body>
	<?= $this->section('navigation', $this->fetch('shared::navigation')) ?>
	<?= $this->section('heading', $this->fetch('shared::heading', $this->data)) ?>
	<?= $this->section('content') ?>
</body>
</html>
