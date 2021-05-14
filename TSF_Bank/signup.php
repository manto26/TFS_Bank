<?php
	$title = 'Sign Up';
	require_once 'navbar.php';
?>


<h2 class="text-center pt-4">Please Sign Up</h2>
<br>
<br>
<div class="background">
    <div class="container">
        <div class="screen">
            <div class="screen-header">
                <div class="screen-header-right">
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                </div>
            </div>
            <div class="screen-body">
      		    <div class="screen-body-item">
                    <div class="screen-body-item left">
    	    		    <form method="post" action="success.php" class="app-form" method="post">
	        			    <div class="app-form-group">
		    	                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="First Name">
		    				</div>
                            <div class="app-form-group">
		    	    		    <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Last Name">
		    				</div>
                            <div class="app-form-group">
		    			        <input class="form-control" type="email" name="email" id="email"  placeholder="Email Address">
		      			    </div>
                       		<div class="app-form-group">
			   					<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			   				</div>
			   				<div class="app-form-group">
			   					<input type="password" name="passwordconfirmation" id="passwordconfirmation" class="form-control input-sm" placeholder="Confirm Password">
			   				</div>
                            <div class="app-form-group">
                                <input type="text" name="amount" id="amount" class="form-control input-sm" placeholder="Balance">
                            </div>
                                <input type="submit" value="Register" class="btn btn-info btn-block btn-dark bg-dark">
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
</div>
<?php
	require_once 'footer.php';
?>