<?php
    include 'header.php';
    include 'dbh.php';
?>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Medicine InStock</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More Options
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="index.php" target="_top" rel="noopener noreferrer" style='color:bisque; text-decoration:none; align: center;'>Home</a></li>
                        <li><a class="dropdown-item" href="add.php" target="_top" rel="noopener noreferrer" style='color:bisque; text-decoration:none; align: center;'>Add Patient</a><li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
</nav>
    <div class="container">
        <header class="header">
            <p id="description" class="description text-center">Accountability of different entities prevents future losses</p>
        </header>
        <div class="article-container" onpaste="return false;" oncopy="return false;" oncut="return false;" ondrag="return false;" ondrop="return false;" autocomplete=off>
            <?php
                $sql = "SELECT * FROM medicine_box";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);
                if($queryResult > 0) {
                    echo "
                        <table class='table table-dark table-striped'>
                        <thead>
                          <tr>
                            <th scope='col'>Batch_No</th>
                            <th scope='col'>Serial_No</th>
                            <th scope='col'>Name</th>
                            <th scope='col'>Type</th>
                            <th scope='col'>Quantity</th>
                            <th scope='col'>Expiry Date</th>
                          </tr>
                        </thead>";
                    while($row = mysqli_fetch_assoc($result)) {
                        // the output will be displayed in tabular form
                        echo "
                        <tbody>
                          <tr>
                            <td>".$row['bat_no']."</td>
                            <td>".$row['serial_no']."</td>
                            <td>".$row['med_name']."</td>
                            <td>".$row['type']."</td>
                            <td>".$row['quantity']."</td>
                            <td>".$row['expiry_date']."</td>
                          </tr>
                        ";
                    }
                }  
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>