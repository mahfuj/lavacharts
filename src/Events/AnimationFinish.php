<?php namespace Khill\Lavacharts\Events;

/**
 * AnimationFinish Event Object
 *
 * The base class for the individual event objects, providing common
 * functions to the child objects.
 *
 *
 * @package    Lavacharts
 * @subpackage Events
 * @since      v2.0.0
 * @author     Kevin Hill <kevinkhill@gmail.com>
 * @copyright  (c) 2015, KHill Designs
 * @link       http://github.com/kevinkhill/lavacharts GitHub Repository Page
 * @link       http://lavacharts.com                   Official Docs Site
 * @license    http://opensource.org/licenses/MIT MIT
 */

class AnimationFinish extends Event
{
    const TYPE = 'animationfinish';

    /**
     * Builds the AnimationFinish Event object when passed an array of configuration options.
     *
     * @param  array                 $c Options for the Event
     * @throws InvalidConfigValue
     * @throws InvalidConfigProperty
     * @return AnimationFinish
     */
    public function __construct($c)
    {
        parent::__construct($c);
    }
}
