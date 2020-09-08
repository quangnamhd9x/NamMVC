<?php


namespace App\Model;


class Student
{
    protected $studentId;
    protected $studentName;
    protected $birthday;

    public function __construct($studentName, $birthday)
    {
        $this->studentName = $studentName;
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * @param mixed $studentId
     */
    public function setStudentId($studentId): void
    {
        $this->studentId = $studentId;
    }

    /**
     * @return mixed
     */
    public function getStudentName()
    {
        return $this->studentName;
    }

    /**
     * @param mixed $studentName
     */
    public function setStudentName($studentName): void
    {
        $this->studentName = $studentName;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday): void
    {
        $this->birthday = $birthday;
    }

}