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
<body>
    <div class="row" style="">
            <!--sidebar-->
           <?php  
            $active1="";
           $active2="active";
           $active3="";
           $area1="";
           $area2='aria-current="true"';
           $area3="";
            $bac1="background:#FAFFC1";
            $bac2="background:#00C1FE;";
            $bac3="background:#FAFFC1";
           include('sidebar.php')  ?>
    
            <!--body-->

            <div class="col-10" >
            <?php  include('navbar.php')  ?>
              
                <div class="row px-4 bg-light">

                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                          <a class="navbar-brand d-none d-lg-block">Students list</a>
                          <form class="d-flex">
                            <i class="fas fa-sort me-2 mt-3" style="color:#00C1FE ;"></i>
                            <button class="rounded btn btn-primary btn-lg " style="border: none;color: white;  background-color:#00C1FE;">ADD NEW Students</button>
                          </form>
                        </div>
                      </nav>

                </div>
               <div class="row px-4 bg-light" style="">
                    <hr style="color: gray; width: 100%;">
                     <div style="overflow-x:auto;">
                            <table class="table table-condensed text-center ">
                                <thead>
                                <tr style="color: gray;">
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>phone</th>
                                    <th>Enroll Number</th>
                                    <th>Date of admission</th>
                                    <th></th>
                                </tr>
                                </thead>
                    
                                <tbody>
                                <?php 
    $tableau=[

                [
                'Name' =>'Username',
                'Email' => 'user@email.com',
                'Phone' =>'john@example.com',
                'Entroll_Number' => '7305477760',
                'Date_of_admission' =>'1234567305477760',
                '' => '<a href=""><i class="fas fa-pen text-info"></i></a><span style="color:white;">---</span><a href=""><i class="fas fa-trash text-info"></i></a>'
                ],

                
                 [
                'Name' =>'Username',
                'Email' => 'user@email.com',
                'Phone' =>'john@example.com',
                'Entroll_Number' => '7305477760',
                'Date_of_admission' =>'1234567305477760',
                '' => '<a href=""><i class="fas fa-pen text-info"></i></a><span style="color:white;">---</span><a href=""><i class="fas fa-trash text-info"></i></a>'
                ],
                
               [
                'Name' =>'Username',
                'Email' => 'user@email.com',
                'Phone' =>'john@example.com',
                'Entroll_Number' => '7305477760',
                'Date_of_admission' =>'1234567305477760',
                '' => '<a href=""><i class="fas fa-pen text-info"></i></a><span style="color:white;">---</span><a href=""><i class="fas fa-trash text-info"></i></a>'
                ],

                
                 [
                'Name' =>'Username',
                'Email' => 'user@email.com',
                'Phone' =>'john@example.com',
                'Entroll_Number' => '7305477760',
                'Date_of_admission' =>'1234567305477760',
                '' => '<a href=""><i class="fas fa-pen text-info"></i></a><span style="color:white;">---</span><a href=""><i class="fas fa-trash text-info"></i></a>'
                ],

                
                 [
                'Name' =>'Username',
                'Email' => 'user@email.com',
                'Phone' =>'john@example.com',
                'Entroll_Number' => '7305477760',
                'Date_of_admission' =>'1234567305477760',
                '' => '<a href=""><i class="fas fa-pen text-info"></i></a><span style="color:white;">---</span><a href=""><i class="fas fa-trash text-info"></i></a>'
                ],

                
                 [
                'Name' =>'Username',
                'Email' => 'user@email.com',
                'Phone' =>'john@example.com',
                'Entroll_Number' => '7305477760',
                'Date_of_admission' =>'1234567305477760',
                '' => '<a href=""><i class="fas fa-pen text-info"></i></a><span style="color:white;">---</span><a href=""><i class="fas fa-trash text-info"></i></a>'
                ],

                
                 [
                'Name' =>'Username',
                'Email' => 'user@email.com',
                'Phone' =>'john@example.com',
                'Entroll_Number' => '7305477760',
                'Date_of_admission' =>'1234567305477760',
                '' => '<a href=""><i class="fas fa-pen text-info"></i></a><span style="color:white;">---</span><a href=""><i class="fas fa-trash text-info"></i></a>'
                ],


            ];


             foreach ($tableau as $key => $table) {
                 $key++;
                echo "<tr>
                        <td>".$key."</td>
                        <td>".$table['Name'].$key."</td>
                        <td>".$table['Email']."</td>
                        <td>".$table['Phone']."</td>
                        <td>".$table['Entroll_Number']."</td>
                        <td>".$table['Date_of_admission']."</td>
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