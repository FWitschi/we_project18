<?php
/**
 * Created by PhpStorm.
 * user: Fabian
 * Date: 06.06.18
 * Time: 20:42
 */

namespace model\domain;

class User
{

    private $id;
    private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $projects;

    public function __construct($first_name, $last_name, $email, $password)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getProjects()
    {
        return $this->projects;
    }

    public function setProjectParticipation(array $projects)
    {
        $this->projects = $projects;
    }

    public function addProject($project_name)
    {
        array_push($projects, "$project_name");
    }

    public function getUser()
    {
        return $this;
    }

}