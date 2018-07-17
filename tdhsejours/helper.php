<?php
/**
 * Helper class for Hello World! module
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class ModtdhsejourHelper
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function getHello($params)
    {
        return 'Dev en cours : THD Séjours!';
		
	}
	
	
    public static function getAjax()
    {
        include_once JPATH_ROOT . '/components/com_content/helpers/route.php';

        $input = JFactory::getApplication()->input;
        $data  = $input->get('data', '', 'string');

        $output = 'AJAX en cours : getAjax';
        
        return $output;
    }
	
	public static function getListAjax()
    {
        //include_once JPATH_ROOT . '/components/com_content/helpers/route.php';

        $input = JFactory::getApplication()->input;
        $data  = $input->get('data', '', 'string');

        $output = 'AJAX en cours : GETList';
        
        return $output;
    }

}

?>