<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <title>E-classe</title>
</head>
<body >
    <div class="row gx-5">
        <!--sidebar-->
        
       <?php 
        $area1='aria-current="true"';
        $area2="";
        $area3="";
         $active1="active";
         $active2="";
         $active3="";
         $bac1="background:#00C1FE;";
         $bac2="background:#FAFFC1;";
         $bac3="background:#FAFFC1;";
       include('sidebar.php');  
         ?>
       
            <!--body-->

            <div class="col-10" >

            <?php include('navbar.php');    ?>

                <div class="row  gx-5 gy-3" style="height: 250px;">
                    <!--col1-->
                    <div class="col-sm-12 col-xl-3 col-lg-6 col-md-6  op " >
                        <div class="p-5" style="  border-radius: 10px; background: #F0F9FF; "><div><i  style=" color: #74C1ED; "  class="fas fa-3x fa-graduation-cap "></i></div><p> students</p> <div class="text-end nb">243</div> </div>
                    </div>

                    <!--col2-->
                    <div class="col-sm-12 col-xl-3 col-lg-6 col-md-6  op " >
                        <div class="p-5" style="border-radius: 10px; background: #FEF6FB; " ><div><i style="color: #EE95C5;" class="far fa-3x fa-bookmark"></i></div> <p>course</p><div class="text-end nb">13</div> </div>
                    </div>
                    <!--col3-->

                    <div class="col-sm-12 col-xl-3 col-lg-6 col-md-6  op " >
                        <div class="p-5"  style="border-radius: 10px; background: #FEFBEC; "><div><i style="color: #00C1FE;" class="fas fa-3x fa-dollar-sign"></i></div> <p>payments</p>  <div class="text-end nb"><sub style="font-size:x-large;">DHs</sub> 556,000</div> </div>
                    </div>
                    <!--col4-->

                    <div class="col-sm-12 col-xl-3 col-lg-6 col-md-6  op " >
                        <div class="p-5"  style="color:white; border-radius: 10px; background: linear-gradient(110.42deg, #00C1FE 18.27%, #FAFFC1 91.84%); "><div><i style="color: #FFFF; " class="far fa-3x fa-user"></i></div> <div style="color: white;">Users</div> <div class="text-end nb text-dark">3 </div > </div>
                    </div>

                  
                       
                   
                

              </div>

            
        </div>
         

  </div>



 <?php include('script.php') ?>
</body>

   
</html>