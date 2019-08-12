<?php
session_start();
   require_once ("../config/connection.php");
   if(isset($_POST['submit'])){

      $username   = $_POST['username'];   
      $password   = $_POST['password'];

      $query ="SELECT * FROM user WHERE username='$username' AND password='$password'";
      $result = mysqli_query($connection,$query);
      if(mysqli_num_rows($result) == 0){
   ?>
    <script type="text/javascript">
      alert("Data belum terdaftar, silahkan daftar ulang!");
       document.location="login.php";
    </script> 
<?php
      }else{
         $row = mysqli_fetch_array($result);
         if($row['level'] == "manajer" ){
           session_start();
            $_SESSION['username']=$username;
            $_SESSION['level']='manajer';
            $_SESSION['email']=$row['email'];
            header("Location:../manajer/index.php");

         }else if($row['level'] == "customer_service" ){
            session_start();
            $_SESSION['username']=$username;
            $_SESSION['level']='customer_service';
            $_SESSION['email']=$row['email'];
            header("Location:../customer_service/index.php");

         }
         else {
      ?>
       <script type="text/javascript">
         alert("Login Gagal");
         document.location="login.php";
       </script>
      <?php
         }
      }
   }
?>