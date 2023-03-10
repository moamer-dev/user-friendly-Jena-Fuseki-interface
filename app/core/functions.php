<?php


function show($stuff)
{
	echo "<pre>";
	print_r($stuff);
	echo "</pre>";
}


function set_value($key, $default = '')
{


	if(!empty($_POST[$key]))
	{
		return $_POST[$key];
	}else
	if(!empty($default))
	{
		return $default;
	}

	return '';
}

function redirect($link)
{
	header("Location: ". ROOT."/".$link);
	die;
}

function message($msg = '',$erase = false)
{

	if(!empty($msg))
	{
		$_SESSION['message'] = $msg;
	}else{

		if(!empty($_SESSION['message']))
		{
			$msg = $_SESSION['message'];
			if($erase){
				unset($_SESSION['message']);
			}
			return $msg;
		}
	}

	return false;
}

function esc($str)
{
	return nl2br(htmlspecialchars($str));
}

function str_to_url($url)
{

   $url = str_replace("'", "", $url);
   $url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
   $url = trim($url, "-");
   $url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
   $url = strtolower($url);
   $url = preg_replace('~[^-a-z0-9_]+~', '', $url);
   
   return $url;
}


function tripleGetter($url){
	

	// SPARQL query to count total number of triples
	$query = "SELECT (COUNT(*) AS ?count) WHERE { ?s ?p ?o }";

	// Create cURL request
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('query' => $query)));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	// Execute cURL request and get response
	$response = curl_exec($ch);

	// Check for errors
	if(curl_error($ch)) {
		echo 'Error:' . curl_error($ch);
	} else {
		// Parse response as JSON
		$json = json_decode($response, true);
		
		// Extract count from JSON
		$count = $json["results"]["bindings"][0]["count"]["value"];
		
		// Create HTML table
		//echo "<table><tr><td>Total number of triples:</td><td>$count</td></tr></table>";
		echo $count;
	}

	// Close cURL request
	curl_close($ch);
	}
function subjecteGetter($url){


	// SPARQL query to count total number of subjects
	$query = "SELECT (COUNT(DISTINCT ?s) AS ?count) WHERE { ?s ?p ?o }";

	// Create cURL request
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('query' => $query)));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	// Execute cURL request and get response
	$response = curl_exec($ch);

	// Check for errors
	if(curl_error($ch)) {
		echo 'Error:' . curl_error($ch);
	} else {
		// Parse response as JSON
		$json = json_decode($response, true);
		
		// Extract count from JSON
		$count = $json["results"]["bindings"][0]["count"]["value"];
		
		// Create HTML table
		//echo "<table><tr><td>Total number of triples:</td><td>$count</td></tr></table>";
		echo $count;
	}

	// Close cURL request
	curl_close($ch);
	}
function predicateGetter($url){


		// SPARQL query to count distinct predicates
		$query = "SELECT (COUNT(DISTINCT ?p) AS ?count) WHERE { ?s ?p ?o }";
	
		// Create cURL request
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('query' => $query)));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
		// Execute cURL request and get response
		$response = curl_exec($ch);
	
		// Check for errors
		if(curl_error($ch)) {
			echo 'Error:' . curl_error($ch);
		} else {
			// Parse response as JSON
			$json = json_decode($response, true);
			
			// Extract count from JSON
			$count = $json["results"]["bindings"][0]["count"]["value"];
			
			// Create HTML table
			//echo "<table><tr><td>Total number of triples:</td><td>$count</td></tr></table>";
			echo $count;
		}
	
		// Close cURL request
		curl_close($ch);
	}
function objecteGetter($url){


			// SPARQL query to count distinct objects
			$query = "SELECT (COUNT(DISTINCT ?o) AS ?count) WHERE { ?s ?p ?o }";
		
			// Create cURL request
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('query' => $query)));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
			// Execute cURL request and get response
			$response = curl_exec($ch);
		
			// Check for errors
			if(curl_error($ch)) {
				echo 'Error:' . curl_error($ch);
			} else {
				// Parse response as JSON
				$json = json_decode($response, true);
				
				// Extract count from JSON
				$count = $json["results"]["bindings"][0]["count"]["value"];
				
				// Create HTML table
				//echo "<table><tr><td>Total number of triples:</td><td>$count</td></tr></table>";
				echo $count;
			}
		
			// Close cURL request
			curl_close($ch);
	}