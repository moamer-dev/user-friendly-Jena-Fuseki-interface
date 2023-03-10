<?php

function triples_ckan1153(){
// Endpoint URL
$url = "https://service.tib.eu/lablsk-sparql/fuseki/ckan1153/query";

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

function subjects_ckan1153 (){

// Endpoint URL
$url = "https://service.tib.eu/lablsk-sparql/fuseki/ckan1153/query";

// SPARQL query to count distinct subjects
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
    //echo "<table><tr><td>Number of distinct subjects:</td><td>$count</td></tr></table>";
    echo $count;
}

// Close cURL request
curl_close($ch);


}

function predicates_ckan1153(){


// Endpoint URL
$url = "https://service.tib.eu/lablsk-sparql/fuseki/ckan1153/query";

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
    //echo "<table><tr><td>Number of distinct subjects:</td><td>$count</td></tr></table>";
    echo $count;
}

// Close cURL request
curl_close($ch);


}

function objects_ckan1153(){

// Endpoint URL
$url = "https://service.tib.eu/lablsk-sparql/fuseki/ckan1153/query";

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
    //echo "<table><tr><td>Number of distinct objects:</td><td>$count</td></tr></table>";
    echo $count;
}

// Close cURL request
curl_close($ch);

}


function triples_ckan1368(){
    // Endpoint URL
    $url = "https://service.tib.eu/lablsk-sparql/fuseki/ckan1368/query";
    
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
    
function subjects_ckan1368 (){
    
    // Endpoint URL
    $url = "https://service.tib.eu/lablsk-sparql/fuseki/ckan1368/query";
    
    // SPARQL query to count distinct subjects
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
        //echo "<table><tr><td>Number of distinct subjects:</td><td>$count</td></tr></table>";
        echo $count;
    }
    
    // Close cURL request
    curl_close($ch);
    
    
}
    
function predicates_ckan1368(){
    
    
    // Endpoint URL
    $url = "https://service.tib.eu/lablsk-sparql/fuseki/ckan1368/query";
    
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
        //echo "<table><tr><td>Number of distinct subjects:</td><td>$count</td></tr></table>";
        echo $count;
    }
    
    // Close cURL request
    curl_close($ch);
    
    
}
    
function objects_ckan1368(){
    
    // Endpoint URL
    $url = "https://service.tib.eu/lablsk-sparql/fuseki/ckan1368/query";
    
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
        //echo "<table><tr><td>Number of distinct objects:</td><td>$count</td></tr></table>";
        echo $count;
    }
    
    // Close cURL request
    curl_close($ch);
    
}

function triples_smw1153(){
        // Endpoint URL
        $url = "https://service.tib.eu/lablsk-sparql/fuseki/smw1153/query";
        
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
        
    function subjects_smw1153(){
        
        // Endpoint URL
        $url = "https://service.tib.eu/lablsk-sparql/fuseki/smw1153/query";
        
        // SPARQL query to count distinct subjects
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
            //echo "<table><tr><td>Number of distinct subjects:</td><td>$count</td></tr></table>";
            echo $count;
        }
        
        // Close cURL request
        curl_close($ch);
        
        
}
        
    function predicates_smw1153(){
        
        
        // Endpoint URL
        $url = "https://service.tib.eu/lablsk-sparql/fuseki/smw1153/query";
        
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
            //echo "<table><tr><td>Number of distinct subjects:</td><td>$count</td></tr></table>";
            echo $count;
        }
        
        // Close cURL request
        curl_close($ch);
        
        
}
        
function objects_smw1153(){
        
        // Endpoint URL
        $url = "https://service.tib.eu/lablsk-sparql/fuseki/smw1153/query";
        
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
            //echo "<table><tr><td>Number of distinct objects:</td><td>$count</td></tr></table>";
            echo $count;
        }
        
        // Close cURL request
        curl_close($ch);
        
}