<?php
session_start(); // Start the session

include('4register_db.php');

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO students (first_name, last_name, dob, email, gender, password) 
            VALUES ('$firstName', '$lastName', '$dob', '$email', '$gender', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        header("Location:4register_login.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
        exit();
    }
}
?>

<html>
<body>
    <h2 style="text-align:center">STUDENT REGISTRATION FORM</h2>
    <form action="4register_form.php" name="registrationForm" method="POST">
        <table align="center" border="1" cellpadding="8">
            <tr>
                <td>FIRST NAME</td>
                <td><input type="text" name="firstName" required maxlength="30"></td>
            </tr>
            <tr>
                <td>LAST NAME</td>
                <td><input type="text" name="lastName" required maxlength="30"></td>
            </tr>
            <tr>
                <td>DATE OF BIRTH</td>
                <td><input type="date" name="dob" required></td>
            </tr>
            <tr>
                <td>EMAIL-ID</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>GENDER</td>
                <td><input type="radio" name="gender" value="MALE" required> Male
                    <input type="radio" name="gender" value="FEMALE" required> Female
                </td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="password" required maxlength="30"></td>
            </tr>
            <tr>
                <td colspan="2"><center><input type="submit" name="submit" value="SUBMIT">&nbsp;<input type="reset"></center></td>
            </tr>
        </table>
    </form><center>
    
</body>
</html>
