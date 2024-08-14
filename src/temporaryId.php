<?php
require('tempIdTemplate.php');
function generateTemporaryId($name, $idNumber, $image, $course, $instructions, $fillColor) {
    $id = new ID('P', 'mm', 'Letter');

    $id->AddPage();
    $id->skipFooter = true;

    $imageWidth = 30;
    $imageHeight = 40;
    $pageWidth = $id->GetPageWidth();
    $pageHeight = $id->GetPageHeight();

    // $centerX = ($pageWidth - $imageWidth) / 2;
    $centerY = ($pageHeight - $imageHeight) / 2;
    
    $id->SetFont('Arial', 'B', 13);
    $id->setY(20);
    $id->MultiCell($pageWidth, 10, 'Instructions', 0, 'L');

    $id->SetFont('Arial', '', 13);
    foreach ($instructions as $instruction) {
        $id->MultiCell($pageWidth - 30, 10, $instruction, 0, 'L');
    }

    $textStart = $centerY + 22;
    $id->SetY($textStart);
    $id->Image('../assets/images/cdm-logo.png', 42, $textStart, 10, 10);

    $id->SetFont('Arial', '', 10);
    $id->MultiCell(74, 9, 'Colegio de Montalban', 0, 'R');

    $id->SetFont('Arial', '', 3);
    $id->MultiCell(65, -3, 'Kasiglahan Village, San Jose, Montalban, Rizal 1860', 0, 'R');

    $id->RoundedRect(40, $centerY + 20, 53.98, 85.6, 3, '1234', 'D');
    $id->RoundedRect(120, $centerY + 20, 53.98, 85.6, 3, '1234', 'D');

    $id->Image($image, 51, $textStart + 10, $imageWidth, $imageHeight);

    $id->SetXY(43, $textStart + 53);

    $id->SetFont('Arial', 'B', 12);
    $id->MultiCell(48, 4, $name, 0, 'C');

    $id->SetXY(45, $textStart + 63);

    $id->SetFont('Arial', '', 6);
    $id->MultiCell(40, 4, $idNumber, 0, 'C');

    $id->SetXY(40, $textStart + 67);

    $id->SetFont('Arial', '', 7);
    $id->SetFillColor($fillColor[0], $fillColor[1], $fillColor[2]);
    $id->MultiCell(54, 4, $course, 0, 1, 'C');

    $id->SetXY(37, $textStart + 75);

    $id->SetFont('Arial', 'B', 7);
    $id->MultiCell(60, 4, 'TEMPORARY ID', 0, 'C');
    
    $outputPath = '../temporaryIDs/';
    if (!file_exists($outputPath)) mkdir($outputPath, 0777, true);
    $id->Output('F', $outputPath . $name . ' - Temporary ID.pdf');
}
?>
