<?php
// Imposta l'intestazione per la risposta JSON
header('Content-Type: application/json');

// Leggi il file JSON
$data = file_get_contents('data.json');

// Restituisci i dati JSON
echo $data;
