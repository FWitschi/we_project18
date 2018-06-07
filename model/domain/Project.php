<?php
/**
 * Created by PhpStorm.
 * user: Fabian
 * Date: 06.06.18
 * Time: 20:52
 */

namespace domain;

class Project
{

    private $id;
    private $project_name;
    private $project_description;
    private $project_startdate;
    private $project_duration;
    private $project_owner;
    private $project_employees;

    public function __construct($project_name, $project_description, $project_startdate, $project_duration, $project_owner, $project_employees)
    {
        $this->project_name = $project_name;
        $this->project_description = $project_description;
        $this->project_startdate = $project_startdate;
        $this->project_duration = $project_duration;
        $this->project_owner = $project_owner;
        $this->project_employees = $project_employees;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = -$id;
    }

    public function getProjectName() {
        return $this->project_name;
    }

    public function setProjectName($project_name) {
        $this->project_name = $project_name;
    }

    public function getProjectDescription() {
        return $this->project_description;
    }

    public function setProjectDescription($project_description) {
        $this->project_description = $project_description;
    }

    public function getProjectStartdate() {
        return $this->project_startdate;
    }

    public function setProjectStartdate($project_startdate) {
        $this->project_startdate = $project_startdate;
    }

    public function getProjectDuration() {
        return $this->project_duration;
    }

    public function setProjectDuration($project_duration) {
        $this->project_duration = $project_duration;
    }

    public function getProjectOwner() {
        return $this->project_owner;
    }

    public function setProjectOwner($project_owner) {
        $this->project_owner = $project_owner;
    }

    public function getProjectEmployees() {
        return $this->project_employees;
    }

    public function setProjectEmployees(array $project_employees) {
        $this->project_employees = $project_employees;
    }

    public function addProjectEmployee($additional_name) {
        array_push($project_employee, "$additional_name");
    }

    public function getProject() {
        return $this;
    }

}