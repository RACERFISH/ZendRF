<?php
class RF_Form_Element_FileUpload extends Zend_Form_Element_File
{
    private $_rootpath;

    public function __construct($spec,$options=null){
        $this->_rootpath = DOCUMENT_ROOT.'/files/';
        parent::__construct($spec,$options);
    }

    public function setDestination($path,$filename=null){
        $this->addFilter('Rename',array('target' => $this->_rootpath.$path.$filename,
            'overwrite' => true));
    }
}