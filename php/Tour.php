<?php   
	class Tour extends ROOT_Controller{   

	function __construct()   
	{        	        
		parent::__construct();   
	}	

	function  creer($dateDepart,$dateArrivee,$prix, $type, $parcours,$max)         
	{
		$dateDepart = new DateTime($dateDepart,new DateTimeZone('Europe/Paris'));
		$stringdateDepart = $dateDepart->format(' Y-m-d H:i:s');

		$dateArrivee = new DateTime($dateArrivee,new DateTimeZone('Europe/Paris'));
		$stringdateArrivee = $dateArrivee->format(' Y-m-d H:i:s');

		$requete = 'INSERT INTO gv_Tour VALUES (NULL,"'.$stringdateDepart.'","'.$stringdateArrivee.'","'.$prix.'","'.$type.'","'.$parcours.'","'.$max.'")';	
		echo $requete;
		mysql_query($requete) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());	
		//$resultat = $this->db->query($requete) or die(print_r($this->db->errorInfo()));   
	}   

	function  supprimer($id){	  
		$requete = 'DELETE FROM `gv_Tour` WHERE `gv_Tour`.`id` = '.$id;                  
		mysql_query($requete) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());   
	}   

	function  lireTous(){  
		$requete = 'SELECT * FROM `gv_Tour` WHERE 1';	  
		$res =  mysql_query($requete) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());	  
		$rows = array();	  
		while($r = mysql_fetch_assoc($res)){    	  	   
			$rows[] = $r;	          
		}	  
		print json_encode($rows);   
	}	

	function lire($id){	  
		$requete = 'SELECT * FROM `gv_Tour` WHERE id='.$id;                  
		$res =  mysql_query($requete) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());                  
		$r = mysql_fetch_assoc($res);                  
		print json_encode($r);	
	}  	

	function  modifier($dateDepart,$dateArrivee ,$prix, $type, $parcours,$max, $id){

		$dateDepart = new DateTime($dateDepart,new DateTimeZone('Europe/Paris'));
		$stringdateDepart = $dateDepart->format('Y-m-d H:i:s');
		$dateArrivee = new DateTime($dateArrivee,new DateTimeZone('Europe/Paris'));
		$stringdateArrivee = $dateArrivee->format('Y-m-d H:i:s');

		$requete = 'UPDATE `gv_Tour` SET `dateDepart`=\''.$stringdateDepart.'\',`dateArrivee`=\''.$stringdateArrivee.'\',`prix`='.$prix.',`type`=\''.$type.'\',`parcours`=\''.$parcours.'\',`max`='.$max.' WHERE`gv_Tour`.`id` = '.$id;      
		echo $requete;            
		mysql_query($requete) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());   
	}   
}?> 
