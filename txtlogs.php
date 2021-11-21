<?php
function create_write($dir,$nome,$conteudo,$extencao){
	
	$extencao = preg_replace('/[.]/','',$extencao);
	if (file_exists($dir)){
		$teste = fopen($dir."/".$nome.".".$extencao,'a');
		if ($teste == false){
			die ("Nao foi possivel criar <br>");
		}else{
			$nome = $teste;
			fwrite($teste, $conteudo."\n");
			fclose($teste);
			echo "escrito com sucesso <br>";
		}
	}else{
		mkdir($dir);
		if(file_exists($dir)){
			$teste = fopen($dir."/".$nome.".".$extencao,'a');
			if ($teste == false){
				die ("Nao foi possivel criar <br>");
			}else{
				$nome = $teste;
				fwrite($teste, $conteudo."\n");
				fclose($teste);
				echo "escrito com sucesso <br>";
			}
		}
		else{
			die("Não foi possivel criar a pasta verifique as informações");
		}
	}
}
function validate($dir,$arquivo,$extencao){ #sempre vai esperar o nome do arquivo

	if(file_exists("$dir/$arquivo.$extencao")){
		echo "Existe <br>";
	}else{
		echo "Pasta ou arquivo inexistente <br>";
	}
}
function delete($dir,$arquivo,$extencao){  #sempre vai esperar o nome do arquivo
	
	if(file_exists("$dir/$arquivo.$extencao")){
		unlink("$dir/$arquivo.$extencao");
		echo "Excluido com sucesso <br>";
	}else{
		echo "Arquivo nao existe! <br>";
	}
}
?>