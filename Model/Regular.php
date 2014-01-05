<?php
abstract class RF_Model_Regular extends Zend_Db_Table_Abstract
{
    protected $_filePath;
    protected $_imagePath;
    protected $_unsettable;
    protected $_primary = 'id';

    private function _getPrimaryKey(){
        if(is_array($this->_primary)){
            foreach($this->_primary as $p){
                return $p;
            }
        }else{
            return $this->_primary;
        }
    }

    protected function _addMetaData($f){
        $identityModel = Local_Model_Identity::getInstance();
        $f['lastupdate'] = time();
        $f['editor_id'] = $identityModel->getID();
        return $f;
    }

    public function init(){
        $this->_unsettable = array(
            'image','submit'
        );

        if($this->_imagePath){
            if(!is_array($this->_imagePath)){
                $this->_imagePath=array($this->_imagePath);
            }
            foreach($this->_imagePath as $path){
                if(!$this->_checkDir($path,'image')){
                    echo "Directory for File Upload can't be created! Make sure public/images/uploaded is writeable!";
                }
            }
        }

        if($this->_filePath){
            if(!is_array($this->_filePath)){
                $this->_filePath=array($this->_filePath);
            }
            foreach($this->_filePath as $path){
                if(!$this->_checkDir($path,'file')){
                    echo "Directory for File Upload can't be created! Make sure public/files/ is writeable!";
                }
            }
        }
    }

    private function _checkDir($path,$type)
    {
        switch($type){
            case 'image':
                $fullpath = DOCUMENT_ROOT.'/images/uploaded/'.$path;
                break;
            case 'file':
                $fullpath = DOCUMENT_ROOT.'/files/'.$path;
                break;
        }

        if(!is_dir($fullpath)){
            if (!mkdir($fullpath,0777)) {
                return false;
            }else{
                return true;
            }
        }else{
            return true;
        }

    }

    public function clearImageCache($filename){
        $this->_clearImageCache($filename);
    }

    private function _clearImageCache($filename)
    {
        foreach($this->_imagePath as $path){
            $cachePath = $this->_buildCachePath($path);
            $imageCache = Zend_Registry::get('imageCache');
            $imageCache->clean(Zend_Cache::CLEANING_MODE_MATCHING_TAG,array($cachePath.$filename));
        }
    }

    private function _buildCachePath($path)
    {
        $directory = "uploaded/".$path;
        $cacheDir = str_replace('/','_',$directory);
        return $cacheDir;
    }

    public function getEntry($id)
    {
        $row = $this->fetchRow($this->_getPrimaryKey().' = ' .(int)$id);
        if ($row) {
            return $row->toArray();
        }else{
            return false;
        }
    }

    public function getRandomEntry($where='1')
    {
        $row = $this->fetchRow($where,'RAND()');
        if (!$row) {
            return false;
        }else{
            return $row->toArray();
        }
    }

    public function insert($f)
    {
        foreach($this->_unsettable as $u){
            unset($f[$u]);
        }
        $data = $f;

        $id = parent::insert($data);

        foreach($this->_imagePath as $path){
            if(file_exists(DOCUMENT_ROOT.'/images/uploaded/'.$path.Zend_Session::getId())){
                rename(DOCUMENT_ROOT.'/images/uploaded/'.$path.Zend_Session::getId(),
                    DOCUMENT_ROOT.'/images/uploaded/'.$path.$id);
            }
        }

        return $id;
    }

    public function insertEntry($f){
        return $this->insert($f);
    }

    public function update($f,$where)
    {
        foreach($this->_unsettable as $u){
            if(array_key_exists($u,$f)){
                unset($f[$u]);
            }
        }
        if($this->_imagePath){
            $this->_clearImageCache($f[$this->_getPrimaryKey()]);
        }
        $data = $f;

        foreach($this->_imagePath as $path){
            if(file_exists(DOCUMENT_ROOT.'/images/uploaded/'.$path.Zend_Session::getId())){
                rename(DOCUMENT_ROOT.'/images/uploaded/'.$path.Zend_Session::getId(),
                    DOCUMENT_ROOT.'/images/uploaded/'.$path.$f[$this->_getPrimaryKey()]);
            }
        }

        parent::update($data, $where);
    }

    public function updateEntry($f,$primary){
        $this->update($f,$this->_getPrimaryKey().'='.(int)$primary);
    }

    public function deleteEntry($id)
    {
        foreach($this->_imagePath as $path){
            @unlink(DOCUMENT_ROOT."/images/uploaded/".$path.$id);
        }
        if($this->_imagePath){
            $this->_clearImageCache($f[$this->_getPrimaryKey()]);
        }

        return $this->delete($this->_getPrimaryKey().'='.(int)$id);
    }

    protected function getUserID(){
        $user_id = Zend_Auth::getInstance()->getStorage()->read()->id;
        return $user_id;
    }

    public function toggleActive($id)
    {
        $res = $this->getEntry($id);
        if($res->active==0){
            $active = 1;
        }else{
            $active = 0;
        }
        $data = array(
            'active' => $active
        );
        try{
            parent::update($data, $this->_primary.' = '. (int)$id);
            return $active;
        }catch(Zend_Exception $e){
            echo "Exception occured: ".$e->getMessage();
        }
    }

    // returns all database entries, where 'needle' is contained in any of the 'fields'
    // if 'highlight' is true, all occurences of needle are marked as span with class 'cssClass'
    public function searchFields($needle, $fields, $orderedBy, $highlight=false, $cssClass)
    {
        if($fields == null)
            return false;

        if($needle == null)
            return $this->fetchAll('1', $orderedBy);

        // construct where clause for each field
        foreach($fields as $field)
        {
            $where_array[] = "LOWER(".$field.") like '%$needle%'";
        }
        $where = join(' OR ', $where_array);

        // do database lookup
        $results = $this->fetchAll($where, $orderedBy);
        if($results != null)
            $results = $results->toArray();
        else
            return null;

        // mark search string in results
        if($highlight)
        {
            foreach($results as &$result)
            {
                foreach($fields as $field)
                {
                    $result[$field] = $this->highlight($result[$field], $needle);
                }
            }
        }

        return $results;
    }


    // Takes a string 'haystack' and highlights all occurences of 'needle' by surrounding it with a span of class 'cssClass'
    // (case insensitive)
    private function highlight($haystack, $needle, $cssClass='searchHighlight')
    {
        // length of search string
        $needle_length = strlen($needle);

        // start at beginning of haystack
        $start = 0;

        // find position of first occurence of needle in haystack
        $offset = stripos($haystack, $needle);

        // repeat until all occurences of needle in haystack are replaced
        while($offset !== false)
        {
            // copy substring before occurence of needle to result
            $result .= substr($haystack, $start, $offset-$start);

            // copy modified version of needle to result
            $result .= '<span class="'.$cssClass.'">'.substr($haystack, $offset, $needle_length).'</span>';

            // set start to end of current needle occurence
            $start = $offset + $needle_length;

            // find next occurence of needle in haystack (starting one character the start of the current needle)
            $offset = stripos($haystack, $needle, $offset+1);
        }

        // copy part of haystack after the last occurence of needle to result
        $result .= substr($haystack, $start);

        return $result;
    }
} 