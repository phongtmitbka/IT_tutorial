<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getListCourses(Request $request)
    {
        $courses = Course::all();
        return response()->json($courses);
    }

    public function getCourse(Request $request) {
        $course = Course::where('url', $request->input('course'))->first();
        return response()->json($course);
    }

    public function updateCourse(Request $request) {
        $course = Course::where('url', $request->input('course'))->first();
        $course->about = $request->input('about');
        $course->save();
        return response()->json($course);
    }

    public function getGroupCourse(Request $request)
    {
        $courses = Course::where('type', $request->input('type'))->get();
        return response()->json($courses);
    }
}