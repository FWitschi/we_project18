<?php
/**
 * Created by PhpStorm.
 * user: Fabian
 * Date: 06.06.18
 * Time: 17:04
 */

include 'userheader.php';
include 'own_we_project18/controller/projectoverviewcontroller.php';

use user\TemplateView;

?>

    <h1 class="menu-heading">Project Overview</h1>
    <table class="table">
    <thead>
    <tr>
        <th>Project Name</th>
        <th>Project Description</th>
        <th>Project Startdate</th>
        <th>Project Duration</th>
        <th>Project Owner</th>
        <th>Project Employees</th>
        <th>View PDF</th>
    </tr>
    </thead>
    <tbody>

        <?php

        $all_projects = getProjects();

        foreach($all_projects as $project): ?>
            <tr>
                <td><?php echo TemplateView::noHTML($project['PROJECT_NAME']); ?></td>
                <td><?php echo TemplateView::noHTML($project['PROJECT_DESCRIPTION']); ?></td>
                <td><?php echo TemplateView::noHTML($project['P_STARTDATE']); ?></td>
                <td><?php echo TemplateView::noHTML($project['P_DURATION']); ?></td>
                <td><?php echo TemplateView::noHTML($project['P_OWNER']); ?></td>
                <td><?php echo TemplateView::noHTML($project['P_EMPLOYEES']); ?></td>
                <td> <button class="btn btn-primary" type ="button">VIEW PDF</button></td >
            </tr>
        <?php endforeach; ?>

    </tbody>
    </table>

<?php include 'userfooter.php'; ?>