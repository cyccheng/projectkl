<?php
	class h{
		static function pr($o){
			echo "<pre>";
			print_r($o);
			echo "</pre>";
		}
		
		static function backtrace($printOrArr=true,$levels=9999,$skippy=0,$ishtml=null){
			if (!function_exists('debug_backtrace')) return '';
			 
			if ($ishtml === null) $html =  (isset($_SERVER['HTTP_USER_AGENT']));
			else $html = $ishtml;
			
			$fmt =  ($html) ? "</font><font color=#808080 size=-1> %% line %4d, file: <a href=\"file:/%s\">%s</a></font>" : "%% line %4d, file: %s";

			$MAXSTRLEN = 128;

			$s = ($html) ? '<pre align=left>' : '';
			
			if (is_array($printOrArr)) $traceArr = $printOrArr;
			else $traceArr = debug_backtrace();
			array_shift($traceArr);
			array_shift($traceArr);
			$tabs = sizeof($traceArr)-2;
			
			foreach ($traceArr as $arr) {
				if ($skippy) {$skippy -= 1; continue;}
				$levels -= 1;
				if ($levels < 0) break;
				
				$args = array();
				for ($i=0; $i < $tabs; $i++) $s .=  ($html) ? ' &nbsp; ' : "\t";
				$tabs -= 1;
				if ($html) $s .= '<font face="Courier New,Courier">';
				if (isset($arr['class'])) $s .= $arr['class'].'.';
				if (isset($arr['args']))
				 foreach($arr['args'] as $v) {
					if (is_null($v)) $args[] = 'null';
					else if (is_array($v)) $args[] = 'Array['.sizeof($v).']';
					else if (is_object($v)) $args[] = 'Object:'.get_class($v);
					else if (is_bool($v)) $args[] = $v ? 'true' : 'false';
					else {
						$v = (string) @$v;
						$str = htmlspecialchars(str_replace(array("\r","\n"),' ',substr($v,0,$MAXSTRLEN)));
						if (strlen($v) > $MAXSTRLEN) $str .= '...';
						$args[] = $str;
					}
				}
				$s .= $arr['function'].'('.implode(', ',$args).')';
				
				
				$s .= @sprintf($fmt, $arr['line'],$arr['file'],basename($arr['file']));
					
				$s .= "\n";
			}	
			if ($html) $s .= '</pre>';
			if ($printOrArr) print $s;
			
			return $s;
		}
	}
?>