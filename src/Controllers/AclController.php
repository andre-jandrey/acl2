<?php

namespace Westsoft\Acl\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Westsoft\Acl\Models\UserProfiles;
use Westsoft\Acl\Models\ProfilePermissions;
use Westsoft\Acl\Models\Permission;

class AclController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('acl::home');
    }
}
