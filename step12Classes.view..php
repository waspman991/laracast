<!DOCTYPE html>
<html>

<head>
	
<meta charset="UTF-8">

<title>Document</title>

	<style>
		
		header{

			background: #e3e3e3;

			padding: 2em;

			text-align: center;

		}

	</style>

</head>

<body>
	
	<header>
		
		<h1>
			

		</h1>

	</header>

<ul>
	
	<?php foreach ($tasks as $task) :?>
		<li>
		<?php if($task->completed) :?>
			<strike> <?= $task->description; ?> </strike>
		<?php else :?>
				<?= $task->description; ?>
		<?php endif ;?>

		</li>
	<?php endforeach; ?>
</ul>

</body>

</html>





</body>