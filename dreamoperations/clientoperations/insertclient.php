<?php

$Cno = $_GET['Cno'];
$Fname = $_GET['Fname'];
$Lname = $_GET['Lname'];
$Address = $_GET['Address'];
$Tel_No = $_GET['Tel_No'];
$Pref_Type = $_GET['Pref_Type'];
$Max_Rent = $_GET['Max_Rent'];

include "../../dreamsetup.php";

$page = "Client Insertion";
$css = "../../";

html_begin ($css, $page);

if ($Cno != '' and $Fname != '' and $Lname != '' and $Address != '' and $Tel_No != '' and $Pref_Type != '' and $Max_Rent != '')
{
    $conn_id = dream_connect()
    or die ("cannot connect to server");

    $query = "insert into client(Cno, Fname, Lname, Address, Tel_No, Pref_Type, Max_Rent) "
        . "values ('$Cno', '$Fname', '$Lname', '$Address', '$Tel_No', '$Pref_Type', '$Max_Rent')";
    $result_id = mysqli_query($conn_id, $query)
    or die ("Cannot execute query");
    # read & display results of query, then clean up
    # DATA_PRINT_LOOP

    print ("<section id=\"boxes\">");
    print ("<div class=\"container\">");

    print ("<h1>Data Insertion Successful</h1>");

    print ("<div class=\"box\">");

    print ("<b>Sno: </b>");
    printf("%s<br>", $Cno);
    print ("<b>First Name: </b>");
    printf("%s<br>", $Fname);
    print ("<b>Last Name: </b>");
    printf("%s<br>", $Lname);
    print ("<b>Address: </b>");
    printf("%s<br>", $Address);
    print ("<b>Telephone: </b>");
    printf("%s<br>", $Tel_No);
    print ("<b>Preference Type: </b>");
    printf("%s<br>", $Pref_Type);
    print ("<b>Max Rent: </b>");
    printf("%s<br>", $Max_Rent);

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

html_end('../clientoperations/clientInsert.php');

?>
