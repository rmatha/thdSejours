<?php defined('_JEXEC') or die;

/**
 * File       default.php
 * Created    5/22/13 6:43 AM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2013 betweenbrain llc. All Rights Reserved.
 * License    GNU General Public License version 2, or later.
 */

?>
<script type="text/javascript" src="modules/mod_tdhsejours/tmpl/tdhSejours.js"></script>
<link rel="stylesheet" type="text/css" href="modules/mod_tdhsejours/tmpl/tdhSejours.css" media="screen" />

<form>
	
	<div class="tdhRoot">
		<div class="oneSelect">
			<div class="labelTHD">
				Aéroports de départ
			</div>
			<div class="selectTHD">
				<select class="js-example-basic-single selectdepart" message="Veuillez sélectionner l aéroport de départ" name="state">
				</select>
			</div>
		</div>
		<div class="oneSelect">
			<div class="labelTHD">
				Destination
			</div>
			<div class="selectTHD">
				<select class="js-example-basic-single selectdestination" message="Veuillez sélectionner la destination" name="state">
				</select>
			</div>
		</div>
		<div class="oneSelect">
			<div class="labelTHD">
				date de départ
			</div>
			<div class="selectTHD">
				<input data-role="datepicker" data-month="false" data-year="false">
				<input data-role="datepicker" data-day="false" data-year="false" data-locale="fr-FR">
				<input data-role="datepicker" data-day="false" data-month="false">
			</div>
		</div>
		<div class="oneSelect">
			<div class="labelTHD">
				Thématique
			</div>
			<div class="selectTHD">
				<select class="js-example-basic-single selectthematique" placeholder="veuillez sélectionner un truc" name="state">
				</select>
			</div>
		</div>
		<div class="oneSelect">
			<input type="button" id="tdhRechercher" value="Rechercher"/>
		</div>
	</div>
	
</form>
<div class="status">STATUS</div>