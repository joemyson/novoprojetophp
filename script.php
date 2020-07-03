<?php

$categorias = [];
$categorias[]='infantil';
$categorias[] ='adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';


// print_r (categorias)





$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){

    echo 'nome não pode ser vazio';
    return;
}


if ($idade >= 6 && $idade <=12){

for ($i=0;$i<= count($categorias);$i++)
{
    if($categorias[$i]=='infantil')
    echo "o nadador ",$nome," compete na categoria ",$categorias[$i];
}



}
else if($idade >= 13 && $idade <=18){

for ($i=0 ;$i<=count ($categorias);$i++){


    if ($categorias[$i]== 'adolescentes'){
        echo " o nadador ",$nome,"compete na categoria ",$categorias[$i];




    }
}
}


?>