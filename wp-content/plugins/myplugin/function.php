<?php 
	function getSingerPost(){
		echo "This is a post";
	}


	add_action ( 'wp_head', 'getSingerPost' );

?>