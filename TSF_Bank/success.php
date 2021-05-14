<?php
    $title = 'Success';
    require_once 'navbar.php';
?>
<br>
<br>
<br>
<br>
<br>
<br>
    <h1 class="text-center text-success">Your Registration was Succesful!<h1>
    <div class="card">
        <div class="card-body text-center bg-dark text-light">
        
            <h5 class="card-title"><?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?></h5>
        <br>
        <h5 class="card-title"><?php echo $_POST['email']; ?></h5>
  </div>
</div>


<br>
<br>
<br>

<?php
    require_once 'footer.php';
?>