<?


class Time{


	public static function Delta($timeFromCentry){
		$dateRightNow = date('U');
		$deltaTimes = $dateRightNow - $timeFromCentry;
		if($deltaTimes < 120){
		    if($deltaTimes >= 11 && $deltaTimes <= 14){
		        return $deltaTimes.self::$dates['s'];
		        die();
		    }
		    if($deltaTimes % 10 == 1){
		        return $deltaTimes.self::$dates['sa'];
		    }
		    if($deltaTimes % 10 <= 4 && $deltaTimes % 10 != 0){
		        return $deltaTimes.self::$dates['si'];
		    }
		    if($deltaTimes % 10 > 4 || $deltaTimes % 10 == 0){
		        return round($deltaTimes).self::$dates['s'];
		    }
		    die();
		}
		if($deltaTimes < 7200 && $deltaTimes >= 120){
		    if((round($deltaTimes/60)) % 10 <= 4){
		        $deltaTimes = round(($deltaTimes/60)).self::$dates['mi'];
		    }
		    else {$deltaTimes = round(($deltaTimes/60)).self::$dates['m'];
		    }
		    return $deltaTimes;
		    die();
		}
		if($deltaTimes < 60*60*48 && $deltaTimes >= 7200){
		    if(round($deltaTimes/3600) >= 11 && round($deltaTimes/3600) <= 14){
		        return $deltaTimes = round($deltaTimes/3600).self::$dates['hv'];
		    }
		    if((round($deltaTimes/3600)) % 10 == 1){
		        return $deltaTimes = round($deltaTimes/3600).self::$dates['hs'];
		    }
		    if((round($deltaTimes/3600)) % 10 <= 4 && (round($deltaTimes/3600)) % 10 != 0){
		        return $deltaTimes = round($deltaTimes/3600).self::$dates['hs'];
		    }
		    if((round($deltaTimes/3600)) % 10 > 4 || (round($deltaTimes/3600)) % 10 == 0){
		        return $deltaTimes = round($deltaTimes/3600).self::$dates['hv'];
		    }
		    die();
		}
		if($deltaTimes < 60*60*24*30*2 && $deltaTimes >= 60*60*48){
		    if(round($deltaTimes/(3600*24)) >= 11 && round($deltaTimes/(3600*24)) <= 14){
		        return $deltaTimes = round($deltaTimes/(3600*24)).self::$dates['d'];
		    }
		    if((round($deltaTimes/(3600*24))) % 10 == 1){
		        return $deltaTimes = round($deltaTimes/(3600*24)).self::$dates['di'];
		    }
		    if((round($deltaTimes/(3600*24))) % 10 <= 4 && (round($deltaTimes/(3600*24))) % 10 != 0){
		        return $deltaTimes = round($deltaTimes/(3600*24)).self::$dates['dy'];
		    }
		    if((round($deltaTimes/(3600*24))) % 10 > 4 || (round($deltaTimes/(3600*24))) % 10 == 0){
		        return $deltaTimes = round(($deltaTimes/(3600*24))).self::$dates['d'];
		    }
		    die();
		}
		if($deltaTimes < 60*60*24*30*12 && $deltaTimes >= 60*60*24*30){
		    if(round($deltaTimes/(3600*24*30)) >= 11 && round($deltaTimes/(3600*24*30)) <= 14){
		        return $deltaTimes = round($deltaTimes/(3600*24*30)).self::$dates['mo'];
		    }
		    if((round($deltaTimes/(3600*24*30))) % 10 == 1){
		        return $deltaTimes = round($deltaTimes/(3600*24*30)).self::$dates['min'];
		    }
		    if((round($deltaTimes/(3600*24*30))) % 10 <= 4 && (round($deltaTimes/(3600*24*30))) % 10 != 0){
		        return $deltaTimes = round($deltaTimes/(3600*24*30)).self::$dates['ma'];
		    }
		    if((round($deltaTimes/(3600*24*30))) % 10 > 4 || (round($deltaTimes/(3600*24*30))) % 10 == 0){
		        return $deltaTimes = round($deltaTimes/(3600*24*30)).self::$dates['mo'];
		    }
		    die();
		}
		if($deltaTimes >= 60*60*24*30*12){
		    if(round($deltaTimes/(3600*24*30*12)) >= 11 && round($deltaTimes/(3600*24*30*12)) <= 14){
		        return $deltaTimes = round($deltaTimes/(3600*24*30*12)).self::$dates['l'];
		    }
		    if((round($deltaTimes/(3600*24*30*12))) % 10 == 1){
		        return $deltaTimes = round($deltaTimes/(3600*24*30*12)).self::$dates['li'];
		    }
		    if((round($deltaTimes/(3600*24*30*12))) % 10 <= 4 && (round($deltaTimes/(3600*24*30*12))) % 10 != 0){
		        return $deltaTimes = round($deltaTimes/(3600*24*30*12)).self::$dates['la'];
		    }
		    if((round($deltaTimes/(3600*24*30*12))) % 10 > 4 || (round($deltaTimes/(3600*24*30*12))) % 10 == 0){
		        return round($deltaTimes/(3600*24*30*12)).self::$dates['l'];
		    }
		}
	}

	public static function When($timeFromCentry){
		$timeFromCentry = date('U') - $timeFromCentry;
		$timeY = date('Y') - round($timeFromCentry / 3600 / 24 / 30 / 12);
		$timeM = date('m') - round($timeFromCentry / 3600 / 24 / 30);
		$timeD = date('d') - round($timeFromCentry / 3600 / 24);
		return $timeD.'.'.$timeM.'.'.$timeY;
	}

	public static function WhenM($timeFromCentry){
		$datePoint = self::When($timeFromCentry);
		$dateExPoint = explode('.', $datePoint);
		for($i = 1; $i <= 12; $i++){
			if($i == $dateExPoint[1]){
				return $dateExPoint[0].self::$mounth[$i].$dateExPoint[2].self::$yeara;
			}
		}
	}

	public static function WhenDM($timeFromCentry){
		$datePoint = self::When($timeFromCentry);
		$dateExPoint = explode('.', $datePoint);
		for ($i=1; $i <= 31 ; $i++) { 
			if($i == $dateExPoint[0]){
				return self::$days[$i].self::$mounth[$dateExPoint[1]].$dateExPoint[2].self::$yeara;
			}
		}
	}

	
	public static $dates = ['s'  => ' секунд назад',
	'sa' => ' секунда назад',
	'si' => ' секунды назад' ,
	'm'  => ' минут назад',
	'mi' => ' минуты назад',
	'hv' => ' часов назад',
	'h'  => ' час назад',
	'hs' => ' часа назад',
	'd'  => ' дней назад',
	'dy' => ' дня назад',
	'di' => ' день назад',
	'mo' => ' месяцев назад',
	'min'=> ' месяц назад',
	'ma' => ' месяца назад',
	'l'  => ' лет назад',
	'li' => ' год назад',
	'la' => ' года назад'];
 	public static $mounth = [ 
 	'1'  => ' января ',
 	'2'  => ' февряля ',
 	'3'  => ' марта ',
 	'4'  => ' апреля ',
 	'5'  => ' мая ',
 	'6'  => ' июня ',
 	'7'  => ' июля ',
 	'8'  => ' августа ',
 	'9'  => ' сентября ',
 	'10' => ' октября ',
 	'11' => ' ноября ',
 	'12' => ' декабря '];
 	public static $days = [
 	'1'  => 'первое',
 	'2'  => 'второе',
 	'3'  => 'третье',
 	'4'  => 'четвертое',
 	'5'  => 'пятое',
 	'6'  => 'шестое',
 	'7'  => 'седьмое',
 	'8'  => 'восьмое',
 	'9'  => 'девятое',
 	'10' => 'десятое',
 	'11' => 'одинадцатое',
 	'12' => 'двенадцатое',
 	'13' => 'тринадцатое',
 	'14' => 'четырнадцатое',
 	'15' => 'пятнадцатое',
 	'16' => 'шестнадцатое',
 	'17' => 'семнадцатое',
 	'18' => 'восемнадцатое',
 	'19' => 'девятнадцатое',
 	'20' => 'двадцатое',
 	'21' => 'двадцать первое',
 	'22' => 'двадцать второе',
 	'23' => 'двадцать третье',
 	'24' => 'двадцать четвертое',
 	'25' => 'двадцать пятое',
 	'26' => 'давадцать шестое',
 	'27' => 'давадцать седьмое',
 	'28' => 'давдцать восьмое',
 	'29' => 'двадцать девятое',
 	'30' => 'тридцатое',
 	'31' => 'тридцать первое',
 	];
 	public static $yeara = ' года';

}