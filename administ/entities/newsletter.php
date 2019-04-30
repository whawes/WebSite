<?php
 
 class Newsletter{
 	private $EmailN;

 	function __construct($emailn)
 	{
 		$this->EmailN=$emailn;
 	}
function getEmailn(){
		return $this->EmailN;
	}

function setEmailn($emailn){
		$this->EmailN=$emailn;
	}


 }

?>