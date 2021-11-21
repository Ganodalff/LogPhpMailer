<?php

require "email.php";
require "txtlogs.php";


	$diretorio = "diretorio";
	$nome_arquivo = "nome arquivo";
	$conteudo ="conteudo"; 	
	$extencao = "txt";					#no momento so funciona em txt 
	$email = "email@email.com";


s_email($email,$nome_arquivo,$conteudo); 
	#1-Email para qual sera enviado. 
	#2- Título do email. 
	#3- Conteudo do email.

create_write($diretorio,$nome_arquivo,$conteudo,$extencao);
	#-1 Nome da pasta
	#-2 Nome do arquivo
	#-3 Conteudo do arquivo
	#-4 Extensão

validate($diretorio,$nome_arquivo,$extencao);
	#-1 Nome da pasta
	#-2 Nome do arquivo
	#-3 Extensão

delete($diretorio,$nome_arquivo,$extencao);
	#-1 Nome da pasta
	#-2 Nome do arquivo
	#-3 Extensão

?>													