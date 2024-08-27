<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Client;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::with('client')->get();
        return view('appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        return view('appointments.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'appointment_date' => 'required|date',
            'address' => 'required|string',
            'description' => 'nullable|string',
        ]);

        Appointment::create($request->all());
        return redirect()->route('appointments.index')->with('success', 'Cita creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        return view('appointments.show', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        $clients = Client::all();
        return view('appointments.edit', compact('appointment', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'appointment_date' => 'required|date',
            'address' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $appointment->update($request->all());
        return redirect()->route('appointments.index')->with('success', 'Cita actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index')->with('success', 'Cita eliminada con éxito.');
    }
}
