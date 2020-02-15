<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\EditRequest;

use App\User as UserEloquent;

use Auth;
use View;

class SchoolController extends Controller
{

	public function getEdit(){
		return View::make('edit');
	}

	public function postEdit(EditRequest $request){
		$user=UserEloquent::find(Auth::user()->id);
		$user->name=$request->name;
		$user->student->tel=$request->tel;
		$user->student->save();
		$user->save();
		return View::make('edit',['msg'=>'修改成功']);
	}

}
