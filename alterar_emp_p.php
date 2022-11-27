<?php
    session_start();    
      include "conexao/conectar.php";
      if (isset($_GET['cadastro'])){

        $id = $_GET['sele'];
    
        $emp=mysqli_query($conectar, "select * from empresa where id='$id';");
    
          if(mysqli_num_rows($emp) != 0){
            $_SESSION['id'] = "$id";
            header ("location:alterar_emp_form.php");
          }
          else{
            header ("location:alterar_emp.php");
          }
    }
?>