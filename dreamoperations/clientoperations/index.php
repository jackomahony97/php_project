<?php

include "../../dreamsetup.php";

$page = "Client Queries";
$css = "../../";

html_begin ($css, $page);

$conn_id = dream_connect ()
or die ("Cannot connect to server");

$query1 = "select distinct Pref_Type from client where Pref_Type is not null order by Pref_Type";

$prefquery = mysqli_query ($conn_id, $query1)
or die ("Cannot find city identifiers");

$i = 0;
while ($row = mysqli_fetch_row ($prefquery))
{
    $preflist[$i] = $row[0];
    $i++;
}

mysqli_free_result ($prefquery);

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <h3>Client Information</h3>
            <form name="ClientChoose" method="GET" action="client.php">
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
            <br>
        </div>
        <div class="box">
            <h3>Client Number Search</h3>
            <form name="ClientSearch" method="GET" action="clientbynumber.php">
                Client Number: <input type="text" name="number"><br>

                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
        </div>
        <div class="box">
            <h3>Client Name Search</h3>
            <form name="ClientSearchName" method="GET" action="clientbyname.php">
                Client First Name: <input type="text" name="fname"><br>

                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
        </div>
        <div class="box">
            <h3>Client By Preference Type</h3>
            <form name="ClientCity" method="GET" action="clientbypreferencetype.php">
                Preference Type:
                <select name="pref">
                    <?php
                    foreach($preflist as $cid)
                    {
                        print ("<option value=\"$cid\"> $cid </option\n>");
                    }
                    ?>
                </select>
                <br>
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
        </div>
    </div>
</section>

<?php

html_end('../clientoperations.php');

?>