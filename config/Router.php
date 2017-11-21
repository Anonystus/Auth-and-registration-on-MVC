<?php 
class Router{
	static function ControllerAction(){
		$routes=include_once('config/routes.php');
		$URI=trim(parse_url($_SERVER['REQUEST_URI'],5));
		$URI=explode('/',$URI);
		spl_autoload_register(function($classname){include_once('C/C_'.$classname.'.php');});
		if(!empty($URI[1]) and empty($URI[2])){
			foreach($routes as $k=>$v){
				$k=explode('/',$k);
				$v=explode('/',$v);
				if($URI[1]==$k[0] and empty($k[1])){
					$Controller=$v[0];
					$Action=$v[1];
					$obj=new $Controller;
					if(method_exists($Controller,$Action)){
						$obj->$Action();
					}
				}
			}
		}
		if(!empty($URI[1]) and !empty($URI[2]) and empty($URI[3])){
			foreach($routes as $k=>$v){
				$k=explode('/',$k);
				$v=explode('/',$v);
				if($URI[1]==$k[0] and $URI[2]==$k[1] and empty($k[2])){
					$Controller=$v[0];
					$Action=$v[1];
					$obj=new $Controller;
					if(method_exists($Controller,$Action)){
						$obj->$Action();
					}
				}
			}
		}
		if(!empty($URI[1]) and !empty($URI[2]) and !empty($URI[3]) and empty($URI[4])){
			foreach($routes as $k=>$v){
			$k=explode('/',$k);
			$v=explode('/',$v);
			if($URI[1]==$k[0] and $URI[2]==$k[1] and !empty($k[2]) and empty($k[3])){
				$Controller=$v[0];
				$Action=$v[1];
				$id=$URI[3];
				$obj=new $Controller();
				if(method_exists($Controller,$Action)){
					$obj->$Action($id);
				}
			}
			}
		}
	}
	static function start(){
		Router::ControllerAction();
	}
}
?>