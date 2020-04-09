<?php

$identifier = $_GET['identifier'];

include "../../dreamsetup.php";

$page = "Staff Deletion";
$css = "../../";

html_begin ($css, $page);

$conn_id = dream_connect()
or die ("cannot connect to server");

$identifyquery = "select * from branch where Bno = '$identifier'";

$result_id = mysqli_query($conn_id, $identifyquery)
or die ("Cannot execute query");

if(mysqli_num_rows($result_id)!=0){
    $deletequery = "delete from branch where Bno = '$identifier'";
    $result_id = mysqli_query($conn_id, $deletequery)
    or die ("Cannot execute query");
}
else{
    $result_id = NULL;
}

print ("<section id=\"boxes\">");
print ("<div class=\"container\">");

if ($result_id){
    print ("<h1>Data Update Successful</h1>");
} else{
    print ("<h1>BNO not recognised</h1>");
}

print ("</div>");
print ("</section>");

?>

<?php

html_end('../branchoperations/branchDelete.php');

?>