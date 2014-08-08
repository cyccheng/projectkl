<?php
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
			return "<link href='$l' rel='stylesheet' type='text/css'>\n";
		}
		
		public function run(){
			if (!$this->hasData()) return '';
			$s = '';
			foreach($this->lib as $l)
				$s .= $this->loadLib($l);
			
			echo $s;
		}
	}

?>