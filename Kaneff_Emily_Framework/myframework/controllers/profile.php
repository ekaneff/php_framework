<?

class profile extends AppController {
	public function __construct(){

		if (@$_SESSION['loggedin'] && $_SESSION["loggedin"]==1) {

		} else {
			header("location:/main");
		}
	}

	public function index($pars) {
		$pars = $pars->urlPathParts[0];
		$buttons = array(
			"main"=>array("pagename"=>"main","title"=>"home title","link"=>"/main","urlname"=>$pars),
			"carousel"=>array("pagename"=>"carousel","title"=>"car title","link"=>"/carousel","urlname"=>$pars),
			"form"=>array("pagename"=>"form","title"=>"form","link"=>"/form","urlname"=>$pars)
			);
		
		$this->getView("header");
		$this->getView("navigation", $buttons);
		echo $_SESSION["par"];
	}
}

?>