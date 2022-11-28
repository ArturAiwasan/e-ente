<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="author" content="arbtttrn6" >
<meta name="date" content="2022-11-29T00:01:13+0300" >
<meta name="copyright" content="arbtttrn6">
<meta name="keywords" content="e-ente, tekstigilo, e lingvoj, e jezyki, е языки">
<meta name="description" content="Eigado de teksto">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
</head>
<body>

<table align="center" border="1" cellpadding="1" cellspacing="1" dir="ltr" style="height:400px; width:500px">
	<tbody>
		<tr>
			<td>	<form name="fenestro">
    					<input type="text" name="fontteksto" placeholder="Enigu tekston"/>
    				</form></td>
			<td><?php 
			error_reporting(~0);
			ini_set('display_errors', 1);
		
				if(isset($_GET["fontteksto"])) {
					function anstatauigilo() {
					$simbol1 = array("a", "e", "u", "y", "i", "o", "ä", "ě", "é", "ý", "ů", "í", "ó", "ö", "á", "ë", "ú", "ü", "ô");
					$simbol2 = array("A", "E", "U", "Y", "I", "O", "Ä", "Ě", "É", "Ý", "Ů", "Í", "Ó", "Ö", "Á", "Ë", "Ú", "Ü", "Ô");
					$simbol3 = array("у", "е", "ы", "а", "о", "э", "я", "и","ю");
					$simbol4 = array("У", "Е", "Ы", "А", "О", "Э", "Я", "И","Ю");
					$simbol5 = array("ա", "ե", "է", "ը", "ի", "ո", "օ");
					$simbol6 = array("Ա", "Ե", "Է", "Ը", "Ի", "Ո", "Օ");
					$eligo = str_replace($simbol1, "e", $_GET["fontteksto"]);
					$eligo = str_replace($simbol2, "E", $eligo);
					$eligo = str_replace($simbol3, "е", $eligo);
					$eligo = str_replace($simbol4, "Е", $eligo);
					$eligo = str_replace($simbol5, "ե", $eligo);
					$eligo = str_replace($simbol6, "Ե", $eligo);
					
					echo $eligo;
					}
					anstatauigilo();
				}
				?></td>
		</tr>
	</tbody>
</table>
</body>
</html>
