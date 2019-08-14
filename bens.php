<!DOCTYPE html>
<html>
<head>
<?php include 'includes.php';?>
<title>STB - Estações</title>

<script>
$(document).ready(function() {
	var element = document.getElementById("li_timetable");
	element.classList.add("active");
});	
</script>
</head>
<?php include 'header.php';?>
<body>
<div class="pb-2 mt-4 mb-4 border-bottom title"><label class="lb-lg">Bens</label><button class="btn btn-primary float-right btn-sm button-new">Criar novo horário</button></div>


<div class="d-flex justify-content-center">
	<table class="table table-striped table-bordered table-hover table-sm table-fit text-center align-middle">
		<thead >
			<tr>
				<th scope="col">Tombamento</th>
				<th scope="col">Incorp</th>
				<th scope="col">Descrição</th>
				<th scope="col">Localização</th>
				<th scope="col">Responsável</th>
				<th scope="col">Aquisição</th>
				<th scope="col">Valor</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">11400549</th>
				<td>0000</td>
				<td>CATRACA ELETROMECÂNICA WJ-09 PPCP CINZA-WOLPAC.DISPLAY COMUN</td>
				<td>AG.NATAL</td>
				<td>COOPE</td>
				<td>25/01/2011</td>
				<td>2.400,00</td>
			</tr>
		</tbody>
	</table>
	</div>	
</body>
<?php include 'footer.php';?>
</html>