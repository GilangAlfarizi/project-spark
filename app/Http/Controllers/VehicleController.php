<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        // $vehicles = Vehicle::paginate(3);
        $vehicles = Vehicle::all();
        return view('vehicles.index', ['vehicles' => $vehicles]);
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
    }

    // public function edit (Vehicle $vehicle)
    // {

    // }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return Redirect::route('vehicles');
    }
}
