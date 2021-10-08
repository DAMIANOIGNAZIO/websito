<?php 

  if(isset($_POST['btn-send']))
  {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $messaggio = $_POST['messaggio'];

    if(empty($nome) || empty($email) || empty($messaggio)){
        header('location:index.php?error');
    }
    else{
        $to = "corallodamiano1@gmail.com";
        if(mail($to,$messaggio,$email))
        {
            header("location:index.php?success");
        }
    }
}
else{
    header("location:index.php");
}
?>