<?php include('elements/header.php');?>
<?php 
if( is_array($user) ) {
	extract($user);?>

<div class="container">
	<div class="page-header">
		<h1>
			<?php echo $title;?>
		</h1>
	</div>

	<h4><?php echo $user['first_name'] . " " . $user['last_name'] ;?></h4>
	<h4><?php echo $user['email'];?></h4>

</div>
<?php }?>

<?php if( is_array($users) ) {?>

<div class="container">
	<div class="page-header">
		<h1>
			<?php echo $title;?>
		</h1>
	</div>

	<?php foreach($users as $user){?>
	<ul>
		<li>
			<h3>
				<a href="<?php echo BASE_URL?>members/view/<?php echo $user['uID'];?>" title="<?php echo $user['first_name'] . " " . $user['last_name'];?>">
					<?php echo $user['first_name'] . " " . $user['last_name'];?>
				</a>
			</h3>
			<h4><?php echo $user['email']; ?></h4>
		</li>
	</ul>
	<?php }?>
</div>

<?php }?>


<?php include('elements/footer.php');?>