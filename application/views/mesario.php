<!DOCTYPE html>
<html lang="pt_br">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        
		<meta name="author" content="">
		<meta name='description' content=''>
		<meta name='keywords' content=''>
        
        <link rel="shortcut icon" type="image/x-icon" href="" title="" >
        <title> IAP - Mesario </title>
                         
        <link rel="stylesheet" type="text/css" href="<?= base_url("css/bootstrap.css")?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url("css/urna.css")?>">
        	
        <script src="<?= base_url("js/jquery-2.1.3.min.js")?>"></script>
        <script src="<?= base_url("js/jquery.cookie.js")?>"></script>
        <script src="<?= base_url("js/bootstrap.js")?>"></script>
	</head>
	<body>
		<header>
			<span>Eleições 2015</span>
		</header>
		<section class="container">
			<header>
				<h1>Eleições 2015</h1>
			</header>
			<article>
				<div class="row">
					<div class="col-md-3">
						<div class="bg-info"><img src="<?= base_url("img/candidatos/foto_2.jpg")?>" alt="..." class="img-responsive img-circle"></div>
						<div class="bg-info">STATUS</div>
					</div>
					<div class="col-md-9">
						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon1">@</span>
							<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
							<button>Buscar</button>
						</div>
						<ul class="list-group text-left">
							<li class="list-group-item">REGISTRO<span class="badge">REGISTRO</span></li>
							<li class="list-group-item">
								<span class="badge">NOME</span>
								JOÃO
							</li>
							<li class="list-group-item">
								<span class="badge">REGIÃO</span>
								REGIÃO
							</li>
							<li class="list-group-item">
								<span class="badge">CARGO</span>
								CARGO
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default btn-disabled" disabled="disabled">EDITAR CANDIDATO</button>
						<button type="button" class="btn btn-default" disabled="disabled">INICIAR VOTAÇÃO</button>
					</div>
				</div>				
			</article>
		</section>
		<footer>
			
		</footer>
	</body>
</html>