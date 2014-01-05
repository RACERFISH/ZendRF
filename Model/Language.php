<?php 
class RF_Model_Language extends RF_Model_Regular
{ 
   protected $_name = 'languages';  
   
   public function getIdByShort($short){
   		$res = $this->fetchRow("short='".$short."'");
   		return $res->id;
   }
   
   public function getShortById($id){
   		$res = $this->fetchRow("id='".$id."'");
   		return $res->short;
   }
   
} 