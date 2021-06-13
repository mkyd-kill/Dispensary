<?php
    include 'header.php';
?>
<body>
<?php
    include 'dbh.php';

    // variables
    $patient_id = $_POST['patient_id'];
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $gender = $_POST['gender'];
    $doctor = $_POST['doctor'];
    $disease = $_POST['disease'];
    $medicine = $_POST['medicine'];

    // patient_id validation
    $myID = "SELECT patient_id, fullname FROM search_box";
    $resultID = mysqli_query($conn, $myID);
    $queryID = mysqli_num_rows($resultID);


    // Create connections
    if (!$conn) {
        die("Could not connect to server: ".$conn->mysql_error);
    }

    // Check connection
    if($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("INSERT INTO search_box(patient_id, fullname, age, height, gender, doctor, disease, medicine) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isiissss", $patient_id, $fullname, $age, $height, $gender, $doctor, $disease,$medicine);
        $stmt->execute();
        echo "<div aria-live='polite' aria-atomic='true' class='d-flex justify-content-center align-items-center' style='height: 200px;'>
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <h3><strong>Submittion has been Successful!!!</strong></h3>
          </div>
        </div>
        <a href='index.php' rel='noopener noreferrer' style='color:black; text-decoration:none; align: center; font-family: Times New Roman, Arial, Helvetica; font-weight: bold; font-size: 20px;'>Back Home</a>";
        $stmt->close();
        $conn->close();
    }
?>
</body>
</html>