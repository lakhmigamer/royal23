<body>
    <form method="post" action="insert1.php">
        <h2>Student Record Entry</h2>
        <br>Enter Your Rollno<input type="text" name="rollno">
        <br>Enter Your Name<input type="text" name="name">
        <br>Enter Your Class<input type="text" name="class">
        <br>Enter Your Gender<input type="text" name="gender">
        <br><input type="submit" value="ADD">
    </form>
</body>
</html>

connection.php

<?php
ob_start();
$con = mysqli_connect("localhost", "root", "") or die("Error connecting to MySQL: " . mysqli_error($con));
$dbname = "bca";
mysqli_select_db($con, $dbname) or die("Database selection error: " . mysqli_error($con));
mysqli_set_charset($con, "utf8");
?>


Insert1.php

<body>
<?php
include ("connection.php");

$database="bca";

$rollno = $_POST["rollno"];
$name = $_POST["name"];
$class = $_POST["class"];
$gender = $_POST["gender"];

$query = "INSERT INTO student VALUES ('$rollno', '$name', '$class', '$gender')";
mysql_query($query);

echo "<script type='text/javascript'>\n";
echo "alert('Record added successfully');\n";
echo "</script>";

echo "<a href='insert.php'>BACK</a>";
?>
</body>
</html>
