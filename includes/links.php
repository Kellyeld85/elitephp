 				<?php
	 				
	 				$leftarrow =   "<p>hello</p><a href='heathrow.php'><h3 class='previous'>❮ </h3></a> ";
	 				$rightarrow = " <p>hello</p><a href='privateresident.php'> <h3 class='next'> ❯</h3></a>";
	 				
	 		        $back = $leftarrow;
	 		        $forward = $rightarrow;
                    $all = $leftarrow . $rightarrow;
                    
                    function display() {
	                    
	                    if isset($before) {
		                    echo $back;
	                    }
	                    if isset($next) {
		                    
		                    echo $forward;
	                    }
	                    
	                    if isset ($complete) {
		                    echo $all;
	                    }
	                    

                    }
                    
	
	 				
					if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 9.') !== FALSE)
					{
						echo display(); 
					
					} else {
						echo '$all';
					}
					
				?>