    <?php  
    $host = 'localhost:3306';  
    $user = 'root';  
    $pass = '';  
    $dbname = 'php_sql';  
      
    $conn = mysqli_connect($host, $user, $pass,$dbname);  
    if(!$conn){  
      die('Could not connect: '.mysqli_connect_error());  
    }  
    echo 'Connected successfully<br/>';  
      
    $sql = 'INSERT INTO employee(name,emp_salary) VALUES ("Akash", 30000)';  
    if(mysqli_query($conn, $sql)){  
     echo "Record inserted successfully";  
    }else{  
    echo "Could not insert record: ". mysqli_error($conn);  
    }  
      
    mysqli_close($conn);  
    ?>  
