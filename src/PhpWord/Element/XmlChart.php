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

namespace PhpOffice\PhpWord\Element;

/**
 * XmlChart element - for importing pre-built chart XML.
 *
 * @since 1.4.1
 */
class XmlChart extends AbstractElement
{
    /**
     * Is part of collection.
     *
     * @var bool
     */
    protected $collectionRelation = true;

    /**
     * XML content.
     *
     * @var string
     */
    private $xmlContent;

    private $width = 5486400;
    private $height = 3200400; 

    /**
     * Create new instance.
     *
     * @param string $xmlContent Chart XML content
     */
    public function __construct($xmlContent,$width = null, $height = null)
    {
        $this->xmlContent = $xmlContent;

        if ($width !== null) {
            $this->width = $width;
        }
        if ($height !== null) {
            $this->height = $height;
        }
    }

    /**
     * Get XML content.
     *
     * @return string
     */
    public function getXmlContent()
    {   
        
        return $this->xmlContent;
    }

    public function getWidth()
    {
        return $this->width;
    }
    
    public function getHeight() 
    {
        return $this->height;
    }


}
