<?php

namespace App\Http\Controllers;

use App\Helpers\LogActivity;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    {
        $logActivity = LogActivity::logActivityLists();
        return view('activities.index', compact(['logActivity']));
    }
}
