<?php
    include 'header.php';
?>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Add Patient</a>
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
                        <li><a class="dropdown-item" href="medicine_stock.php" target="_top" rel="noopener noreferrer" style='color:bisque; text-decoration:none; align: center;'>Medicine Stock</a><li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
</nav>
<div class="container" autocomplete=off>
        <header class="header">
            <p id="description" class="description text-center">The best medicine to a patient is love and care.</p>
        </header>
        <form id="survey-form" action="patient.php" method="POST" onpaste="return false;" oncopy="return false;" oncut="return false;" ondrop="return false;" autocomplete=off>

            <div class="form-group">
                <label id="id-label" for="patient_id">Patient's Hospital ID:</label>
                <input type="number" name="patient_id" id="patient_id" class="form-control" placeholder="Enter patient's hospital id" required/>
            </div>
            <div class="form-group">
                <label id="name-label" for="fullname">Full Name:</label>
                <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter name" required/>
            </div>
            <div class="form-group">
                <label id="age-label" for="age">Age:</label>
                <input type="number" name="age" id="age" class="form-control" placeholder="Enter age" required/>
            </div>
            <div class="form-group">
                <label id="height-label" for="height">Height:</label>
                <input type="number" name="height" id="height" class="form-control" placeholder="Enter height in centimeters" required/>
            </div>
            <div  class="form-group">
                <label id="gender" for="gender">Gender: <label>
                <select id="dropdown" name="gender" class="form-control" required>
                  <option disabled selected value>Select Gender</option>
                  <option value="MALE">Male</option>
                  <option value="FEMALE">Female</option>
                  <option value="OTHERS">Others</option>
                </select>
            </div>
            <div class="form-group">
                <label id="treat-label" for="doctor">Doctor in charge:</label>
                <input type="text" name="doctor" id="doctor" class="form-control" placeholder="Enter Doctor's name" required/>
            </div>
            <div class="form-group">
                <label id="disease-label" for="disease">Diagnosis:</label>
                    <textarea id="disease" class="input-textarea" name="disease" placeholder="Enter patient's diagnosis"></textarea>
            </div>
            <div class="form-group">
                <label id="disease-label" for="medicine">Prescription:</label>
                <textarea id="medicine" class="input-textarea" name="medicine" placeholder="Enter the medicines prescribed"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" name="search" id="submit" class="submit-button">Add Patient<button>
            </div>
        </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>