<?php

$number = $_GET['number'];

include "../../dreamsetup.php";

$page = "Client Search By Number";
$css = "../../";

html_begin ($css, $page);

$conn_id = dream_connect()
or die ("cannot connect to server");

$query = "select Cno, Fname, Lname, Address, Tel_No, Pref_Type, Max_Rent "
    ."from client where Cno = '$number' order by Cno";

$result_id = mysqli_query ($conn_id, $query)
or die ("Cannot execute query");

print ("<section id=\"boxes\">");
print ("<div class=\"container\">");

if (mysqli_num_rows($result_id)!=0){
    while ($row = mysqli_fetch_assoc($result_id)) {

        print ("<div class=\"box\">");
        print ("<b>Client Number: </b>");
        printf("%s<br>", $row["Cno"]);
        print ("<b>First Name: </b>");
        printf("%s<br>", $row["Fname"]);
        print ("<b>Last Name: </b>");
        printf("%s<br>", $row["Lname"]);
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
print ("</section>");

mysqli_free_result ($result_id);

?>

<?php

html_end('../clientoperations/index.php');

?>
