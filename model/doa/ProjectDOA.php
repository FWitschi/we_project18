<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 07.06.18
 * Time: 16:53
 */

namespace doa;

use PDO;

class ProjectDOA
{

    public static function addProject($project_name, $user_id, $project_description, $project_start_date, $project_duration, $project_owner, $project_employees, $connection)
    {
        $stmt = $connection->prepare("INSERT INTO project (PROJECT_NAME, USER_ID, PROJECT_DESCRIPTION, P_STARTDATE, P_DURATION, P_OWNER, P_EMPLOYEES) VALUES (:project_name, :user_id
                  , :project_description, :project_start_date, :project_duration, :project_owner, :project_employees)");
        $stmt->bindParam(':project_name', $project_name);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':project_description', $project_description);
        $stmt->bindParam(':project_start_date', $project_start_date);
        $stmt->bindParam(':project_duration', $project_duration);
        $stmt->bindParam(':project_owner', $project_owner);
        $stmt->bindParam(':project_employees', $project_employees);
        $stmt->execute();

        return true;
    }

    public static function getProject($project_name, $connection)
    {
        $stmt = $connection->prepare("SELECT * FROM project WHERE PROJECT_NAME = ?");
        $stmt->execute([$project_name]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function getAllProjects($connection)
    {
        $stmt = $connection->prepare("SELECT * FROM project");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function updateProject($project_name, $selected_property, $new_value, $connection) {
        $stmt = $connection->prepare("UPDATE project SET " . $selected_property . " = ? WHERE PROJECT_NAME = ?");
        $stmt->execute([$new_value], [$project_name]);

        return true;
    }

    public static function deleteProject($project_name, $connection)
    {
        $stmt = $connection->prepare("DELETE FROM project WHERE PROJECT_NAME = ?");
        $stmt->execute([$project_name]);

        return true;
    }

}