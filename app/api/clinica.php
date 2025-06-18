<?php

header("Access-Control-Allow-Origin: *");
// Simulação de dados - depois você vai conectar a um banco de dados
$clinicas = [
  ["id" => 1, "name" => "Clínica Veterinária Popular"],
  ["id" => 2, "name" => "Pet Care Hospital"]
];

echo json_encode($clinicas);
?> 