    <?php  
    $host = 'localhost:3306';  
    $user = 'root';  
    $pass = '';  
    $dbname = 'phpdb';  
      
    $conn = mysqli_connect($host, $user, $pass,$dbname);  
    if(!$conn){  
      die('Could not connect: '.mysqli_connect_error());  
    }  
    echo 'Connected successfully<br/>';  
      
    $id=2;  
    $name="Akash";  
    $salary=40000;  
    $sql = "update employee set name=\"$name\", emp_salary=$salary where id=$id";  
    if(mysqli_query($conn, $sql)){  
     echo "Record updated successfully";  
    }else{  
    echo "Could not update record: ". mysqli_error($conn);  
    }  
      
    mysqli_close($conn);  
    ?>  
