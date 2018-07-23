<?php defined('_JEXEC') or die;

/**
 *
 * File       mod_session.php
 * Created    5/22/13 6:43 AM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2013 betweenbrain llc. All Rights Reserved.
 * License    GNU General Public License version 2, or later.
 */

// Include the helper.
require_once __DIR__ . '/helper.php';

// Instantiate global document object
$doc = JFactory::getDocument();

$loadJquery = $params->get('loadJquery', 1);
$format     = $params->get('format', 'debug');

// rajout des fichiers de script TDH
//$doc->addScript(__DIR__ . 'tdhsejours.js');


// Load jQuery
if ($loadJquery == '1') {
	$doc->addScript('//code.jquery.com/jquery-latest.min.js');
}

$js = <<<JS
(function ($) {
	$( document ).ready(function() {
		console.log('Lancement de l appel AJAX');
		// rajout d'une valeur vide
		$('.js-example-basic-single').append($('<option>', {
			value: '',
			text: ''
    	}));
		
		var actions  = ['depart','destination','thematique'];
		
		actions.forEach(appelAJAX);
		
		
	});
	
	
	function appelAJAX(item, index) {	
		console.log('Lancement de l appel avec : '+item);
	
		var request = {
			'option' : 'com_ajax',
			'module' : 'tdhsejours',
			'cmd'    : item,
			'data'   : 'value',
			'format' : '{$format}'
		};
		$.ajax({
			type   : 'POST',
			data   : request,
			success: function (response) {
				var JSONObject = $.parseJSON(response);  
				console.log('JSONObject : '+JSONObject);  
				for (var key in JSONObject) {
					if (JSONObject.hasOwnProperty(key)) {
					  console.log(JSONObject[key]["code"] + ", " + JSONObject[key]["libelle"]);
					  // récupération des valeurs pour l'intégrer au select correspondant
						var data = {id: JSONObject[key]["code"],text: JSONObject[key]["libelle"]};
						var newOption = new Option(data.text, data.id, false, false);
						$('.select'+item).append(newOption);
					}
				}
			},
			error: function(response) {
				console.log('AJAX error :'+ response);
				var data = '',
					obj = $.parseJSON(response.responseText);
				for(key in obj){
					data = data + ' ' + obj[key] + '<br/>';
				}
				$('.status').html('erreur : '+data);
	        }
		});
		// on n'affiche aucune valeur par défaut
		$('.js-example-basic-single').select2({
			allowClear: true,
			placeholder: 'Sélectionner'
			
		});
		
		$('.select'+item).select2("val", "");
	};
	
})(jQuery)
JS;

$doc->addScriptDeclaration($js);

require(JModuleHelper::getLayoutPath('mod_tdhsejours'));