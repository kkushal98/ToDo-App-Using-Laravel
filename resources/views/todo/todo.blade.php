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
	@foreach($todos as $todo)
	<li class="list-group-item">{{$todo->body}} 
	<span class="pull-right"> {{$todo->description}} </span>
	</li>
	@endforeach
	</ul>
	</div>
