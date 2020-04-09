<?php

include "../../dreamsetup.php";

$page = "Client Deletion";
$css = "../../";

html_begin ($css, $page);

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <h3>Client Deletion By Cno</h3>
            <form name="ClientDelete" method="GET" action="deleteclient.php">
                <p>Warning: This is irreversible </p>
                Cno (identifier): <input type="text" name="identifier"><br>
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
        </div>
    </div>
</section>

<?php

html_end('../clientoperations.php');

?>