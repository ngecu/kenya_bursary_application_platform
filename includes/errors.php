<?php  if (count($errors) > 0) ://if errors are detected create a div tag of class error?>
  <div class="error alert alert-danger">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error //display each error item in the error arrry ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>