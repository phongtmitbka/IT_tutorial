<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\InfomationRequest;

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

    public function updateInfo(InfomationRequest $request)
    {
        try {
            $user = Auth::user();
            if ($request->input('enter-password') == 'on') {
                $user->password = bcrypt($request->input('password'));
            } else {
                $user->name = $request->input('name');
            }
            $user->save();
            if ($user->level == 1) {
                return redirect('/admin');
            }
            return redirect('/poster');

        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    public function updateRememberLesson(Request $request) {
        $user = User::find($request->input('id'));
        try {
            $user->remember_lesson = $request->input('remember_lesson');
            $user->save();
            return response()->json($user);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }
}