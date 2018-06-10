<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 08.06.18
 * Time: 11:58
 */

require('fpdf.php');

require_once('/model/database/Database.php');
require_once('/model/doa/ProjectDOA.php');

use database\Database;
use doa\ProjectDOA;

class PDFHandler extends FPDF
{
// Page header
    function Header()
    {
        $this->Image('timecatcher-icon.png',6,8,12);
        // Arial bold 15
        $this->SetFont('Arial','B',13);
        // Move to the right
        $this->Cell(80);
        // Title
        if ($_GET['select_project'] == "all_projects") {
            $this->Cell(30,10,'Projects', 0,0,'C');
        } else {
            $this->Cell(30,10,'Project', 0,0,'C');
        }
        // Line break
        $this->Ln(20);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',7);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

function addContent($pdf) {
    if ($_GET['select_project'] == "all_projects") {
        $all_projects = ProjectDOA::getAllProjects(Database::connect());

        $pdf->Cell(65, 10, 'Name', 1);
        $pdf->Cell(25, 10, 'Start Date', 1);
        $pdf->Cell(25, 10, 'Duration', 1);
        $pdf->Cell(65, 10, 'Owner', 1, 1);

        foreach($all_projects as $project):
            $pdf->Cell(65, 10, $project['PROJECT_NAME'], 1);
            $pdf->Cell(25, 10, $project['P_STARTDATE'], 1);
            $pdf->Cell(25, 10, $project['P_DURATION'], 1);
            $pdf->Cell(65, 10, $project['P_OWNER'], 1, 1);
        endforeach;
    } else {

        $selected_project = ProjectDOA::getProject($_GET['select_project'], Database::connect());

        $pdf->Cell(50, 10, 'Project Name', 1);
        $pdf->Cell(130, 10, $selected_project['PROJECT_NAME'], 1, 1);
        $pdf->Cell(50, 80, 'Project Description', 1);
        $pdf->Cell(130, 80, $selected_project['PROJECT_DESCRIPTION'], 1, 1);
        $pdf->Cell(50, 10, 'Project Start Date', 1);
        $pdf->Cell(130, 10, $selected_project['P_STARTDATE'], 1, 1);
        $pdf->Cell(50, 10, 'Project Duration', 1);
        $pdf->Cell(130, 10, $selected_project['P_DURATION'], 1, 1);
        $pdf->Cell(50, 10, 'Project Owner', 1);
        $pdf->Cell(130, 10, $selected_project['P_OWNER'], 1, 1);
        $pdf->Cell(50, 50, 'Project Employees', 1);
        $pdf->Cell(130, 50, $selected_project['P_EMPLOYEES'], 1, 1);
    }
}

$pdf = new PDFHandler();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','', 10);
addContent($pdf);
$pdf->Output();