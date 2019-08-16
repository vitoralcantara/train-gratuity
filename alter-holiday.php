<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<%@ include file="includes.inc"%>
<title>STB - Esta��es</title>
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
		<label class="lb-lg">Alterar esta��o</label>
		<button class="btn btn-danger float-right btn-sm button-new">Remover esta��o</button>
	</div>

	<div class="col-md-4  justify-content-center titleLike">

		<label class="pb-3">Alterando esta��o <kbd class="bg-dark">Alecrim I</kbd>.</label>
		
		<form action="bens-confirmar.php">
			<div class="form-group row">
				<label for="staticEmail" class="col-sm-3 col-form-label">Novo
					nome:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control"
						id="staticEmail" value="">
				</div>
			</div>
			<div class="form-group row">
			<span class="col-sm-3">
			<button class="btn btn-primary" type="submit">Salvar</button>
			</span>
			<span class="col-sm-9">
			<button class="btn btn-secondary">Cancelar</button>
			</span>
			</div>
		</form>
	</div>

</body>
<%@ include file="footer.inc"%>
</html>