<?php
use Mpdf\Mpdf;
//para encaixar posição do texto no template usar css com position absolute
class PDF{
    private $pdf;
    private $html;

    public function __construct($format='A4', $orientation='P', $mode='utf-8')
    { 
        $this->pdf = new Mpdf([
            'format'=>$format,
            'orientation'=>$orientation,
            'mode'=>$mode
        ]);
       
        $this->reset_html();
    }

    public function reset_html(){
        $this-> html = '';
    }

    public function show_pdf(){
        $this->pdf->WriteHTML($this->html);
        $this->pdf->Output();
    }
    public function save_pdf(){
        $this->pdf->WriteHTML($this->html);
        $this->pdf->Output('endereço');
    }
    public function write($body){
        $this->html .= "<p>$body</p>";
    }
    public function new_page(){
        $this->html .= '<pagebreak>';
    }
    public function set_template($template){
        $this->pdf->SetDocTemplate($template);
    } 
}