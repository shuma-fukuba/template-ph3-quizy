<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $user = Auth::user();
        $sort = $request->sort;
        $param = [
            'sort' => $sort,
            'user' => $user
        ];
        return view('admin.index', compact('user', 'sort'));
    }
}
