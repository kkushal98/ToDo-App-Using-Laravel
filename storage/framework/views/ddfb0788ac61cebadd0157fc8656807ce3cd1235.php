<!DOCTYPE html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>

<style>


.pull-right{
	float:right;
}
</style>	
	<br>
	<div class="col-lg-4 col-lg offset-4">
	<center> <h1>Todo List </h1> </center>
	<!-- <ul class="todolist"> -->
	


	<ul class="list-group">
	<?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<li class="list-group-item"><?php echo e($todo->body); ?> 
	<span class="pull-right"> <?php echo e($todo->description); ?> </span>
	</li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
	</div>
