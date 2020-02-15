<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Route;
use View;

class BoardController extends Controller
{

	public function getIndex(){
		return View::make('board');
	}

    public function getName(){
    	return Route::currentRouteAction();
    }


}
