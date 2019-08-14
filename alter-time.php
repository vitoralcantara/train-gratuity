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
		<label class="lb-lg">Alterar hor�rio</label>
		<button class="btn btn-danger float-right btn-sm button-new">Remover
			hor�rio</button>
	</div>

	<div class="col-md-8  justify-content-center titleLike">

		<label class="pb-3">Alterando hor�rio <kbd class="bg-dark">06:48</kbd>
			da esta��o <kbd class="bg-dark">Natal</kbd> com esta��o inicial <kbd
				Natal class="bg-dark">Natal</kbd> e esta��o final <kbd
				class="bg-dark">Cear�-Mirim</kbd>, v�lido de <kbd>segunda-feira</kbd>
			a <kbd>s�bado</kbd>.
		</label>

		<div class="col-md-7">
			<form action="stations.php">
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-3 col-form-label">Esta��o:</label>
					<div class="col-sm-9">
						<select class="form-control" id="exampleFormControlSelect1">
							<option>Natal</option>
							<option>Parnamirim</option>
							<option>Cear�-Mirim</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-3 col-form-label">Rota:</label>
					<div class="col-sm-9">
						<select class="form-control" id="exampleFormControlSelect1">
							<option>Natal -> Cear�-Mirim</option>
							<option>Cear�-Mirim -> Natal</option>
							<option>Natal -> Parnamirim</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-3 col-form-label">Hora:</label>
					<div class="col-sm-3">
						<input type="time" class="form-control" id="staticEmail"
							value="Vitor">
					</div>
				</div>
				<div class="form-group row ">
					<label for="staticEmail" class="col-sm-3 col-form-label">Dias da semana:</label>
					<div class="weekDays-selector2 for-check col-sm-9">
						<input type="checkbox" checked disabled id="weekday-mon2" class="weekday" /> 
						<label for="weekday-mon2">Seg</label> 
						
						<input type="checkbox" checked id="weekday-tue2" class="weekday" /> 
						<label for="weekday-tue2">Ter</label> 
						
						<input type="checkbox" checked id="weekday-wed2" class="weekday" /> 
						<label for="weekday-wed2">Qua</label> 
						
						<input type="checkbox" checked id="weekday-thu2" class="weekday" /> 
						<label for="weekday-thu2">Qui</label>
						
						<input type="checkbox" checked id="weekday-fri2" class="weekday" /> 
						<label for="weekday-fri2">Sex</label> 
						
						<input type="checkbox" checked id="weekday-sat2" class="weekday" /> 
						<label for="weekday-sat2">S�b</label>
						
						<input type="checkbox" id="weekday-sun2" class="weekday" /> 
						<label for="weekday-sun2">Dom</label>
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
	</div>

</body>
<%@ include file="footer.inc"%>
</html>