<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Supplier;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventory::all(); 
        return view('inventories.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::all(); 
        return view('inventories.create', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'date' => 'required|date',
            'supplier_id' => 'nullable|exists:suppliers,id' // Puede ser nulo si no hay relación con proveedores
        ]);

        Inventory::create($request->all());
        return redirect()->route('inventories.index')->with('success', 'Inventario creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $inventory = Inventory::findOrFail($id); 
        return view('inventories.show', compact('inventory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $inventory = Inventory::findOrFail($id);
        $suppliers = Supplier::all(); 
        return view('inventories.edit', compact('inventory', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       /* $request->validate([
            'item_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'date' => 'required|date',
            'supplier_id' => 'nullable|exists:suppliers,id' // Puede ser nulo si no hay relación con proveedores
        ]);
        */
        //encuentra el inventario po id
        $inventory = Inventory::findOrFail($id);
        //actualiza el inventario con los datos del formulario
        $inventory->update($request->all());

        return redirect()->route('inventories.index')->with('success', 'Inventario actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inventory = Inventory::findOrFail($id); // Encontrar el inventario por ID
        $inventory->delete(); // Eliminar el inventario
        return redirect()->route('inventories.index')->with('success', 'Inventario eliminado con éxito.');
    }
}
