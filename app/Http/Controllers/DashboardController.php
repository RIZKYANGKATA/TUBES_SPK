<?php

namespace App\Http\Controllers;

use App\Models\barang_keluar;
use App\Models\barang_masuk;
use App\Models\laporan;
use App\Models\stok;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        
        return view('layout.dashboard');
            
    }

    public function show_sub_criteria(){
        return view('sub_criteria');
    }

    public function show_criteria(){
        
        return view('criteria');
    }

    
}
