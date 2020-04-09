<?php

include "../dreamsetup.php";

$page = "Staff Operations";
$css = "../";

html_begin ($css, $page);

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <a href="staffoperations/index.php"><h3>Staff Queries</h3></a>
            <p>Here you can query the Staff table using commonly used queries</p>
        </div>
        <div class="box">
            <a href="staffoperations/staffInsert.php"><h3>Staff Insertions</h3></a>
            <p>Here you can insert data into the Staff table using commonly used insertions</p>
        </div>
        <div class="box">
            <a href="staffoperations/staffUpdate.php"><h3>Staff Updates</h3></a>
            <p>Here you can update data in the Staff table using commonly used updates</p>
        </div>
        <div class="box">
            <a href="staffoperations/staffDelete.php"><h3>Staff Deletions</h3></a>
            <p>Here you can delete data from the Staff table using commonly used deletions</p>
        </div>
    </div>
</section>

<?php

html_end('../index.php');

?>