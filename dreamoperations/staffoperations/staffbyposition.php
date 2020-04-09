<?php

$position = $_GET['position'];

include "../../dreamsetup.php";

$page = "Staff By Position";
$css = "../../";

html_begin ($css, $page);

$conn_id = dream_connect()
or die ("cannot connect to server");

$query = "select Lname, Fname, Address, Tel_No, Position, Sex, DOB,
Salary "
    ."from staff where Position = '$position' order by Sex";

$result_id = mysqli_query ($conn_id, $query)
or die ("Cannot execute query");

print ("<section id=\"boxes\">");
print ("<div class=\"container\">");

if (mysqli_num_rows($result_id)!=0){
    while ($row = mysqli_fetch_assoc($result_id))
    {
        print ("<div class=\"box\">");
        print ("<b>Last Name: </b>");
        printf("%s<br>", $row["Lname"]);
        print ("<b>First Name: </b>");
        printf("%s<br>", $row["Fname"]);
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

html_end('../staffoperations/index.php');

?>
