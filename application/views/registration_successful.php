<h1>Registration Successful</h1>

<div id="successful_message">   
    <?php
        echo form_open('registration/create_member');
        
        echo "Your Account has been successfully created, Please proceed to COMELEC assistant for
              the Account Confirmation and Printing of Username and Password <br /><br />";
              
        echo '<a href="registration/index">Back</a>';
    ?>
</div>