<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	<meta charset="UTF-8">
	<title>Message</title>
</head>
<body>
	<div class="ui grid">
		<div class="six wide colum">
		</div>
		<h1 class="ui container">HOME PAGE</h1>
		<div class="ui grid">
		<div class="four wide colum"></div>
		<div class="ui segment">
			<form action="/" method="post" class="ui container">
			{{csrf_field()}} 
				<label>AJOUTER MESSAGE: </label>
				<br>
				<br>
				<input type="text" name="message">
				<button class="ui green button" type="submit" name="valide"> Envoyer </button>
			</form>
		</div>
		<div class="ui grid">
		<div class="four wide colum"></div>
		<div class="ui segment">
			<p class="ui container">MESSAGE AFFICHER: </p>
			@foreach($message as $key)
			<p>
				{{$key->id}}  {{$key->description}}
			</p>
			@endforeach
		</div>
	</div>
	</div>
</body>
</html>