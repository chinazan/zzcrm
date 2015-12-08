<?php
namespace Fox\Core\Pdf;

require "vendor/tecnick.com/tcpdf/tcpdf.php";

class Tcpdf extends \TCPDF
{
    protected $footerHtml = '';

    protected $footerPosition = 15;

    public function setFooterHtml($html)
    {
        $this->footerHtml = $html;
    }

    public function setFooterPosition($position)
    {
        $this->footerPosition = $position;
    }

    public function Footer() {
        $this->SetY((-1) * $this->footerPosition);

        $html = str_replace('{pageNumber}', '{:pnp:}', $this->footerHtml);
        $this->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, '', 0, false, 'T');
    }

}
