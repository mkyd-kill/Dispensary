<!-- This is the page to be shown after the search is completed -->
<?php
    include 'dbh.php';
    include 'header.php';
?>
<body>
<nav class="navbar navbar-fixed navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href='index.php' rel='noopener noreferrer' style='color:bisque; text-decoration:none; font-family: Times New Roman, Arial, Helvetica; font-weight: bold; font-size: 20px;'>Return to home</a>
    </div>
</nav>
    <div class="container">
        <header class="header">
            <h1 id="title" class="text-center">Patient's Search Results: </h1>
            <p id="description" class="description text-center"></p>
        </header>

        <form>
            <div class="article-container" style="background-color:antiquewhite; color:black; margin:2px; padding: 3px; border-radius:5px;">
            <?php
                // setting the submit button properties
                if(isset($_POST['name'])) {
                    $search = mysqli_real_escape_string($conn, $_POST['name']);
                    $sql = "SELECT * FROM search_box WHERE fullname LIKE '%$search%' OR patient_id LIKE '%$search%'";
                    $result = mysqli_query($conn, $sql) or die(mysqli_error());
                    $queryResult = mysqli_num_rows($result);

                    // conditional statement
                    if($queryResult > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='search-box'>
                                <h2>Full Name: ".$row['fullname']."</h2>
                                <h3>Patient's Hospital ID: ".$row['patient_id']."</h3>
                                <p>Age: ".$row['age']."Years</p>
                                <p>Height: ".$row['height']."CM</p>
                                <p>Gender: ".$row['gender']."</p>
                                <p>Doctor in Charge: ".$row['doctor']."</p>
                                <p>Diagnosis: ".$row['disease']."</p>
                                <p>Prescription: ".$row['medicine']."</p>
                                <br>
                                </div>";
                        }
                    }
                    else {
                        echo "<div class='error-message' style='color: red;'>
                            <h3>Error !!!</h3>
                            <p>There are no results matching your search</p>
                            <a href='index.php' rel='noopener noreferrer' style='color:black; text-decoration:none; align: center; font-family: Times New Roman, Arial, Helvetica; font-weight: bold; font-size: 20px;'>Try again</a>
                        </div>";
                    }
                }
            ?>
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>