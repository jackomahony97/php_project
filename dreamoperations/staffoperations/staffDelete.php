<?php

include "../../dreamsetup.php";

$page = "Staff Deletion";
$css = "../../";

html_begin ($css, $page);

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <h3>Staff Delete By Sno</h3>
            <form name="StaffDelete" method="GET" action="deletestaff.php">
                <p>Warning: This is irreversible </p>
                Sno (identifier): <input type="text" name="identifier"><br>
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
        </div>
    </div>
</section>

<?php

html_end('../staffoperations.php');

?>
