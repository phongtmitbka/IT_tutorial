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
        if ($request->input('course')) {
            $course = Course::where('url', $request->input('course'))->first();
            $course->about = $request->input('about');
        } else {
            $course = Course::find($request->input('id'));
            $course->name = $request->input('name');
            $course->about = $request->input('about');
            $course->url = $request->input('url');
            $course->type = $request->input('type');
        }
        $course->save();
        return response()->json($course);
    }

    public function addCourse(Request $request) {
        try {
            $course = new Course();
            $course->name = $request->input('name');
            $course->about = $request->input('about');
            $course->url = $request->input('url');
            $course->type = $request->input('type');
            $course->save();
            return response()->json($course);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    public function delCourse(Request $request) {
        Course::find($request->input('id'))->delete();
    }

    public function getGroupCourse(Request $request)
    {
        $courses = Course::where('type', $request->input('type'))->get();
        return response()->json($courses);
    }
}