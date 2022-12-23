<?php


include_once 'connect.php';



//User must declare an email

if (isset($_POST['email'])) {

    //Collect information from the form page    

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password =  mysqli_real_escape_string($conn, $_POST['password']);
    
    //Prepare a statement
    $stmt = mysqli_stmt_init($conn);
    
    //query in database
    $sql = "SELECT email, password FROM signup WHERE email=?  AND password=? LIMIT 1;";
    
    mysqli_stmt_prepare($stmt, $sql);
    
    //bind the form.
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);

    // Get the result of the query
    $result = mysqli_stmt_get_result($stmt);
  
    //check if correct password
    if (mysqli_num_rows($result) == 1) {
        header("location:/login=correct");
        echo "password correct!";
    }
    else{
       header("location:/login=incorrect");
        
    }
   
}
