<?php
   //definir un tableau de 5  demandes
     //une demande est caracterise
        //numero, chaine genere aleatoirement
         //date 
         //Etat(Encours,Accepte,Refuse)
         //Type (Suspension ou Annulation)
         //motif
         //etudiant (matricule,nom,prenom,
                //dateNaiss(Date php),
                //classe(filiere,niveau,code))

                // Définir un tableau de 5 demandes
                $demandes = [
                    [
                        "numero" => generateString(),
                        "date" => ["j" => 1, "m" => 1, "an" => 2023],
                        "etat" => "Encours",
                        "type" => "Suspension",
                        "motif" => "Voyage",
                        "etudiant" => [
                            "mat" => "001",
                            "nom" => "DUPONT",
                            "prenom" => "Morreti",
                            "dateNaiss" => new DateTime("2000-01-01"),
                            "classe" => [
                                "filiere" => "GLRS",
                                "niveau" => "L2",
                                "code" => "A"
                            ]
                        ]
                    ],

                    [
                     "numero" => generateString(),
                     "date" => ["j" => 2, "m" => 2, "an" => 2023],
                     "etat" => "Accepte",
                     "type" => "Annulation",
                     "motif" => "Raison personnelle",
                     "etudiant" => [
                         "mat" => "002",
                         "nom" => "MARTIN",
                         "prenom" => "Sophie",
                         "dateNaiss" => new DateTime("1998-05-15"),
                         "classe" => [
                             "filiere" => "INFO",
                             "niveau" => "L3",
                             "code" => "B"
                         ]
                     ]
                 ],

                 [
                     "numero" => generateString(),
                     "date" => ["j" => 3, "m" => 3, "an" => 2023],
                     "etat" => "Refuse",
                     "type" => "Suspension",
                     "motif" => "Problèmes administratifs",
                     "etudiant" => [
                         "mat" => "003",
                         "nom" => "LECLERC",
                         "prenom" => "Antoine",
                         "dateNaiss" => new DateTime("1999-09-20"),
                         "classe" => [
                             "filiere" => "IAGE",
                             "niveau" => "L1",
                             "code" => "C"
                         ]
                     ]
                 ],

                 [
                     "numero" => generateString(),
                     "date" => ["j" => 4, "m" => 4, "an" => 2023],
                     "etat" => "Encours",
                     "type" => "Suspension",
                     "motif" => "Maladie",
                     "etudiant" => [
                         "mat" => "004",
                         "nom" => "BERGER",
                         "prenom" => "Camille",
                         "dateNaiss" => new DateTime("1997-12-10"),
                         "classe" => [
                             "filiere" => "ETSE",
                             "niveau" => "L2",
                             "code" => "D"
                         ]
                     ]
                 ],

                 [
                     "numero" => generateString(),
                     "date" => ["j" => 12, "m" => 6, "an" => 2023],
                     "etat" => "Encours",
                     "type" => "Suspension",
                     "motif" => "Maladie",
                     "etudiant" => [
                         "mat" => "005",
                         "nom" => "TAYSON",
                         "prenom" => "Mike",
                         "dateNaiss" => new DateTime("1997-12-10"),
                         "classe" => [
                             "filiere" => "TTL",
                             "niveau" => "L3",
                             "code" => "E"
                         ]
                     ]
                 ]
                ];
                
   // Fonction pour générer une chaîne aléatoire pour le numéro de demande
   function generateString($length = 3) {
      return bin2hex(random_bytes($length));
   }
                
   // fonction qui retourne le tableau de demande
   // fonction qui retourne le tableau de demande par type
   // fonction qui retourne le tableau de demande par etat
   function returnDemands(array $demandes, string $type = "all", string $etat = "all"): array{
      $demandesfiltrees = [];
      foreach ($demandes as $demande) {
         $typecorresp = ($type = "all" || $demande['type'] = $type);
         $etatcorresp = ($etat = "all" || $demande['etat'] = $etat);
         if ($typecorresp || $etatcorresp){
            $demandesfiltrees[] = $demande;
         }
      }
      return $demandesfiltrees;
   }



?>