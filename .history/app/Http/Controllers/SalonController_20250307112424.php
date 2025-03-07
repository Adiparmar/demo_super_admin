<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salon;
use Illuminate\Support\Facades\Log;


class SalonController extends Controller
{
    public function index()
    {
        return response()->json(Salon::all());
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'slug' => 'required|string|unique:salons,slug',
            'name' => 'required|string',
            'description' => 'nullable|string',
            'owner_id' => 'required|exists:users,id',
            'package_id' => 'required|exists:packages,id',
            'address' => 'required|string',
            'contact_number' => 'required|string',
            'contact_email' => 'nullable|email|unique:salons,contact_email',
            'opening_time' => 'required|date_format:H:i',
            'closing_time' => 'required|date_format:H:i|after:opening_time',
            'gender' => 'required|in:male,female,unisex',
            'status' => 'boolean'
        ]);

        $salon = Salon::create($validatedData);
        
        return response()->json(['message' => 'Salon created successfully!', 'salon' => $salon], 201);
        \Log::info('Store method hit!', $request->all());
        return response()->json(['message' => 'Check Laravel logs for debugging'], 200);
    }

    public function show($id)
    {
        return response()->json(Salon::findOrFail($id));
    }

    public function destroy($id)
    {
        Salon::findOrFail($id)->delete();
        return response()->json(['message' => 'Salon deleted successfully']);
    }
}
