<form id="update_profile_form" action="<?php echo BASE_URL;?>members/updateProfile/" method="post">

<fieldset>
<label for="first_name">First Name: <?=REQFIELD?></label>
<input type="text" id="first_name" name="first_name" value="<?php echo $u->getFirstName();?>" maxlength="20" required/>
<br />
            
<label for="last_name">Last Name: <?=REQFIELD?></label>
<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $u->getLastName();?>" maxlength="20"  required/>
<br />
 
<label for="email">E-mail Address: <?=REQFIELD?></label>
<input type="text" class="txt" id="email" name="email" value="<?php echo $u->getEmail();?>" maxlength="100"  required/>
<br />

<label for="password">Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="password" name="password" value="" maxlength="100"  />

<br />

<label for="confirmpassword">Confirm Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="confirmpassword" name="confirmpassword" value="" maxlength="100"  />

<br />

<input type="hidden" name="uID" value="<?php echo $uID ?>"/>
<input type="hidden" name="active" value="<?php echo $active ?>"/>
 
<button id="submit" type="submit" class="btn btn-primary" >Update</button>
</fieldset>
</form>