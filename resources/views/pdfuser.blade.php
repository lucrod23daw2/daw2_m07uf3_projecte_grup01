<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente PDF</title>
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
    <h1>Dades del client</h1>
    <table>
        <td>DNI</td>
			<td>{{$dades_client->dni_client}}</td>
		</tr>
		<tr>
			<td>Nom i cognoms</td>
			<td>{{$dades_client->nom_cognoms}}</td>
		</tr>
		<tr>
			<td>Edat</td>
			<td>{{$dades_client->edat}}</td>
		</tr>
		<tr>
			<td>Adreça</td>
			<td>{{$dades_client->adreca}}</td>
		</tr>
		<tr>
			<td>Ciutat</td>
			<td>{{$dades_client->ciutat}}</td>
		</tr>
		<tr>
			<td>Pais</td>
			<td>{{$dades_client->pais}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$dades_client->email}}</td>
		</tr>
		<tr>
			<td>Numero de Permis</td>
			<td>{{$dades_client->num_permis_conduccio}}</td>
		</tr>
		<tr>
			<td>Punts de Permis</td>
			<td>{{$dades_client->punts_permis_conduccio}}</td>
		</tr>
        <tr>
			<td>Tipus Tarjeta</td>
			<td>{{$dades_client->tipus_targeta}}</td>
		</tr>
        <tr>
			<td>Numero Tarjeta</td>
			<td>{{$dades_client->num_targeta}}</td>
		</tr>
    </table>
</body>
</html>