<?php

	function isActive($current){
		$CI =& get_instance();
		echo ($CI->router->fetch_class() == $current ? 'class="active"' : '');
	}
	function now($date = false){
		return date('Y-m-d' . ($date ? ' H:i:s' : ''));
	}