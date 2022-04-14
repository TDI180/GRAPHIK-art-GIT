<?php
namespace App\Table;
use App\App;

class Categorie extends Table {
	                            public $zebi='50cm'; 
								//public static $table------------->tazzzzz;								
								
	                            public function getUrl()
														 {
															//var_dump ($this);
															return 'index.php?p=categorie&api=null&id='.$this->id; 
														 }
											 
                              }

