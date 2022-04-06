<?php
echo 'bmw320d';

if (isset($_GET['api'])) 
					{
						$p=$_GET['api'] ;
					}
						else 
						{
							$p='homeland';
						}

    if ($p==='produit') 
            {
                require '../API/produits.php' ; 
            }                      

    elseif (p==='choix') 
                 { 
                  require '../API/choix.php' ;	
                 }
                 

                 echo 'bmw320d';