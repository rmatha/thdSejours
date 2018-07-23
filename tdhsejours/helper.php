<?php defined('_JEXEC') or die;

/**
 * File       helper.php
 * Created    6/7/13 1:51 PM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2013 betweenbrain llc. All Rights Reserved.
 * License    GNU General Public License version 2, or later.
 */

class modTdhsejoursHelper {

	public static function getAjax() {

		// Get module parameters
		jimport('joomla.application.module.helper');
		$input  = JFactory::getApplication()->input;
		$module = JModuleHelper::getModule('tdhsejours');
		$params = new JRegistry();
		$params->loadString($module->params);

		
		
		if ($input->get('cmd')) {
			// reinitialisation de la variable de session
			$liste = array();
			$map_url ='';	
			$xml_rep = '';
			$cmd  = $input->get('cmd');
			$data = $input->get('data');
			switch ($cmd) {
				case "depart" :
					if (!isset($sessionData[$data])) {
						$map_url = "http://www.speedresa.com/lib/xml.php?AGENCE=T15&list=aeroports";
						$xml_rep = "aeroport";
					}
					break;
				case "destination" :
					if (!isset($sessionData[$data])) {
						$map_url = "http://www.speedresa.com/lib/xml.php?AGENCE=T15&list=destinations";
					}
					break;
				case "thematique" :
					if (!isset($sessionData[$data])) {
						$map_url = "http://www.speedresa.com/lib/xml.php?AGENCE=T15&list=thematiques";
					}
					break;	
			}
			if ($map_url) {
				if (($response_xml_data = file_get_contents($map_url))===false){
					$liste[] = array( 'code' =>'err1','libelle' =>'Chargement KO');
				} else {
					
				   libxml_use_internal_errors(true);
				   $data = simplexml_load_string($response_xml_data);
				   if (!$data) {
					   $liste[] = array( 'code' =>'err2','libelle' =>'Loading KO');
					   
				   } else {
						if (!empty($xml_rep)) {
							$data_ref = $data->aeroport;
						}
						else {
							$data_ref = $data;
						}
						foreach ($data_ref as $item) {
							$code = (string)$item->code;
							$libelle = (string)$item->libelle;
							$liste[] = array( 'code' =>$code,'libelle' =>$libelle);
						}
					  
					  
				   }
				}
				return json_encode($liste);
			}

			
		}
		
		return false;
		
	}
	
	function xml2array ( $xmlObject, $out = array () )
	{
		foreach ( (array) $xmlObject as $index => $node )
			$out[$index] = ( is_object ( $node ) ) ? xml2array ( $node ) : $node;

		return $out;
	}
}