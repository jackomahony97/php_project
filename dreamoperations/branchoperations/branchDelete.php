<?php

include "../../dreamsetup.php";

$page = "Branch Deletion";
$css = "../../";

html_begin ($css, $page);

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <h3>Branch Deletion By Bno</h3>
            <form name="BranchDelete" method="GET" action="deletebranch.php">
                <p>Warning: This is irreversible </p>
                Bno (identifier):
                <input type="text" name="identifier"><br>
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
        </div>
    </div>
</section>

<?php

html_end('../branchoperations.php');

?>