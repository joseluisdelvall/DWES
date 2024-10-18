<?php
    
    require_once 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $datosBaseDatos = array(
        array("Nombre", "Edad"),
        array("Jose Luis", "19"),
        array("Alberto", "29"),
        array("Fernando", "21"),
        array("Javier", "20")
    );

    // print_r($datosBaseDatos);

    $documento = new Spreadsheet();

    $hoja = $documento->getActiveSheet();
    // $hoja->setCellValue('A1', 'Nombre');
    // $hoja->setCellValue('B1', 'Edad');
    $hoja->fromArray($datosBaseDatos, null, 'A1');

    $writer = new Xlsx($documento);
    $writer->save('xlsx\ListaEdades.xlsx');

?>
