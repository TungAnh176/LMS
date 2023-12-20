<?php
class CourseController
{
    public function index()
    {
        $CourseService = new CourseService();
        $courses = $CourseService->getAll();
        include_once APP_Root.'/app/views/course/index.php';
    }
}
