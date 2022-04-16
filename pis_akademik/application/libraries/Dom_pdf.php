<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Name:  DOMPDF
* 
* Author: Geordy James 
*         @geordyjames
*          
*Location : https://github.com/geordyjames/Codeigniter-Dompdf-v0.7.0-Library

* Origin API Class: https://github.com/dompdf/dompdf
*          
* Created:  24.01.2017

* Created by Geordy James to give support to dompdf 0.7.0 and above 
* 
* Description:  This is a Codeigniter library which allows you to convert HTML to PDF with the DOMPDF library
* 
*/


class Dom_pdf {
		
	public function __construct() {
		define('DOMPDF_ENABLE_AUTOLOAD', false);
		
    	require_once("./vendor/dompdf/dompdf/dompdf_config.inc.php");
		$pdf = new Dompdf();
		
		$CI =& get_instance();
		$CI->dompdf = $pdf;
		
	}

	public function generate($html,$filename)
  {
   
    $this->CI->dompdf->load_html($html);
    $this->CI->dompdf->render();
    $this->CI->dompdf->stream($filename.'.pdf',array("Attachment"=>0));
  }
	
}