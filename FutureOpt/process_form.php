
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values from the form
    $state = $_POST['state'];
    $stream = $_POST['stream'];
    $degree = $_POST['degree'];
    $fee = $_POST['fee'];

    // Validate that the required fields are not empty
    if (!empty($state) && !empty($stream) && !empty($degree) && !empty($fee)) {
        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dataset_opt";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
            // Prepare the SQL query
        if ($fee === "Not an issue") {
            // Remove the fee condition from the SQL query
            $sql = "SELECT * FROM college_data WHERE State = ? AND Stream = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $state, $stream);
        } else {
            // Add the fee condition to the SQL query
            $sql = "SELECT * FROM college_data WHERE State = ? AND Stream = ? AND ";

            if ($degree === "UG") {
                $sql .= "REPLACE(UG_fee, ',', '') ";
            } elseif ($degree === "PG") {
                $sql .= "REPLACE(PG_fee, ',', '') ";
            }
    
            if ($fee === ">50k") {
                $sql .= "BETWEEN 0 AND 50000";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $state, $stream);
            } elseif ($fee === "50k-1L") {
                $sql .= "BETWEEN 50001 AND 100000";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $state, $stream);
            } elseif ($fee === "1L-5L") {
                $sql .= "BETWEEN 100001 AND 500000";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $state, $stream);
            } elseif ($fee === "5L-10L") {
                $sql .= "BETWEEN 500001 AND 1000000";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $state, $stream);
            } elseif ($fee === "10L-20L") {
                $sql .= "BETWEEN 1000001 AND 2000000";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $state, $stream);
            }
        }

        }

        // Execute the statement
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

    
        echo "<div style='font-family: Arial; background-color: white; color: white; padding: 10px; margin-bottom: 10px;'>";

        echo "<table style='width: 100%; border: 1px solid black; border-collapse: collapse;'>";
        echo "<tr>";
        echo "<th>College Name</th>";
        echo "<th>State</th>";
        echo "<th>Stream</th>";
        echo "<th>UG Fee</th>";
        echo "<th>PG Fee</th>";
        echo "<th>Rating</th>";
        echo "<th>Academic</th>";
        echo "<th>Accommodation</th>";
        echo "<th>Faculty</th>";
        echo "<th>Infrastructure</th>";
        echo "<th>Placement</th>";
        echo "<th>Social Life</th>";
        echo "</tr>";
        
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['College_Name'] . "</td>";
                echo "<td>" . $row['State'] . "</td>";
                echo "<td>" . $row['Stream'] . "</td>";
                echo "<td>" . $row['UG_fee'] . "</td>";
                echo "<td>" . $row['PG_fee'] . "</td>";
                echo "<td>" . $row['Rating'] . "</td>";
                echo "<td>" . $row['Academic'] . "</td>";
                echo "<td>" . $row['Accommodation'] . "</td>";
                echo "<td>" . $row['Faculty'] . "</td>";
                echo "<td>" . $row['Infrastructure'] . "</td>";
                echo "<td>" . $row['Placement'] . "</td>";
                echo "<td>" . $row['Social_Life'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='12'>No matching rows found.</td></tr>";
        }
        
        echo "</table>";
        echo "</div>";
        
    }
?>