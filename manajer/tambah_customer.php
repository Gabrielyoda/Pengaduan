<!DOCTYPE html>
<html lang="en">
<?php
include_once "css.php";

?>

<script type="text/javascript">
	function validasi(form){
 	if (form.password.value != form.repassword.value){
   	alert("Password tidak sama, silahkan ulangi");
   	form.password.focus();
   	return (false);
 }
return (true);
}
</script>
<body class="animsition">
    <div class="page-wrapper">
        <?php
            include_once "sidebar_manajer.php";
        ?>
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <?php
            include_once "header.php";
            ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
           
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="card">
                                    <div class="card-header">Tambah Customer Service</div>
                                    <div class="card-body">
                                        <form action="tambah_customer_proses.php" method="post" onsubmit="return validasi(this)">
                                            <div class="form-group">
                                                <label class="control-label mb-1">Username</label>
                                                <input  type="text" name="username" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label mb-1">E-mail</label>
                                                <input  name="email" type="email" class="form-control cc-name valid" data-val="true" required>
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label mb-1">No Telp</label>
                                                <input  name="no_telp" type="text" class="form-control cc-name valid" data-val="true"  required>
                                            </div>

                                            <div class="form-group">
                                                <label  class="control-label mb-1">Password</label>
                                                <input  name="password" type="password" class="form-control cc-name valid" data-val="true"  required>
                                            </div>

                                            <div class="form-group">
                                                <label  class="control-label mb-1">Re-Password</label>
                                                <input  name="repassword" type="password" class="form-control cc-name valid" data-val="true"  required>
                                            </div>
                                            
                                            
                                            </div>
                                            <div>
                                                <input id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block" value="Tambah">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                       
                        
                        <?php
                            include_once "footer.php"
                        ?>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <?php
       include_once "jquery.php"
    ?>

</body>

</html>
<!-- end document-->
