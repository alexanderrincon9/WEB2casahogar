<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro Mascotas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
<link  rel="stylesheet" href="<?= base_url('public/styles/estilos.css')?>">
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg navbar-light fondo ">
		<div class="container-fluid">
			<a class="navbar-brand fuente" href="#">
				<i class="fas fa-paw"></i>
				Casa Hogar
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="<?=site_url('/productos/registro') ?>">Registro Productos</a>
					</li>	
                    <li class="nav-item">
					<a class="nav-link" href="<?=site_url('/productos/registro') ?>">Tipo Mascota</a>
					</li>			
				</ul>			
			</div>
		</div>
	</nav>
</header>

<div class="container mt-5">
    <div class="row">
        <div class="col-4">
            <h3 class="text-center mb-5">Registro de Animal</h3>		
            <form action="">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Edad:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fotografia:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion"></textarea>
                </div>  
                <label for="exampleFormControlInput1" class="form-label">Tipo Animal:</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">Perro</option>
                    <option value="2">Gato</option>
                    <option value="3">Ave</option>
                    <option value="4">Caballo</option>
                    <option value="5">Reptil</option>
                </select>
                <br>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button">Button</button>
                </div>  

            </form>
                           
        </div>
    </div>
</div>

