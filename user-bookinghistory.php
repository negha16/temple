<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/user-booking701.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>soltox</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" 
href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
</head>
<body>
 
    <?php include("header.php");?>  
<div class="user-bookinghistory">
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
                    <div class="wizard" >
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
               <div class="cart-data">    
                    <h1 style="text-align:center">Booking History</h1>
                    <div class="row">         
                        <div class="cart" id="pooja-booked">
                            <div class="table-responsive">
                                <table id="myTable" class="display table" width="100%" > 
                                    <thead role="rowgroup">
                                        <tr role="row">
                                            <th role="columnheader" class="view-cart">Sl No</th>
                                            <th role="columnheader" class="view-cart">Temple name</th>
                                            <th role="columnheader" class="view-cart">Devotee name</th>
                                            <th role="columnheader" class="view-cart">Puja</th>
                                            <th role="columnheader" class="view-cart">Offering Date</th>
                                            <th role="columnheader" class="view-cart">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody role="rowgroup" class="view-data">
                                        <tr role="row">
                                            <td role="cell"></td>
                                            <td role="cell">Temple name</td>
                                            <td role="cell">raman</td>
                                            <td role="cell">dhara</td>
                                            <td role="cell">17/01/2022</td>
                                            <td><span class="badge badge-success m-0"><i class="far fa-check-circle"></i></span></td>
                                        </tr>
                         
                                        <tr role="row">
                                            <td role="cell"></td>
                                            <td role="cell">Temple name</td>
                                            <td role="cell">radha</td>
                                            <td role="cell">vilak</td>
                                            <td role="cell">20/01/2022</td>
                                            <td><span class="badge badge-warning m-0"><i class="fas fa-exclamation-circle"></i></span></td>
                                        </tr>   

                                        <tr role="row">
                                            <td role="cell"></td>
                                            <td role="cell">Temple name</td>
                                            <td role="cell">raman</td>
                                            <td role="cell">dhara</td>
                                            <td role="cell">17/01/2022</td>
                                            <td><span class="badge badge-success m-0"><i class="far fa-check-circle"></i></span></td>
                                        </tr>

                                        <tr role="row">
                                            <td role="cell"></td>
                                            <td role="cell">Temple name</td>
                                            <td role="cell">radha</td>
                                            <td role="cell">vilak</td>
                                            <td role="cell">20/01/2022</td>
                                            <td><span class="badge badge-warning m-0"><i class="fas fa-exclamation-circle"></i></span></td>
                                        </tr> 

                                        <tr role="row">
                                            <td role="cell"></td>
                                            <td role="cell">Temple name</td>
                                            <td role="cell">radha</td>
                                            <td role="cell">vilak</td>
                                            <td role="cell">20/01/2022</td>
                                            <td><span class="badge badge-warning m-0"><i class="fas fa-exclamation-circle"></i></span></td>
                                        </tr> 
                                    </tbody>      
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
       <script type="text/javascript" 
src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" 
src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  
<script>
$('#myTable').dataTable();
</script>



<script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</body>
</html>

  
<?php 
    include("footer1.php");
?>