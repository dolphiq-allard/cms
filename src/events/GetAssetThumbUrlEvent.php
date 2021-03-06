<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.github.io/license/
 */

namespace craft\events;

use craft\elements\Asset;
use yii\base\Event;

/**
 * Get Asset thumb url event class
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class GetAssetThumbUrlEvent extends Event
{
    // Properties
    // =========================================================================

    /**
     * @var Asset The Asset which the thumbnail should be for.
     */
    public $asset;

    /**
     * @var int Requested thumbnail size (width and height)
     */
    public $size;

    /**
     * @var bool Whether the thumbnail should be generated if it doesn't exist yet.
     */
    public $generate;

    /**
     * @var string|null Url to requested Asset that should be used instead.
     */
    public $url;
}
