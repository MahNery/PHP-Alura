<?php

$nomes = "Giovanni, João, Maria, Pedro";

$arrayNomes = explode(", ", $nomes);

foreach($arrayNomes as $nome){
    echo "<p>Oi, $nome.</p>";
};

$nomesJuntos = implode(", ", $arrayNomes);

echo "Olá $nomesJuntos. Sejam bem-vindos.";