<?php
/**
 * Created by PhpStorm.
 * user: Fabian
 * Date: 06.06.18
 * Time: 17:04
 */

include 'userheader.php';

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
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php

        include '/Applications/MAMP/htdocs/own_we_project18/controller/projectoverviewcontroller.php';

        $all_projects = getProjects();

        $count = 0;

        foreach($all_projects as $project): ?>
        <form>
            <tr>
                <td id="project_name"><?php echo $project['PROJECT_NAME']; ?></td>
                <td id="project_description"><?php echo $project['PROJECT_DESCRIPTION']; ?></td>
                <td id="project_startdate"><?php echo $project['P_STARTDATE']; ?></td>
                <td id="project_duration"><?php echo $project['P_DURATION']; ?></td>
                <td id="project_owner"><?php echo $project['P_OWNER']; ?></td>
                <td id="project_employees"><?php echo $project['P_EMPLOYEES']; ?></td>
                <td id="modify_project"><?php echo '<a class="btn btn-primary" id="' . $count . '" role="button" href="../user/modifyproject.php">Modify</a>' ; ?></td>
            </tr>
            <?php $count++ ; ?>
        </form>
        <?php endforeach; ?>

        </tbody>
    </table>
    <p align="center">Select the a project (or all) to be displayed in a .pdf</p>
    <form action="/own_we_project18/controller/pdf/PDFHandler.php" method="get">
        <p align="center">
        <select name="select_project">
            <option value="all_projects">All Projects</option>
            <?php
            $all_projects = getProjects();
            foreach($all_projects as $project): ?>
                <?php echo "<option value='" . $project['PROJECT_NAME']. "'>" . $project['PROJECT_NAME'] ; ?>
            <?php endforeach; ?>
        </select>
        </p>
        <p align="center">
            <button class="btn btn-primary" type="submit">SHOW PDF</button>
        </p>
    </form>

<?php include 'userfooter.php'; ?>