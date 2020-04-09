<?php

include "../../dreamsetup.php";

$page = "Branch Insertion";
$css = "../../";

html_begin ($css, $page);

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <h3>Branch Insertion</h3>
            <form name="branchChoose" method="GET" action="insertbranch.php">
                Bno: <input type="text" name="Bno"><br>
                Street: <input type="text" name="Street"><br>
                Area: <input type="text" name="Area"><br>
                City: <input type="text" name="City"><br>
                Pcode: <input type="text" name="Pcode"><br>
                Tel_No: <input type="text" name="Tel_No"><br>
                Fax_No: <input type="text" name="Fax_No"><br>
                <input class="button_1" type="submit" name="SubmitVal" value="Submit">
            </form>
            <br>
        </div>
    </div>
</section>

<?php

html_end('../branchoperations.php');

?>


