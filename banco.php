<?php

require_once 'vendor/autoload.php';

$primeiraConta = new Conta(new Titular(new CPF('316.564.845-65'), 'Carlos Domingos'));

$segundaConta = new Conta(new Titular(new CPF('758.475.812-42'), 'João Pádua'));

$terceiraConta = new Conta(new Titular(new CPF('234.528.653-31'), 'Ana Maria'));

$primeiraConta->deposita(700);
$primeiraConta->saca(300);
$primeiraConta->transfere(200, $segundaConta);


//echo "Nome do titular: " . $primeiraConta->recuperaNomeTitular() . "<br>" . PHP_EOL;
//echo "CPF do titular: " . $primeiraConta->recuperaCpfTitular() . "<br>"  . PHP_EOL;
//echo "Saldo do titular: " . $primeiraConta->recuperaSaldo() . "<br><br>"  . PHP_EOL;

//echo "Nome do titular: " . $segundaConta->recuperaNomeTitular() . "<br>" . PHP_EOL;
//echo "CPF do titular: " . $segundaConta->recuperaCpfTitular() . "<br>"  . PHP_EOL;
//echo "Saldo do titular: " . $segundaConta->recuperaSaldo() . "<br><br>"  . PHP_EOL;

//echo "Nome do titular: " . $terceiraConta->recuperaNomeTitular() . "<br>" . PHP_EOL;
//echo "CPF do titular: " . $terceiraConta->recuperaCpfTitular() . "<br>"  . PHP_EOL;
//echo "Saldo do titular: " . $terceiraConta->recuperaSaldo() . "<br><br>"  . PHP_EOL;

//contas: " . Conta::recuperaNumeroDeContas();

//echo "<pre>";
//var_dump($segundaConta);
//echo "</pre><br>";

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Banco</title>
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/index.css">

	</head>
	<body>

		<header>
			<div class="container">
				<h2 class="titulo">Banco</h2>
			</div>
		</header>
		<main>
			<section class="container">
				<h2>Contas bancárias</h2>
				<label for="filtrar-tabela">Filtre:</label>
				<input type="text" name="filtro" id="filtrar-tabela" placeholder="Digite o nome, o CPF ou o saldo">
				<table>
					<thead>
						<tr>
							<th>Nome</th>
							<th>CPF</th>
							<th>Saldo</th>
						</tr>
					</thead>
					<tbody id="tabela-pacientes">
						<tr class="paciente" id="primeiro-paciente">
							<td class="info-nome"><?php echo $primeiraConta->recuperaNomeTitular(); ?></td>
							<td class="info-peso"><?php echo $primeiraConta->recuperaCpfTitular(); ?></td>
							<td class="info-altura"><?php echo $primeiraConta->recuperaSaldo(); ?></td>
						</tr>

						<tr class="paciente" >
							<td class="info-nome"><?php echo $segundaConta->recuperaNomeTitular(); ?></td>
							<td class="info-peso"><?php echo $segundaConta->recuperaCpfTitular(); ?></td>
							<td class="info-altura"><?php echo $segundaConta->recuperaSaldo(); ?></td>
						</tr>

						<tr class="paciente" >
							<td class="info-nome"><?php echo $terceiraConta->recuperaNomeTitular(); ?></td>
							<td class="info-peso"><?php echo $terceiraConta->recuperaCpfTitular(); ?></td>
							<td class="info-altura"><?php echo $terceiraConta->recuperaSaldo(); ?></td>
						</tr>
					</tbody>
				</table>
			</section>
		</main>

		<script src="js/remover-paciente.js"></script>
		<script src="js/filtro.js"></script>
	</body>
</html>
