<?php
class RF_Form_Element_MultiCheckBox extends Zend_Form_Element_MultiCheckbox
{
    private $_options;

    public function setComplexOptions($result,$value='id',$content='name',$required=true)
    {
        foreach($result as $o){
            $this->addMultiOption($o[$value],$o[$content]);
        }
        $this->setRequired($required);
        $this->_options = $result;
        return $this;
    }

    public function allowEmptyOption($value=0,$label = "please select..."){
    	$options = $this->getMultiOptions();
    	$this->setMultiOptions(array($value=>$label));
    	$this->addMultiOptions($options);
        return $this;
    }

    public function getRawResult(){
        return $this->_options->toArray();
    }
 
}
