        <?php 
                $sql = "SELECT name FROM pro LIMIT 1";
                $result = mysqli_query($conn, $sql);
        
                if (mysqli_num_rows($result) > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo $row["name"];
                    }
                }
                        ?>
