<!DOCTYPE html>
<html>

<head>
	<?php include 'includes.php'; ?>
	<title>Enviar TBP</title>
	<script>
		$(document).ready(function() {
			var element = document.getElementById("li_users");
			element.classList.add("active");
		});
	</script>
</head>
<?php include 'header.php'; ?>

<body>
	<div class="pb-2 mt-4 mb-4 border-bottom title">
		<label class="lb-lg">Enviar TBP</label>
		<!--		<button class="btn btn-danger float-right btn-sm button-new">Remover horário</button> -->
	</div>

	<div class="col-md-8  justify-content-center titleLike">

		<div class="col-md-10">
			<form action="index.php">
				<div class="form-group border rounded">
						<label for="inputPassword" class="col-sm-3 col-form-label">Tombamento:</label><label for="inputPassword" class="col-sm-9 col-form-label">11400549</label>
						<label for="inputPassword" class="col-sm-3 col-form-label">Incorp:</label><label for="inputPassword" class="col-sm-9 col-form-label">0000</label>
						<label for="inputPassword" class="col-sm-3 col-form-label">Descrição:</label><label for="inputPassword" class="col-sm-9 col-form-label">CATRACA ELETROMECÂNICA WJ-09 PPCP CINZA-WOLPAC.DISPLAY COMUM</label>
						<label for="inputPassword" class="col-sm-3 col-form-label">Localização:</label><label for="inputPassword" class="col-sm-9 col-form-label">AG. NATAL</label>
						<label for="inputPassword" class="col-sm-3 col-form-label">Responsável:</label><label for="inputPassword" class="col-sm-9 col-form-label">COOPE</label>
						<label for="inputPassword" class="col-sm-3 col-form-label">Aquisição:</label><label for="inputPassword" class="col-sm-9 col-form-label">25/01/2011 </label>
						<label for="inputPassword" class="col-sm-3 col-form-label">Valor:</label><label for="inputPassword" class="col-sm-9 col-form-label">2.400,00</label>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-3 col-form-label">Órgão de destino:</label>
					<div class="col-sm-3">
						<select class="form-control" id="exampleFormControlSelect1">
							<option>COAFI</option>
							<option>COPLA</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<span class="col-sm-3">
						<button class="btn btn-primary" type="submit">Enviar </button>
					</span> <span class="col-sm-9">
						<button class="btn btn-secondary">Cancelar</button>
					</span>
				</div>
			</form>
		</div>
	</div>

</body>
<?php include 'footer.php'; ?>

</html>