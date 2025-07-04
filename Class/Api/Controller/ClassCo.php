<?php

class ClassCO extends ClassCM
{
    private $classId;
    private $className;
    private $classCode;
    private $classTeacher;

    public function __construct($class_id, $class_name, $class_code, $class_teacher)
    {
        $this->classId = $class_id;
        $this->className = $class_name;
        $this->classCode = $class_code;
        $this->classTeacher = $class_teacher;
    }

    public function introduceClass()
    {
        if ($this->isEmptyInputs() == true) {
            header("Location: ./../../index.php?msg=empty_fields");
            exit;
        }
        $this->appendClass($this->className, $this->classCode, $this->classTeacher);
    }

    public function updateClass()
    {
        if ($this->isEmptyInputs() == true) {
            header("Location: ./../../index.php?msg=empty_fields");
            exit;
        }
        $this->ammendClass($this->classId, $this->className, $this->classCode, $this->classTeacher);
    }


    public function deleteClass(): void
    {
        if ($this->isEmptyInputs() == true) {
            header(header: "location:./../index.php?msg=empty_fields");
            exit;
        }
    }
}
