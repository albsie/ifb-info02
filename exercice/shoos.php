<?php
$data = [
	[
		'name' => 'Trekkingschue',
		'type' => 'zuknöpfen',
		'sole' => 'outside',
		'min_size' => 32,
		'max_size' => 45,
		'color' => ['red', 'black', 'grey', 'orange'],
		'price' => 35.86,
		'stock' => 56,
		'gender' => 'm'
	],
	[
		'name' => 'Fußballschuhe',
		'type' => 'zuknöpfen',
		'sole' => 'outside',
		'min_size' => 32,
		'max_size' => 47,
		'color' => ['red', 'black', 'blue', 'white', 'grey'],
		'price' => 143.98,
		'stock' => 23,
		'gender' => 'm'
	],
	[
		'name' => 'Laufschuhe',
		'type' => 'zuknöpfen',
		'sole' => 'outside',
		'min_size' => 34,
		'max_size' => 46,
		'color' => ['red', 'black', 'blue', 'white'],
		'price' => 85.75,
		'stock' => 35,
		'gender' => 'm'
	],
	[
		'name' => 'Fitnessschuhe',
		'type' => 'kleben',
		'sole' => 'inside',
		'min_size' => 35,
		'max_size' => 42,
		'color' => ['white', 'blue', 'deeppink'],
		'price' => 37.99,
		'stock' => 5,
		'gender' => 'w'
	],
	[
		'name' => 'Duschschuhe',
		'type' => '',
		'sole' => 'inside',
		'min_size' => 35,
		'max_size' => 48,
		'color' => ['white', 'deeppink'],
		'price' => 9.99,
		'stock' => 158,
		'gender' => 'w'
	],
	[
		'name' => 'Tennisschuhe',
		'type' => 'kleben',
		'sole' => 'inside',
		'min_size' => 32,
		'max_size' => 43,
		'color' => ['white', 'lightgrey', 'deeppink'],
		'price' => 49.99,
		'stock' => 20,
		'gender' => 'w'
	],
	[
		'name' => 'Golfschuhe',
		'type' => 'zuknöpfen',
		'sole' => 'outside',
		'min_size' => 39,
		'max_size' => 46,
		'color' => ['white', 'grey', 'black'],
		'price' => 89.99,
		'stock' => 39,
		'gender' => 'm'
	],
	[
		'name' => 'Handballschuhe',
		'type' => 'zuknöpfen',
		'sole' => 'inside',
		'min_size' => 37,
		'max_size' => 46,
		'color' => ['white', 'grey', 'black', 'blue', 'brown', 'green'],
		'price' => 99.99,
		'stock' => 69,
		'gender' => 'm'
	],
	[
		'name' => 'Skateboardschuhe',
		'type' => 'zuknöpfen',
		'sole' => 'outside',
		'min_size' => 30,
		'max_size' => 42,
		'color' => ['white', 'grey', 'black', 'blue', 'brown', 'green', 'orange'],
		'price' => 112.49,
		'stock' => 178,
		'gender' => 'm'
	],
	[
		'name' => 'Outdoorsandalen',
		'type' => 'kleben',
		'sole' => 'outside',
		'min_size' => 30,
		'max_size' => 45,
		'color' => ['white', 'grey', 'black', 'braun'],
		'price' => 39.99,
		'stock' => 249,
		'gender' => 'm'
	],
	[
		'name' => 'Outdoorsandalen',
		'type' => 'kleben',
		'sole' => 'outside',
		'min_size' => 28,
		'max_size' => 43,
		'color' => ['white', 'grey', 'black', 'braun'],
		'price' => 39.99,
		'stock' => 179,
		'gender' => 'w'
	]
];

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 	<head>
 		<meta charset="utf-8">
 		<title>Schuh Verkauf</title>
		<style media="screen">
			*{
				margin: 0;
				padding: 0;
			}
			h1{
				text-align: center;
				padding: 5vh;
				background-color: skyblue;
				color: white;
				font-weight: bold;
				font-size: 3em;
			}
			.main_container{
				width: 90%;
				margin: 5vh auto;
			}
			table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
td{
	padding: 5px;
	min-width: 8vw;
}
td p{
	padding: 2px 5px;
}
		</style>
 	</head>
 	<body>
 		<h1>Unsere Schuhe im Store</h1>
		<div class="main_container">
			<table>
				<thead>
					<tr>
						<td>Nummer</td>
							<td>Schuh</td>
								<td>Methode</td>
								<td>Typ</td>
								<td>kleinste Größe</td>
								<td>maximal Größe</td>
								<td>Farben</td>
								<td>Preis</td>
								<td>Vorrad</td>
								<td>Mann/Frau</td>
					</tr>
				</thead>
			<tbody>
						<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
			</tbody>
		</table>
		</div>
 	</body>
 </html>
