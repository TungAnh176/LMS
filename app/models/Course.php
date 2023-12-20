<?php 
    class Course{
        private $id;
        private $title;
        private $description;

        public function __construct($id, $title, $description) {
            $this->id = $id;
            $this->title = $title;
            $this->description = $description;
        }
        
        public function getTitle(){
            return $this->title;
        }

        public function setTitle(){
            $this->title = $title;
        }
        public function getDescription(){
            return $this->description;
        }

        public function setDescription(){
            $this->description = $description;
        }
    }

?>