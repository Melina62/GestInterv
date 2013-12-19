<?php
   class clstBaseMysql
   {   		
      	private $id;		// identifiant de la connexion
		private $Serveur ;  // nom de l'h�te
      	private $Bdd;   	// Le nom de la base de donn�es
      	private $User;    	// Le nom d'utilisateur
      	private $Mdp;		// Le mot de passe

 	   // Constructeur de la classe
  	    public function __construct($pServeur,$pUser,$pMdp,$pBdd)
		{
         	$this->Serveur = $pServeur;
         	$this->Bdd     = $pBdd;
         	$this->User    = $pUser;
         	$this->Mdp     = $pMdp;         	
           	$this->id 	   = $this->connect($pServeur, $pUser, $pMdp);
			$this->selectBdd($pBdd);
        }
        
        // se connecter � la base de donn�es MySQL
       	private function connect($pServeur, $pUser, $pMdp)
		{
        	$res = mysql_connect($pServeur, $pUser, $pMdp) or die("Erreur de connexion � MySql");
        	return ($res) ;
        }
 		
		// s�lectionner une base
      	private function selectBdd($pBdd)
		{
       		mysql_select_db($pBdd) or die("erreur sur la base de donn�es") ;     	
        }

		// Envoyer la requ�te de type SELECT 
		public function query($pReq)
		{
           	$res =  mysql_query($pReq) or die("erreur avec la requ�te ". $pReq);
        	return ($res) ;
        }
		
		// Lire le r�sultat de la requ�te de type SELECT et retourner un tableau (curseur)
      	public function tabResult($pReq)
		{
           	$tabRes = mysql_fetch_array($pReq);
           	return ($tabRes) ;
     	}
     	 
		// Ex�cuter la requ�te et retourner la valeur obtenue par count, sum, avg, max, min (si un seul champ)	
		function getNombre($pReq)
		{
			$res = mysql_query($pReq) or die("erreur avec la requ�te ". $pReq);
			$champ = mysql_result($res, 0);
			return ($champ);
		}
		
		// Retourner le dernier identifiant g�n�r� par un champ de type AUTO_INCREMENT
		public function dernierId()
		{
      		$res = mysql_query($pReq) or die("erreur avec la requ�te ");
         	return (mysql_insert_id());
      	}
		
		// Lire le r�sultat de la requ�te de type SELECT et retourner un tableau asociatif
       	public function tabAssoc($pReq)
		{
           	$TabRes = mysql_fetch_assoc($pReq);
		   	return ($TabRes) ;
     	}
	
		// Retourner le nombre de lignes affect�es par la derni�re op�ration SQL.
     	public function getNbLignes($pReq)
		{
           	return (mysql_num_rows($pReq)) ;
    	}
    	    	
    	// Ex�cuter la requ�te de type INSERT, UPDATE ,DELETE
		public function execute($pReq)
		{
           	$res =  mysql_query($pReq) or die("erreur avec la requ�te de modification de donn�es " .$pReq);
        	return ($res) ;
        }
         
        // Destructeur de la classe Connexion
     	public function __destruct()
		{
			//mysql_close($this->id);
		}    
    }
?>

