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
    <h1>Dades de l'usuari</h1>
    <table>
	<tr>
			<td>Nom</td>
			<td>{{$dades_user->name}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$dades_user->email}}</td>
		</tr>
		<tr>
			<td>Tipus</td>
			<td>{{$dades_user->tipus}}</td>
		</tr>
    </table>
</body>
</html>