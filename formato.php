<?php 
	session_start();
	if(!$_SESSION){
		header ("Location: ../Merma/index.html");
	}

	require __DIR__.'\vendor\autoload.php';

    use Spipu\Html2Pdf\Html2Pdf;
    use Spipu\Html2Pdf\Exception\Html2PdfException;
	use Spipu\Html2Pdf\Exception\ExceptionFormatter;

    ob_start();
    require_once 'formatoDv.php';
    $html1 = ob_get_clean();

	$html2pdf= new Html2Pdf('P', 'A4', 'es', true, 'UTF-8', array(15,10,15,10));
	$html2pdf->setDefaultFont("SourceSansPro");  
	$html2pdf->writeHTML($html1);
	$html2pdf->output();
?>
