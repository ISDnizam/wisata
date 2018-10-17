<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<div id="content">
	<div class="places_index_block container-fluid">
		<div class="fixed_w">
		<?php echo $this->session->flashdata('message'); ?>

			<h2>Description</h2>
			<div class="row">
				<div class="col-md-12">
					<p>
						<?php echo $detail->description;?>
					</p>

					<br>
				<a class="btn btn-primary" href="<?php echo base_url();?>map/get_direction?from=Klaten&to=<?php echo $detail->lat;?>, <?php echo $detail->lng;?>" target="_blank"> Lihat Rute Lokasi
				</a>
					<br>
					<br>
					<i class="fa fa-eye"></i>
					Dilihat <?php echo $detail->counter;?> kali
	<i class="fa fa-road" style="margin-left: 20px"></i>
	<?php echo $detail->address;?>

	<i class="fa fa-calendar" style="margin-left: 20px"></i>
	<?php echo tgl_indo($detail->date);?>

	<i class="fa fa-users" style="margin-left: 20px"></i>
	<?php echo $detail->username;?>

	<br><br><br>
	<div class="col-md-6">
		<h3>Comments</h3>
		<hr>
	<?php foreach ($comments as $ro) { ?>
		<b>	<?php echo $ro->name; ?></b> <small>(<?php echo tgl_indo($ro->date);?>)</small>
		<br>	<?php echo $ro->comments; ?>
		<br><br>
	<?php }?>
		<?php echo form_open(); ?>
		<input type="hidden" name="id_wisata" value="<?php echo $detail->id_wisata;?>">
		<p class="comment-form-author"><label for="author">Nama <span class="required">*</span></label> <input id="author" name="name" type="text" class="form-control" value="" size="30" maxlength="245" aria-required='true' required='required'/></p>

		<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" class="form-control" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required='true' required='required'/></p>

		<p class="comment-form-comment"><label for="comment">Comment</label>
			<textarea id="comment" name="comments" class="form-control" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></p>

			<p class="form-submit">
				<input name="submit" class="btn btn-success" type="submit" id="submit" class="submit" value="Post Comment"/> 
			</p> 
			<?php echo form_close();?>
		</div>
		<br>



	<div class="col-md-6" style="margin-top: -20px">
		<h3>Review</h3>
		<hr>
	<?php foreach ($reviews as $ro) { ?>
		<b>	<?php echo $ro->name; ?></b> <small>(<?php echo tgl_indo($ro->date);?>)
			<br>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
		</small>
		<br>	<?php echo $ro->review; ?>
		<br><br>
	<?php }?>
		<?php echo form_open('lokasi/send_review'); ?>
		<input type="hidden" name="id_wisata" value="<?php echo $detail->id_wisata;?>">
		Berika Rating untuk tempat ini : 
		    <div class="stars stars-example-fontawesome">
                <select id="example-fontawesome" name="rating" autocomplete="off">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div> 
			<br>
			<p class="comment-form-author">
				<label for="author">Nama <span class="required">*</span></label> 
				<input id="author" name="name" type="text" class="form-control" value="" size="30" maxlength="245" aria-required='true' required='required'/>
			</p>

              	<p class="comment-form-comment"><label for="comment">Review</label>
			<textarea id="comment" name="review" class="form-control" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></p>
					<p class="form-submit">
				<input name="submit" class="btn btn-success" type="submit" id="submit" class="submit" value="Post Review"/> 
			</p> 
			<?php echo form_close();?>
          </div>
</div>
</div>
</div>

