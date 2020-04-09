<?php

include "../dreamsetup.php";

$page = "Branch Operations";
$css = "../";

html_begin ($css, $page);

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <a href="branchoperations/index.php"><h3>Branch Queries</h3></a>
            <p>Here you can query the Branch table using commonly used queries</p>
        </div>
        <div class="box">
            <a href="branchoperations/branchInsert.php"><h3>Branch Insertions</h3></a>
            <p>Here you can insert data into the Branch table using commonly used insertions</p>
        </div>
        <div class="box">
            <a href="branchoperations/branchUpdate.php"><h3>Branch Updates</h3></a>
            <p>Here you can update data in the Branch table using commonly used updates</p>
        </div>
        <div class="box">
            <a href="branchoperations/branchDelete.php"><h3>Branch Deletions</h3></a>
            <p>Here you can delete data in the Branch table using commonly used deletions</p>
        </div>
    </div>
</section>

<?php

html_end('../index.php');

?>