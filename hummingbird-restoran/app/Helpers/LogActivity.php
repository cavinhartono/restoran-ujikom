<?php

namespace App\Helpers;

use App\Models\LogActivity as LogActivityModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class LogActivity
{
  public static function addToLog($subject)
  {
    $log = [];
    $log['subject'] = $subject;
    $log['url'] = Request::fullUrl();
    $log['method'] = Request::method();
    $log['agent'] = Request::header('user-agent');
    $log['user_id'] = Auth::check() ? Auth()->user()->id : 1;
    LogActivityModel::create([$log]);
  }

  public static function logActivityLists()
  {
    return LogActivityModel::latest()->get();
  }
}
