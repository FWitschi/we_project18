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

    public static function getAllProjects($user_id, $connection)
    {
        $stmt = $connection->prepare("SELECT * FROM project WHERE USER_ID = ?");
        $stmt->execute([$user_id]);

        return $stmt->fetchAll();
    }

    public static function updateProject($project_id, $selected_property, $new_value, $connection) {
        $stmt = $connection->prepare("UPDATE project SET " . $selected_property . " :new_value WHERE ID = :project_id");
        $stmt->bindParam(':new_value', $new_value);
        $stmt->bindParam(':project_id', $project_id);
        $stmt->execute();
    }

    public static function deleteProject($project_id, $connection)
    {
        $stmt = $connection->prepare("DELETE FROM project WHERE PROJECT_NAME = ?");
        $stmt->execute([$project_id]);

        return true;
    }

}