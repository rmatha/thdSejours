<?php
/**
 * Hello World! Module Entry Point
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';


$js = "
jQuery(document).ready(function() {
    jQuery('#tdhRechercher').on('click', function () {
        console.log('Lancement de la recherche');
		jQuery.ajax({
			url : 'index.php?option=com_ajax&module=tdhsejours&method=getList&format=json',
			data: { list:'depart' },
			success: function(result, status, xhr) { console.log('reponse OK');console.log(result); },
			error: function() { console.log('ajax call failed'); },
		});
        return false;
    });
})
";
$doc  = JFactory::getDocument();
$doc->addScriptDeclaration($js);


$hello = modtdhsejourHelper::getHello($params);

require JModuleHelper::getLayoutPath('mod_tdhsejours');



?>