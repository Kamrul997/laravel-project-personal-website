<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\GuestUser;
use App\Models\Instance;
use App\Models\NewsEvents;
use App\Models\ScanHistory;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  public function index()
  {
      return view('admin.dashboard');
  }
}
