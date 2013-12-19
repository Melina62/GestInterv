	function getReqHttp()
	{
      var reqHttp = null;

		if(window.XMLHttpRequest)
		{
			// Firefox (Mozilla) et autres
		   	reqHttp = new XMLHttpRequest(); 				
		}
		else
		{
			if(window.ActiveXObject)
			{
				// Internet Explorer
			   	try
				{
					reqHttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch (e)
				{
					reqHttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
			}
			else
			{
				// XMLHttpRequest non support� par le navigateur
			  	 alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
			     reqHttp = false;
			}
		}
        return reqHttp;
	}	
	
	
	function envoyerListe(methode, url, idChamp, codeId )
	{
		alert(methode + " url=" + url + " champ =" + idChamp +" id =" + codeId) ;
		// url =  "FO/Modeles/Interventions/" +  url  + ".inc.php" ;		
		url =   url  + ".inc.php" ;			
		alert (url) ;
	
		//  r�cup�ration d'un objet XMLHttpRequest
		var reqHttp1 = getReqHttp() ;	
	
		if ( reqHttp1 == null)
		{			
			alert("Impossible d'utiliser Ajax sur ce navigateur");			
		}
		else
		{
			
			// appel d'une fonction anonyme (d�finie � la vol�e)
			reqHttp1.onreadystatechange = function()
			{
				// code de la fonction
		        if (reqHttp1.readyState == 4 && reqHttp1.status == 200)
				{				 		
					lesChamps = document.getElementById(codeId);
					alert(codeId + "  " + lesChamps) ;
					alert(reqHttp1.responseText) ;
					lesChamps.innerHTML = reqHttp1.responseText;
				}
		 	}
		 	if ( methode == "POST")
			{			 	
				//  ouverture de la connexion avec le serveur
		  		reqHttp1.open("POST", url,true) ;	
		 		reqHttp1.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		 		lesElts = document.getElementById(idChamp);
				//alert (lesElts) ;
		 		codeElt = lesElts.options[lesElts.selectedIndex].value ;
				alert (codeElt) ;
				//  envoi de la requ�te
				reqHttp1.send("codeElt="+codeElt);	
			}
			else
			{
				if (methode == "GET")
				{
					//  ouverture de la connexion avec le serveur - m�thode GET - asynchrone
					// escape permet de s'affranchir des probl�mes li�s aux caract�res sp�ciaux
				 	reqHttp1.open("GET", url + "?codeElt=" + escape(idChamp),true);
				 	//  envoi de la requ�te
					reqHttp1.send(null);
				}					 
			}		
		}
		return ;
	}
	
	
	

	
		

