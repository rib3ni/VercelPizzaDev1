<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="ver_mesas.css"/>
</head>
<body>
    
 
<?php


if(isset($_SESSION['user_id'])){
    
    require 'dbh.inc.php';

    
    $user = $_SESSION['user_id'];
    $role = $_SESSION['role'];
     
    
    if($role==2){
        
    $sql = "SELECT SUM(num_tables), rdate, time_zone FROM reservation GROUP BY rdate, time_zone";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
        echo
        '    
            <div class="text-center">
            <p>Mesas Reservadas por data e hora</p><br>
            <table class="tabela">
                <thead>
                    <tr>
                        <th scope="col">Data</th>
                        <th scope="col">Horas</th>
                        <th scope="col">Mesas Reservadas</th>
                    </tr>
                </thead> 
                
                ';
        while($row = $result->fetch_assoc()) {
        echo"
                <tbody>
                    <tr>
                      <th scope='row'>".$row["rdate"]."</th>
                      <td>".$row["time_zone"]."</td>
                      <td>".$row["SUM(num_tables)"]."</td>
                    </tr>
                </tbody>";
            
        }
    
        
        echo "</table>";
    
       }
    
    else {    echo "<p class='text-center'>A lista está vazia!<p>"; }    
        
       echo'</div>'; 
           
            
    $sql = "SELECT * FROM tables ORDER BY t_date";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
        echo'  
         <div class="text-center1">
         <p>Total de mesas por dia</p>
         <label>O número padrão de mesas é 20</label><br>
         <br>
        ';
        
        echo
        '
            <table class="tabela">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Total Tables</th>
                        <th class="table-danger" scope="col"></th>
                    </tr>
                </thead> ';
        while($row = $result->fetch_assoc()) {
        echo"
                <tbody>
                    <tr>
                    <form action='delete.php' method='POST'>
                    <input name='tables_id' type='hidden' value=".$row["tables_id"].">
                      <th scope='row'>".$row["t_date"]."</th>
                      <td>".$row["t_tables"]."</td>
                      <td class='table-danger'><button type='submit' name='delete-table' class='btn btn-danger btn-sm'>Apagar</button></td>
                          </form>
                    </tr>
              </tbody>";
            
        }   
        echo "</table>";
    
    
    }
    else {    echo "<br><p class='text-center'><estilo1>A lista está vazia!<p>"; }
    
   
    
    echo '</div></div></div>';
    }  

 


mysqli_close($conn);
}

?>


    </body>
</html>