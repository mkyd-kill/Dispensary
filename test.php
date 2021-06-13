<?php
    if(isset($_POST['submit'])) {
        $search = mysqli_real_escape_string($conn, $_POST['submit']);
        $sql = "SELECT * FROM search_box WHERE fullname LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        // conditional statement
        if($queryResult == 0) {
            echo "<div class='error-message'>
                <h3>Error !!!</h3>
                <p>There are no results matching your search</p>
                <a class='back' href='index.php' rel='noopener noreferrer'>Try again</a>
            </div>";
        }
        else {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='search-box'>
                    <h2>Full Name: ".$row['fullname']."</h2>
                    <div>Age: ".$row['age']."</div>
                    <div>Height (CM): ".$row['height']."</div>
                    <div>Date Admitted: ".$row['date_admitted']."</div>
                    <p>Disease: ".$row['disease']."</p>
                    <p>Medicine: ".$row['medicine']."</p>
                    <a class='back' href='index.php' rel='noopener noreferrer'>Return to home</a>
                </div>";
            }
        }
    }
?>