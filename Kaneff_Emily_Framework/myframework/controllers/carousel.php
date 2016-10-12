<?

class carousel extends AppController{

	public function __construct($pars) {
		

	}

	public function index($pars) {
		$pars = $pars->urlPathParts[0];

		$buttons = array(
			"main"=>array("pagename"=>"main","title"=>"home","link"=>"/main","urlname"=>$pars),
			"carousel"=>array("pagename"=>"carousel","title"=>"car","link"=>"/carousel","urlname"=>$pars),
			"form"=>array("pagename"=>"form","title"=>"form","link"=>"/form","urlname"=>$pars)
			);

		$this->getView("header");
		$this->getView("navigation", $buttons);	
		$this->getView("carousel");
		$this->getView("footer");
	}

}

?>