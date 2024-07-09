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
    <h2 align="center">Displaying All Records</h2>
    <center><table border="1" cellspacing="7" width=85%>
    <tr>
        <th width="5%"> Username</th>
        <th width="5%"> Email</th>
        <th width="5%"> Password</th>
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
</center>