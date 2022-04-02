<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{


    public function getData()
    {
        $data = User::get();
        return response()->json($data);
    }

    public function register(Request $request)
    {
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        if ($data->save()) {
            return response()->json(['status' => 'success', 'message' => 'User registered successfully']);
        } else {
            return response()->json(['status' => 'dfdfdfdf', 'message' => 'Error']);
        }
    }

    public function edit(Request $request)
    {
        $data =  User::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;

        if ($data->save()) {
            return response()->json(['status' => 'success', 'message' => 'edit']);
        } else {
            return response()->json(['status' => 'failed', 'message' => 'Error']);
        }
    }

    public function delete(Request $request)
    {
        $data =  User::find($request->id);

        if ($data->delete()) {
            return response()->json(['status' => $data, 'message' => 'delete']);
        } else {
            return response()->json(['status' => 'failed', 'message' => 'Error']);
        }
    }
}
