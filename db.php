<?php
require 'vendor/autoload.php'; // Inclua o autoload do Composer

use MongoDB\Client;


$client = new Client("mongodb+srv://wagner:123@wagner.bt1jzqb.mongodb.net/?retryWrites=true&w=majority&appName=wagner");
$database = $client->selectDatabase('school'); // Seu banco de dados
$collection = $database->selectCollection('students'); // Sua coleção

?>
