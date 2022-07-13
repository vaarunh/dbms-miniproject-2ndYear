<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>College</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="../favicon.ico">

    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="../assets/scss/style.css">
    <link href="../assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>


   <!-- Left Panel -->

   <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#">
                    <!-- <img src="images/lo0go.png" alt="Logo"> -->
                    College Admin
                </a>
                <!-- <a class="navbar-brand hidden" href="#"><img src="images/logo2.png" alt="Logo"></a> -->
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Home </a>
                    </li>
                    <h3 class="menu-title">Operations</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus-square"></i>Add</a>
                        <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-puzzle-piece"></i><a href="../add-operation/faculty.php">Faculty</a></li>
                          <li><i class="fa fa-id-badge"></i><a href="/add-operation/student.php">Student</a></li>
                         </ul>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>Update</a>
                        <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-puzzle-piece"></i><a href="../update-operation/faculty.php">Faculty</a></li>
                          <li><i class="fa fa-id-badge"></i><a href="../update-operation/student.php">Student</a></li>
                         </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-trash"></i>Delete</a>
                        <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-puzzle-piece"></i><a href="../delete-operation/faculty.php">Faculty</a></li>
                          <li><i class="fa fa-id-badge"></i><a href="../delete-operation/student.php">Student</a></li>
                          </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-search"></i>Search</a>
                        <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-puzzle-piece"></i><a href="../search-operation/faculty.php">Faculty</a></li>
                          <li><i class="fa fa-id-badge"></i><a href="../search-operation/student.php">Student</a></li>
                         
                        </ul>
                    </li>
                    <h3 class="menu-title">Project By:</h3><!-- /.menu-title -->
                    <li style="color: #9195A1; padding-top:10px"><span>Varun Herlekar (Roll No.: 04)</span></li>
                    <li style="color: #9195A1;"><span>Astha Asati (Roll No.: 07)</span></li>
                    <li style="color: #9195A1;"><span>Rutuja Bhumare (Roll No.: 37)</span></li>
                    <li style="color: #9195A1;"><span>Pranav Mohod (Roll No.: 38)</span></li>
                    <li style="color: #9195A1;"><span>Devarshi Kokate (Roll No.: 41)</span></li>
                    
                    <h3 class="menu-title">Guided By:</h3><!-- /.menu-title -->
                    <li style="color: #9195A1; padding-top:10px"><span>Prof. Dhiraj Shirbhate Sir</span></li>


                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7 fix">
                    <a id="menuToggle" class="menutoggle pull-left">
                        <i class="fa fa fa-tasks"></i>
                    </a>
                </div>
                <h1 class="top-header">Government College of Engineering, Yavatmal</h1>
            </div>
        </header>

        
        <div class="col-sm-7 fix">
                    <?php
                            include '../db_connection.php';
                      
                            if(isset($_POST['increment'])){
                                $sql = "CALL salaryIncrement('$emp')";
                                $result = mysqli_query($conn, $sql);
                            }

                                                    $conn = OpenCon();
                    ?>
                    <!-- <a id="menuToggle" class="menutoggle pull-left">
                        <i class="fa fa fa-tasks"></i>
                    </a> -->
                </div>
        <div style="padding:20px;"></div>

        <div class="row" style="margin:auto;">
            <div class="col-md-3"></div>
            <div class=" col-md-6">
                <div class="card">
                    <div class="card-header">
                        Update
                        <strong> Faculty </strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Role</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">Faculty</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">SAP ID</label>
                                </div>
                                <div class="col-12 col-md-9">
                                <?php
                                    $sql = "SELECT sapid FROM faculty";
                                    $result = mysqli_query($conn, $sql);
                                      echo '<select id="text-input" name="sapid" class="form-control">';
                                      echo '<option disabled selected value>Select sapid of faculty</option>';
                                      while($row = mysqli_fetch_array($result)) {
                                        echo '<option value="'.$row['sapid'].'">'.$row['sapid'].'</option>';
                                      }
                                      echo "</select>";
                                ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">First Name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="name" placeholder="First Name" class="form-control">
                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Last Name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="text-input" placeholder="Last Name" class="form-control">
                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                </div>
                            </div>
                            <!-- <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email-input" class=" form-control-label">Email</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="email" id="email-input" name="email-input" placeholder="Enter Email" class="form-control">
                                </div>
                            </div> -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Department</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="dept" placeholder="Department" class="form-control">
                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Salary</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="number" id="text-input" name="salary" placeholder="Salary" class="form-control">
                                    <small class="help-block text-muted">Please enter monthly Salary</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Gender</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="gender" id="select" class="form-control">
                                        <option value="0">Please select</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Mobile No.</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="number" id="text-input" name="mobile" placeholder="Mobile No." class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="cc-exp" class="control-label mb-1">Date of Birth</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input id="cc-exp" name="dob" type="date" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter your date of birth" data-val-cc-exp="Please enter a valid month and year" placeholder="DD / MM / YYYY" autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" name="" class=" form-control-label">Address</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea  name="address" id="textarea-input" rows="9" placeholder="Full address" class="form-control"></textarea>
                                </div>
                            </div>

                        
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6" style="text-align: center;">
                                <button type="submit" name="update" class="btn btn-primary btn-block">
                                    <i class="fa fa-dot-circle-o"></i> Update
                                </button>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6" style="text-align: center;">
                                <button type="" onclick="increment()" class="btn btn-primary btn-block">
                                    <i class="fa fa-dot-circle-o"></i> Update Salary
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <?php

                if(isset($_POST['update'])){
                    
                    $sapid =  $_POST['sapid'];
                    $name =  $_POST['name'];
                    $salary =  $_POST['salary'];
                    $dept =  $_POST['dept'];
                    $gender =  $_POST['gender'];
                    $mobile =  $_POST['mobile'];
                    $dob =  $_POST['dob'];
                    $address =  $_POST['address'];
                    $sql = "UPDATE faculty SET salary='$salary' WHERE sapid=$sapid";
                    $sql2 = "UPDATE person SET name='$name', gender='$gender', dob='$dob', mobile=$mobile, address='$address', dept='$dept', age=40 WHERE sapid=$sapid";

                    if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {

                        echo "<div class=\"alert alert-success\">
                        <strong>Success!</strong> Record updated successfully
                    </div>";
                    } else {
                        echo "<div class=\"alert alert-danger\">
                        <strong>Error: !</strong>    " . $sql . "<br>" . $conn->error."
                    </div>";
                    }
                }
                CloseCon($conn);
                ?>
                </div>
            </div>
        </div>

    </div>
    <!-- .content -->
    
    <!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>


    <script src="../assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/widgets.js"></script>
    <script src="../assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="../assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="../assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="../assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        (function ($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
       function increment() {
            alert('salary incremented by 10%');
        }
    </script>

</body>

</html>
