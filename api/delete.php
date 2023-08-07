<?php


//delete reservation

if(isset($_POST['delete-submit'])) {
 
 require 'dbh.inc.php';
 
 $reservation_id = $_POST['reserv_id'];
    
 $sql = "DELETE FROM reservation WHERE reserv_id =$reservation_id";
if (mysqli_query($conn, $sql)) {
    echo "<script> 
    alert('A reserva foi excluida !!');
    window.location.href = 'ver_reservas.php';
    </script>"; 
    
} else {
    header("Location: ../view_reservations.php?delete=error");
}
}



//delete tables


if(isset($_POST['delete-table'])) {
 
 require 'dbh.inc.php';
 
 $tables_id = $_POST['tables_id'];
    
 $sql = "DELETE FROM tables WHERE tables_id =$tables_id";
if (mysqli_query($conn, $sql)) {
    echo "<script> 
    alert('A alteração foi excluida !!');
    window.location.href = 'ver_mesas.php';
    </script>"; 
} else {
    echo "<script> 
    alert('Não foi possivel excluir a alteração!!');
    window.location.href = 'ver_mesas.php';
    </script>"; 
}
}


mysqli_close($conn);
?>

    


