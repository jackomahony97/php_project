<?php

$Sno = $_GET['Sno'];
$Fname = $_GET['Fname'];
$Lname = $_GET['Lname'];
$Address = $_GET['Address'];
$Tel_No = $_GET['Tel_No'];
$Position = $_GET['Position'];
$Sex = $_GET['Sex'];
$DOB = $_GET['DOB'];
$Salary = $_GET['Salary'];
$NIN = $_GET['NIN'];
$Bno = $_GET['Bno'];

include "../../dreamsetup.php";

$page = "Staff Insertion";
$css = "../../";

html_begin ($css, $page);

if ($Sno != '' and $Fname != '' and $Lname != '' and $Address != '' and $Tel_No != '' and $Position != '' and $Sex != '' and $DOB != '' and $Salary != '' and $NIN != '' and $Bno != '')
{
    $conn_id = dream_connect()
    or die ("cannot connect to server");

    $query = "insert into staff(Sno, Fname, Lname, Address, Tel_No, Position, Sex, DOB, Salary, NIN, Bno) "
        . "values ('$Sno', '$Fname', '$Lname', '$Address', '$Tel_No', '$Position', '$Sex', '$DOB', '$Salary', '$NIN', '$Bno')";

    $result_id = mysqli_query($conn_id, $query)
    or die ("Cannot execute query");

    print ("<section id=\"boxes\">");
    print ("<div class=\"container\">");
    print ("<h1>Data Insertion Successful</h1>");
    print ("<div class=\"box\">");
    print ("<b>Sno: </b>");
    printf("%s<br>", $Sno);
    print ("<b>First Name: </b>");
    printf("%s<br>", $Fname);
    print ("<b>Last Name: </b>");
    printf("%s<br>", $Lname);
    print ("<b>Address: </b>");
    printf("%s<br>", $Address);
    print ("<b>Telephone: </b>");
    printf("%s<br>", $Tel_No);
    print ("<b>Occupation: </b>");
    printf("%s<br>", $Position);
    print ("<b>Sex: </b>");
    printf("%s<br>", $Sex);
    print ("<b>Date of Birth: </b>");
    printf("%s<br>", $DOB);
    print ("<b>Salary: </b>");
    printf("%s<br>", $Salary);
    print ("<b>NIN: </b>");
    printf("%s<br>", $NIN);
    print ("<b>Bno: </b>");
    printf("%s<br>", $Bno);
    print ("<br><br>\n");
} else {
    print ("<section id=\"boxes\">");
    print ("<div class=\"container\">");
    print ("<h1>Must have data entries for First name, Last name and Position</h1>");
    print ("<h1>Must have valid data entries for each input box</h1>");
}

print ("</div>");
print ("</div>");
print ("</section>");

?>

<?php

html_end('../staffoperations/staffInsert.php');

?>
