<?php
// Establish PDO connection (replace 'your_host', 'your_username', and 'your_password')
$host = 'localhost';
$dbname = 'new_store';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Your SELECT query
    $query = "SELECT * FROM store";

    // Prepare and execute the query
    $stmt = $pdo->query($query);

    // Fetch the results and store them in a PHP array
    $data = $stmt->fetchAll();

    // Output JSON
    header('Content-Type: application/json');
    echo json_encode($data);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
