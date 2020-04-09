<?php

$number = $_GET['number'];

include "../../dreamsetup.php";

$page = "Property Search By Number";
$css = "../../";

html_begin ($css, $page);

$conn_id = dream_connect()
or die ("cannot connect to server");

$query = "select Pno, Street, Area, City, Pcode, Type, Rooms, Rent "
    ."from property_for_rent where Pno = '$number' order by Pno";

$result_id = mysqli_query ($conn_id, $query)
or die ("Cannot execute query");

print ("<section id=\"boxes\">");
print ("<div class=\"container\">");

if (mysqli_num_rows($result_id)!=0){
    while ($row = mysqli_fetch_assoc($result_id))
    {

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
        print ("<br><br>\n");
        print ("</div>");
    }
} else{
    print ("<h1>There are no table entries for this query</h1>");
}

print ("</div>");
print ("</section>");

mysqli_free_result ($result_id);
?>

<?php

html_end('../propertyoperations/index.php');

?>


