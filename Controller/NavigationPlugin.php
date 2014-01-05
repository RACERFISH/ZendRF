<?php
class RF_Controller_NavigationPlugin extends Zend_Controller_Plugin_Abstract {

    public function preDispatch (Zend_Controller_Request_Abstract $request)
    {

        $module = $request->getModuleName();

        $language = Zend_Registry::get('language');
        $nav = $language['short'];

        if(!($module == 'frontend')){
            $module = 'admin';
        }

        if(file_exists(APPLICATION_PATH . '/modules/' . strtolower($module) . '/configs/navigation.xml')) {

            try{
                $config = new Zend_Config_Xml(APPLICATION_PATH . '/modules/' . strtolower($module) . '/configs/navigation.xml', $nav);
                $navigation = new Zend_Navigation($config);
                Zend_Registry::set('navigation',$navigation);
            }catch(Zend_Navigation_Exception $e){
                //echo $e->getMessage();
                // Do nothing if no Navigation is not set
            }

        }

    }

}
?>