<?php
require_once("config.php");

function conexao() {
    $conn = new mysqli (HOSTNAME, USERNAME,PASSWORD, DATABASE); //retorna um BOOLEAN ou um objeto mysqli
    return $conn;
}