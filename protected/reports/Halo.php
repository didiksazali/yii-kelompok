<?php
class Halo extends fpdf 
{
	function cetakHaloBos($kali=1){
		$this->SetMargins(30,10,50,20);
		$this->AddPage();
		$this->SetFont('Arial','B',11);
		for ($i=1;$i<=$kali;$i++){
			$this->Cell(200,10,'Halo boss',1,1,'C');

		}
		
		$this->AliasNbPages();
		$this->Output('Halo-bos.pdf','I');
	}
}
?>
