<?php
$dbHost = 'ec2-23-23-227-188.compute-1.amazonaws.com';
$dbName = 'dc3iv3q4t39i0c';
$dbPort = '5432';
$user = 'mtfkybajvycpzz';
$pass = '1f9afc981c3b38e57fe02247902708c1fb4e0014721d9397d4b6a43dc8b1a809';

try {
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $ex) {
    echo "Error connecting to the db. Details: $ex";
    die();
}
?>
