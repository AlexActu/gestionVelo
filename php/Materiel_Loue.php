<?php

   class Materiel_Loue extends ROOT_Controller{

   	function __construct()   
	{        	        
		parent::__construct();   
	}	

	function  creer($resa,$velo ,$tour,$accessoire)         
	{
		$requete = 'INSERT INTO gv_Materiel_Loue VALUES (NULL,'.$resa.','.$velo.','.$tour.','.$accessoire.')';
		echo $requete;
		mysql_query($requete) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());	
	}   

	function  supprimer($id){	  
		$requete = 'DELETE FROM `gv_Materiel_Loue` WHERE `gv_Materiel_Loue`.`id` = '.$id;                  
		mysql_query($requete) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());   
	}   

	function  lireTous(){  
		$requete = 'SELECT * FROM `gv_Materiel_Loue` WHERE 1';	  
		$res =  mysql_query($requete) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());	  
		$rows = array();	  
		while($r = mysql_fetch_assoc($res)){    	  	   
			$rows[] = $r;	          
		}	  
		print json_encode($rows);   
	}	

	function lire($id){	  
		$requete = 'SELECT * FROM `gv_Materiel_Loue` WHERE id='.$id;                  
		$res =  mysql_query($requete) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());                  
		$r = mysql_fetch_assoc($res);                  
		print json_encode($r);	
	}  	
}
?>
