<?php

$identifier = $_GET['identifier'];
$column = $_GET['client'];
$update = $_GET['update'];
include "../../dreamsetup.php";

$page = "Client Update";
$css = "../../";

html_begin ($css, $page);

$conn_id = dream_connect()
or die ("cannot connect to server");

$query = "update client set $column = '$update' where Cno = '$identifier'";

$result_id = mysqli_query($conn_id, $query)
or die ("Cannot execute query");

if ($result_id)
{
    $query2 = "select * from client where Cno = '$update'";
    $result_id2 = mysqli_query($conn_id, $query2)
    or die ("Cannot execute query");
}else {
    $result_id2 = NULL;
}

print ("<section id=\"boxes\">");
print ("<div class=\"container\">");

if (mysqli_num_rows($result_id2)!=0){
    while ($row = mysqli_fetch_assoc($result_id2))
    {
        print ("<h1>Data Update Successful</h1>");
        print ("<div class=\"box\">");
        print ("<b>Client Number: </b>");
        printf("%s<br>", $row["Cno"]);
        print ("<b>First Name: </b>");
        printf("%s<br>", $row["FName"]);
        print ("<b>Last Name: </b>");
        printf("%s<br>", $row["LName"]);
        print ("<b>Address: </b>");
        printf("%s<br>", $row["Address"]);
        print ("<b>Telephone: </b>");
        printf("%s<br>", $row["Tel_No"]);
        print ("<b>Preference Type: </b>");
        printf("%s<br>", $row["Pref_Type"]);
        print ("<b>Max Rent: </b>");
        printf("%s<br>", $row["Max_Rent"]);
        print ("<br><br>\n");
        print ("</div>");

    }
} else{
    print ("<h1>There are no table entries for this query</h1>");
}

print ("</div>");
print ("</div>");
print ("</section>");

?>

<?php

html_end('../clientoperations/clientUpdate.php');

?>
