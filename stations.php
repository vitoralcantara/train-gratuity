<!DOCTYPE html>
<html>
<head>
<%@ include file="includes.inc"%>
<title>STB - Estações</title>
<script>
$(document).ready(function() {
	var element = document.getElementById("li_stations");
	element.classList.add("active");
});	
</script>
</head>
<%@ include file="header.inc"%>
<body>
<div class="pb-2 mt-4 mb-4 border-bottom title"><label class="lb-lg">Esta��es</label><button class="btn btn-primary float-right btn-sm button-new">Criar nova Esta��o</button></div>

<div class="d-flex justify-content-center">
	<table class="table table-striped table-bordered table-hover table-sm table-fit2 text-center align-middle">
		<thead >
			<tr>
				<th scope="col">#</th>
				<th scope="col">Estação</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Natal</td>
				<td><button type="button" onclick="location.href='alter-station.php';"  class="btn btn-outline-warning btn-sm">Alterar</button></td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Alecrim I</td>
				<td><button type="button" onclick="location.href='alter-station.php';" class="btn btn-outline-warning btn-sm">Alterar</button></td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>Quintas</td>
				<td><button type="button" onclick="location.href='alter-station.php';" class="btn btn-outline-warning btn-sm">Alterar</button></td>
			</tr>
		</tbody>
	</table>
	</div>
</body>
<%@ include file="footer.inc"%>
</html>