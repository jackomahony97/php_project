<?php

$identifier = $_GET['identifier'];
$column = $_GET['staff'];
$update = $_GET['update'];

include "../../dreamsetup.php";

$page = "Staff Update";
$css = "../../";

html_begin ($css, $page);

$conn_id = dream_connect()
or die ("cannot connect to server");

$query = "update staff set $column = '$update' where Sno = '$update'";

$result_id = mysqli_query($conn_id, $query)
or die ("Cannot execute query");

if ($result_id)
{
    $query2 = "select * from staff where Sno = '$identifier' order by Lname";
    $result_id2 = mysqli_query($conn_id, $query2)
    or die ("Cannot execute query");
} else {
    $result_id2 = NULL;
}

print ("<section id=\"boxes\">");
print ("<div class=\"container\">");

if (mysqli_num_rows($result_id2)!=0){
    while ($row = mysqli_fetch_assoc($result_id2))
    {
        print ("<h1>Data Update Successful</h1>");
        print ("<div class=\"box\">");
        print ("<b>Last Name: </b>");
        printf("%s<br>", $row["LName"]);
        print ("<b>First Name: </b>");
        printf("%s<br>", $row["FName"]);
        print ("<b>Sno: </b>");
        printf("%s<br>", $row["Sno"]);
        print ("<b>Address: </b>");
        printf("%s<br>", $row["Address"]);
        print ("<b>Telephone: </b>");
        printf("%s<br>", $row["Tel_No"]);
        print ("<b>Occupation: </b>");
        printf("%s<br>", $row["Position"]);
        print ("<b>Date of Birth: </b>");
        printf("%s<br>", $row["DOB"]);
        print ("<b>Salary: </b>");
        printf("%s<br>", $row["Salary"]);
        print ("<b>Sex: </b>");
        printf("%s<br>", $row["Sex"]);
        print ("<b>NIN: </b>");
        printf("%s<br>", $row["NIN"]);
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

html_end('../staffoperations/staffUpdate.php');

?>
