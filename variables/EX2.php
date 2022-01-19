<?php
$monNom = "Afrakla";
$monPrenom ='abdelaziz';
$monAge = 22;
 #affiche avec double quotes ""
 echo "Mon Nom: $monNom Mon Prenom: $monPrenom Mon Age: $monAge";
 echo "<br>";
 //affiche avec simple quotes ''
 echo 'Mon Nom: '.$monNom.' Mon Prenom: '.$monPrenom.' Mon Age: '.$monAge;
 echo "<br>";
             //deference entre simple guillemets et double guillemets:
        
             #simple guillemet affiche le message comme il ecrit dans le code php (echo).
             #double guillemets prendre en consideration les variable dans le code php (print).  
 
 // affiche les info utilise methode Heredoc
 echo <<< TEXT
   Mon Nom: $monNom
   Mon Prenom: $monPrenom
   Mon Age: $monAge
 TEXT;
 echo "<br>";
 // affiche les info utilise methode Nowdoc
  print<<<'EOT'
   Mon Nom: Afrakla
   Mon Prenom: abdelaziz
  Mon Age: 22
 EOT;
            // deference entre Methodes Heredoc et Nowdoc:
            #Heredoc prendre en consideration les variable dans le code. 
            #Nowdoc affiche le message comme il ecrit dans le code php.
?>