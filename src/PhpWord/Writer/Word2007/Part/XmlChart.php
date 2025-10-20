<?php

/**
 * This file is part of PHPWord - A pure PHP library for reading and writing
 * word processing documents.
 *
 * PHPWord is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
 *
 * @see         https://github.com/PHPOffice/PHPWord
 *
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

namespace PhpOffice\PhpWord\Writer\Word2007\Part;

use PhpOffice\PhpWord\Element\XmlChart as XmlChartElement;

/**
 * Word2007 XmlChart part writer: word/charts/chartx.xml.
 * Writes pre-built chart XML directly without processing.
 *
 * @since 1.4.1
 */
class XmlChart extends AbstractPart
{
    /**
     * XmlChart element.
     *
     * @var XmlChartElement
     */
    private $element;

    /**
     * Set XmlChart element.
     */
    public function setElement(XmlChartElement $element): void
    {
        $this->element = $element;
    }

    /**
     * Write part - directly output the XML content from file.
     *
     * @return string
     */
    public function write()
    {
        if ($this->element === null) {
            return '';
        }

        $xmlContent = $this->element->getXmlContent();
        
        if (empty($xmlContent)) {
            return '';
        }
       
        // Return the XML content directly
        return $xmlContent;
    }
}
