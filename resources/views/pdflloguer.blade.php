<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lloguer PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    </head>
<body>
    <h1>Dades del lloguer</h1>
    <table>
	<tr>
			<td>Dni Client</td>
			<td>{{$dades_lloguer->dni_client}}</td>
		</tr>
		<tr>
			<td>Matricula auto</td>
			<td>{{$dades_lloguer->matricula_auto}}</td>
		</tr>
		<tr>
			<td>Data de prèstec</td>
			<td>{{$dades_lloguer->data_prestec}}</td>
		</tr>
		<tr>
			<td>Data de devolució</td>
			<td>{{$dades_lloguer->data_devolucio}}</td>
		</tr>
		<tr>
			<td>Lloc de devolució</td>
			<td>{{$dades_lloguer->lloc_devolucio}}</td>
		</tr>
		<tr>
			<td>Preu per dia</td>
			<td>{{$dades_lloguer->preu_per_dia}}</td>
		</tr>
		<tr>
			<td>Deposit ple al retornar</td>
			<td>{{$dades_lloguer->retorn_deposit_ple}}</td>
		</tr>
		<tr>
			<td>Assegurança</td>
			<td>{{$dades_lloguer->asseguranca}}</td>
		</tr>
    </table>
</body>
</html>