<?php

include "../../dreamsetup.php";

$page = "Property For Rent Insertion";
$css = "../../";

html_begin ($css, $page);

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <h3>Property For Rent Insertion</h3>
            <form name="BranchChoose" method="GET" action="insertpropertyforrent.php">
                PNO: <input type="text" name="Pno"><br>
                Street: <input type="text" name="Street"><br>
                Area: <input type="text" name="Area"><br>
                City: <input type="text" name="City"><br>
                Pcode: <input type="text" name="Pcode"><br>
                Type: <input type="text" name="Type"><br>
                Rooms: <input type="text" name="Rooms"><br>
                Rent: <input type="text" name="Rent"><br>
                ONO: <input type="text" name="Ono"><br>
                SNO: <input type="text" name="Sno"><br>
                BNO: <input type="text" name="Bno"><br>
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
            <br>
        </div>
    </div>
</section>

<?php

html_end('../propertyoperations.php');

?>

