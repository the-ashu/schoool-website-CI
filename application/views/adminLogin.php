<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 21/4/18
 * Time: 2:23 AM
 */
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal container" method="post" action="<?=base_url()?>index.php/Welcome/loginCheck">
    <fieldset>

        <!-- Form Name -->
        <legend style="padding-left: 40%">Admin Panel Login</legend>
        <!-- Text input-->
        <div class="form-group" style="padding-top:10%;">
            <label class="col-md-4 control-label" for="userName">User ID</label>
            <div class="col-md-4">
                <input id="userName" name="userName" type="text" placeholder="name" class="form-control input-md">

            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput">Password</label>
            <div class="col-md-4">
                <input id="passwordinput" name="passwordinput" type="password" placeholder="********" class="form-control input-md">

            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
                <input  id="btnSubmit" type="submit" name="Submit" class="btn btn-default" value="Submit">
            </div>
        </div>

    </fieldset>
</form>

