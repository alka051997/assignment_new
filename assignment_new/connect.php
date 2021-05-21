<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/style.css">

 
</head>
<body class="hero-anime"> 

  <div class="navigation-wrap bg-light start-header start-style">
    <div class="container">
      <div class="row">
        <div class="col-12">
         <?php include('include/header.php');?>   
        </div>
      </div>
    </div>
  </div>
  <div class="section full-height bg_sect">
    <div class="absolute-center">
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-12">
       
        <div class="container">
    <h2 class="text-center c_form">Contact Form</h2>
  <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form action="mail.php" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="btn-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Contactanos</h3>
                                    <p class="m-0">Con gusto te ayudaremos</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user "></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Enter Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="Enter Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope "></i></div>
                                        </div>
                                        <input type="number" class="form-control" id="nombre" name="email" placeholder="Enter Mobile Number" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope "></i></div>
                                        </div>
                                        <input type="date" class="form-control" id="nombre" name="email" placeholder="8788698675" required>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
  </div>
</div> 
            </div>  
          </div>    
        </div>    
      </div>
    </div>
  </div>
  
<!-- Link to page
================================================== -->

 
 <?php include('include/footer.php');?> 
</body>
<script src="js/custom.js"></script>
</html>
