<?php


if(isset($_SESSION['user_id'])){
    
    require 'dbh.inc.php';

    
    $user = $_SESSION['user_id'];
    $role = $_SESSION['role'];
    
    //rolos pelati
    if($role==1){
    $sql = "SELECT * FROM reservation WHERE user_fk = $user";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
        
        echo
        '
            <table>
                <thead>
                    <tr>
                        <th scope="col">Nome Completo</th>
                        <th scope="col">Convidados</th>
                        <th scope="col">Data da Reserva</th>
                        <th scope="col">Horário</th>
                        <th scope="col">Telemóvel</th>
                        <th scope="col">Data de Registo</th>
                        <th scope="col">Comentário</th>
                        <th class="table-danger" scope="col"></th>
                    </tr>
                </thead> ';
        while($row = $result->fetch_assoc()) {
        echo"
                <tbody>
                    <tr>
                    <form action='includes/delete.php' method='POST'>
                    <input name='reserv_id' type='hidden' value=".$row["reserv_id"].">
                      <th scope='row'>".$row["f_name"]." ".$row["l_name"]."</th>
                      <td>".$row["num_guests"]."</td>
                      <td>".$row["rdate"]."</td>
                      <td>".$row["time_zone"]."</td>
                      <td>".$row["telephone"]."</td>
                      <td>".$row["reg_date"]."</td>
                      <td><textarea readonly>".$row["comment"]."</textarea></td>
                      <td class='table-danger'><button type='submit' name='delete-submit' class='btn btn-danger btn-sm'>Cancel</button></td>
                          </form>
                    </tr>
              </tbody>";
            
        }   
        echo "</table>";
    
    
    }
    else {    echo "<p>Sua lista de reservas está vazia!<p>"; }
    }
    
    
    //rolos upeuthinou 
    
    else if($role==2){
    $sql = "SELECT * FROM reservation";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
        
        echo
        '
            <table class="table table-hover table-responsive-sm text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome Completo</th>
                        <th scope="col">Pessoas</th>
                        <th scope="col">Mesas</th>
                        <th scope="col">Data da Reserva</th>
                        <th scope="col">Horário</th>
                        <th scope="col">Telemóvel</th>
                        <th scope="col">Data de registo</th>
                        <th scope="col">Cometário</th>
                        <th class="table-danger" scope="col"></th>
                    </tr>
                </thead> ';
        while($row = $result->fetch_assoc()) {
        echo"
                <tbody>
                    <tr>
                    <form action='delete.php' method='POST'>
                      <input name='reserv_id' type='hidden' value=".$row["reserv_id"].">
                      <th scope='row'>".$row["reserv_id"]."</th> 
                      <td>".$row["f_name"]." ".$row["l_name"]."</td>
                      <td>".$row["num_guests"]."</td>
                      <td>".$row["num_tables"]."</td>
                      <td>".$row["rdate"]."</td>
                      <td>".$row["time_zone"]."</td>
                      <td>".$row["telephone"]."</td>
                      <td>".$row["reg_date"]."</td>
                      <td><textarea readonly>".$row["comment"]."</textarea></td>
                      <td class='table-danger'><button type='submit' name='delete-submit' class='btn btn-danger btn-sm'>Cancel</button></td>
                          </form>
                    </tr>
              </tbody>";
            
        }   
        echo "</table>";
    
    
    }
    else {    echo "<p>Sua lista de reservas está vazia!<p>"; }
    
    }
    


mysqli_close($conn);
}


