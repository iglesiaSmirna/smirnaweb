<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AuthController extends Controller {

	public static function Lang()
	{
		$lang = 'es';

		$lang_nav = $_SERVER["HTTP_ACCEPT_LANGUAGE"];

		if ($lang_nav!=null) {
			$lang_nav = substr($lang_nav,0,2);
			if ($lang_nav=='es'||$lang_nav =='en') {
				$lang = $lang_nav;
			}
		}
		return $lang;
	}
}
