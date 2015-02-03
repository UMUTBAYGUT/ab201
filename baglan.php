<?php



try{
	
	$db = new PDO('mysql:host=localhost;dbname=ab2015php;charset=utf8', 'root', 'root');
}catch(PDOException $e){
	
	echo $e->getLine();
}

echo "adasdsa";

?>
