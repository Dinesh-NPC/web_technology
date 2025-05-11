<!DOCTYPE html>
<html>
<body>
<?php
$Sname = $Semail = $Snumber = "";
$nameErr = $emailErr = $numberErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $Sname = htmlspecialchars($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    } else {
        $Semail = htmlspecialchars($_POST["email"]);
    }

    if (empty($_POST["number"])) {
        $numberErr = "Number is required";
    } elseif (!preg_match("/^[0-9]{10}$/", $_POST["number"])) {
        $numberErr = "Invalid number format (must be 10 digits)";
    } else {
        $Snumber = htmlspecialchars($_POST["number"]);
    }
}
?>
<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name"> <?php echo $nameErr; ?>
    <br><br>
    E-mail: <input type="text" name="email"> <?php echo $emailErr; ?>
    <br><br>
    Number: <input type="text" name="number"> <?php echo $numberErr; ?>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nameErr && !$emailErr && !$numberErr) {
    echo "<h2>Your Input:</h2>";
    echo "Name: " . $Sname . "<br>";
    echo "E-mail: " . $Semail . "<br>";
    echo "Number: " . $Snumber . "<br>";
}
?>
</body>
</html>