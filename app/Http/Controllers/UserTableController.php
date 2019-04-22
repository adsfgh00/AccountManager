<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
class UserTableController extends Controller {
   public function index() {
      $users = User::all();
      return view('layouts.index', ['users' => $users]);
	}
}