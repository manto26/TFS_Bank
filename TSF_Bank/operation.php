<?php
	$title = 'Transfer';
    require_once 'navbar.php';
?>
<br>
<br>
<div class="container">
	<span class="d-block p-2 bg-dark text-white"><h3>Tranfer</h3></span><br>
	<span class="d-block p-2 bg-dark text-white float-right"><a href="index.php" >Click Here to Go Back.</a></span>
	<br>
		<br/><br/>
		<form class="form-group-row" action="add.php" method="POST">
			<div class="col-sm-10">
				<label for="amount">How much would you like to deposit: <input type="number" name="amount" required="required"/></label>
			</div>
			<br>
			<div class="form-group-row col-sm-10">
				<label for="details">Add some details : <input type="text" name="details"/></label>
			</div>	
			<br/>
			<input type="submit" class="btn btn-dark" value="Deposit Money"/>
		</form>



	</div>

    <?php
        require_once 'footer.php';
    ?>