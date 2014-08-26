<?php
	namespace Serv;
	class servCSS{
		private $lib = array();
		private static $CSSPATH = "css/";
		
		
		public function add($str){
			if($this->libExist($str))
				$this->lib[] = "css/$str";
		}
		
		#KT_TODO
		private function libExist($l){
			return true;
		}
		
		private function hasData(){
			return empty($this->lib) ? false : true;
		}
		
		private function loadLib($l){
			$filename = '/var/www/us.ktserv.www/htdocs/projectkl/public/'.$l;
			if(file_exists($filename))
				return ' '.file_get_contents('/var/www/us.ktserv.www/htdocs/projectkl/public/'.$l);
		}
		
		public function run(){
			if (!$this->hasData()) return '';
			$s = '';
			foreach($this->lib as $l)
				$s .= $this->loadLib($l);
			
			$cm = new Minify\CSSMin();
			$s = $cm->run($s);
			echo "<style>".$s."</style>";
		}
	}

?>