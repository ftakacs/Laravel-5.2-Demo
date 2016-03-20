<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Contato</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
table{
	width: 90%;
}
thead{
	background-color: rgba(5, 111, 182, 0.41);
}
td, th{
	border: solid 1px #ccc;
	text-align: center;
}
tbody tr:nth-child(odd){
	background-color: rgba(120,120,120,0.2);
}
tbody tr:hover{
	background-color: rgba(124,171,255,0.43);
}

</style>
</head>
<body>
	<table>
		<thead>
			<tr><td colspan = "2"><b>Contato</b></td></tr>
		</thead>
		<tbody>
			<tr>
				<td><b>Nome:</b></td>
				<td>{{$input['nome']}}</td>
			</tr>
			
			<tr>
				<td><b>E-mail:</b></td>
				<td>{{$input['email']}}</td>
			</tr>
			
			<tr>
				<td><b>Mensagem:</b></td>
				<td>{{$input['mensagem']}}</td>
			</tr>
		</tbody>
	</table>
</body>
</html>