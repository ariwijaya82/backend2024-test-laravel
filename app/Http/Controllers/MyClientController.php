<?php

namespace App\Http\Controllers;

use App\Models\MyClient;
use Illuminate\Http\Request;

class MyClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = MyClient::all();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:250',
            'slug' => 'required|max:100',
            'is_project' => 'required|max:30',
            'self_capture' => 'required|max:1',
            'client_prefix' => 'required|max:4',
            'client_logo' => 'required|max:255',
        ]);
        MyClient::create($request->all());
        return response()->json([
            'message' => 'create data successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (MyClient::where('id', $id)->exists()) {
            $data = MyClient::find($id);
            return response()->json($data);
        } else {
            return response()->json([
                'message' => 'data not found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:250',
            'slug' => 'required|max:100',
            'is_project' => 'required|max:30',
            'self_capture' => 'required|max:1',
            'client_prefix' => 'required|max:4',
            'client_logo' => 'required|max:255',
        ]);
        $data = MyClient::find($id);
        $data->update($request->all());
        return response()->json([
            'message' => 'update data successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (MyClient::where('id', $id)->exists()) {
            $data = MyClient::find($id);
            $data->delete();
            return response()->json([
                'message' => 'data deleted',
            ]);
        } else {
            return response()->json([
                'message' => 'data not found'
            ], 404);
        }
    }
}
