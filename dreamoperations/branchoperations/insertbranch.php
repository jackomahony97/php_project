<?php

$Bno = $_GET['Bno'];
$Street = $_GET['Street'];
$Area = $_GET['Area'];
$City = $_GET['City'];
$Pcode = $_GET['Pcode'];
$Tel_No = $_GET['Tel_No'];
$Fax_No = $_GET['Fax_No'];

include "../../dreamsetup.php";

$page = "Branch Insertion";
$css = "../../";

html_begin ($css, $page);

if ($Bno != '' and $Street != '' and $Area != '' and $City != '' and $Pcode != '' and $Tel_No != '' and $Fax_No != '')
{
    $conn_id = dream_connect()
    or die ("cannot connect to server");

    $query = "insert into branch(Bno, Street, Area, City, Pcode, Tel_No, Fax_No) "
        . "values ('$Bno', '$Street', '$Area', '$City', '$Pcode', '$Tel_No', '$Fax_No')";

    $result_id = mysqli_query($conn_id, $query)
    or die ("Cannot execute query");

    print ("<section id=\"boxes\">");
    print ("<div class=\"container\">");
    print ("<h1>Data Insertion Successful</h1>");
    print ("<div class=\"box\">");
    print ("<b>Bno: </b>");
    printf("%s<br>", $Bno);
    print ("<b>Street: </b>");
    printf("%s<br>", $Street);
    print ("<b>Area: </b>");
    printf("%s<br>", $Area);
    print ("<b>City: </b>");
    printf("%s<br>", $City);
    print ("<b>Pcode: </b>");
    printf("%s<br>", $Pcode);
    print ("<b>Tel_No: </b>");
    printf("%s<br>", $Tel_No);
    print ("<b>Fax_No: </b>");
    printf("%s<br>", $Fax_No);
    print ("<br><br>\n");
} else {
    print ("<section id=\"boxes\">");
    print ("<div class=\"container\">");
    print ("<h1>Must have valid data entries for each input box</h1>");
}

print ("</div>");
print ("</div>");
print ("</section>");

?>

<?php

html_end('../branchoperations/branchInsert.php');

?>
