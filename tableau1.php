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
                echo "<tr>
                        <td>".$key."</td>
                        <td>".$table['Name']."</td>
                        <td>".$table['Payment_Schedule']."</td>
                        <td>".$table['Bill_Number']."</td>
                        <td>".$table['Amount_Paid']."</td>
                        <td>".$table['Date']."</td>
                        <td>".$table['']."</td>
                    </tr>";
                        
                
             }
                 
             
?>