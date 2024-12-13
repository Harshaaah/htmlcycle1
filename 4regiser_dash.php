<?php
session_start(); // Start the session

include('4register_db.php');

if (!isset($_SESSION['id'])) {
    header("Location: 4register_login.php");
    exit();
}

$user_id = $_SESSION['id'];
$email = $_SESSION['email'];

$sql = "SELECT * FROM students WHERE id = '$user_id' AND email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit();
}
?>

<html>
<body>
    <h2>Welcome, <?php echo $user['first_name'] . ' ' . $user['last_name']; ?></h2>
    <p>Email: <?php echo $user['email']; ?></p>
    <p>Gender: <?php echo $user['gender']; ?></p>
    <p>Date of Birth: <?php echo $user['dob']; ?></p>

	<a href="4register_logout.php">LOGOUT</a>
</body>
</html>
