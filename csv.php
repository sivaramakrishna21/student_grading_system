<?php
	class csv extends mysqli
	{	
		private $state_csv=false;
		public function __construct()
		{
			parent::__construct("localhost","root","","csv");
			if($this->connect_error){
				echo "fail to connect to database:".$this->connect_error;
			}
		}
		public function import($file)
		{
			$file=fopen($file,'r');
			while($row=fgetcsv($file)){
				var_dump($row);
			}
		}

	}
?>