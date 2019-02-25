<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fetch</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <script src="bootstrap-4.2/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>

<?php
  require 'navbar.php';
?>

 <div class="container">

     <table class="table table-dark" id="employees">
         <thead>
            <tr>
                <th>ID</th>
                <th>NAMES</th>
                <th>EMAIL</th>
                <th>DOB</th>
                <th>GENDER</th>
                <th>DEPARTMENT</th>
                <th>SALARY</th>
                <th>ADDRESS</th>
                <th>KRA PIN</th>
                <th>Action</th>
            </tr>
         </thead>

         <tbody>

<!--           <tr>
               <td>1</td>
               <td>John</td>
               <td>john@yahoo.com</td>
               <td>1999-10-10</td>
               <td>Male</td>
               <td>Sales</td>
               <td>100,000</td>
               <td>456 Nrb</td>
               <td>100165</td>
           </tr>-->

           <?php
             $conn = mysqli_connect("localhost","root","","shule");
             $sql = "select * from employees";
             $results = mysqli_query($conn, $sql);

             while( $row = mysqli_fetch_assoc($results) )
             {
                extract($row);
                echo "<tr>
                           <td>$id</td>
                           <td>$names</td>
                           <td>$email</td>
                           <td>$dob</td>
                           <td>$gender</td>
                           <td>$department</td>
                           <td>$salary</td>
                           <td>$address</td>
                           <td>$kra_pin</td>
                           <td> <a class='btn btn-danger btn-sm' href='delete.php?id=$id'>Delete</a>  </td>
                       </tr>";

             }


           ?>

         </tbody>

     </table>


 </div>

<script>
    $(document).ready(function() {
        $('#employees').DataTable();
    } );
</script>

</body>
</html>









