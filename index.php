<?php 
    require_once("Pessoa.php");
    require_once("Sala.php");

    $pessoa = new Pessoa("Samuel", 32);
    echo "nome:". $pessoa->nome;
    echo "<br>";
    echo "salario:". $pessoa->getSalario();
    echo "<br>";

    $sala = new Sala("Sou-Dev");
    echo "sala:".$sala->nome;
    $sala->alunos[] = $pessoa->nome;
    echo "<br>";
    var_dump($sala->alunos);

    // $pessoa2 = new Pessoa("Bruno", 18);
    // echo $pessoa2->nome;