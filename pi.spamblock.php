<?php

class Plugin_spamblock extends Plugin {
	
	var $meta = array(
	        'name'               => 'spamblock',
	        'version'            => '0.1',
	        'author'             => 'Thomas Gimesi',
	        'author_url'         => 'http://gimesi.com',
	);
	
	public function index() {
	
			// fetch the tags
			$mailto = $this->fetchParam('mailto');
			$class = $this->fetchParam('class');
			
			// check if we've entered the mailto address
			if (!isset($mailto)){
				$error = "Please enter your 'mailto' address.";
				return $error;
			}
			
			// check if it is valid
			elseif (!filter_var($mailto, FILTER_VALIDATE_EMAIL)) {
				$error = "Please check your E-mail format.";
				return $error; 
			}
			
			// let's start encoding
			else {				
				function encode($email) {			
				     $output = '';
				     for ($i = 0; $i < strlen($email); $i++) {
				          $output .= '&#'.ord($email[$i]).';';
				     }
				     return $output;     
				}
				
				$encodedMail = encode($mailto);
							
				//check if there's a custom css class	
				if (isset($class)) {
					return '<a href="mailto:'.$encodedMail.'" class="'.$class.'">'.$encodedMail.'</a>';
				}
				else {
					return '<a href="mailto:'.$encodedMail.'">'.$encodedMail.'</a>';
				}				
			}							
	}
}