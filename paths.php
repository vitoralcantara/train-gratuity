<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<%@ include file="includes.inc"%>
<title>STB - Rotas</title>
<script>
$(document).ready(function() {
	var element = document.getElementById("li_paths");
	element.classList.add("active");
});	
</script>
</head>
<%@ include file="header.inc"%>
<body>

<div class="pb-2 mt-4 mb-4 border-bottom title"><label class="lb-lg">Rotas</label><button class="btn btn-primary float-right btn-sm button-new">Criar nova Rota</button></div>

<div class="d-flex justify-content-center">
	<table class="table table-striped table-bordered table-sm table-hover text-center table-fit2">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Esta��o inicial</th>
				<th scope="col">Esta��o final</th>
				<th scope="col"></th>

			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Natal</td>
				<td>Cear�-Mirim</td>
				<td><button type="button" onclick="location.href='alter-path.php';" class="btn btn-outline-warning btn-sm">Alterar</button></td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Cear�-Mirim</td>
				<td>Natal</td>
				<td><button type="button" onclick="location.href='alter-path.php';" class="btn btn-outline-warning btn-sm">Alterar</button></td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>Natal</td>
				<td>Parnamirim</td>
				<td><button type="button" onclick="location.href='alter-path.php';" class="btn btn-outline-warning btn-sm">Alterar</button></td>
			</tr>
		</tbody>
	</table>
	
	</div>
</body>
<%@ include file="footer.inc"%>
</html>