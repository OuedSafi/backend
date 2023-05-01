<?php

            //la connexion a la base de donnés
            $servername="localhost";
            $username="root";
            $password=""; //dans votre cas "" rien
            $dbname="fromdonnées";


            try{
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "la connexion a eté bien etablie";
             }
            catch (PDOExeption $e){
                // echo "la connexion a echoué:" .$e=>getMessage();

            }
            
            if(isset($_POST['connexion']))
            {
             $nom = $_POST['nom'] ;
             $prenom = $_POST['prenom'] ;
             $datedenaissance = $_POST['date_de_naissance'] ;  
             
             $sql= ("INSERT INTO `formu`(`nom`, `prenom`, `date_de_naissance`) VALUES (:nom , :prenom , :date_de_naissance)");
             $stmt = $conn->prepare($sql);

             $stmt->bindparam( ':nom', $nom);
             $stmt->bindparam( ':prenom', $prenom);
             $stmt->bindparam( ':date_de_naissance', $datedenaissance);
            $stmt->execute();

             //pour changer deux ou plus dans une seul fois clique sur ctrl +d




            }


?>