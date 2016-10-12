<?php

class about extends AppController{

	public function __construct($parent) {
		$this->parent = $parent;
		$this->showList();
	}

	public function showList() {
		$pars = $this->parent->urlPathParts[0];
		$buttons = array(
			"main"=>array("pagename"=>"main","title"=>"home title","link"=>"/main","urlname"=>$pars),
			"carousel"=>array("pagename"=>"carousel","title"=>"car title","link"=>"/carousel","urlname"=>$pars),
			"form"=>array("pagename"=>"form","title"=>"form","link"=>"/form","urlname"=>$pars),
			"about"=>array("pagename"=>"about","title"=>"about","link"=>"/about","urlname"=>$pars)
			);

		$data = $this->parent->getModel("fruits")->select("select * from fruit_table");

		$this->getView("header");
		$this->getView("navigation", $buttons);	
		$this->getView("about", $data);
		$this->getView("footer");
		
	}

	public function showAddForm() {
		$pars = $this->parent->urlPathParts[0];
		$buttons = array(
			"main"=>array("pagename"=>"main","title"=>"home title","link"=>"/main","urlname"=>$pars),
			"carousel"=>array("pagename"=>"carousel","title"=>"car title","link"=>"/carousel","urlname"=>$pars),
			"form"=>array("pagename"=>"form","title"=>"form","link"=>"/form","urlname"=>$pars),
			"about"=>array("pagename"=>"about","title"=>"about","link"=>"/about","urlname"=>$pars)
			);

		//$data = $this->parent->getModel("fruits")->select("select * from fruit_table");

		$this->getView("header");
		$this->getView("navigation", $buttons);	
		$this->getView("addform");
		$this->getView("footer");

	}

	public function editForm() {
		$pars = $this->parent->urlPathParts[0];
		$buttons = array(
			"main"=>array("pagename"=>"main","title"=>"home title","link"=>"/main","urlname"=>$pars),
			"carousel"=>array("pagename"=>"carousel","title"=>"car title","link"=>"/carousel","urlname"=>$pars),
			"form"=>array("pagename"=>"form","title"=>"form","link"=>"/form","urlname"=>$pars),
			"about"=>array("pagename"=>"about","title"=>"about","link"=>"/about","urlname"=>$pars)
			);


		//change this so that you are getting the data based on the id number you selected
		$data = $this->parent->getModel("fruits")->select("select * from fruit_table");

		$this->getView("header");
		$this->getView("navigation", $buttons);	
		$this->getView("addform", $data);
		$this->getView("footer");
	}

	public function delete() {
		
	}

	public function addAction() {

		$data = $this->parent->getModel("fruits")->select("insert into fruit_table (name) values (:name)", array(":name"=>$_REQUEST["name"]));
		header("location:/about");

	}
}

?>