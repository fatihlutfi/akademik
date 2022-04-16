<?php

    Class Pdf {

        protected $ci;

        function PdfGenerator($html, $filename) {
                $dompdf = new dompdf\dompdf();
                $dompdf->loadHtml($html);

                // (Optional) Setup the paper size and orientation
                $dompdf->setPaper('A4', 'landscape');

                // Render the HTML as PDF
                $dompdf->render();

                // Output the generated PDF to Browser
                $dompdf->stream($filename, array('Attachment' => 0) );
        }
    }