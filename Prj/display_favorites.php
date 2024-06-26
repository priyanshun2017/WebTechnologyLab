<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "movie_app";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, regno, favmovie1, favmovie2, favmovie3 FROM favorites";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Reg. No.</th><th>Favorite Movie 1</th><th>Favorite Movie 2</th><th>Favorite Movie 3</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["regno"]."</td><td>".$row["favmovie1"]."</td><td>".$row["favmovie2"]."</td><td>".$row["favmovie3"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
