<?php
$title = "Transfer Money";
require_once 'navbar.php';

?>

<body class="text-center">
<?php
    require_once 'db/connect.php';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sparks_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM transactions_db";
    $result = mysqli_query($conn, $sql);
?>
<div class="container">
        <h2 class="text-center pt-4">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                        <table class="table table-hover table-sm table-striped table-dark table-bordered text-light">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center py-2">Name</th>
                                    <th scope="col" class="text-center py-2">E-Mail</th>
                                    <th scope="col" class="text-center py-2">Balance</th>
                                    <th scope="col" class="text-center py-2">Operation</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                    while ($row = $result->fetch_assoc())
                    {
                ?>
                            <tr>
                                
                                <td class="py-2"><?php echo $row['firstname']. " ".$row['lastname'];?></td>
                                <td class="py-2"><?php echo $row['email']?></td>
                                <td class="py-2"><?php echo $row['amount']?></td>
                                <td class="text-light"><a href="#"> <button type="button" class="btn text-light">Transact</button></a></td> 
                            </tr>
                            <?php
                    }
                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
</div>
         
<?php
require_once 'footer.php';
?>
