<?php
mysql_connect('localhost','root','');
mysql_select_db('db_excel');
/** Include PHPExcel */
require_once '/Classes/PHPExcel.php';

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Add some data
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'nim')
            ->setCellValue('B1', 'nama')
            ->setCellValue('C1', 'alamat')
            ->setCellValue('D1', 'prodi');

$sql = mysql_query("select * from mhs");
$no = 1;
while($row = mysql_fetch_array($sql)){
    $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A'.($no+1), $row['nim'])
                ->setCellValue('B'.($no+1), $row['nama'])
                ->setCellValue('C'.($no+1), $row['alamat'])
                ->setCellValue('D'.($no+1), $row['prodi']);
    $no += 1;
}
            
// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Tugas');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Save Excel 2007 file
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));

// Save Excel 95 file
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save(str_replace('.php', '.xls', __FILE__));