<?php

   class Velo extends ROOT_Controller{

   	 function __construct()
   	 {  
      	        parent::__construct();
   	 }

	 function  creer($nom, $description)
         {
		$requete = 'INSERT INTO gv_Accessoire VALUES (NULL,"'.$nom.'", "'.$description.'")';
		mysql_query($requete) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	 	//$resultat = $this->db->query($requete) or die(print_r($this->db->errorInfo()));
   	 }


   	 function  supprimer($id){
	 	  $requete = 'DELETE FROM `gv_Accessoire` WHERE `gp_Accessoire`.`id` = '.$id;
                  mysql_query($requete) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
   	 }

   	 function  lireTous(){
 	 	  $requete = 'SELECT * FROM `gv_Accessoire` WHERE 1';
		  $res =  mysql_query($requete) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
		  $rows = array();
		  while($r = mysql_fetch_assoc($res)) 
		  {
    		  	   $rows[] = $r;
	          }
		  print json_encode($rows);
   	 }
	 
	 function lire($id){
	 	  $requete = 'SELECT * FROM `gv_Accessoire` WHERE id='.$id;
                  $res =  mysql_query($requete) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
                  $r = mysql_fetch_assoc($res);
                  print json_encode($r);
	 }

  	 function  modifier($nom,$description,$id){
		$requete = 'UPDATE `gv_Accessoire` SET `nom`='.$nom.',`description`='.$description.' WHERE`gv_Accessoire`.`id` = '.$id;
                  mysql_query($requete) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
   	 }
   }
?>
