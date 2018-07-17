<?php 
// No direct access 
defined('_JEXEC') or die; ?>
<script type="text/javascript" src="modules/mod_tdhsejours/tmpl/tdhSejours.js"></script>
<link rel="stylesheet" type="text/css" href="modules/mod_tdhsejours/tmpl/tdhSejours.css" media="screen" />
<div class="tdhRoot">
	<div class="oneSelect">
		<div class="labelTHD">
			Aéroports de départ
		</div>
		<div class="selectTHD">
			<select class="js-example-basic-single selectAeroport" name="state">
			  <option value="AL">aero1</option>
			  <option value="WY">aero2</option>
			</select>
		</div>
	</div>
	<div class="oneSelect">
		<div class="labelTHD">
			Destination
		</div>
		<div class="selectTHD">
			<select class="js-example-basic-single selectDestination" name="state">
			  <option value="AL">dest1</option>
			  <option value="WY">dest2</option>
			</select>
		</div>
	</div>
	<div class="oneSelect">
		<div class="labelTHD">
			date
		</div>
		<div class="selectTHD">
			<select class="js-example-basic-single" name="state">
			  <option value="AL">Alabama</option>
			  <option value="WY">Wyoming</option>
			</select>
		</div>
	</div>
	<div class="oneSelect">
		<div class="labelTHD">
			Thématique
		</div>
		<div class="selectTHD">
			<select class="js-example-basic-single" name="state">
			  <option value="AL">Alabama</option>
			  <option value="WY">Wyoming</option>
			</select>
		</div>
	</div>
	<div class="oneSelect">
		<input type="button" id="tdhRechercher" value="Rechercher"/>
	</div>
</div>
<div class="results"></div>
<?php echo $hello; ?>