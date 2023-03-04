<?php
// include('../config.php');
// include('../core/classes/Database.php');
// include('../core/classes/Mailer.php');
include('../core/classes/PDF.php');

/*database call */
//$db = new Database();
//$res = $db->execute('SELECT * FROM clients');  
//$res = $db->execute("INSERT INTO clients VALUES(0,'chico')");
//print_r($res);

/*pdf */
$pdf = new PDF();
//$pdf->set_template(getcwd().'/assets/templates_pdf');
$pdf->write('zekkmargo');
$pdf->show_pdf();

//remover arquivo (usar para apagar pdf gerado dps de ter enviado)
unlink('caminho');
