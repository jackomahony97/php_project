<?php

include "../../dreamsetup.php";

$page = "Branch Information";
$css = "../../";

html_begin ($css, $page);

$conn_id = dream_connect()
or die ("cannot connect to server");

$query = "select Bno, Area, City, Pcode, Tel_No, Fax_No "
    ."from branch order by Bno";

$result_id = mysqli_query ($conn_id, $query)
or die ("Cannot execute query");

print ("<section id=\"boxes\">");
print ("<div class=\"container\">");

if (mysqli_num_rows($result_id)!=0){
    while ($row = mysqli_fetch_assoc($result_id)) {

        print ("<div class=\"box\">");
        print ("<b>Branch Number: </b>");
        printf("%s<br>", $row["Bno"]);
        print ("<b>Area: </b>");
        printf("%s<br>", $row["Area"]);
        print ("<b>City: </b>");
        printf("%s<br>", $row["City"]);
        print ("<b>Postcode: </b>");
        printf("%s<br>", $row["Pcode"]);
        print ("<b>Telephone: </b>");
        printf("%s<br>", $row["Tel_No"]);
        print ("<b>Fax Number: </b>");
        printf("%s<br>", $row["Fax_No"]);
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

html_end('../branchoperations/index.php');

?>
