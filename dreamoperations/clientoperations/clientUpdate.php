<?php

include "../../dreamsetup.php";

$page = "Client Update";
$css = "../../";

html_begin ($css, $page);

$conn_id = dream_connect ()
or die ("Cannot connect to server");

$query = "select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME='client'";

$clientquery = mysqli_query ($conn_id, $query)
or die ("Cannot find client identifiers");

$i = 0;
while ($row = mysqli_fetch_row ($clientquery))
{
    $clientlist[$i] = $row[0];
    $i++;
}

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <h3>Choose a column to update</h3>
            <form name="BranchChoose" method="GET" action="updateclient.php">
                CNO (identifier) :
                <input type="text" name="identifier"><br>
                Column to update:
                <select name="client">
                    <?php
                    foreach($clientlist as $cid)
                    {
                        print ("<option value=\"$cid\"> $cid </option\n>");
                    }
                    ?>
                </select>
                <br>
                Update :
                <input type="text" name="update"><br>
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
        </div>
    </div>
</section>

<?php

html_end('../clientoperations.php');

?>