<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: rgb(189, 189, 189);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">             
                <img src="logo.png" alt = "Minn Kota" style= "max-height:50px;">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="customer-landing.php">Customers</a></li>
                <li class="nav-item"><a class="nav-link" href="job-landing.php">Jobs</a></li>
                <li class="nav-item"><a class="nav-link" href="invoice-landing.php">Invoices</a></li>
            </ul>
            <ur class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="changelog.php">Changelog</a></li>
            </ur>
        </div>
    </nav>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid"> 
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="job-landing.php">Jobs Home</a></li>
                <li class="nav-item"><a class="nav-link" href="new-job.php">Enter a New Job</a></li>
                <li class="nav-item"><a class="nav-link" href="check-job.php">Check for an existing job</a></li>
            </ul>
        </div>
    </nav>
    <div class="containter-fluid mt-3">
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#myModal">
            Existing Customer
        </button>
        <div class="modal" id="myModal">
            <div class="modal-dialog">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header bg-dark text-white">
                <h4 class="modal-title">Find the Customer</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
        
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="find_customer.php" method="post">
                        <div class="mb-3 mt-3">
                            <label for="first_name" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name">
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name">
                        </div>
                        <div class="mb-3">
                            <label for="phonenumber" class="form-label">Phone Number: (No Spaces or Dashes)</label>
                            <input type="text" class="form-control" id="phonenumber" placeholder="6081234567" name="phonenumber">
                        </div>
                        <div class="mb-3">
                            <label for="customer_id" class="form-label">Customer Id # (Optional)</label>
                            <input type="text" class="form-control" id="customer_id" placeholder="Cust Id" name="customer_id">
                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
        
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
        
            </div>
            </div>
        </div>
        </nav>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#myModal2">
            New Customer
        </button>
        <div class="modal" id="myModal2">
            <div class="modal-dialog">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Enter Customer Information</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
        
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="new_customer.php" method="post">
                        <div class="mb-3 mt-3">
                            <label for="first_name" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name">
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name">
                        </div>
                        <div class="mb-3">
                            <label for="phonenumber" class="form-label">Phone Number: (No Spaces or Dashes)</label>
                            <input type="text" class="form-control" id="phonenumber" placeholder="6082742511" name="phonenumber">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="1348 S Midvale Blvd Madison, WI" name="address">
                        </div>
                        <div class="mb-3">
                            <label for="zipcode" class="form-label">Zipcode (Mandatory)</label>
                            <input type="text" class="form-control" id="zipcode" placeholder="53711" name="zipcode">
                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
        
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
        
            </div>
            </div>
        </div>
        <form action="new_job.php" method="post">
            <div class="mb-3 mt-3">
                <label for="serial_no" class="form-label">Serial Number</label>
                <input type="text" class="form-control" id="serial_no" placeholder="Serial No" name="serial_no">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="text" class="form-control" id="date" placeholder="01/01/2022" name="date">
            </div>
            <div class="mb-3">
                <label for="invoice_no" class="form-label">Invoice Number</label>
                <input type="text" class="form-control" id="invoice_no" placeholder="123456" name="invoice-no">
            </div>
            <div class="mb-3">
                <label for="problem" class="form-label">Problem</label>
                <textarea class="form-control" rows="5" id="problem" placeholder="Nature of my problem is..." name="problem"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>

</body>