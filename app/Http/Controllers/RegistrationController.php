<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Estudiante;
use App\Models\Curso;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::with('estudiante', 'curso')->get();
        return view('registrations.index', compact('registrations'));
    }

    public function create()
    {
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        return view('registrations.create', compact('estudiantes', 'cursos'));
    }

    public function store(Request $request)
    {
        Registration::create($request->all());
        return redirect()->route('registrations.index')->with('success', 'Inscripción creada correctamente.');
    }

    public function show(string $id)
    {
        $registration = Registration::with('estudiante', 'curso')->findOrFail($id);
        return view('registrations.show', compact('registration'));
    }

    public function edit(string $id)
    {
        $registration = Registration::findOrFail($id);
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        return view('registrations.edit', compact('registration', 'estudiantes', 'cursos'));
    }

    public function update(Request $request, string $id)
    {
        $registration = Registration::findOrFail($id);
        $registration->update($request->all());
        return redirect()->route('registrations.index')->with('success', 'Inscripción actualizada correctamente.');
    }

    public function destroy(string $id)
    {
        $registration = Registration::findOrFail($id);
        $registration->delete();
        return redirect()->route('registrations.index')->with('success', 'Inscripción eliminada correctamente.');
    }
}
