<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::paginate(10);
        $vehicles = Vehicle::all();
        return view('index', ['vehicles' => $vehicles]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'plat' => 'required'
        ]);

        Vehicle::create([
            'plat'=> $request->plat,
            'jenis_kendaraan'=> $request->jenis_kendaraan,
            'tanggal'=> $request->tanggal,
            'jam_masuk'=> $request->jam_masuk
        ]);

        return redirect('dashboard')->with('status', 'Vehicle has been inserted.');
        
        // Vehicle::create($request->all());
    }
    // public function show($plat)
    // {
    //     $vehicle = Vehicles::find
    //     return view('vehicles', [''])
    // }
}
