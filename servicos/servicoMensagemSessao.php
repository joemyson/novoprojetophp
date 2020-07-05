<?php
session_start();

function setarMensagemDeErro(string mensagem):void
{

$_SESSION['mensagem de erro']= $mensagem;


}
function obterMensagemErro():simplexml_load_string
{

    if(isset($_SESSION['mensagem de erro']))
    return $_SESSION['mensagem de erro'];
    return null;
}