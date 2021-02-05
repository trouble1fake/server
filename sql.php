<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:trouble1sqlserver.database.windows.net,1433; Database = trouble1sqlserver", "azureuser", "admin@123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "azureuser", "pwd" => "admin@123", "Database" => "trouble1sqlserver", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:trouble1sqlserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
