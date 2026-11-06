<?php

namespace App\Http\Controllers;

class ResumeController extends Controller
{
    public function download()
    {
        $path = public_path('files/resume.pdf');

        if (! file_exists($path)) {
            abort(404);
        }

        return response()->download($path, 'My-Resume.pdf');
    }
}
