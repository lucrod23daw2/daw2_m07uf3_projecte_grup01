<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto PDF</title>
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
    <h1>Dades de l'auto</h1>
    <table>
        <tr>
		    <td>Matricula</td>
			<td>{{$dades_auto->matricula_auto}}</td>
		</tr>
		<tr>
			<td>Número de Bastidor</td>
			<td>{{$dades_auto->num_bastidor}}</td>
		</tr>
		<tr>
			<td>Marca</td>
			<td>{{$dades_auto->marca}}</td>
		</tr>
		<tr>
			<td>Model</td>
			<td>{{$dades_auto->model}}</td>
		</tr>
		<tr>
			<td>Color</td>
			<td>{{$dades_auto->color}}</td>
		</tr>
		<tr>
			<td>Nº de Places</td>
			<td>{{$dades_auto->places}}</td>
		</tr>
		<tr>
			<td>Nº de Portes</td>
			<td>{{$dades_auto->portes}}</td>
		</tr>
		<tr>
			<td>Mides Maleter</td>
			<td>{{$dades_auto->gran_maleter}}</td>
		</tr>
		<tr>
			<td>Tipus de Combustible</td>
			<td>{{$dades_auto->combustible}}</td>
		</tr>
    </table>
</body>
</html>