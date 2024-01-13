<?php
namespace GDO\PDFParser;

use GDO\Core\GDO_Module;

final class Module_PDFParser extends GDO_Module
{




    public function requirePDFParser(): void
    {
        require_once $this->filePath('pdfparser/alt_autoload.php-dist');
    }

}
