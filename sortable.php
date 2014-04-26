<?php
/*** APP: JQuery Sortable Menu Demo
	WEbsite:packetcode.com
	Author: Krishna TEja G S
	Date: 26th April 2014
	***/

// class to run the background functions to store 
// retrive the menu from database	
class sortable{

	// default function
	function main(){

		if(isset($_REQUEST['data']))
		{
			$data = $_REQUEST['data'];
			$this->update($data);
		}else{
			$menu = $this->getMenu();
			return $menu;
		}
		
	}

	// to update the menu in database
	function update($data){
		$con = $this->connect();
		parse_str($data,$str);
		$menu = $str['item'];
		foreach($menu as $key => $value){
			$key=$key+1;
			mysqli_query($con,"update sortable set menu='$value' where id=$key");
		}
		echo "Succesfully updated";
		
	}

	function getMenu(){
		// to retrive data from db
		$con = $this->connect();
		$result = mysqli_query($con,"select * from sortable");
		$k=0;
		while($row=mysqli_fetch_array($result))
		{
			$menu[$k]=$row['menu'];
			$k++;
		}
		return $menu;
	}

	//t connect to database
	function connect(){
		return mysqli_connect("localhost","root","","test");
		//change it with appropriate database details
	}
}

$menu = new sortable();
$items= $menu->main();

?>