<? 


class Router {

	public static function route() {

		require_once "include/routes.php";
		$q = $_GET['q'];
		if($q[-1] == '/'){
			$q = mb_substr($q, 0, -1);
		}
			foreach ($routes as $key => $value) {
				if($key == $q){
					include_once "pages/".$value.".php";
					die();
				}
			}

		self::error(404);

	}

	public static function error($cod){
		include_once "pages/error/".$cod.".php";
	}

}