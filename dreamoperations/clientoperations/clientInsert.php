<?php

include "../../dreamsetup.php";

$page = "Client Insertion";
$css = "../../";

html_begin ($css, $page);

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <h3>Client Insertion</h3>
            <form name="clientChoose" method="GET" action="insertclient.php">
                Cno: <input type="text" name="Cno"><br>
                Fname: <input type="text" name="Fname"><br>
                Lname: <input type="text" name="Lname"><br>
                Address: <input type="text" name="Address"><br>
                Tel_No: <input type="text" name="Tel_No"><br>
                Pref_Type: <input type="text" name="Pref_Type"><br>
                Max_Rent: <input type="text" name="Max_Rent"><br>
                <input class="button_1" type="submit" name="SubmitVal" value="Submit">
            </form>
            <br>
        </div>

    </div>
</section>

<?php

html_end('../clientoperations.php');

?>