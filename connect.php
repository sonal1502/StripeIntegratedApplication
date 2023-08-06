<?php
 /*$servername="localhost";
$username="root";
$useremail="root";
$password="root";
$db_name="richpaneltest";


//database conn
$conn=new mysqli($servername,$username,$useremail,$password,$db_name.5500);
if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
}

echo "Connection Successful";
/*{
    $stmt=$conn->prepare("insert into registration(Name,Email,Password)values(?,?,?)");
    $stmt->bind_param("sss",$Name,$Email,$Password);
    $stmt->execute();
    echo"Registration Successful";
    $stmt->close();
    $conn->close();

}
*/

?>