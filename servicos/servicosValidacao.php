<?php

function validaNome( string $nome):bool

{
if(empty($nome)){

$_SESSION['mensagem de erro']= 'nome não pode ser vazio';

return false;


}
else if (strlen($nome)<3)
{

$_SESSION['mensagem de erro']= 'nome não pode conte menos de 03 caracteres';

return false;


}
else if (strlen($nome)>40)
{

$_SESSION['mensagem de erro']= 'nome não pode conte mais de 40 caracteres';

return false;


}
}
{
    return true;
}

function validaIdade():bool
{


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
{
    return true;
}
}
?>