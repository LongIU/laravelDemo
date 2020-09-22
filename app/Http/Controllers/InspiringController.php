<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\InspiringService;

class InspiringController extends Controller
{
    /**
     * @return string
     */
    public function inspire()
    {
        return (new InspiringService())->inspire();
    }
}
