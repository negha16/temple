<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/user-wishlist926.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>soltox</title>
</head>
<body>
    <?php include("header.php");?>  
<div class="user-wishlist">
    <div class="container">
        <div class="row">
            <div class="col-sm-4" style="background-color: purple;">
                <div class="account-sidebar ">
                    <div class="author-card pb-3" style="text-align:center;">            
                        <div class="author-card-profile">
                            <div class="author-card-avatar"><img class="rounded-circle mt-2" src="images/profile.jpg" width=200px height="200px">
                            </div>
                            <div class="author-card-details"  style="color:yellow;">
                                <h5 class="author-card-name text-lg">  Daniel Adams</h5><br><span class="author-card-position">Joined February 06, 2017</span>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="wizard">
                        <nav class="list-group list-group-flush">               
                            <a class="list-group-item " href="user-profile.php">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="fa fa-shopping-bag mr-1 text-muted"></i>
                                        <div class="d-inline-block font-weight-medium text-uppercase">Profile</div>
                                    </div>
                                </div>
                            </a> 
                            <a class="list-group-item " href="user-wishlist.php">
                            <div class="d-flex justify-content-between align-items-center">
                                <div><i class="fa fa-shopping-bag mr-1 text-muted"></i>
                                    <div class="d-inline-block font-weight-medium text-uppercase">Favourite Temples</div>
                                </div>
                            </div>
                            </a>
                            <a class="list-group-item " href="user-bookinghistory.php">
                            <div class="d-flex justify-content-between align-items-center">
                                <div><i class="fa fa-shopping-bag mr-1 text-muted"></i>
                                    <div class="d-inline-block font-weight-medium text-uppercase">Booking History</div>
                                </div>
                            </div>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="wishlist pb-2">                         
                        <button class="btn btn-outline-danger clear-wishlist" type="submit" onclick="window.location.href = 'all-temples.php'" style="font-size: 18px;">Clear Wishlist</button><br>  
                          <h3> &nbsp My Favourite Temples</h3>
                          <br>
                <div class="row">
                    <div class="col-sm-4">
                        <a class="card" href="">
                            <img class="gallery" src="images/t.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a class="card" href="">
                            <img class="gallery" src="images/temple.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a class="card" href="">
                            <img class="gallery" src="images/background.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a class="card" href="">
                            <img class="gallery" src="images/temple3.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a class="card" href="">
                            <img class="gallery" src="images/t.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a class="card" href="">
                            <img class="gallery" src="images/background.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                    </div>
                </div>
                <div class="row">
                       <div class="col-sm-4">
                            <a class="card" href="">
                            <img class="gallery" src="images/t.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                    </div>

                    <div class="col-sm-4">
                            <a class="card" href="">
                            <img class="gallery" src="images/temple.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                    </div>

                    <div class="col-sm-4">
                                <a class="card" href="">
                            <img class="gallery" src="images/temple3.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<?php include("footer1.php");?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

  

