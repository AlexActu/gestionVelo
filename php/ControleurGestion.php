<?php

	include("Root_Controller.php");
	include("Gestion.php");
 
	if (isset($_REQUEST['fonction']) && $_REQUEST['fonction'] != '')
	{
	    $_REQUEST['fonction']($_REQUEST);
	}
	 
	function getReservation($data)
	{
		$a = new Gestion();
		$res = $a->getReservation($_GET["idTour"]);
	}

	

?>
