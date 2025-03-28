<?php

namespace App\Http\Controllers;


use App\Models\Priority;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PriorityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $priorities = Priority::orderBy('number', 'desc')->get();
        return view('priority.index', compact('priorities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('priority.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'number' => 'required|string',
            'name' => 'required|string',
            'color' => 'required|string',
        ]);

        // Manually add the authenticated user's ID
        $data['user_id'] = Auth::id();

        Priority::create($data);

        return to_route('priority.index')->with('success', 'Priority created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('priority.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Priority $priority)
    {
        return view('priority.edit', compact('priority'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Priority $priority)
    {
        $data = $request->validate([
            'number' => 'required|string',
            'name' => 'required|string',
            'color' => 'required|string',
        ]);


        $priority->update($data);

        return to_route('priority.index')->with('success', 'Priority updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Priority $priority)
    {
        $priority->delete();

        return to_route('priority.index')->with('success', 'Priority Deleted successfully.');
    }
}
