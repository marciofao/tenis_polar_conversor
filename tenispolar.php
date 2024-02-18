<?php
$res="";

if($_POST){
	
$str=$_POST['texto'];	

$texto=$str;

for($i=0; $i<=strlen($str); $i++){
//pega o char da posição $i	para analisar
	$char=substr($texto,  $i , 1);
	
	
	switch ($char){
			//VERIFICA SE REALMENTE NECESSITA ANALISAR O CHAR :
			case ' ' : break; 
			case ',' : break;
			case '.' : break;
			case '`' : break;
			case '(' : break;
			case ')' : break;
			case '?' : break;
			case '!' : break;
			case ':' : break;
			case '+' : break;
			case '-' : break;
			
		    //MAIUSCULAS
			case 'T': $char='P'; break;
			case 'E': $char='O'; break;
			case 'É': $char='Ó'; break;
			case 'È': $char='Ò'; break;
			case 'Ê': $char='Ô'; break;
			case 'N': $char='L'; break;
			case 'I': $char='A'; break;
			case 'Í': $char='Á'; break;
			case 'Ì': $char='À'; break;
			case 'Ï': $char='Ã'; break;
			case 'Î': $char='Â'; break;
			case 'S': $char='R'; break;
			case 'P': $char='T'; break;
			case 'O': $char='E'; break;
			case 'Ó': $char='É'; break;
			case 'Ò': $char='È'; break;
			case 'Ô': $char='Ê'; break;
			case 'Õ': $char='Ë'; break;
			case 'L': $char='N'; break;
			case 'A': $char='I'; break;
			case 'À': $char='Ì'; break;
			case 'Á': $char='Í'; break;
			case 'Ã': $char='Ï'; break;
			case 'Â': $char='Î'; break;
			case 'R': $char='S'; break;
			//MINUSCULAS
			case 't': $char='p'; break;
			case 'e': $char='o'; break;
			case 'é': $char='ó'; break;
			case 'è': $char='ò'; break;
			case 'ê': $char='ô'; break;
			case 'n': $char='l'; break;
			case 'i': $char='a'; break;
			case 'í': $char='à'; break;
			case 'ì': $char='á'; break;
			case 'ï': $char='ã'; break;
			case 'î': $char='â'; break;
			case 's': $char='r'; break;
			case 'p': $char='t'; break;
			case 'o': $char='e'; break;
			case 'ó': $char='é'; break;
			case 'ò': $char='è'; break;
			case 'õ': $char='ë'; break;
			case 'ê': $char='ê'; break;
			case 'l': $char='n'; break;
			case 'a': $char='i'; break;
			case 'á': $char='í'; break;
			case 'à': $char='ì'; break;
			case 'ã': $char='ï'; break;
			case 'â': $char='î'; break;
			case 'r': $char='s'; break;		
		}
	$res ="".$res."".$char."";
    }

	
	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Conversor Tenis-Polar</title>
</head>

<body>
<form method="post">
<table>
	<tr>
    	<td>Digite o texto depois clique em "Traduzir"</td>
    </tr>
    <tr>
    	<td><textarea rows="7" cols="60" name="texto"><?php echo $res; ?></textarea></td>
    </tr>
    <tr>
    	<td> <input type="submit" value="Traduzir" /> </td>
    </tr>
</table>
</form>

</body>
</html>