<?php
$servername = "srv174.main-hosting.eu";
$database = "u400267457_cps530lab6";
$username = "u400267457_squishy123";
$password = "Flyingunicorn456!";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "<h1>All Photographs</h1>";
echo "<div style='display: flex; flex-wrap: wrap; justify-content:center'>";
$query = "SELECT subject,location,date_taken,url from photographs ORDER BY date_taken ASC";
if($res=mysqli_query($conn, $query)) {
    while ($row=mysqli_fetch_row($res)) {
        echo"<div style='max-width: 300px; text-align: center; padding: 10px;'>";
        echo"<p>Subject: ".$row[0]."</p>";
        echo"<p>Location: ".$row[1]."</p>";
        echo"<p>Date_Taken: ".$row[2]."</p>";
        echo"<img alt='".$row[0]."' src='".$row[3]."' style='width:100%; height:auto'>";
        echo"</div>";
    }
    mysqli_free_result($res);
}
echo "</div>";

echo "<h1>Photographs Taken in Ontario</h1>";
echo "<div style='display: flex; flex-wrap: wrap; justify-content:center'>";
$query = "SELECT subject,location,date_taken,url from photographs WHERE location='Ontario' ORDER BY date_taken ASC";
if($res=mysqli_query($conn, $query)) {
    while ($row=mysqli_fetch_row($res)) {
        echo"<div style='max-width: 300px; padding: 10px;'>";
        echo"<p>Subject: ".$row[0]."</p>";
        echo"<p>Location: ".$row[1]."</p>";
        echo"<p>Date_Taken: ".$row[2]."</p>";
        echo"<img alt='".$row[0]."' src='".$row[3]."' style='width:100%; height:auto'>";
        echo"</div>";
    }
    mysqli_free_result($res);
} 
echo "</div>";

?>