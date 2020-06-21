<?php
  $servername = "148.72.88.28";
  $username = "worldtradehubdev";
  $password = "VWpx+W?E7YB}";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=worldtradehub", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  } catch(PDOException $e) {
    // echo "Connection failed: " . $e->getMessage();
  }

  function getArray($query){
    global $conn;
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_ASSOC);
  }
?>