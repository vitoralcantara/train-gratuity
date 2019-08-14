<!DOCTYPE html>
<html>
<head>
<?php include 'includes.php';?>
<title>STB - Estações</title>
<script>
	$(document).ready(function() {
		var element = document.getElementById("li_users");
		element.classList.add("active");
	});
</script>
</head>
<%@ include file="header.inc"%>
<body>
	<div class="pb-2 mt-4 mb-4 border-bottom title">
		<label class="lb-lg">Alterar rota</label>
		<button class="btn btn-danger float-right btn-sm button-new">Remover
			rota</button>
	</div>

	<div class="col-md-5  justify-content-center titleLike">

		<label class="pb-3">Alterando rota com estação inicial <kbd
				class="bg-dark">Natal</kbd> e estação final <kbd class="bg-dark">Ceará-Mirim</kbd>.
		</label>

		<form action="stations.php">
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-3 col-form-label">Estação
					inicial:</label>
				<div class="col-sm-9">
					<select class="form-control" id="exampleFormControlSelect1">
						<option>Natal</option>
						<option>Parnamirim</option>
						<option>Ceará-Mirim</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-3 col-form-label">Estação
					final:</label>
				<div class="col-sm-9">
					<select class="form-control" id="exampleFormControlSelect1">
						<option>Natal</option>
						<option>Parnamirim</option>
						<option>Ceará-Mirim</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<span class="col-sm-3">
					<button class="btn btn-primary" type="submit">Salvar</button>
				</span> <span class="col-sm-9">
					<button class="btn btn-secondary">Cancelar</button>
				</span>
			</div>
		</form>
	</div>

</body>
<%@ include file="footer.inc"%>
</html>