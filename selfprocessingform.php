<?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    echo "You entered: <strong>$name</strong><br><br>";
}
?>
<!DOCTYPE html>
<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="name">
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>