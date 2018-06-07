<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 07.06.18
 * Time: 16:53
 */

namespace doa;


class ProjectDOA
{

    public static function addProject($project_name, $project_description, $project_start_date, $project_duration, $project_owner, $project_employees, $connection)
    {
        $stmt = $connection->prepare("INSERT INTO project (PROJECT_NAME, PROJECT_DESCRIPTION, P_STARTDATE, P_DURATION, P_OWNER, P_EMPLOYEES) VALUES (:project_name
                  , :project_description, :project_start_date, :project_duration, :project_owner, :project_employees)");
        $stmt->bindParam(':project_name', $project_name);
        $stmt->bindParam(':project_description', $project_description);
        $stmt->bindParam(':project_start_date', $project_start_date);
        $stmt->bindParam(':project_duration', $project_duration);
        $stmt->bindParam(':project_owner', $project_owner);
        $stmt->bindParam(':project_employees', $project_employees);
        $stmt->execute();

        return true;
    }

    public static function getProject($userId)
    {

    }

    public static function deleteProject($projectId)
    {

    }

}