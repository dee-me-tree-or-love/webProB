<?php

// I don't understand why does not it work.


include 'DBCONNECT.php';



 echo "<script type='text/javascript'> alert('{$_SESSION['email']}');</script>";    
if($usercred == $_SESSION['creds'])
{
    $sql = 'UPDATE probusers SET SUBSCRIPTION=:subscription, NAME=:name WHERE email=:email';
    $stmt = $db->prepare($sql);
    
    
    if(isset($_POST['subscription'])&& $_POST['subscription'] == 'yes')
    {        
        $subscription = 1;        
    }
    else
    {
        $subscription = 0;
    }
    
    echo "<script type='text/javascript'> alert('{$_POST['username']}'); window.location.replace('../account.php'); </script>";
            
    // update
        $result = $stmt->execute([
        ':email' => $_POST['email'],
        
        ':subscription' => $subscription,
        ':name' => $_POST['username']
        ]);
        
        
        
        if($result)
        {
            //if successfull
            $_SESSION['username'] = $_POST['username'];
            // To show alert
            echo "<script type='text/javascript'> alert('Success'); window.location.replace('../account.php'); </script>";
            // end
          
        }
        else
        {
            // To show alert
            echo "<script type='text/javascript'> alert('Sorry, something went wrong'); window.location.replace('../account.php'); </script>";
            // end
        }
    
}
// credentials were not verified, reload the page
else
{
    // To show alert
    echo "<script type='text/javascript'> alert('Sorry, entered wrong credentials, try again'); window.location.replace('../account.php'); </script>";
    // end
}


?>