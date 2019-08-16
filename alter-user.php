<!DOCTYPE html>
<html>

<head>
	<?php include 'includes.php'; ?>
	<title>STB - Estações</title>
	<script>
		$(document).ready(function() {
			var element = document.getElementById("li_users");
			element.classList.add("active");
		});
	</script>
</head>
<?php include 'header.php'; ?>

<body>
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="pb-2 mt-4 mb-4 border-bottom title">
					<label class="lb-lg">Alterar Permissão de usuário</label>
				</div>

				<div class="justify-content-center titleLike">

					<form>
						<div class="form-group row">
							<label for="staticEmail" class="col-sm-3 col-form-label">Nome:</label>
							<label for="staticEmail" class="col-sm-3 col-form-label">Vitor</label>
						</div>
						<div class="form-group row">
							<label for="inputPassword" class="col-sm-3 col-form-label">Permissão:</label>
							<div class="col-sm-9">
								<select class="form-control" id="exampleFormControlSelect1">
									<option>Coordenação</option>
									<option>Gerência</option>
									<option>Empregado</option>
									<option>Empregado COAFI</option>
								</select>
							</div>
						</div>
						<div class="row">
							<span class="col-sm-3">
								<button class="btn btn-primary" type="submit">Salvar</button>
							</span> <span class="col-sm-9">
								<button onclick="location.href='users.php';" class="btn btn-danger" href="users.php">Cancelar</button>
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
<?php include 'footer.php'; ?>

</html>