<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

	if(empty($_REQUEST["BrokerUserName"]))
	{
		$BrokerUserNameerror ="please enter ";
	}
	
	else
	{
		$BrokerUserName = $_REQUEST["BrokerUserName"]; 
	}
			
if(empty($_REQUEST["BrokerPassword"]))
	{
		$BrokerPassworderror ="please enter ";
	}
	
	else
	{
		$BrokerPassword = $_REQUEST["BrokerPassword"]; 
	}

			
			
			$myfile=fopen("../data/login.txt","r") or die("Unable to open file!");
			while($line=fgets($myfile))
				
			{
			$words=explode(",",$line);
			$user=$words[0];
			$pass=$words[1];
			}
			
			
			
			fclose($myfile);
			
			
			
			
			
			
			
		
			
		} 
		?>
