<?php include("./config/config.php");;

/* checken of de input niet leeg was */
if(isset($_POST["login"]) && $_POST["login"] != "" 
&& isset($_POST["password"]) && $_POST["password"] != ""  
&& isset($_POST["mail"]) && $_POST["mail"] != "" )
{
$hash = hash ('adler32',$_POST["password"]);


/* inserten in de database */
	
  $sql = "INSERT INTO USERS ( login, password, mail) 
     VALUES ('$_POST[login]','$hash','$_POST[mail]')";
  $query = $conn->query($sql);

    session_start();
    $sql = "SELECT  * from USERS WHERE login = '$_POST[login]' AND password = '$hash' AND mail='$_POST[mail]'";

    $result = $conn->query($sql);
    //Als het aantal rijen van de query groter is dan 0 (betekend dus dat hij iets gevonden heeft.)
    if ($result->num_rows > 0) {
        //opnemen van data in session variabele.
        $row = $result->fetch_assoc();
        $_SESSION["id"] = $row["id"];
        $_SESSION["login"] = $row["login"];
        $_SESSION["password"] = $row["password"];
        $_SESSION["mail"] = $row["mail"];
    }
} else
{
    echo "Please fill the required fields.";
}
?>

