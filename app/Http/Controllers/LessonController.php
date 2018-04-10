<?php

namespace App\Http\Controllers;
use App\Models\Lesson;
use App\Models\Introduction;
use App\Models\Example;
use App\Models\Summary;
use App\Models\Test;
use App\Models\Course;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function getListLesson(Request $request)
    {
        $course = $request->input('course');
        $course_id = Course::where('url', $course)->first()->id;
        $lessons = Lesson::select('title', 'lesson_number')->where('course_id', $course_id)->get();
        return response()->json($lessons);
    }

    public function getLesson(Request $request)
    {
        $course_id = Course::where('url', $request->input('course'))->first()->id;
        $lesson = Lesson::where('course_id', $course_id)->where('lesson_number', $request->input('lesson'))->first();
        return response()->json($lesson);
    }

    public function updateLesson(Request $request)
    {
        $course_id = Course::where('url', $request->input('course'))->first()->id;
        if ($request->input('lesson_number')) {
            $lesson = Lesson::where('course_id', $course_id)->where('lesson_number', $request->input('lesson_number'))->first();
        } else {
            $lesson = new Lesson();
            $lesson->lesson_number = Lesson::where('course_id', $course_id)->max('lesson_number') + 1;
        }
        try {
            $lesson->title = $request->input('title');
            $lesson->lesson_content = $request->input('lesson_content');
            $lesson->course_id = $course_id;
            $lesson->save();
            return response()->json($lesson);
        } catch (\Exception $e) {
            return response($e);
        }
    }

    public function deleteLesson(Request $request)
    {
        try {
            $course_id = Course::where('url', $request->input('course'))->first()->id;
            Lesson::where('course_id', $course_id)->where('lesson_number', $request->input('lesson_number'))->delete();
            return response()->json('success');
        } catch (\Exception $e) {
            return response()->json('Delete fail');
        }
    }

    public function getLessonContent(Request $request)
    {
        $data = null;
        switch ($request->input('type')) {
            case 'Introduction': $data = Introduction::find($request->input('id')); break;
            case 'Example': $data = Example::find($request->input('id')); break;
            case 'Summary': $data = Summary::find($request->input('id')); break;
            case 'Test': $data = Test::find($request->input('id')); break;
        }
        return response()->json($data);
    }

    public function updateLessonContent(Request $request)
    {
        $data = null;
        if ($request->input('id')) {
            switch ($request->input('type')) {
                case 'Introduction': $data = Introduction::find($request->input('id')); break;
                case 'Example': $data = Example::find($request->input('id')); break;
                case 'Summary': $data = Summary::find($request->input('id')); break;
                case 'Test': $data = Test::find($request->input('id')); break;
            }
        } else {
            switch ($request->input('type')) {
                case 'Introduction': $data = new Introduction(); break;
                case 'Example': $data = new Example(); break;
                case 'Summary': $data = new Summary(); break;
                case 'Test': $data = new Test(); break;
            }
        }
        $data->content = $request->input('content');
        $data->save();
        return response()->json($data);
    }

}