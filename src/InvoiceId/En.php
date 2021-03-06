<?php

namespace einfachArchiv\Extractor\InvoiceId;

use einfachArchiv\Extractor\Extraction;

class En extends Extraction
{
    /**
     * Extracts invoice IDs from the text.
     *
     * @return array
     */
    public function handle()
    {
        preg_match_all('/\b(?:Invoice Number:?\s|Invoice #\s?)([0-9A-Z-_\/]+)\b/i', $this->text, $matches);

        return $matches[1];
    }
}
