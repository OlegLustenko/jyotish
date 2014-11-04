<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Rashi\Object;

use Jyotish\Rashi\Rashi;
use Jyotish\Graha\Graha;
use Jyotish\Tattva\Jiva\Nara\Manusha;
use Jyotish\Tattva\Maha;
use Jyotish\Tattva\Ayurveda;

/**
 * Class of rashi 5.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class R5 extends RashiObject {
    /**
     * Rashi key
     * 
     * @var int
     */
    protected $objectKey = 5;

    /**
     * Devanagari title 'simha' in transliteration.
     * 
     * @var array
     * @see Jyotish\Alphabet\Devanagari
     */
    protected $rashiTranslit = ['sa','i','anusvara','ha'];

    /**
     * Unicode of rashi.
     * 
     * @var string
     */
    protected $rashiUnicode = '264C';
    
    /**
     * Main name of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 3.
     */
    protected $objectName = Rashi::NAME_5;

    /**
     * Limb of Kaal Purush.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 4-4 1/2.
     */
    protected $rashiLimb = Manusha::LIMB_STOMACH;

    /**
     * Bhava of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 5-5 1/2.
     */
    protected $rashiBhava = Rashi::BHAVA_STHIRA;

    /**
     * Gender of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 5-5 1/2.
     */
    protected $rashiGender = Manusha::GENDER_MALE;

    /**
     * Prakriti of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 5-5 1/2.
     */
    protected $rashiPrakriti = Ayurveda::PRAKRITI_PITTA;

    /**
     * Bala of rashi.
     * 
     * @var string
     * @see Varahamihira. Brihat Jataka. Chapter 1, Verse 10.
     */
    protected $rashiBala  = Rashi::BALA_DINA;

    /**
     * Daya of rashi.
     * 
     * @var string
     * @see Varahamihira. Brihat Jataka. Chapter 1, Verse 10.
     */
    protected $rashiDaya = Rashi::DAYA_SIRSHA;

    /**
     * Type of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 12.
     * @see Varahamihira. Brihat Jataka. Chapter 1, Verse 17.
     */
    protected $rashiType = Manusha::TYPE_PASU;

    /**
     * Bhuta of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 12.
     */
    protected $rashiBhuta = Maha::BHUTA_AGNI;

    /**
     * Ruler of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 12.
     */
    protected $rashiRuler = Graha::KEY_SY;

    /**
     * Varna of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 12.
     */
    protected $rashiVarna = Manusha::VARNA_KSHATRIYA;

    /**
     * Set rashi type.
     * 
     * @param null|array $options Options to set
     */
    protected function setRashiType($options)
    {
        if($options['rashi5Vana']){
            $this->rashiType = Manusha::TYPE_VANA;
        }
    }

    public function __construct($options)
    {
        parent::__construct($options);
        
        $this->setRashiType($this->options);
    }
}