<?php
require('tempIdTemplate.php');
function generateTemporaryId($name, $idNumber, $image, $course) {
    $id = new ID('P', 'mm', array(85.60, 53.98));

    $id->AddPage();
    $id->skipFooter = false;

    $imageWidth = 18;
    $imageHeight = 18;
    $pageWidth = $id->GetPageWidth();
    $pageHeight = $id->GetPageHeight();

    $centerX = ($pageWidth - $imageWidth) / 2;
    $centerY = ($pageHeight - $imageHeight) / 2;
    
    $id->Image($image, $centerX, 20, $imageWidth, $imageHeight);

    // $id->Rect(13, 20, 25, 25);

    $id->SetFont('Arial', 'B', 10);
    $id->SetY(40);
    $id->Cell(0, 5, $name, 0, 1, 'C');

    $id->SetFont('Arial', '', 5);
    $id->Cell(0, 3, $idNumber, 0, 1, 'C');

    $id->SetX(0);
    $id->MultiCell($pageWidth, 3, $course, 0, 'C');
    
    $outputPath = '../temporaryIDs/';
    if (!file_exists($outputPath)) mkdir($outputPath, 0777, true);
    $id->Output('F', $outputPath . $name . ' - Temporary ID.pdf');
}
?>
