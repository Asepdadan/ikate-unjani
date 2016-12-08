<?php if($this->session->flashdata('pesan')){
	echo $this->session->flashdata('pesan');
	}?>

<form action="<?php echo base_url('authorization/check_login')?>" method="POST" class="form-horizontal" role="form">
		
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<input type="text" name="username" class="form-control"  required="required" title="">

			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<input type="text" name="password" class="form-control"  required="required" title="">
				
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<button type="submit" class="btn btn-primary">login</button>
			</div>
		</div>
</form>