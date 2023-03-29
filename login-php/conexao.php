<?php
define('HOST', 'db4free.net:3306');
define('USUARIO', 'root_mih');
define('SENHA', '123asd@#');
define('DB', 'mi_locallhost');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');