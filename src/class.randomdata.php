<?php
/**
* @package: randomdata - generating random "person" data, like first/last/mid names, birth dates, etc.
* @name class.randomdata.php
*
* @Author Alexander Selifonov, <alex [at] selifan {dot} ru>
* @copyright Alexander Selifonov, <alex [at] selifan {dot} ru>
* @version 0.10 (started 2014-01-05)
* @Link http://www.selifan.ru
* @license http://opensource.org/licenses/BSD-3-Clause    BSD
*/
class RandomData {

    static $person = array(); // source data for generating procedures
    static $curLang = '';
    static $registeredAttribs = array();
    static $config = array('birthdate'=>array('min'=>1,'max'=>60));

    public static function registerLanguage($lang, $options) {

        if (is_array($options)) {
            self::$person[$lang] = $options;
            self::$curLang = $lang;
        }
    }
    public static function setConfig($attrib, $params) {
        if (!isset(self::$config[$attrib])) self::$config[$attrib] = array();
        self::$config[$attrib] = array_merge(self::$config[$attrib], $params);
    }
    public static function registerAttribute($attrib, $funcname) {
        self::$registeredAttribs[$attrib] = $funcname;
    }

    /**
    * Adding user source data to initial sources
    *
    * @param mixed $attrib primary attribute id
    * @param mixed $subattrib attribute inside primary attribute
    * @param mixed $data user data array
    */
    public static function addSource($attrib, $subattrib=null, $data) {
        if (!isset(self::$person[$attrib])) self::$person[$attrib] = array();
        if (is_array($data)) {
            if ($subattrib===null) self::$person[$attrib] = array_merge(self::$person[$attrib], $data);
        }
        else {
            if (!isset(self::$person[$attrib][$subattrib])) self::$person[$attrib][$subattrib] = array();
            self::$person[$attrib][$subattrib] = array_merge(self::$person[$attrib][$subattrib], $data);
        }
    }

    public static function getLastName($gender='m', $lang='') {
        if(count(self::$person)==0) return '';
        if(self::$curLang === '') return '';
        $lng = ($lang === '') ? self::$curLang : $lang;
        $off = rand(0, count(self::$person[$lng]['lastnames'])-1);
        $ret = self::$person[$lng]['lastnames'][$off];
        if(!empty(self::$person[$lng]['lastname_modifier']) && is_callable(self::$person[$lng]['lastname_modifier']))
          $ret = call_user_func(self::$person[$lng]['lastname_modifier'], $ret, $gender);
        return $ret;
    }

    public static function getFirstName($gender='m', $lang='') {
        if(count(self::$person)==0) return '';
        $lng = ($lang === '') ? self::$curLang : $lang;
        if(!isset(self::$person[$lng]['firstnames'][$gender]) or !is_array(self::$person[$lng]['firstnames'][$gender])) return '';
        $off = rand(0, count(self::$person[$lng]['firstnames'][$gender])-1);
        $ret = self::$person[$lng]['firstnames'][$gender][$off];
        return $ret;

    }
    public static function getMiddleName($gender='m', $lang='') {
        if(count(self::$person)==0) return '';
        $lng = ($lang === '') ? self::$curLang : $lang;
        if(!isset(self::$person[$lng]['patrnames'][$gender]) or !is_array(self::$person[$lng]['patrnames'][$gender])) return '';
        if (count(self::$person[$lng]['patrnames'][$gender])<1) return '';
        $off = rand(0, count(self::$person[$lng]['patrnames'][$gender])-1);
        $ret = self::$person[$lng]['patrnames'][$gender][$off];
        return $ret;
    }
    public static function getFullName($gender='m', $lang='') {
        if(count(self::$person)==0) return array('No-person-data');
        $ret = array( self::getLastName($gender, $lang) );
        if (($lastname = self::getFirstName($gender, $lang))) $ret [] = $lastname;
        if (($patrname = self::getLastName($gender, $lang))) $ret [] = $patrname;

        return $ret;
    }
    /**
    * generates random date
    *
    * @param mixed $min_years minimal years from current date
    * @param mixed $max_years maximal years from urrent date
    * @param mixed $datefmt maximal date format to return, Y-m-d by default ("YYYY-MM-DD")
    */
    public static function getRandomDate($min_years=NULL, $max_years=NULL, $datefmt=false) {
#        echo '<pre>' . print_r($min_years,1) .'</pre>';
        $now = time();
        if ($min_years === NULL) $min_years = self::$config['birtdate']['min'];
        if ($max_years === NULL) $max_years = self::$config['birtdate']['max'];
        $max_years = max($min_years+0.01,$max_years);

        $tm1 = $now - $max_years*365.25*86400;
        $tm2 = $now - $min_years*365.25*86400;
        if(!$datefmt) $datefmt = 'Y-m-d';
        return date($datefmt, rand($tm1, $tm2));
    }

    public static function setLanguage($lang) {
        self::$curLang = $lang;
    }
    /**
    * Generates person with desired (and registered) attributes
    *
    * @param mixed $options
    */
    public static function getPerson($options=false) {

        $genders = array('m','f');
        $gender = isset($options['gender']) ? $options['gender'] : $genders[rand(0,1)];
        $lang = $langs = isset($options['lang']) ? $options['lang'] : self::$curLang;
        $birth = isset($options['birthdate']) ? $options['birthdate'] : false;
        $d1 = $d2 = 0;
        if ($birth) {
            $d1 = isset($birth[0]) ? floatval($birth[0]) : floatval($birth);
            $d2 = isset($birth[1]) ? floatval($birth[1]) : $d1+50;
        }
        $datefmt = isset($options['dateformat']) ? $options['dateformat'] : 'Y-m-d';
        $partname = isset($options['middlename']) ? $options['middlename'] : false;

        if (is_array($langs)) { # each getPerson() call will use random language from passed list
            $cnt = count($langs)-1;
            $lang = $langs[rand(0,$cnt)];
            self::setLanguage($lang);
        }

        $ret = array(
            'gender'    => $gender
           ,'lastname'  => self::getLastName($gender)
           ,'firstname' => self::getFirstName($gender)
        );
        if ($partname) $ret['middlename'] = self::getMiddleName($gender);
        if ($birth) $ret['birthdate'] = self::getRandomDate($d1,$d2,$datefmt);
        foreach (self::$registeredAttribs as $id=>$funcname) {
            if (is_callable($funcname))
                $ret[$id] = $funcname($ret);
        }
        return $ret;
    }
}