<?php
include ('db_connection.php');

// initialize variables
      
        function readData(){
           
            $data = '<table class="table table-bordered table-striped">
        
                        <tr>
                            <th>No.</th>
                            <th>Username</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Miasto</th>
                            <th>Kod Pocztowy</th>
                            <th>Adres</th>
                            <th>Email</th>
                            <th>Hasło</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>';
 
   $query = "SELECT * FROM users";
 
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
 
 
    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
        $number = 1;
        while($row = mysqli_fetch_assoc($result))
        {
            $data .= '<tr>
                <td>'.$id.'</td>
                <td>'.$row['username'].'</td>
                <td>'.$row['first_name'].'</td>
                <td>'.$row['last_name'].'</td>
                <td>'.$row['city'].'</td>
                <td>'.$row['zipcode'].'</td>
                <td>'.$row['adress'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['password'].'</td>
                <td>
                    <button onclick="GetUserDetails('.$row['id'].')" class="btn btn-warning">Update</button>
                </td>
                <td>
                    <button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>
                </td>
            </tr>';
            $number++;
        }
    }
    else
    {
        // records now found 
        $data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }
 
    $data .= '</table>';
 
    echo $data;

        }

    
  ?>  