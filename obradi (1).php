<?php
$adresa=$_POST['adresa'];
$brmob=$_POST['brmob'];
$kolicina=$_POST['kolicina'];
$margeritha=$_POST['margeritha'];
$capricosa=$_POST['capricosa'];
$mijesana=$_POST['mijesana'];
$slavonska=$_POST['slavonska'];
$velicina=$_POST['velicina'];

$gratisPizza=0;

for($i=1;$i<=$kolicina;$i++){
	if($i%5==0){
		$gratisPizza++;
	}
}



echo "Dobar dan. Naručili ste $kolicina pizza, $margeritha $capricosa $mijesana $slavonska vrste, $velicina veličine na adresu
$adresa. Stiže uskoro. Dobar tek! ";

echo"<br> Dobili ste $gratisPizza gratis pizza.";
?>