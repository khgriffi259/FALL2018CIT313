<form id="registration_form" action="<?php echo BASE_URL;?>register/<?php echo $task?>" method="post" onsubmit="return validate_form()">

<fieldset>
<legend>Register Today!</legend>
<label for="first_name">First Name: <?=REQFIELD?></label>
<input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" maxlength="20" />
<br />
            
<label for="last_name">Last Name: <?=REQFIELD?></label>
<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $last_name;?>" maxlength="20"  />
<br />
 
<label for="email">E-mail Address: <?=REQFIELD?></label>
<input type="text" class="txt" id="email" name="email" value="<?php echo $email;?>" maxlength="100"  />
<br />

<label for="password">Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="password" name="password" value="<?php echo $password;?>" maxlength="100"  />

<br />

<label for="confirmpassword">Confirm Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="confirmpassword" name="confirmpassword" value="<?php echo $password;?>" maxlength="100"  />

<br />

<input type="hidden" name="uID" value="<?php echo $uID ?>"/>
<input type="hidden" name="active" value="<?php echo $active ?>"/>
 
<button id="submit" type="submit" class="btn btn-primary" >Sign Up</button>
</fieldset>
</form>