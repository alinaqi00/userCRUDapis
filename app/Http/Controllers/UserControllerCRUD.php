<?php

namespace App\Http\Controllers;

use App\Models\userCRUD;
use Illuminate\Http\Request;

class UserControllerCRUD extends Controller
{
    // Create a new userCRUD
    public function create(Request $request)
    {
        $userCRUD = UserCRUD::create($request->all());
        return response()->json($userCRUD, 201);
    }

    // Read all userCRUDs
    public function index()
    {
        $userCRUDs = UserCRUD::all();
        $userCRUDs = UserCRUD::paginate(5);
        return response()->json($userCRUDs);
    }

    // Read a specific userCRUD by ID
    public function show($id)
    {
        $userCRUD = UserCRUD::find($id);
        if (!$userCRUD) {
            return response()->json(['message' => 'UserCRUD not found'], 404);
        }
        return response()->json($userCRUD);
    }

    // Update a userCRUD by ID
    public function update(Request $request, $id)
    {
        $userCRUD = UserCRUD::find($id);
        if (!$userCRUD) {
            return response()->json(['message' => 'UserCRUD not found'], 404);
        }
        $userCRUD->update($request->all());
        return response()->json($userCRUD);
    }

    // Delete a userCRUD by ID
    public function destroy($id)
    {
        $userCRUD = userCRUD::find($id);
        if (!$userCRUD) {
            return response()->json(['message' => 'UserCRUD not found'], 404);
        }
        $userCRUD->delete();
        return response()->json($userCRUD);
    }
}

