<?php

include "../../dreamsetup.php";

$page = "Property For Rent Delete";
$css = "../../";

html_begin ($css, $page);

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <h3>Property For Rent Deletion By Pno</h3>
            <form name="StaffDelete" method="GET" action="deletepropertyforrent.php">
                <p>Warning: This is irreversible </p>
                Pno (identifier): <input type="text" name="identifier"><br>
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
        </div>
    </div>
</section>

<?php

html_end('../propertyoperations.php');

?>