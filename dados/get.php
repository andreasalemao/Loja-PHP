<?php
function getHome(){
	$url = $_GET['url'];
	$url = explode('/', $url);
	$url[0] = ($url[0] == NULL ? 'home' : $url[0]);
	
		if(file_exists('theme/'.$url[0].'.php')){
			 require_once('/theme/'.$url[0].'.php');
		}elseif(file_exists('theme/'.$url[0].'/'.$url[1].'.php')){
			 require_once('/theme/'.$url[0].'/'.$url[1].'.php');
		}else{
			 require_once('theme/404.php');
		}
}

function getPainel(){
	$url = $_GET['url'];
	$url = explode('/', $url);
	$url[0] = ($url[0] == NULL ? 'dashboard' : $url[0]);
	
		if(file_exists('pagina/'.$url[0].'.php')){
			 require_once('/pagina/'.$url[0].'.php');
		}elseif(file_exists('pagina/'.$url[0].'/'.$url[1].'.php')){
			 require_once('/pagina/'.$url[0].'/'.$url[1].'.php');
		}else{
			 require_once('theme/404.php');
		}
}

function siteNome(){
	echo SITENAME;
}

function setHome(){
	echo BASE;
}

function painelNome(){
	echo PAINELADM;
}

function setPainel(){
	echo PAINEL;
}

?>