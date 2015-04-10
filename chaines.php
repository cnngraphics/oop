<?php

$s="hello Theo";
$t= 'you are';
$u= 39;

//echo $s, $t, $u,', that\'s old';

echo '<br>';

$version = 5 ;
$miroir = 'fr' ;
//$masque = 'PHP %d est disponible sur http://%s.php.net' ;
//printf($masque, $miroir,  $version) ;

echo '<br>';echo '<br>';


if (!isset($_POST['submit'])){
	echo"
			<form method=\"POST\" action=\"\">
			<input type='text' value='59' name='version'><br>
			<input type='text' value='google.com' name='url'><br>
			<select value='' name='langue'>
				<option name= 'Francais'>Fracais</option>
				<option name='Anglais'>Anglais</option> 
			</select>
			<br>
			<input type='submit' value='submit' name='submit'><br>
			
			</form>
			";
}
else {
	//print_r($_POST);
	echo '<br>';echo '<br>';
	$version = $_POST['version'];
	$url= $_POST['url'];
	$masque = 'This PHP version %s can be found at %s';
	printf($masque, $version, $url);
	
	
	echo "<br>";
	echo "<a href='?'>Reload</a>";
}
echo "<br>";
echo "<br>";



//$langue = $_COOKIE['langue'];
$cookie_name="langue";
$cookie_value="en";
 
setcookie($cookie_name, $cookie_value );

$fr = '%d est la version de %s' ;
$en = '%d is %s’s version' ;
if ($_COOKIE['langue'] =='en')
{
	printf($en, 5, 'PHP') ;
}else{
	printf($fr, 5, 'PHP') ;
}