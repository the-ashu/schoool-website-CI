<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 13/4/18
 * Time: 3:40 AM
 */
?>
<head>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<div class="container">
<!--<div class="btn-toolbar">-->
<!--    <button class="btn btn-primary">New User</button>-->
<!--    <button class="btn">Import</button>-->
<!--    <button class="btn">Export</button>-->
<!--</div>-->
<div class="well">
    <table class="table" id="myTable">
        <thead>
        <tr>
            <th onclick="sortTable(0)">RollNO.</th>>
            <th onclick="sortTable(1)">Name </th>
            <th>Father's Name</th>
            <th>Contact</th>
            <th>CLASS</th>
            <th>ACADFEE</th>
            <th>CONVFEE</th>
            <th>CONVEYANCE</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = 0;

        foreach ($return->result() as $row)
        {
        $i++;
        ?>

            <tr>
                <td><?=$row->ROLL?></td>
                <td><?=$row->NAME?></td>
                <td><?=$row->FNAME?></td>
                <td><?=$row->CONTACT?></td>
                <td><?=$row->CLASS?></td>
                <td id="acadfee"><?=$row->ACADFEE?></td>
                <td id="convfee"><?=$row->CONVFEE?></td>
                <td><?=$row->CONVEYANCE?></td>
            </tr>
        <?php
            echo "
            <script type=\"text/javascript\">
                var acad=document.getElementById(\"acadfee\").innerHTML;
                if(acad ===\"-1\"){
                    document.getElementById(\"acadfee\").innerHTML=\"No fee submitted yet\";
                }
                var conv=document.getElementById(\"convfee\").innerHTML;
                if(conv ===\"-1\"){
                    document.getElementById(\"convfee\").innerHTML=\"No fee submitted yet\";
                }
            </script>";
        }
        ?>
        </tbody>
    </table>
</div>
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
    </div>
</div>
</div>
<script type="text/javascript">
function sortTable(n) {
var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
table = document.getElementById("myTable");
switching = true;
//Set the sorting direction to ascending:
dir = "asc";
/*Make a loop that will continue until
no switching has been done:*/
while (switching) {
//start by saying: no switching is done:
switching = false;
rows = table.getElementsByTagName("TR");
/*Loop through all table rows (except the
first, which contains table headers):*/
for (i = 1; i < (rows.length - 1); i++) {
//start by saying there should be no switching:
shouldSwitch = false;
/*Get the two elements you want to compare,
one from current row and one from the next:*/
x = rows[i].getElementsByTagName("TD")[n];
y = rows[i + 1].getElementsByTagName("TD")[n];
/*check if the two rows should switch place,
based on the direction, asc or desc:*/
if (dir == "asc") {
if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
//if so, mark as a switch and break the loop:
shouldSwitch= true;
break;
}
} else if (dir == "desc") {
if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
//if so, mark as a switch and break the loop:
shouldSwitch= true;
break;
}
}
}
if (shouldSwitch) {
/*If a switch has been marked, make the switch
and mark that a switch has been done:*/
rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
switching = true;
//Each time a switch is done, increase this count by 1:
switchcount ++;
} else {
/*If no switching has been done AND the direction is "asc",
set the direction to "desc" and run the while loop again.*/
if (switchcount == 0 && dir == "asc") {
dir = "desc";
switching = true;
}
}
}
}
</script>
