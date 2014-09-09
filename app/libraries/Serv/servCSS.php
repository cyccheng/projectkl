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
			//echo "hi";
			//var_dump($this->lib);
			//var_dump(!isset($this->lib[0])); //weird... u continue lol okok i use inline style 1st kkk
			//echo "bye";// hi
			// return empty($this->lib) ? false : true;	//this checking has problem, cna help fix? need fix juris issue now. ok i try fix thx
			return !isset($this->lib[0]) ? false : true;	//this checking has problem, cna help fix? need fix juris issue now. ok i try fix thx
		}
		
		private function loadLib($l){
			$filename = '/var/www/us.ktserv.www/htdocs/projectkl/public/'.$l;
			if(file_exists($filename))
				return ' '.file_get_contents('/var/www/us.ktserv.www/htdocs/projectkl/public/'.$l);
		}
		
		public function run(){
			//var_dump($this->lib);
			//var_dump($this->hasData());
			if (!$this->hasData()) return '';
			$s = '';
			foreach($this->lib as $l)
				$s .= $this->loadLib($l);
			
			print_r($s);
			$cm = new Minify\CSSMin();
			$s = $cm->run($s);
			echo "<style>".$s."</style>";
		}
	}

?>