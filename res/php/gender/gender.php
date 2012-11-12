<?php

namespace Gender;

/** @phpstub */
class Gender
{
    const ALBANIA = 37;
    const ANY_COUNTRY = 0;
    const ARABIA = 48;
    const ARMENIA = 43;
    const AUSTRIA = 14;
    const AZERBAIJAN = 44;
    const BELARUS = 40;
    const BELGIUM = 9;
    const BOSNIA = 30;
    const BRITAIN = 1;
    const BULGARIA = 29;
    const CHINA = 50;
    const CROATIA = 31;
    const CZECH_REP = 25;
    const DENMARK = 17;
    const EAST_FRISIA = 13;
    const ERROR_IN_NAME = 69;
    const ESTONIA = 21;
    const FINLAND = 20;
    const FRANCE = 8;
    const GEORGIA = 45;
    const GERMANY = 12;
    const GREECE = 38;
    const HUNGARY = 27;
    const ICELAND = 16;
    const INDIA = 51;
    const IRELAND = 2;
    const IS_A_COUPLE = 67;
    const IS_FEMALE = 70;
    const IS_MALE = 77;
    const IS_MOSTLY_FEMALE = 102;
    const IS_MOSTLY_MALE = 109;
    const IS_UNISEX_NAME = 63;
    const ISRAEL = 49;
    const ITALY = 6;
    const JAPAN = 52;
    const KAZAKH_UZBEK = 46;
    const KOREA = 53;
    const KOSOVO = 32;
    const LATVIA = 22;
    const LITHUANIA = 23;
    const LUXEMBOURG = 10;
    const MACEDONIA = 33;
    const MALTA = 7;
    const MOLDOVA = 41;
    const MONTENEGRO = 34;
    const NAME_NOT_FOUND = 32;
    const NETHERLANDS = 11;
    const NORWAY = 18;
    const POLAND = 24;
    const PORTUGAL = 5;
    const ROMANIA = 28;
    const RUSSIA = 39;
    const SERBIA = 35;
    const SLOVAKIA = 26;
    const SLOVENIA = 36;
    const SPAIN = 4;
    const SWEDEN = 19;
    const SWISS = 15;
    const TURKEY = 47;
    const UKRAINE = 42;
    const USA = 3;

    /**
     * Construct the Gender object.
     *
     * @param string $dsn
     */
    public function __construct($dsn = NULL)
    {
    }

    /**
     * Connect to an external name dictionary.
     *
     * @param string $dsn
     *
     * @return boolean Boolean as success of failure.
     */
    public function connect($dsn)
    {
    }

    /**
     * Get textual country representation
     *
     * @param integer $country
     *
     * @return array Returns an array with the short and full names of the country on success
     *               .
     */
    public function country($country)
    {
    }

    /**
     * Get gender of a name.
     *
     * @param string $name
     * @param integer $country
     *
     * @return integer Returns gender of the name.
     */
    public function get($name, $country = NULL)
    {
    }
}