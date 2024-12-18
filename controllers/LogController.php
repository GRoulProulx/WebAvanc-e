<?php
namespace App\Controllers;

use App\Models\Log;
use App\Providers\View;

class LogController {

    public function index() {
        $log = new Log;
        $logs = $log->select();
        
        return View::render('logs/log', ['logs' => $logs]);
    }
}