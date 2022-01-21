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
   
    <title>Student-option</title>
</head>
<body >
    <div class="row gx-5" style="">
            <!--sidebar-->
          <?php 
            $active1="";
            $active2="";
            $active3="active";

            $area1="";
            $area2="";
            $area3="aria-current=\"true\"";

            
            $bac1="background:#FAFFC1;";
            $bac2="background:#FAFFC1;";
            $bac3="background:#00C1FE;";
          include('sidebar.php') 
          ?>
            <!--body-->

            <div class="col-10" >

            <?php include('navbar.php') ?>
                <div class="row px-4 bg-light">

                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                          <a class="navbar-brand">Payment Details</a>
                          <i class="fas fa-sort" style="color:#00C1FE ;"></i>
                        </div>
                      </nav>

                </div>
               <div class="row px-4 bg-light" style="">
                    <hr style="color: gray; width: 100%;">
                     <div style="overflow-x:auto;">
                            <table class="table table-striped text-center ">
                                <thead>
                                <tr style="color: gray;">
                                    <th>Name</th>
                                    <th>Payment Schedule</th>
                                    <th>Bill Number</th>
                                    <th>Amount Paid</th>
                                    <th>Balance amount</th>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                                </thead>
                    
                                <tbody>
                                <?php 
    $tableau=[

                [
                'Name' =>'Username',
                'Payment_Schedule' => 'user@email.com',
                'Bill_Number' =>'john@example.com',
                'Amount_Paid' => '7305477760',
                'Balance_amount' =>'1234567305477760',
                'Date' => '05-Jan,2022',
                '' => '<a href=""><i style="color:#00C1FE ;" class="far fa-eye"></i></a>'
                ],

                
                 [
                'Name' =>'Username',
                'Payment_Schedule' => 'user@email.com',
                'Bill_Number' =>'john@example.com',
                'Amount_Paid' => '7305477760',
                'Balance_amount' =>'1234567305477760',
                'Date' => '05-Jan,2022',
                '' => '<a href=""><i style="color:#00C1FE ;" class="far fa-eye"></i></a>'
                ],
                
               [
                'Name' =>'Username',
                'Payment_Schedule' => 'user@email.com',
                'Bill_Number' =>'john@example.com',
                'Amount_Paid' => '7305477760',
                'Balance_amount' =>'1234567305477760',
                'Date' => '05-Jan,2022',
                '' => '<a href=""><i style="color:#00C1FE ;" class="far fa-eye"></i></a>'
                ],

                
                [
                'Name' =>'Username',
                'Payment_Schedule' => 'user@email.com',
                'Bill_Number' =>'john@example.com',
                'Amount_Paid' => '7305477760',
                'Balance_amount' =>'1234567305477760',
                'Date' => '05-Jan,2022',
                '' => '<a href=""><i style="color:#00C1FE ;" class="far fa-eye"></i></a>'
                ],

               
            ];


             foreach ($tableau as $key => $table) {
                $key++;
                echo "<tr>
                        <td>".$key."</td>
                        <td>".$table['Name'].$key."</td>
                        <td>".$table['Payment_Schedule']."</td>
                        <td>".$table['Bill_Number']."</td>
                        <td>".$table['Amount_Paid']."</td>
                        <td>".$table['Date']."</td>
                        <td>".$table['']."</td>
                    </tr>";
                        
                
             }
                 
             
?>
                             
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
              

            
    </div>
         

   




    <?php include('script.php') ?>
</body>
</html>