<?php 
// No direct access 
defined('_JEXEC') or die; ?>
<script type="text/javascript" src="<?php echo 'modules/mod_tdhsejours/tmpl/tdhSejours.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo 'modules/mod_tdhsejours/tmpl/tdhSejours.css'); ?>" media="screen" />
<div class="tdhRoot">
	<span>
		<div class="labelTHD">
			Destination
		</div>
		<div class="selectTHD">
			<select class="js-example-basic-single" name="state">
			  <option value="AL">Alabama</option>
			  <option value="WY">Wyoming</option>
			</select>
		</div>
	</span>
	<span>
		<div class="labelTHD">
			Date de départ
		</div>
		<div class="selectTHD">
			<select class="js-example-basic-single" name="state">
			  <option value="AL">Alabama</option>
			  <option value="WY">Wyoming</option>
			</select>
		</div>
	</span>
	<span>
		<div class="labelTHD">
			Ville de départ
		</div>
		<div class="selectTHD">
			<select class="js-example-basic-single" name="state">
			  <option value="AL">Alabama</option>
			  <option value="WY">Wyoming</option>
			</select>
		</div>
	</span>
	<span>
		<div class="labelTHD">
			Thématique
		</div>
		<div class="selectTHD">
			<select class="js-example-basic-single" name="state">
			  <option value="AL">Alabama</option>
			  <option value="WY">Wyoming</option>
			</select>
		</div>
	</span>
	<span>
		<input type="button" id="tdhRechercher" />
	</span>
</div>

<?php echo $hello; ?>