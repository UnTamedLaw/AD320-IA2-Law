<?php
if(isset($_GET["submit"])) {
    $name = $_GET["name"];
    $email = $_GET["email"];
    $phone = $_GET["number"];
    $state= $_GET["state"];

echo "<p>name: $name</p>" ; 

echo "Email:  " .$email ; 

if (isset ($phone) && !trim($phone) == ''){
echo "<p> Number: $phone</p>" ; 
}
if (isset ($state) &&  !trim($state) == '') {
echo "<p> State: $state</p>" ; 
}

}

?>