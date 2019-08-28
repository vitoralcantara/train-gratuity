<!DOCTYPE html>
<html>
<head>
<?php include 'includes.php';?>
<title>STB - Estações</title>
</head>
<body>
	<div class="d-flex justify-content-center vertical-center">
	
		<article class="card-body col-md-3 text-center ">
		<div class="marginBottom"><img src="/images/logo_home.png">
	</div>
		
				<h5 class="card-title text-center mb-4 mt-1 ">Acessar o Trem de
				Bolso Natal</h5>
			

			
			<!-- 	<p class="text-success text-center">Mensagem de sucesso</p> -->
			<form action="index.php">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-user"></i>
							</span>
						</div>
						<input name="" class="form-control" placeholder="Login"
							type="email">
					</div>
					<!-- input-group.// -->
				</div>
				<!-- form-group// -->
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-lock"></i>
							</span>
						</div>
						<input class="form-control" placeholder="******" type="password">
					</div>
					<!-- input-group.// -->
				</div>
				<!-- form-group// -->
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Entrar</button>
				</div>
				<!-- form-group// -->
				<p class="text-center">
					<a href="#" class="btn">Esqueceu a senha?</a>
				</p>
			</form>
		</article>
	</div>
</body>
<?php include 'footer.php';?>
</html>