<?php 
class RF_View_Helper_EditableElement extends Zend_View_Helper_Abstract {

    private $_class;
    private $_attribute;
    private $_container;
    private $_container_value;
    private $_data_source;
    private $_data_callback;
    private $_data_pk;
    private $_data_type;
    private $_data_name;
    private $_data_value;
    private $_data_url;

 	public function editableElement($pk,$name,$value) {
		$this->_defaultValues($value);
        $this->setPrimary($pk);
        $this->setName($name);
		return $this;
	}

    private function _defaultValues($value) {
        $this->setContainer('div');
        $this->setClass('edit_area');
        $this->setType('text');
        $this->setURL($this->view->url(array('controller'=>'index','action'=>'save','id'=>null)));
        $this->setContainerValue($value);
        $this->setValue(null);
    }

    public function setContainer($container){
        $this->_container = $container;
        return $this;
    }

    public function setSource($source){
        $this->_data_source = $source;
        return $this;
    }

    public function addClass($class){
        $this->_class = $this->_class . ' ' . $class;
        return $this;
    }

    public function setClass($class){
        $this->_class = $class;
        return $this;
    }

    public function setAttribute($attribute){
        $this->_attribute = $this->_attribute . ' ' . $attribute;
        return $this;
    }

    public function setPrimary($pk){
        $this->_data_pk = $pk;
        return $this;
    }

    public function setCallback($callback){
        $this->_data_callback = $callback;
        return $this;
    }

    public function setType($type){
        $this->_data_type = $type;
        return $this;
    }

    public function setName($name){
        $this->_data_name = $name;
        return $this;
    }

    public function setValue($value){
        $this->_data_value = $value;
        return $this;
    }

    public function setContainerValue($value){
        $this->_container_value = $value;
        return $this;
    }

    public function setURL($url){
        $this->_data_url = $url;
        return $this;
    }

	public function render() {
		$code  = '<' . $this->_container;
        $code .= ' class="' . $this->_class . '"';
        if($this->_attribute){
            $code .= ' ' . $this->_attribute;
        }
        $code .= ' data-type="' . $this->_data_type . '"';
        $code .= ' data-pk="' . $this->_data_pk . '"';
        if($this->_data_name){
            $code .= ' data-name="' . $this->_data_name . '"';
        }
        if($this->_data_callback){
            $code .= ' data-callback="'.$this->_data_callback.'"';
        }
        if($this->_data_value){
            $code .= ' data-value="' . $this->_data_value . '"';
        }
        if($this->_data_url){
            $code .= ' data-url="' . $this->_data_url . '"';
        }
        if($this->_data_source){
            $code .= ' data-source="' . $this->_data_source . '"';
        }
        $code .= '>';
        if($this->_container_value){
            $code .= $this->_container_value;
        }
        $code .= '</' . $this->_container . '>';
        return $code;
	}

}