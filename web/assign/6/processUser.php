<?php
session_start();

$user = 'the_critic';
$pass = 'password1';
$dbName = 'test';
$dbHost = 'localhost';
$dbPort = '5432';



try {
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $ex) {
    echo "Error connecting to the db. Details: $ex";
    die();
}



if ($_SESSION["newUser"] == "true") {
    createUser();
}

function createUser(){
    echo $_POST["firstName"];
};




?>

<?php foreach ($db->query('select * from topic') as $row): ?>
    <label>
        <input type="checkbox" name="topics" value="<?php echo $row[1] ?>"> <?php echo $row[1] ?>
    </label>
    <br>
<?php endforeach; ?>
