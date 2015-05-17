<?php
	mysql_connect("127.0.0.1","root");
	//mysql_connect('localhost','mjaniak','CRSGP','mjaniak');
	mysql_select_db("zdania"); // baza
	
//if(isset($_GET['id'])&&isset($_GET['nazwa'])&&isset($_GET['obrazki'])&&isset($_GET['gatunek'])&&isset($_GET['data'])&&isset($_GET['rezyser'])&&isset($_GET['dobry'])&&$_GET['f']) && $_GET['f']==1)
//if(isset($_GET['data']) && $_GET['f']) && $_GET['f']==1)
if(isset($_GET['data']) && isset($_GET['f']) && $_GET['f']==1)
//if(isset($_GET['f']) && $_GET['f']==1)
{	
	//$dataa=Array();
	//$dataa[] = $_GET['data']);	
	//mysql_query("insert into film(id, nazwa, obrazek, gatunek, data, rezyser, czydobry) values('".$_GET['data[0]']."','".$_GET['data[1]']."','".$_GET['data[2]']."','".$_GET['data[3]']."','".$_GET['data[4]']."',".$_GET['data[5]'].",".$_GET['data[6]'].")")
	//$dataa = json_decode($_GET['data'])
	//var_dump($_GET['data'])
	
	/*mysql_query("insert into film(id, nazwa, obrazek, gatunek, data, rezyser, czydobry) values
	('".$_GET['data[0]'].
	"','".$_GET['data[1]']."','".$_GET['data[2]'].
	"','".$_GET['data[3]']."','".$_GET['data[4]'].
	"',".$_GET['data[5]'].",".$_GET['data[6]'].")");
	*/
	
	mysql_query("insert into film(id, nazwa, obrazek, gatunek, data, rezyser, czydobry) values
	(".$dataa[0].
	",'".$dataa[1]."','".$dataa[2].
	"','".$dataa[3]."','".$dataa[4].
	"',".$dataa[5].",".$dataa[6].")");
	
	//echo json_encode($dataa)
	//mysql_query("insert into film(id, nazwa, obrazek, gatunek, data, rezyser, czydobry) values('".$_GET['&data[0]']."','".$_GET['&data[1]']."','".$_GET['&data[2]']."','".$_GET['&data[3]']."','".$_GET['&data[4]']."',".$_GET['&data[5]'].",".$_GET['&data[6]'].")");
	//INSERT INTO `zdania`.`film` (`id`, `nazwa`, `obrazek`, `gatunek`, `data`, `rezyser`, `czydobry`) VALUES ('3', 'Moon', 'moon.png', 'Sci - fi', '2009', 'Duncan Jones', 'nie');
	//echo("works"); 
} 

if(isset($_GET['f']) && $_GET['f']==0){
	$arr=Array();
	$id=mysql_query("select * from film");
	while($w=mysql_fetch_row($id))
		$arr[]=$w;
	echo json_encode($arr);
}

?>