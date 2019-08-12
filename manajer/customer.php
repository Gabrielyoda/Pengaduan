<!DOCTYPE html>
<html lang="en">
<?php
include_once "css.php";
$query = "select*from user where level='customer_service'";
$result = mysqli_query($connection,$query);

?>
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
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                    <h3 class="title-2">Table Customer Service</h3><br>
                                    <div class="table-data__tool">
                                   
                                        <div class="table-data__tool-right">
                                            <button onclick="location.href='tambah_customer.php'" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add CS</button>
                                        </div>
                                        
                                     </div>
                                    <div class="table-responsive table--no-card m-b-30">
                                    <table id="bootstrap-data-table" class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID user</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>No telp</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
									while($rec = mysqli_fetch_array($result)){
										echo'<tr>';
										echo '<td>'.$rec['id_user'].'</td>';
										echo '<td>'.$rec['username'].'</td>';
										echo '<td>'.$rec['email'].'</td>';
										echo '<td>'.$rec['no_telp'].'</td>';
										echo '<td>	<a href=view_user.php?id_user='.$rec['id_user'].' class="btn btn-success" onclick="return confirm(\'Anda ingin melihat data ini?\')"><i class ="fa fa-eye"></i></a>            <a href=edit_user.php?id_user='.$rec['id_user'].' class="btn btn-primary" onclick="return confirm(\'Anda ingin edit data ini ?\')"><i class ="zmdi zmdi-edit"></i></a>
										<a href=delete_user.php?id_user='.$rec['id_user'].' class="btn btn-danger" onclick="return confirm(\'Yakin?\')"><i class ="fa fa-trash"></i></a>
										</td>';
										echo'<tr>';
									}
									?>
                                        </tbody>
                                    </table>
                                </div>
                                        
                                    </div>
                                </div>
                            </div> 
                        <!--End col-lg-12 -->
                        </div>
                        <!--End Row-->
                       
                        
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
