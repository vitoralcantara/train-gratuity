<!DOCTYPE html>
<html>
<head>
<%@ include file="includes.inc"%>
<title>STB - Feriados</title>
<script>
$(document).ready(function() {
	var element = document.getElementById("li_holidays");
	element.classList.add("active");
});	
</script>
</head>
<%@ include file="header.inc"%>
<body>
<div class="pb-2 mt-4 mb-4 border-bottom title"><label class="lb-lg">Feriados</label><button onclick="location.href='alter-station.php';"  class="btn btn-primary float-right btn-sm button-new">Adicionar feriado</button></div>

<div class="d-flex justify-content-center">
	<table class="table table-striped table-bordered table-hover table-fit2 table-sm text-center align-middle">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Feriado</th>
				<th scope="col">Descri��o</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td><h5>19/04/2019</h5></td>
				<td>Paixão de Cristo</td>
				<td><button type="button" onclick="location.href='alter-holiday.php';" class="btn btn-outline-warning btn-sm">Alterar</button></td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td><h5>21/04/2019</h5></td>
				<td>Tiradentes</td>
				<td><button type="button" onclick="location.href='alter-holiday.php';" class="btn btn-outline-warning btn-sm">Alterar</button></td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td><h5>01/05/2019</h5></td>
				<td>Dia Mundial do Trabalho</td>
				<td><button type="button" class="btn btn-outline-warning btn-sm">Alterar</button></td>
			</tr>
		</tbody>
	</table>
	</div>
</body>
<%@ include file="footer.inc"%>
</html>