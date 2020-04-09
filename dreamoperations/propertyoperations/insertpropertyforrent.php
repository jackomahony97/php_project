<?php

$pno = $_GET['Pno'];
$street = $_GET['Street'];
$area = $_GET['Area'];
$city = $_GET['City'];
$pcode = $_GET['Pcode'];
$type = $_GET['Type'];
$rooms = $_GET['Rooms'];
$rent = $_GET['Rent'];
$ono = $_GET['Ono'];
$sno = $_GET['Sno'];
$bno = $_GET['Bno'];

include "../../dreamsetup.php";

$page = "Property Insertion";
$css = "../../";

html_begin ($css, $page);

if ($pno != '' and $street != '' and $area != '' and $city != '' and $pcode != '' and $type != '' and  $rooms != '' and $rent != '' and $ono != '' and $sno != '' and $bno != '')
{
    $conn_id = dream_connect()
    or die ("cannot connect to server");

    $query = "insert into property_for_rent (Pno, Street, Area, City, Pcode, Type, Rooms, Rent, Ono, Sno, Bno) "
        ."values ('$pno', '$street', '$area', '$city', '$pcode', '$type', '$rooms', '$rent', '$ono', '$sno', '$bno')";

    $result_id = mysqli_query ($conn_id, $query)
    or die ("Cannot execute query");

    print ("<section id=\"boxes\">");
    print ("<div class=\"container\">");
    print ("<h1>Data Insertion Successful</h1>");
    print ("<div class=\"box\">");
    print ("<b>Property Number: </b>");
    printf("%s<br>", $pno);
    print ("<b>Street: </b>");
    printf("%s<br>", $street);
    print ("<b>Area: </b>");
    printf("%s<br>", $area);
    print ("<b>City: </b>");
    printf("%s<br>", $city);
    print ("<b>Postcode: </b>");
    printf("%s<br>", $pcode);
    print ("<b>Type: </b>");
    printf("%s<br>", $type);
    print ("<b>Rooms: </b>");
    printf("%s<br>", $rooms);
    print ("<b>Rent: </b>");
    printf("%s<br>", $rent);
    print ("<b>Ono: </b>");
    printf("%s<br>", $ono);
    print ("<b>Sno: </b>");
    printf("%s<br>", $sno);
    print ("<b>Bno: </b>");
    printf("%s<br>", $bno);
    print ("<br><br>\n");
}
 else{
     print ("<section id=\"boxes\">");
     print ("<div class=\"container\">");
     print ("<h1>Must have valid data entries for each input box</h1>");
}

print ("</div>");
print ("</div>");
print ("</section>");

?>

<?php

html_end('../propertyoperations/propertyforrentInsert.php');

?>
