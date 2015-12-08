<?php
/**
 * @link      http://craftcms.com/
 * @copyright Copyright (c) 2015 Pixel & Tonic, Inc.
 * @license   http://craftcms.com/license
 */

namespace craft\app\fields\data;

/**
 * Single-select option field data class.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class SingleOptionFieldData extends OptionData
{
    // Properties
    // =========================================================================

    /**
     * @var
     */
    private $_options;

    // Public Methods
    // =========================================================================

    /**
     * Returns the options.
     *
     * @return array|null
     */
    public function getOptions()
    {
        return $this->_options;
    }

    /**
     * Sets the options.
     *
     * @param array $options
     *
     * @return void
     */
    public function setOptions($options)
    {
        $this->_options = $options;
    }
}
