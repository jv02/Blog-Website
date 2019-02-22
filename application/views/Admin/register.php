<?php include('header.php') ?>

<div class="container" style="margin-top: 20px; margin-left: 350px;">
<h2>Admin Form</h2>
<?php echo form_open('admin/register_validation'); ?>
	<div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for='username'>Username</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>set_value('uname')]); ?>
	</div>
</div>
<div class="col-lg-6" style="margin-top: 40px;">
<?php echo form_error('uname'); ?>
</div>
</div>
<div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="pwd">Password:</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'Password','name'=>'pass','value'=>set_value('pass')]); ?>
	</div>
	</div>
	<div class="col-lg-6" style="margin-top:40px; ">
<?php echo form_error('pass'); ?>
</div>
</div>
<div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="firstname">Firstname:</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'firstname','name'=>'fname','value'=>set_value('fname')]); ?>
	</div>
	</div>
	<div class="col-lg-6" style="margin-top:40px; ">
<?php echo form_error('fname'); ?>
</div>
</div>
<div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="lastname">lastname:</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'lastname','name'=>'lname','value'=>set_value('lname')]); ?>
	</div>
	</div>
	<div class="col-lg-6" style="margin-top:40px; ">
<?php echo form_error('lname'); ?>
</div>
</div>
<div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="email">Email:</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'email','name'=>'email','value'=>set_value('email')]); ?>
	</div>
	</div>
	<div class="col-lg-6" style="margin-top:40px; ">
<?php echo form_error('email'); ?>
</div>
</div>
		<?php echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit']); ?>
		<?php echo form_reset(['type'=>'reset','class'=>'btn btn-default','value'=>'Reset']); ?>
		<?php echo anchor('admin/register','Sign up?','class="link-class"') ?>

</div>

<?php include('footer.php') ?>
