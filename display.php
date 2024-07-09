<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);




//echo $total';

if($total != 0)
{
    ?>
    <table>
    <tr>
        <th> Username</th>
        <th> Email</th>
        <th> Password</th>
</tr>


    <?php
    while ($result = mysqli_fetch_assoc($data))
    {
       echo"<tr>
        <td> ".$result['username']."</td>
        <td> ".$result['email']."</td>
        <td> ".$result['password']."</td>
</tr>";
    }
}
else{
   echo"No records found"; 
}
?>
</table>
