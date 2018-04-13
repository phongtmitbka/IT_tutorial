<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function posters()
    {
        $posters = User::where('level', 2)->get();
        return response()->json($posters);
    }

    public function addPoster(Request $request)
    {
        try {
            $poster = new User();
            $poster->name = $request->input('name');
            $poster->email = $request->input('email');
            $poster->password = bcrypt($request->input('password'));
            $poster->level = 2;
            $poster->save();
            return response()->json($poster);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    public function updatePoster(Request $request)
    {
        try {
            $poster = User::find($request->input('id'));
            $poster->name = $request->input('name');
            $poster->email = $request->input('email');
            $poster->isActive = $request->input('isActive');
            $poster->save();
            return response()->json($poster);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    public function delPoster(Request $request)
    {
        User::find($request->input('id'))->delete();
        return response()->json('delete success');
    }
}