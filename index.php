<?php
    include 'header.php';
?>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">CIT Dispensary System</a>
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
                    <li><a class="dropdown-item" href="add.php" target="_top" rel="noopener noreferrer" style='color:bisque; text-decoration:none; align: center;'>Add Patient</a></li>
                    <li><a class="dropdown-item" href="medicine_stock.php" target="_top" rel="noopener noreferrer" style='color:bisque; text-decoration:none; align: center;'>Medicine Stock</a><li>
                </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="container">
        <header class="header">
            <p id="description" class="description text-center">An apple a day keeps the doctors away.</p>
        </header>

        <form id="survey-form" action="submit.php" method="POST" onpaste="return false;" oncopy="return false;" oncut="return false;" ondrag="return false;" ondrop="return false;" autocomplete=off>
            <div class="form-group">
                <label id="name-label" for="name">Patient Search</label>
                <!-- Prevents copy and pasting patient's entities -->
                <input type="text" name="name" id="name" class="form-control" placeholder="search by name or patient's hostipal ID" required/>
            </div>

            <div class="form-group">
                <button type="submit" name="search" id="submit" class="submit-button">Search</button>
            </div>
            <div class="add-patient" style='color:bisque;font-family: Times New Roman, Arial, Helvetica; font-weight: bold; font-size: 20px;'>
            </div>
        </form>
    </div>
<!-- js $ popper plugins -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>