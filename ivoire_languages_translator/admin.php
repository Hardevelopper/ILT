<html>
<head>
<meta charset=utf-8>
<meta name="author" content="sahil kumar">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Mon compte</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="#" method="post">
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Admin</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Ajouter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
  </div>
  </form>
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-primary" type="submit">Search</button>
  </form>
</nav>
<div class="container-fluid">
	<div class="justify-content-center">
	<div class="col-md-10">
		<h3 class="text-center text-dark" md-2>Ivoire Languages Tanslator</h3>
		<hr> 
	</div>
	<div class="row">
	<div class="col-md-4">
	<h3 class="text-center text-info">Enregistrement</h3>
	<form action="#" method="post" enctype="multipart/form-data">
	<div class="form-group">
	<input type="text" name="name" class="form-control" placeholder="Entrez nom et prenoms" required>
	</div>
	<div class="form-group">
	<input type="password" name="password" class="form-control" placeholder="Entrez mot de passe" required>
	</div>
	<div class="form-group">
	<input type="email" name="email" class="form-control" placeholder="Entrez email" required>
	</div>
	<div class="form-group">
	<input type="role" name="role" class="form-control" placeholder="Entrez role" required>
	</div>
	<div class="form-group">
	<input type="file" name="image" class="custom-file">
	</div>
	<div class="form-group">
	<input type="submit" name="enregistrement" class="btn btn-primary" >
	</div>
	</form>
	</div>
	<div class="col-md-8">
	<h3 class="text-center text-info">Enregistrer dans la base de donée</h3>
	<table class="table table-hover">
    <thead>
      <tr>
	  	<td>#</td>
	  	<td>Image</td>
        <td>Nom et prenoms</td>
        <td>Mot de passe</td>
        <td>Email</td>
		<td>Actions</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
		<td><img src="logo.png" alt="image" width="25"></td>
		<td>memel constant</td>
		<td>123passe</td>
		<td>memel@gmail.com</td>
		<td>
		<a href="#" class="badge badge-primary p-2">Detail</a> |
		<a href="#" class="badge badge-danger p-2">Supprimer</a> |
		<a href="#" class="badge badge-success p-2">Modifier</a> |
		</td>
      </tr>
	  <td>2</td>
		<td><img src="logo.png" alt="image" width="25"></td>
		<td>shibuden Naruto</td>
		<td>123passe</td>
		<td>nauto@gmail.com</td>
		<td>
		<a href="#" class="badge badge-primary p-2">Detail</a> |
		<a href="#" class="badge badge-danger p-2">Supprimer</a> |
		<a href="#" class="badge badge-success p-2">Modifier</a> |
		</td>
      </tr>
	  <td>3</td>
		<td><img src="logo.png" alt="image" width="25"></td>
		<td> ball dragon</td>
		<td>123passe</td>
		<td>dragon@gmail.com</td>
		<td>
		<a href="#" class="badge badge-primary p-2">Detail</a> |
		<a href="#" class="badge badge-danger p-2">Supprimer</a> |
		<a href="#" class="badge badge-success p-2">Modifier</a> |
		</td>
      </tr>
    </tbody>
  </table>
	</div>
	</div>
	</div>
</div>
</body>

</htlm>




<?php
	
	$con=mysqli_connect("localhost","root","","ivoire_languages_translator");
	
	if (isset($_POST['Connexion']))
	{
		 $name= $_POST['name'];
		 $password= $_POST['password'];
		 $query ="insert into connexion (name,password) values('$name','$password')";
		 if(mysqli_query($con,$query))
		 {
			 echo "";
		 }
	}

?>

