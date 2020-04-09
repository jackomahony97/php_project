<?php

$identifier = $_GET['identifier'];

include "../../dreamsetup.php";

$page = "Client Deletion";
$css = "../../";

html_begin ($css, $page);

$conn_id = dream_connect()
or die ("cannot connect to server");

$identifyquery = "select * from client where Cno = '$identifier'";

$result_id = mysqli_query($conn_id, $identifyquery)
or die ("Cannot execute query");

if(mysqli_num_rows($result_id)!=0){

    $query = "delete from client where Cno = '$identifier'";

    $result_id = mysqli_query($conn_id, $query)
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
    print ("<h1>CNO not recognised</h1>");
}

print ("</div>");
print ("</section>");

?>

<?php

html_end('../clientoperations/clientDelete.php');

?>
