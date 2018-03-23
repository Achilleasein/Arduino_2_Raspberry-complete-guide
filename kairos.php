<!DOCTYPE html>
<html>
<head>
<style> 
.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.article {
    text-align: left;
}

header {background: pink;color:white;}
footer {background: #aaa;color:white;}
.nav {background:#eee;}

.nav ul {
    list-style-type: none;
    padding: 0;
}
.nav ul a {
    text-decoration: none;
}

@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}
</style>
</head>
<body>	

<div class="flex-container">
<header>
  <h1>Kalimera afentiko</h1>
</header>


<?php
$servername = "localhost";
$username = "achilleas";
$password = "monogiaemena";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT ora , thermokrasia , igrasia FROM kairos";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result))
		echo "ora: " . $row["ora"]. "- thermokrasia: " . $row["thermokrasia"]. "C - igrasia: ". $row["igrasia"]. "% <br>";
	}
	else{
		echo "0 results";
		}
?>

<footer>Copyright &copy; Achilleas Yfantis, Student Gurus @ Patras, <br> achilleasein@gmail.com</footer>

</body>
</html>
