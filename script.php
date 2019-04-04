<body>
    <?php
    
    $host = "localhost";
    $user ="root";
    $pw = "";
    $bd = "tp3_base";
    $id=mysqli_connect($host, $user, $pw);
    mysqli_select_db($id,$bd);
    
    $loginExist = "SELECT login from user WHERE login = '".$_POST["login"]."'";
     $res=mysqli_query($id,$loginExist);
    $nb=mysqli_num_rows($res);
       if($nb>0)
       {
           echo "existant";
           header("location:tp3.php");
       }
    else
    {$sql="INSERT INTO user(login, mdp) VALUES('".$_POST["login"]."','".$_POST["mdp"]."')";
   
    mysqli_query($id,$sql);}
        ?>
</body>