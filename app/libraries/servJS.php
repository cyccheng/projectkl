<?php
	class servJS{
		private $lib = array();
		private $content = array();
		private static $JSPATH = "/js/";
		
		
		public function addLib($str){
			if($this->libExist($str))
				$this->lib[] = "/js/$str";
		}
		
		#KT_TODO
		private function libExist($l){
			return true;
		}
		
		public function immediate($str){
			echo ($this->libExist($str)) ? $this->loadLib($str) : '';
		}
		
		public function addJS($str){
			$this->content[] = $str;
		}
		
		private function hasData(){
			return (empty($this->lib) && empty($this->content)) ? false : true;
		}
		
		private function loadLib($l){
			return "<script src='$l'></script>\n";
		}
		
		private function loadStr($l){
			return $l.'; ' ;
		}
		
		public function run($new = true){
			if (!$this->hasData()) return '';
			foreach($this->lib as $l)
				$s .= $this->loadLib($l);
			
			$s = ($new) ? '<script>' : '';
			foreach($this->content as $v)
				$s .= $this->loadStr($v);
			
			$s .= ($new) ? '</script>' : '';
			
			echo $s;
		}
	}

?>