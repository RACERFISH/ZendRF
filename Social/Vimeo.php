<?php
	class RF_Social_Vimeo extends Zend_View_Helper_Abstract
	{
		private $_api_endpoint;
		private $_videos;
		
	    public function __construct(){
	    	$this->_api_endpoint = 'http://www.vimeo.com/api/v2/'.$username;
			$this->_videos = simplexml_load_string($this->curl_get($this->_api_endpoint.'/videos.xml'));
	    }
	    
		private function curl_get($url) {
			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_TIMEOUT, 30);
			$return = curl_exec($curl);
			curl_close($curl);
			return $return;
		}
	    
		public function getFeed($username)
	    {
	    	return $this->_videos;		  
	    }
	    	
		public function getLatestVideo($username)
	    {
	    	return $this->_videos[0];		  
	    }

	    public function getVideoThumbnail($video_id){
	    	$api_endpoint = 'http://vimeo.com/api/v2/video/'.$video_id;
			$videos = simplexml_load_string($this->curlGet($api_endpoint.'.xml'));
			return $videos->video->thumbnail_medium;
	    }

        public function renderVideo($url,$width='100%',$height='100%',$color='cdb474'){
//			$oembed_endpoint = 'http://www.vimeo.com/api/oembed.xml';
//
//			// Create the URL
//			$oembed_url = $oembed_endpoint.'?url='.rawurlencode($url).'&height='.$height.'&width='.$width.'&color='.$color.'&byline=false&title=false&portrait=false';
//
//			// Load in the oEmbed XML
//			$oembed = simplexml_load_string($this->curl_get($oembed_url));
//			$embed_code = html_entity_decode($oembed->html);

//            $embed_code = '<object width="'.$width.'" height="'.$height.'"><param name="movie" value="'.$url.'&border='.$border.'&fs='.$fs.'"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed src="'.$url.'&border='.$border.'&fs='.$fs.'" type="application/x-shockwave-flash" allowscriptaccess="always" width="'.$width.'" height="'.$height.'" allowfullscreen="true"></embed></object>';
//
//            return $embed_code;

            $pieces = explode('/',$url);

            foreach($pieces as $p){
                if(strpos($p,'http') === false && strpos($p,'vimeo') === false && $p !== "" && $p !== null){
                    $iframe_url = $p;
                    break;
                }
            }

            $returnString  = '<div class="video-wrapper">';
            $returnString .= '    <iframe src="http://player.vimeo.com/video/'.$iframe_url.'" width="'.$width.'" height="'.$height.'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
            $returnString .= '</div>';

            return $returnString;
        }
	}
?>