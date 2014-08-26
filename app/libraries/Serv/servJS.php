<?php
	namespace Serv;
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
			if(!is_array($str)) $this->content[] = $str;
			else{
				foreach($str as $s)
					$this->content[] = $s;
			}
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
			$s = '';
			$this->lib = array_unique($this->lib);
			foreach($this->lib as $l)
				$s .= $this->loadLib($l);
			
			$s .= ($new) ? '<script>' : '';
			$t = "\$(document).ready(function(){";
			foreach($this->content as $v)
				$t .= $this->loadStr($v);
			
			$t .= "}); ";
			
			$s .= Minify\JSMin::run($t);
			$s .= ($new) ? '</script>' : '';
			
			echo $s;
		}
	}

?>