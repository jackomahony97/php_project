<?php

include "../../dreamsetup.php";

$page = "Branch Update";
$css = "../../";

html_begin ($css, $page);

$conn_id = dream_connect ()
or die ("Cannot connect to server");

$query1 = "select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME='branch'";

$branchquery = mysqli_query ($conn_id, $query1)
or die ("Cannot find staff identifiers");

$i = 0;
while ($row = mysqli_fetch_row ($branchquery))
{
    $branchlist[$i] = $row[0];
    $i++;
}

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <h3>Choose a column to update</h3>
            <form name="BranchChoose" method="GET" action="updatebranch.php">
                BNO (identifier) :
                <input type="text" name="identifier"><br>
                Column to update:
                <select name="branch">
                    <?php
                    foreach($branchlist as $bid)
                    {
                        print ("<option value=\"$bid\"> $bid </option\n>");
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

html_end('../branchoperations.php');

?>