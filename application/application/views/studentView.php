<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 12/4/18
 * Time: 7:48 PM
 */
?>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    fieldset.for-panel {
        background-color: #fcfcfc;
        border: 1px solid #999;
        border-radius: 4px;
        padding:15px 10px;
        background-color: #d9edf7;
        border-color: #bce8f1;
        background-color: #f9fdfd;
        margin-bottom:12px;
    }
    fieldset.for-panel legend {
        background-color: #fafafa;
        border: 1px solid #ddd;
        border-radius: 5px;
        color: #4381ba;
        font-size: 14px;
        font-weight: bold;
        line-height: 10px;
        margin: inherit;
        padding: 7px;
        width: auto;
        background-color: #d9edf7;
        margin-bottom: 0;
    }
</style>
</head>
<div class="container">
    <div class="row">
        <h2>Student Details</h2>
    </div>
    <?php
    foreach($return->result() as $row){
    ?>
    <div class="row">
        <fieldset class="for-panel">
            <legend>Indian Public School</legend>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-horizontal">
                        <label class="col-xs-4 control-label">Student Name:</label>
                        <p class="form-control-static"><?= $row->NAME ?></p>
                        <label class="col-xs-4 control-label">Roll Number: </label>
                        <p class="form-control-static" id="rollnumb"><?= $row->ROLL ?></p>
                        <label class="col-xs-4 control-label">Account Number:</label>
                        <p class="form-control-static" id="acc"><?= $row->ACCOUNT ?></p>
                        <label class="col-xs-4 control-label">Class: </label>
                        <p class="form-control-static"><?= $row->CLASS ?></p>
                        <label class="col-xs-4 control-label">Contact: </label>
                        <p class="form-control-static"><?= $row->CONTACT ?></p>
                        <label class="col-xs-4 control-label">Conveyance: </label>
                        <p class="form-control-static" id="conveyance"><?= $row->CONVEYANCE ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-horizontal">
                        <label class="col-xs-4 control-label">Father's Name:</label>
                        <p class="form-control-static"> <?= $row->FNAME ?> </p>
                        <label class="col-xs-4 control-label">Mother's Name:</label>
                        <p class="form-control-static"> <?= $row->MNAME ?> </p>
                        <label class="col-xs-4 control-label">Address: </label>
                        <p class="form-control-static"><?= $row->ADDRESS ?></p>
                        <label class="col-xs-4 control-label">Session: </label>
                        <p class="form-control-static"><?= $row->SESSION ?></p>
                        <label class="col-xs-4 control-label">Academic Fee: </label>
                        <p class="form-control-static" id="acadfee"><?= $row->ACADFEE ?> &nbsp;&nbsp;&nbsp;(RN: <?=$row->RECEIPT_ACAD?>)</p>
                        <label class="col-xs-4 control-label">Conveyance Fee: </label>
                        <p class="form-control-static" id="convfee"><?= $row->CONVFEE ?>&nbsp;&nbsp;&nbsp;(RN: <?=$row->RECEIPT_CONV?>)</p>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
        <?php $account=$row->ACCOUNT?>
    <?php }?>
    <br><br>
    <form action="<?php echo base_url();?>index.php/Student/passbook" method="post" >
        <input name="submit" type="submit" class="btn btn-primary" value="Show Fee Details" style="width: 20%; margin-left: 80%"/>
        <input name="acc" type="hidden" id="hidden" value="<?php echo $account?>">

    </form>
    <input name="acc" type="hidden" id="hidden" value="">
    <button type="button" id="btn" onclick="show()" class="btn btn-primary" style="width: 20%">Update Fee</button>
   <!-- <a href="<?php echo base_url();?>index.php/Student/passbook" class="btn btn-info" role="button" style="width:20%">Show Fee Details</a>-->
    <form style="display: none" action="<?=base_url('index.php/Student/updateFee')?>" method="post" id="months">
        <h3>Select months to update Academic fee</h3>
        <input name="rollno" type="hidden" id="hidden" value="">
        <div class="form-horizontal">
            <fieldset>
                <legend>Academic Fee</legend>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Enter Account Number</label>
                    <div class="col-md-4">
                        <input placeholder="Account Number" name="acc" type="text" class="form-control" id="usr">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Select Last Fee Paid Month</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="mon" class="form-control">
                            <option>--Select Month--</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Select Last Fee Paid Year</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="year" class="form-control">
                            <option>--Select Year--</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Enter Latest Receipt Number</label>
                    <div class="col-md-4">
                        <input placeholder="Receipt Number" name="rec" type="text" class="form-control" id="usr">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Enter Amount</label>
                    <div class="col-md-4">
                        <input placeholder="Amount" name="amnt" type="text" class="form-control" id="usr">
                    </div>
                </div>
                <input name="submit" type="submit" class="btn btn-primary" value="Submit" style="width: 20%; margin-left: 40%"/>
            </fieldset>
        </div>
    </form>


<!--   Conveyance --><br><br><br>


    <form style="display: none" action="<?=base_url('index.php/Student/updateConvFee')?>" method="post" id="monthsC">
        <h3>Select months to update Conveyance fee</h3>
        <div class="form-horizontal">
            <fieldset>
                <legend>Conveyance Fee</legend>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Enter Account Number </label>
                    <div class="col-md-4">
                        <input placeholder="Account Number" name="acc" type="text" class="form-control" id="usr">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Select Last Fee Paid Month</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="mon" class="form-control">
                            <option>--Select Month--</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Select Last Fee Paid Year</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="year" class="form-control">
                            <option>--Select Year--</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Enter Latest Receipt Number</label>
                    <div class="col-md-4">
                        <input placeholder="Receipt Number" name="rec" type="text" class="form-control" id="usr">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Enter Amount</label>
                    <div class="col-md-4">
                        <input placeholder="Amount" name="amnt" type="text" class="form-control" id="usr">
                    </div>
                </div>
                <input name="submit" type="submit" class="btn btn-primary" value="Submit" style="width: 20%; margin-left: 40%"/>
            </fieldset>
        </div>
    </form>
</div>
<script type="text/javascript">

//    var status=document.getElementById("conveyance").innerHTML;
//    if(status ==="1"){
//        document.getElementById("conveyance").innerHTML="Available";
//    }
//    else{
//        document.getElementById("conveyance").innerHTML="-";
//    }
    var acad=document.getElementById("acadfee").innerHTML;
    if(acad ==="-1"){
        document.getElementById("acadfee").innerHTML="No fee submitted yet";
    }
    var conv=document.getElementById("convfee").innerHTML;
    if(conv ==="-1"){
        document.getElementById("convfee").innerHTML="No fee submitted yet";
    }
    function show() {
        var x=document.getElementById("btn");
        x.style.display = "none";
        var y=document.getElementById("months");
        y.style.display = "";
        var yy=document.getElementById("monthsC");
        yy.style.display = "";
        var z=document.getElementById("hidden");
        var zz=document.getElementById("hiddenA");
        z.value = document.getElementById("rollnumb").innerHTML;
        zz.value = document.getElementById("rollnumb").innerHTML;
    }
</script>