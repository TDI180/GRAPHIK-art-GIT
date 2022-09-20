

<!DOCTYPE html>
<head>
        <link rel="stylesheet" href="/design.css">
</head>
<html>
        <body>
                <h1>voila votre pizza</h1>

                <p>Bonjour, voila la pizza choisi---> </p></br>

                <?php 
                 $arrKeys = array_keys($_GET);

                class pizzaModena {

                                       public function __construct(array $tabpizza,array $data_pizza)
                                        {
                                        $this->tabpizza = $tabpizza;
                                        $this->datapizza = $data_pizza;                                        
                                        }
                                    private $tabpizza=[];    
                                    private $margarita=['sauce-tomate','fromage'];  
                                    protected $fromage=['sauce-tomate,fromage,emmental,chevre']; 
                                   
                                    public function displayPizza() {         
                                                                     foreach ($this->datapizza as $meftah)
                                                                                                {
                                                                                                 echo '<h3>'.$meftah.'</h3>'.'<br>';
                                                                                                }
                                                                    }  
                                    }

                                                  
                // var_dump ($_GET);
                echo '<h3>--------here the key--------</h3>'.'<br>';
               
                var_dump($arrKeys );
                $Modena = new pizzaModena($arrKeys,$_GET);  
                $Modena->displayPizza();
                echo '<h3>---------end-------------------</h3>'.'<br>';
               
                foreach ( $arrKeys  as $meftah)
                                        {
                                       // echo '<h3>'.$meftah.'</h3>'.'<br>';
                                        }
                 foreach ($_GET as $choosen_pizza)
                                                {
                                                   //echo '<h3>'.$choosen_pizza.'</h3>'.'<br>';
                                                }
                ?>
        </body>
        <footer>FOOTER</footer>

</html> 



