<?php

	function isActive($current){
		$CI =& get_instance();
		echo ($CI->router->fetch_class() == $current ? 'class="active"' : '');
	}