
<?php include("session_mgt_bf_login.php");?>
<?php include("header.php");?>
<?php include("navbar.php");?>
<div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-5">
                <div class="card ">
                    <div class="card-header bg-primary text-white">Create New Account</div>
                    <div class="card-body">
                        <form action="signup_process.php" method="POST">
                            <table class="table borderless">
                                <tr>
                                    <td><input type="text" name="username" placeholder="Enter Username" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input type="password" name="password" placeholder="Enter Password" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><select name="gender" class="form-control">
                                        <option selected value="-1">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="email" placeholder="Enter Email" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="mobile" placeholder="Enter Mobile" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Signup" class="btn btn-primary btn-full"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
</div>

<?php include("footer.php");?>