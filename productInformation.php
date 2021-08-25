<?php 
    
    if(isset($_GET["id"]) && !empty($_GET["id"])){
        // Get hidden input value
        $id = $_GET["id"];
       
 
        // Attempt select query execution
        $sql = "SELECT * FROM food WHERE id='$id'";
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
             
                    while($row = mysqli_fetch_array($result)){
                       
                            $identification = $row['id'];
                            $image = $row['profile_image'];
                            $name = $row['name'];
                            $description = $row['details'];
                            $price = $row['price'];
                            // echo $row['id'];
                            // echo $row['title'];
                            // // echo $row['content'];
                            // echo $row['author'];
                            // echo $row['publish_date'];
                   
                                                             }
                // Free result set
                mysqli_free_result($result);
            } else{
                echo "<p class='lead'><em>No records were found.</em></p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }

    }

    
    ?>