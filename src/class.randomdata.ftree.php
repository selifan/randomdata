<?php
/**
* @package: randomdata - generating random "Family Tree"
* @name class.randomdata.ftree.php
*
* @Author Alexander Selifonov, <alex [at] selifan {dot} ru>
* @copyright Alexander Selifonov, <alex [at] selifan {dot} ru>
* @version 0.10 (started 2014-05-06)
* @Link http://www.selifan.ru
* @license http://opensource.org/licenses/BSD-3-Clause    BSD
*/

class RandomFtree extends RandomData {
    /**
    * Main method - generating family tree, starting with "root" person and going to N generations back
    *
    * @param mixed $options
    */
    private $generations = 5;
    private $birthrange = array(3,50); // age old range for start person in tree
    private $result = array();
    private $dtfmt = false;
    public function familyTree($options = false) {
        if (is_array($options)) {
            if (isset($options['generations'])) $this->generations = intval($options['generations']);
        }
        elseif (is_scalar($options)) $this->generations = intval($options);
        $genders = array('m','f');

        $pparams = array(
            'birthdate'=> $this->birthrange
        );
        if (isset($options['dateformat'])) $this->dtfmt = $pparams['dateformat'] = $options['dateformat'];
        $core = $this->result[0] = array($this->getPerson($pparams));
        for($level = 1; $level <= $this->generations; $level++) {
            $this->createParents($level-1);
        }
        return $this->result;

    }

    private function createParents($curlevel) {
        $newlvl = $curlevel+1;
        $this->result[$newlvl] = array();
        foreach($this->result[$curlevel] as $id => $person) {

            // create father
            $this->result[$newlvl][] = array(
                'lastname'  => $person['lastname']
               ,'firstname' => self::getFirstName('m')
               ,'birthdate'=>self::getRandomDate( 20, 38, $this->dtfmt, $person['birthdate'] )
               ,'gender' => 'm'
            );

            // create mother
            $this->result[$newlvl][] = array(
                'lastname'  => self::getLastName('f')
               ,'firstname' => self::getFirstName('f')
               ,'birthdate'=>self::getRandomDate( 18, 35, $this->dtfmt, $person['birthdate'] )
               ,'gender' => 'f'
            );
            // Create references to parents from current "node"
            $cnt = count($this->result[$newlvl]);
            $this->result[$curlevel][$id]['father'] = $cnt-2;
            $this->result[$curlevel][$id]['mother'] = $cnt-1;
        }
    }
}