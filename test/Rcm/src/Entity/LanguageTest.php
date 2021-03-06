<?php
/**
 * Unit Test for the Language Entity
 *
 * This file contains the unit test for the Language Entity
 *
 * PHP version 5.3
 *
 * LICENSE: BSD
 *
 * @category  Reliv
 * @package   Rcm
 * @author    Westin Shafer <wshafer@relivinc.com>
 * @copyright 2014 Reliv International
 * @license   License.txt New BSD License
 * @version   GIT: <git_id>
 * @link      http://github.com/reliv
 */

namespace RcmTest\Entity;

require_once __DIR__ . '/../../../autoload.php';

use Rcm\Entity\Language;

/**
 * Unit Test for the Language Entity
 *
 * Unit Test for the Language Entity
 *
 * @category  Reliv
 * @package   Rcm
 * @author    Westin Shafer <wshafer@relivinc.com>
 * @copyright 2012 Reliv International
 * @license   License.txt New BSD License
 * @version   Release: 1.0
 * @link      http://github.com/reliv
 */
class LanguageTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Rcm\Entity\Language */
    protected $language;

    /**
     * Setup for tests
     *
     * @return void
     */
    public function setup()
    {
        $this->language = new Language();
    }

    /**
     * Test Alias Get Language
     *
     * @return void
     *
     * @covers \Rcm\Entity\Language
     */
    public function testAliasGetLanguage()
    {
        $language = 'eng';

        $this->language->setIso6392t($language);

        $actual = $this->language->getLanguage();

        $this->assertEquals($language, $actual);
    }

    /**
     * Test Alias Get Two Digit Code
     *
     * @return void
     *
     * @covers \Rcm\Entity\Language
     */
    public function testAliasGetTwoDigit()
    {
        $language = 'en';

        $this->language->setIso6391($language);

        $actual = $this->language->getTwoDigit();

        $this->assertEquals($language, $actual);
    }

    /**
     * Test Alias Get Three Digit Code
     *
     * @return void
     *
     * @covers \Rcm\Entity\Language
     */
    public function testAliasGetThreeDigit()
    {
        $language = 'eng';

        $this->language->setIso6392t($language);

        $actual = $this->language->getThreeDigit();

        $this->assertEquals($language, $actual);
    }

    /**
     * Test Get and Set Language Id
     *
     * @return void
     *
     * @covers \Rcm\Entity\Language
     */
    public function testGetAndSetLanguageId()
    {
        $id = 54;

        $this->language->setLanguageId($id);

        $actual = $this->language->getLanguageId();

        $this->assertEquals($id, $actual);
    }

    /**
     * Test Get and Set Language Name
     *
     * @return void
     *
     * @covers \Rcm\Entity\Language
     */
    public function testGetAndSetLanguageName()
    {
        $name = 'English';

        $this->language->setLanguageName($name);

        $actual = $this->language->getLanguageName();

        $this->assertEquals($name, $actual);
    }

    /**
     * Test Get and Set Iso 639-1
     *
     * @return void
     *
     * @covers \Rcm\Entity\Language
     */
    public function testGetAndSetIso6391()
    {
        $iso639_1 = 'en';

        $this->language->setIso6391($iso639_1);

        $actual = $this->language->getIso6391();

        $this->assertEquals($iso639_1, $actual);
    }

    /**
     * Test set Iso 639-1 throws exception when too long
     *
     * @return void
     *
     * @covers \Rcm\Entity\Language
     * @expectedException \Rcm\Exception\InvalidArgumentException
     */
    public function testSetIso6391TooLong()
    {
        $iso639_1 = 'eng';

        $this->language->setIso6391($iso639_1);
    }

    /**
     * Test set Iso 639-1 throws exception when too short
     *
     * @return void
     *
     * @covers \Rcm\Entity\Language
     * @expectedException \Rcm\Exception\InvalidArgumentException
     */
    public function testSetIso6391TooShort()
    {
        $iso639_1 = 'e';

        $this->language->setIso6391($iso639_1);
    }

    /**
     * Test Get and Set Iso 639-2b
     *
     * @return void
     *
     * @covers \Rcm\Entity\Language
     */
    public function testGetAndSetIso6392b()
    {
        $iso639_2b = 'esp';

        $this->language->setIso6392b($iso639_2b);

        $actual = $this->language->getIso6392b();

        $this->assertEquals($iso639_2b, $actual);
    }

    /**
     * Test set Iso 639-2b throws exception when too long
     *
     * @return void
     *
     * @covers \Rcm\Entity\Language
     * @expectedException \Rcm\Exception\InvalidArgumentException
     */
    public function testSetIso6392bTooLong()
    {
        $iso639_2b = 'espanol';

        $this->language->setIso6392b($iso639_2b);
    }

    /**
     * Test set Iso 639-2b throws exception when too short
     *
     * @return void
     *
     * @covers \Rcm\Entity\Language
     * @expectedException \Rcm\Exception\InvalidArgumentException
     */
    public function testSetIso6392bTooShort()
    {
        $iso639_2b = 'es';

        $this->language->setIso6392b($iso639_2b);
    }

    /**
     * Test Get and Set Iso 639-2t
     *
     * @return void
     *
     * @covers \Rcm\Entity\Language
     */
    public function testGetAndSetIso6392t()
    {
        $iso639_2t = 'spa';

        $this->language->setIso6392t($iso639_2t);

        $actual = $this->language->getIso6392t();

        $this->assertEquals($iso639_2t, $actual);
    }

    /**
     * Test set Iso 639-2t throws exception when too long
     *
     * @return void
     *
     * @covers \Rcm\Entity\Language
     * @expectedException \Rcm\Exception\InvalidArgumentException
     */
    public function testSetIso6392tTooLong()
    {
        $iso639_2t = 'espanol';

        $this->language->setIso6392t($iso639_2t);
    }

    /**
     * Test set Iso 639-2t throws exception when too short
     *
     * @return void
     *
     * @covers \Rcm\Entity\Language
     * @expectedException \Rcm\Exception\InvalidArgumentException
     */
    public function testSetIso6392tTooShort()
    {
        $iso639_2t = 'es';

        $this->language->setIso6392t($iso639_2t);
    }

    /**
     * Test Get and Set Old Web Language Code
     *
     * @return void
     *
     * @covers \Rcm\Entity\Language
     */
    public function testGetAndSetOldWebLanguage()
    {
        $oldCode = 'GE';

        $this->language->setOldWebLanguage($oldCode);

        $actual = $this->language->getOldWebLanguage();

        $this->assertEquals($oldCode, $actual);
    }

}
 