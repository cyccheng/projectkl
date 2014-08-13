<?php
	class servDEBUG{
		private $TIME = array();
		private $log = array();
		private $ROUNDING = 6;
		function __construct(){
			$this->TIME['START'] = microtime(true);
			$this->loadJS();
		}
		
		function renderView(){
			$this->calculateExecutionTime();
			$s = "<div id=devmsg>";
			foreach($this->log as $log){
				$s .= $log;
			}
			$s .= "</div>";
			echo $s;
		}
		
		function loadJS(){
			global $servJS;
			$s[] = "\$('#devmsg').before('<a id=debugctrl><img src=/image/debug.jpg></img></a>')";
			$s[] = "\$('#debugctrl').click(function(){
				\$('#devmsg').toggle();
			})";
			$servJS->addJS($s);
		}
		
		function add($title, $str){
			$this->log[] = $this->addRow($title, $str);
		}
		
		public function beforeJS(){
			$this->TIME['BEFOREJS'] = microtime(true);
		}
		
		public function afterJS(){
			$this->TIME['AFTERJS'] = microtime(true);
		}
		
		private function calculateExecutionTime(){
			$this->afterJS();
			$str = "BODYS: " .$this->timeLoadHtml()
				."<br>JAVAS: ".$this->timeLoadJS()
				."<br>TOTAL: ".$this->timeLoadAll();
			$this->add("Execution Time: ", $str);
		}
		
		private function addRow($title, $str){
			return "<div class='row'><span>$title</span>$str</div>";
		}
		
		private function timeLoadHtml(){
			return round($this->TIME['BEFOREJS'] - $this->TIME['START'], $this->ROUNDING) * 1000 ." ms";
		}
		
		private function timeLoadJS(){
			return round($this->TIME['AFTERJS'] - $this->TIME['BEFOREJS'], $this->ROUNDING) * 1000 ." ms";
		}
		
		private function timeLoadAll(){
			return round($this->TIME['AFTERJS'] - $this->TIME['START'], $this->ROUNDING) * 1000 ." ms";
		}
	}
?>	