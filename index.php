<?php
session_start();

if(isset($_SESSION['contatore']))
{ $_SESSION['contatore'] +=1;

echo("Bentornato, hai visitato questa pagina ".$_SESSION['contatore']. "volte");

}
else
{

	$_SESSION['contatore']= 1;

	echo ("Benvenuto,e la prima volta che visiti la pagina");
}





?>