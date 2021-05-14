<?php
    $title = 'Home';
	require_once 'navbar.php';
?>
<div class="container-fluid">
    <div class="row intro py-2">
        <div class="col-sm-13 col-md">
            <div class="heading text-center my-4 text-dark">                 
                <h1>TSF Bank</h1>
                <h3>Welcome to</h3>
            </div>
            <div class="col-sm-13 col-md img text-center">
                <img src="images/TFS_bank.jpg" class="img-fluid" alt="Bank image">
                <br>
                <br>
            </div>
        </div>
    </div>
    
</div>
<div class="row activity text-center" id="list">
    <div class="col-md act">
        <img src="images/transfer.jpg" class="img-fluid" alt="Trasfer Money">
        <br>
        <a href="transfer.php"><button>Trasfer</button></a>
    </div>
    <div class="col-md act">
        <img src="images/transactionhistory.png" class="img-fluid" alt="Transaction History">
        <br>
        <a href="transactionhistory.php"><button>Transaction History</button></a>
    </div>
</div>

<?php
require_once 'footer.php';
?>