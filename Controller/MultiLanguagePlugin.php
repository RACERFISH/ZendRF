<?php

/**
 * Index controller
 *
 * Default controller for this application.
 * 
 * @uses       Zend_Controller_Action
 * @package    QuickStart
 * @subpackage Controller
 */
class RF_Controller_MultiLanguagePlugin extends Zend_Controller_Plugin_Abstract
{
	protected $_language;
	
	public function preDispatch(Zend_Controller_Request_Abstract $request)
	{
		if($this->_request->getParam('language_switch')){
			$language = $this->_request->getParam('language_switch');
		}elseif($this->_request->getParam('language')){
			$language = $this->_request->getParam('language');
		}
		$this->setLanguage($language);
		Zend_Registry::set('language',$this->_language);
		
	}
	
	public function setLanguage($language)
	{
		if($this->setLanguageById($language))
			return;
		if($this->setLanguageByShort($language))
			return;
		if($this->setLanguageByCookie())
			return;
		$this->setLanguageDefault();
	}
    
    public function setLanguageById($id)
    {
    	if($id == null)
			return false;
			
		$languageModel = new RF_Model_Language();
		$short = $languageModel->getShortById($id);
		if($short == null)
			return false;
		
		$this->_language = Array("id"=>$id, "short"=>$short);
		$this->setLanguageCookie();
		return true;
    }
    
    public function setLanguageByShort($short)
    {
    	if($short == null)
	    	return false;
    	
    	$languageModel = new RF_Model_Language();
		$id = $languageModel->getIdByShort($short);
		if($id == null)
			return false;
		
		$this->_language = Array("id"=>$id, "short"=>$short);
		$this->setLanguageCookie();
		return true;
    }
    
    public function setLanguageByCookie()
    {
    	if($_COOKIE["languageId"] == null)
    		return false;
    	
    	if($this->setLanguageById($_COOKIE["languageId"]))
    		return true;
    	
    	return false;
    }
    
    public function setLanguageDefault()
    {
    	$this->_language = Array("id"=>1, "short"=>"de");
    }
    
    public function setLanguageCookie()
    {
    	setcookie("languageShort", $this->_language['short'], 0, "/");
		setcookie("languageId", $this->_language['id'], 0, "/");
    }
}
