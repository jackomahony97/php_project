<?php

include "../../dreamsetup.php";

$page = "Staff Queries";
$css = "../../";

html_begin ($css, $page);

$conn_id = dream_connect ()
or die ("Cannot connect to server");

$query1 = "select distinct Bno from staff order by Bno";
$query2 = "select distinct Sex from staff order by Sex";
$query3 = "select distinct Position from staff order by Position ";

$branchquery = mysqli_query ($conn_id, $query1)
or die ("Cannot find staff identifiers");

$genderquery = mysqli_query ($conn_id, $query2)
or die ("Cannot find staff identifiers");

$positionquery = mysqli_query ($conn_id, $query3)
or die ("Cannot find staff identifiers");

$i = 0;
while ($row = mysqli_fetch_row ($branchquery))
{
    $branchlist[$i] = $row[0];
    $i++;
}

$i = 0;
while ($row = mysqli_fetch_row ($genderquery))
{
    $genderlist[$i] = $row[0];
    $i++;
}

$i = 0;
while ($row = mysqli_fetch_row ($positionquery))
{
    $positionlist[$i] = $row[0];
    $i++;
}

mysqli_free_result ($branchquery);
mysqli_free_result ($genderquery);
mysqli_free_result ($positionquery);

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <h3>Staff Information</h3>
            <form name="BranchChoose" method="GET" action="staff.php">
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
            <br>
        </div>
        <div class="box">
            <h3>Staff By Branch</h3>
            <form name="BranchChoose" method="GET" action="staffbybranch.php">
                Branch :
                <select name="branchnum">
                    <?php
                    foreach($branchlist as $bid)
                    {
                        print ("<option value=\"$bid\"> $bid </option\n>");
                    }
                    ?>
                </select>
                <br>
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
        </div>
        <div class="box">
            <h3>Staff By Gender</h3>
            <form name="GenderChoose" method="GET" action="staffbygender.php">
                Gender :
                <select name="gender">
                    <?php
                    foreach($genderlist as $gid)
                    {
                        print ("<option value=\"$gid\"> $gid </option\n>");
                    }
                    ?>
                </select>
                <br>
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
        </div>
        <div class="box">
            <h3>Staff By Position</h3>
            <form name="PositionChoose" method="GET" action="staffbyposition.php">
                Position :
                <select name="position">
                    <?php
                    foreach($positionlist as $pid)
                    {
                        print ("<option value=\"$pid\"> $pid </option\n>");
                    }
                    ?>
                </select>
                <br>
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
        </div>
        <div class="box">
            <h3>Staff By Salary</h3>
            <form name="SalaryChoose" method="GET" action="staffbysalary.php">
                Salary :
                <select name="salary">
                    <option value="0">0 - 10000</option>
                    <option value="10000">10000 - 20000</option>
                    <option value="20000">20000 - 30000</option>
                    <option value="30000">30000 - 40000</option>
                </select>
                <br>
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
        </div>
    </div>
</section>

<?php

html_end('../staffoperations.php');

?>