<?php

$identifier = $_GET['identifier'];
$column = $_GET['property'];
$update = $_GET['update'];

include "../../dreamsetup.php";

$page = "Property For Rent Update";
$css = "../../";

html_begin ($css, $page);

$conn_id = dream_connect()
or die ("cannot connect to server");

$query = "update property_for_rent set $column = '$update' where Pno = '$identifier'";

$result_id = mysqli_query($conn_id, $query)
or die ("Cannot execute query");

if ($result_id)
{
    $query2 = "select * from property_for_rent where Pno = '$update'";
    $result_id2 = mysqli_query($conn_id, $query2)
    or die ("Cannot execute query");
}
else {
    $result_id2 = NULL;
}

print ("<section id=\"boxes\">");
print ("<div class=\"container\">");

if (mysqli_num_rows($result_id2)!=0){
    while ($row = mysqli_fetch_assoc($result_id2))
    {
        print ("<h1>Data Update Successful</h1>");
        print ("<div class=\"box\">");
        print ("<b>Property Number: </b>");
        printf("%s<br>", $row["Pno"]);
        print ("<b>Street: </b>");
        printf("%s<br>", $row["Street"]);
        print ("<b>Area: </b>");
        printf("%s<br>", $row["Area"]);
        print ("<b>City: </b>");
        printf("%s<br>", $row["City"]);
        print ("<b>Postcode: </b>");
        printf("%s<br>", $row["Pcode"]);
        print ("<b>Type: </b>");
        printf("%s<br>", $row["Type"]);
        print ("<b>Rooms: </b>");
        printf("%s<br>", $row["Rooms"]);
        print ("<b>Rent: </b>");
        printf("%s<br>", $row["Rent"]);
        print ("<b>Ono: </b>");
        printf("%s<br>", $row["Ono"]);
        print ("<b>Sno: </b>");
        printf("%s<br>", $row["Sno"]);
        print ("<b>Bno: </b>");
        printf("%s<br>", $row["Bno"]);
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

html_end('../propertyoperations/propertyforrentUpdate.php');

?>
