<?php
  session_start();

    $httpMethod = strtoupper($_SERVER['REQUEST_METHOD']);

    switch($httpMethod) {
      case "OPTIONS":
        header("Access-Control-Allow-Headers: X-ACCESS_TOKEN, Access-Control-Allow-Origin, Authorization, Origin, X-Requested-With, Content-Type, Content-Range, Content-Disposition, Content-Description");
        header("Access-Control-Allow-Methods: POST, GET");
        header("Access-Control-Max-Age: 3600");
        exit();

      case "GET":
          
        $servername = getenv('localhost');
        $dbPort = 3306;
        
        $database = "final_exam";
        
        $username = 'jfausto';
        $password = "Mexico1723$";
        
        $dbConn = new PDO("mysql:host=$host;port=$dbPort;dbname=$database", $username, $password);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Build the select statement (assuming the posted data has a field called dataFromPost)
        $whereSql = "
        SELECT p.*, s.name AS 'status_name', t.name AS 'type_name'
        FROM page p INNER JOIN
            status s ON p.status_id = s.id LEFT OUTER JOIN
            type t ON p.type_id = t.id
        WHERE status_id <> 0
        ";
        
        // The prepare caches the SQL statement for N number of parameters imploded above
        $whereStmt = $dbConn->prepare($whereSql);
        
        // Just have to pop in the associative array that comes from json_decode
        $whereStmt->execute($postedAssocArray);
        
        // Returns associative array instead of a cursor
        $sqlQueryResultsAssocArray = $whereStmt->fetchAll(PDO::FETCH_ASSOC);
        // Allow any client to access
        header("Access-Control-Allow-Origin: *");

        break;
      case 'POST':
          
          
        // Get the body json that was sent
        $rawJsonString = file_get_contents("php://input");
        
        // Make it a associative array (by making second param = true)
        $postedJsonData = json_decode($rawJsonString, true);
        
        
        // Save the data to the database
        $servername = getenv('localhost');
        $dbPort = 3306;
        
        // Which database (the name of the database in phpMyAdmin)?
        $database = "final_exam";
        
        // My user information...I could have prompted for password, as well, or stored in the
        // environment, or, or, or (all in the name of better security)
        $username = 'jfausto';
        $password = "Mexico1723$";
        
        // Establish the connection and then alter how we are tracking errors (look those keywords up)
        $dbConn = new PDO("mysql:host=$host;port=$dbPort;dbname=$database", $username, $password);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Build the select statement (assuming the posted data has a field called dataFromPost)
        // Need to still do a couple things:
        // 1) convert the date I got??? maybe not, but be aware, and need to NULL check the to_date
        // 2) make sure NULL goes into type_id IFF the typeId parameter is empty string
        if (!$postedJsonData["typeId"]) {
          $postedJsonData["typeId"] = "NULL";
        }
        
        $whereSql = "
        INSERT INTO page(code, raceDate, startTime, password, location, typeId) VALUES (:code, :raceDate, :startTime, :password, :location, :typeId) 
        ";
        
        $whereStmt = $dbConn->prepare($whereSql);
        
        $whereStmt->execute($postedJsonData);
        
        header("Content-Type: application/json");
        header("Access-Control-Allow-Origin: *");

        break;
      case 'PUT':
        header("Access-Control-Allow-Origin: *");
        http_response_code(401);
        echo "Not Supported";
        break;
      case 'DELETE':
        header("Access-Control-Allow-Origin: *");
        http_response_code(401);
        break;
    }
?>