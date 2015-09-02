<?php 
	/**
	* 
	*/
	class contact extends controller
	{
		
		function __construct()
		{
			# code...
		}
		public function index(){
			echo "contact index";
		}

		public function byPhone(){
			echo "contact by Phone";
		}

		public function byEmail(){
			echo "contact by email";
		}
	}