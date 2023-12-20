<?php
class LessonController
{
    public function index()
    {
        $LessonService = new LessonService();
        $lessons = $LessonService->getAll();
        include_once APP_Root.'/app/views/lesson/index.php';
    }
}
