<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<%@ include file="includes.inc"%>
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
		<label class="lb-lg">Novo usuário</label>
	</div>

	<div class="col-md-4  justify-content-center titleLike">
		
		<form>
			<div class="form-group row">
				<label for="staticEmail" class="col-sm-3 col-form-label">Novo
					nome:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control"
						id="staticEmail" value="Vitor">
				</div>
			</div>
			<div class="form-group row">
				<label for="staticEmail" class="col-sm-3 col-form-label">Nova
					senha:</label>
				<div class="col-sm-9">
					<input type="password" class="form-control"
						id="staticEmail" value="Vitor">
				</div>
			</div>
			<div class="form-group row">
				<label for="staticEmail" class="col-sm-3 col-form-label">Confirme
					senha:</label>
				<div class="col-sm-9">
					<input type="password" class="form-control"
						id="staticEmail" value="Vitor">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-3 col-form-label">Permissão:</label>
				<div class="col-sm-9">
					<select class="form-control" id="exampleFormControlSelect1">
						<option>Total</option>
						<option>Apenas leitura</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
			<span class="col-sm-3">
			<button class="btn btn-primary" type="submit">Criar</button>
			</span>
			<span class="col-sm-9">
			<button class="btn btn-danger" type="submit">Cancelar</button>
			</span>
			</div>
		</form>
	</div>

</body>
<%@ include file="footer.inc"%>
</html>