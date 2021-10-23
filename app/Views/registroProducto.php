<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro Productos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
<link  rel="stylesheet" href="<?= base_url('public/styles/estilos.css')?>">
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg navbar-light fondo">
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
            <h3 class="text-center mb-5">Registro de Productos</h3>	

            <form action="<?= site_url('/productos/registro/nuevo')?>" method="POST">
            <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Producto:</label>
                    <input type="text" class="form-control" id="producto" name="producto">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fotografia:</label>
                    <input type="text" class="form-control" id="foto" name="foto">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Precio Unidad:</label>
                    <input type="text" class="form-control" id="precio" name="precio">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"></label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Descripcion"></textarea>
                </div>  
                <label for="exampleFormControlInput1" class="form-label">Tipo Animal:</label>
                <select class="form-select" aria-label="Default select example" id="tipo" name="tipo">
                    <option value="1">Perro</option>
                    <option value="2">Gato</option>
                    <option value="3">Ave</option>
                    <option value="4">Caballo</option>
                    <option value="5">Reptil</option>
                </select>
                <br>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Button</button>
                </div>  

            </form>
                           
        </div>
    </div>
</div>
<section>
    <?php if(session('mensaje')): ?>
    <!-- Modal -->
        <div class="modal fade" id="modal">
            <div class="modal-dialog">
                 <div class="modal-content">
                    <div class="modal-header fondo text-white">
                        <h5 class="modal-title">Casa Hogar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5><?=session('mensaje')?></h5>            
                    </div>
                </div>
            </div>
        </div>
        <?php unset($_SESSION['mensaje']); ?>
    <?php endif?>
</section>




<script type="module" src="<?= base_url('public/js/lanzarmodal.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>