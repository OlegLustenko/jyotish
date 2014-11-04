<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Panchanga\Vara\Object;

use Jyotish\Graha\Graha;

/**
 * Guruvar class.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class V5 extends \Jyotish\Panchanga\Vara\Vara {

    static public $varaGraha = Graha::KEY_GU;

    public function __construct($options) {
        return $this;
    }
}