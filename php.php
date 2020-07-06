<?php 
    require_once 'pessoa.php'; 
	
	$pessoa1 = new pessoa(); 
    $pessoa1->setnome("Taylor"); 
    $pessoa1->setidade(30); 
    $pessoa1->setpeso(60);  
    $pessoa1->setsexo("Feminino"); 

    require_once 'carro.php'; 
	
	$carro1 = new carro(); 
    $carro1->setmarca("Maserati"); 
    $carro1->setcor("Preto"); 
    $carro1->setplaca("AOA-1313"); 
    $carro1->setmodelo("GranCabrio"); 
	
    require_once 'livro.php'; 

    $livro1 = new livro(); 
    $livro1->settitulo("Lover: A obra prima"); 
    $livro1->setautor("Taylor Swift"); 
    $livro1->setano(2019); 
    $livro1->setedicao("Sétima"); 
    echo "<h4>";
    echo "Nome: ".$pessoa1 -> getnome();
	echo "</br>"; 
	echo "Idade: ".$pessoa1 -> getidade(); 
	echo "</br>"; 
	echo "Peso: ".$pessoa1 -> getpeso();
	echo "</br>"; 
	echo "Sexo: ".$pessoa1 -> getsexo();
	
    echo "</br>";
	echo "</br>"; 
	
    echo "Marca: ". $carro1 -> getmarca(); 
	echo "</br>"; 
	echo "Cor: " . $carro1 -> getcor();
    echo "</br>"; 	
	echo "Placa: " . $carro1 -> getplaca();
    echo "</br>"; 	
	echo "Modelo: " . $carro1 -> getmodelo(); 
	
    echo "</br>"; 
	echo "</br>"; 
	
    echo "Título: ". $livro1 -> gettitulo();
    echo "</br>"; 	
	echo "Autor: " . $livro1 -> getautor();
    echo "</br>"; 	
	echo "Ano: " . $livro1 -> getano();
    echo "</br>"; 	
	echo "Edição: " . $livro1 -> getedicao();
	echo "</h4>";
?>