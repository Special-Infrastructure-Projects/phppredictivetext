<?php

	$ry = 0;
	
	$inp = $_GET['word'];

	$sin = str_split($inp, 1);
	
	$word = file_get_contents("words/words.txt");

	$all_words =  explode(PHP_EOL, $word);
	
		for($x = 0; $x < sizeof($all_words); $x++){
			
			$fl = str_split($all_words[$x],1);
			
				if($fl[0] === $sin[0]){
				
					if($fl[1] === $sin[1]){
				
						if($fl[2] === $sin[2]){
						
							if($fl[3] === $sin[3]){
						
								$ry = 1;
								
									print_r($all_words[$x]);
								
							}
							
								else {
									
									
								
								}
						
							}	
						
						}
			
					}
			
				}
		
		
		function searchLetter(){
	
			echo "pol<br>";			
			
		}
		