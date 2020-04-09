<?php

include "../dreamsetup.php";

$page = "Client Operations";
$css = "../";

html_begin ($css, $page);

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <a href="clientoperations/index.php"><h3>Client Queries</h3></a>
            <p>Here you can query the Viewing table using commonly used queries</p>
        </div>
        <div class="box">
            <a href="clientoperations/clientInsert.php"><h3>Client Insertions</h3></a>
            <p>Here you can insert data into the Viewing table using commonly used insertions</p>
        </div>
        <div class="box">
            <a href="clientoperations/clientUpdate.php"><h3>Client Updates</h3></a>
            <p>Here you can update data in the Viewing table using commonly used updates</p>
        </div>
        <div class="box">
            <a href="clientoperations/clientDelete.php"><h3>Client Deletions</h3></a>
            <p>Here you can delete data in the Viewing table using commonly used deletions</p>
        </div>
    </div>
</section>

<?php

html_end('../index.php');

?>