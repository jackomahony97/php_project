<?php

$salary = $_GET['salary'];

include "../../dreamsetup.php";

$page = "Staff By Salary";
$css = "../../";

html_begin ($css, $page);

$conn_id = dream_connect()
or die ("cannot connect to server");

if ($salary == "0"){
    $low = "0";
    $high = "10000";
} elseif ($salary == "10000"){
    $low = "10000";
    $high = "20000";
} elseif ($salary == "20000"){
    $low = "20000";
    $high = "30000";
} elseif ($salary == "30000"){
    $low = "30000";
    $high = "40000";
} else {
    $low = "";
    $high = "";
}

$query = "select Lname, Fname, Address, Tel_No, Position, Sex, DOB, Salary "
    ."from staff where Salary <= '$high' and Salary > '$low' order by Sex";

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
