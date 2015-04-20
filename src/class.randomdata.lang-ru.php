<?php
/**
* Class for generating some random text data, like human first/last/mid names, dates, etc.
* @name class.randomdata.lang-ru.php
* Registering Russian (ru) first & last & patronimic names
* charset: UTF-8
* @Author Alexander Selifonov, <alex [at] selifan {dot} ru>
* @copyright Alexander Selifonov, <alex [at] selifan {dot} ru>
* @version 0.10 (started 2014-01-05)
* modified 2015-04-13
* @Link http://www.selifan.ru
* @license http://opensource.org/licenses/BSD-3-Clause    BSD
* PHP version required: 5.4+ !!!
*/
define('UTF', 'UTF-8');

$options = array(
  'firstnames' => array(
    'm' => array(
      'Август','Авдей','Аверьян','Автоном','Агап','Агафон','Агей','Адам','Адриан','Андриян','Азарий','Аким',
      'Александр','Алексей','Амвросий','Амос','Ананий','Анатолий','Андрей','Андрон','Андроник','Аникей','Аникита','Анисим',
      'Онисим','Антип','Антонин','Аполлинарий','Аполлон','Арефий','Аристарх','Аркадий','Арсений','Артемий','Артем',
      'Архип','Аскольд','Афанасий','Афиноген','Бажен','Богдан','Болеслав','Борис','Борислав','Боян','Бронислав','Будимир',
      'Вадим','Валентин','Валерий','Валерьян','Варлаам','Варфоломей','Василий','Вацлав','Велимир','Венедикт','Вениамин','Викентий',
      'Виктор','Викторин','Виссарион','Виталий','Владилен','Владлен','Владимир','Владислав','Влас','Всеволод','Всемил','Всеслав',
      'Вышеслав','Вячеслав','Гаврила','Гавриил','Галактион','Гедеон','Геннадий','Георгий','Герасим','Герман','Глеб',
      'Гордей','Гостомысл','Гремислав','Григорий','Гурий','Давыд','Давид','Данила','Даниил','Дементий',
      'Демид','Демьян','Денис','Дмитрий','Добромысл','Доброслав','Дорофей','Евгений','Евграф','Евдоким','Евлампий','Евсей',
      'Евстафий','Евстигней','Егор','Елизар','Елисей','Емельян','Епифан','Еремей','Ермил','Ермолай','Ерофей','Ефим',
      'Ефрем','Захар','Зиновий','Зосима','Иван','Игнатий','Игорь','Измаил','Изот','Изяслав','Иларион','Илья',
      'Иннокентий','Иосиф','Осип','Ипат','Ипатий','Ипполит','Ираклий','Исай','Исидор','Казимир','Каллистрат','Капитон',
      'Карл','Карп','Касьян','Ким','Кир','Кирилл','Клавдий','Климент','Клементий','Клим','Кондрат','Кондратий',
      'Конон','Константин','Корнил','Корней','Корнилий','Кузьма','Куприян','Лавр','Лаврентий','Лазарь','Лев','Леон',
      'Леонид','Леонтий','Лонгин','Лукьян','Лучезар','Любим','Любомир','Макар','Максим','Максимильян','Мариан','Марк',
      'Мартын','Мартьян','Матвей','Мефодий','Мечислав','Милан','Милен','Мирон','Мирослав','Митрофан','Михаил','Михей',
      'Модест','Моисей','Мстислав','Назар','Наркис','Натан','Наум','Нестор','Никандр','Никанор','Никита','Никифор',
      'Никодим','Николай','Никон','Нифонт','Олег','Олимпий','Онуфрий','Орест','Осип','Иосиф','Остап','Павел',
      'Панкратий','Панкрат','Пантелеймон','Панфил','Парамон','Парфен','Пахом','Петр','Пимен','Платон','Поликарп','Порфирий',
      'Потап','Прокл','Прокофий','Прохор','Радим','Радислав','Радован','Ратибор','Ратмир','Родион','Роман','Ростислав',
      'Рубен','Руслан','Савва','Савватий','Савелий','Самсон','Самуил','Светозар','Святополк','Святослав','Севастьян','Селиван',
      'Селиверст','Семен','Серафим','Сергей','Сигизмунд','Сидор','Силантий','Сильвестр','Симон','Сократ','Соломон','Софон',
      'Софрон','Спартак','Спиридон','Станислав','Степан','Стоян','Тарас','Твердислав','Творимир','Терентий','Тимофей','Тимур',
      'Тит','Тихон','Трифон','Трофим','Ульян','Устин','Фадей','Федор','Федосий','Федот','Феликс','Феоктист',
      'Феофан','Ферапонт','Филарет','Филимон','Филипп','Фирс','Флорентин','Фока','Фома','Фотий','Фрол','Харитон',
      'Харлампий','Христофор','Чеслав','Эдуард','Эммануил','Эмиль','Эраст','Эрнест','Эрнст','Ювеналий','Юлиан','Юлий',
      'Юрий','Яков','Ян','Якуб','Януарий','Ярополк','Ярослав'
    )
    ,'f' => array(
      'Августа','Агата','Агафья','Аглая',
      'Агнесса','Агния','Аграфена','Агриппина','Ада','Аделаида','Аза','Алевтина','Александра','Алина','Алиса','Алла',
      'Альбина','Анастасия','Ангелина','Анисья','Анна','Антонида','Антонина','Анфиса','Аполлинария','Ариадна','Беатриса','Берта',
      'Борислава','Бронислава','Валентина','Валерия','Ванда','Варвара','Василиса','Васса','Вера','Вероника','Викторина','Виктория',
      'Виргиния','Влада','Владилена','Владлена','Владислава','Власта','Всеслава','Галина','Галя','Ганна','Генриетта','Глафира',
      'Горислава','Дарья','Диана','Дина','Доминика','Домна','Ева','Евгеиня','Евдокия','Евлампия','Екатерина','Елена',
      'Елизавета','Ефросинья','Ефросиния','Жанна','Зинаида','Злата','Зоя','Изабелла','Изольда','Инга','Инесса','Инна',
      'Ираида','Ирина','Ия','Казимира','Калерия','Капитолина','Каролина','Кира','Клавдия','Клара','Кларисса','Клементина',
      'Клеопатра','Конкордия','Ксения','Лада','Лариса','Леокадия','Лиана','Лидия','Лилиана','Клеопатра','Конкордия','Ксения',
      'Лада','Лариса','Леокадия','Лиана','Лидия','Лилиана','Лилия','Лия','Луиза','Лукерья','Любава','Любовь',
      'Любомила','Любомира','Людмила','Майя','Мальвина','Маргарита','Марианна','Мариетта','Марина','Мария','Марта','Марфа',
      'Меланья','Мелитриса','Милана','Милена','Милица','Мира','Мирослава','Млада','Мстислава','Муза','Надежда','Наталья',
      'Наталия','Неонила','Ника','Нина','Нинель','Нона','Оксана','Октябрина','Олимпиада','Ольга','Пелагея','Поликсена',
      'Полина','Прасковья','Пульхерия','Рада','Раиса','Регина','Рената','Римма','Рогнеда','Роза','Розалия','Розина',
      'Ростислава','Руфина','Светлана','Серафима','Сильва','Сильвия','Саломея','Софья','Станислава','Стела','Степанида','Сусанна',
      'Таисия','Тамара','Татьяна','Ульяна','Фаина','Федосья','Фелицата','Флора','Флорентина','Фатина','Харитина','Христина',
      'Эвелина','Элеонора','Эльвира','Эмилия','Эмма','Юлия','Ядвига','Ярослава'
    )
  )
 ,'lastnames' => array('Смирн','Иван','Сокол',['Кузнецов',1],'Белоголов',['Попов',1],['Попцов',1],'Лебед','Козл','Новик','Мороз','Петр',['Волков',1],'Василь',['Соловьев',1],'Голов','Козырь','Зай'
     ,'Павл','Семен','Голуб','Виноград','Федор','Михайл','Тарас','Бел',['Комаров',2],['Орлов',2],['Киселев',1],'Макар','Андре','Гусь','Карась','Кузьмин'
     ,'Ильин','Кулик','Алексей','Евсей','Степан','Данил','Жук','Фрол','Журавл','Николай','Егор','Ворон','Рыбак','Пан','Максим','Белоус'
     ,'Александр','Сидор','Петр',['Фонарев',1],['Глухарев',1],['Фокин',1],'Молот',['Сергеев',1],['Селиванов',1],'Михей','Назар','Ждан','Панфил','Трофим','Лобан','Назар'
     ,'Баран','Кабан','Копыл','Копыт','Топор','Абрам','Потап','Беляк','Некрас','Ждан','Орех','Ефрем','Сувор','Черн','Калашник','Нестер'
     ,'Харитон','Агафон','Ларион','Федосей',['Михе',3],'Крюк','Рог','Конон','Дементий','Терентий','Пафнутий','Зиновий','Артемий','Арсений','Шарап'
     ,'Ефрем',['Константинов',1],'Никон','Лаврентий','Сазон',['Горде',3],'Самойл','Беспал','Самсон','Колоб','Колес','Ключ','Барабан','Пономар','Бондар'
     ,['Тихи',4],['Темны',4],['Зелены',4],['Белы',4],['Беглы',4]
     ,'Красивый','Малый','Тихорецкий',['Добронравов',1],'Рублев','Кожедуб',['Кожевников',1],['Удальцов',1],['Кулагин',1]
 )
 ,'patrnames' => array(
   'm' => array()
  ,'f' => array()
 )
 ,'lastname_modifier' => 'lastname_modifier_ru'
);

// create patronimnic names from first names
foreach($options['firstnames']['m'] as $mname) {

    $last = mb_substr($mname, -2, 2, UTF);
    $last3 = mb_substr($mname, -3,3, UTF);

    if ($last3 === 'ков') { # Яков - Яковлевич/левна
        $options['patrnames']['m'][] = mb_substr($mname, 0,mb_strlen($mname, UTF)-2,UTF).'левич';
        $options['patrnames']['f'][] = mb_substr($mname, 0,mb_strlen($mname, UTF)-2,UTF).'левна';
    }
    elseif ($last === 'ий') {
        $options['patrnames']['m'][] = mb_substr($mname, 0,mb_strlen($mname,UTF)-2,UTF).'ьевич';
        $options['patrnames']['f'][] = mb_substr($mname, 0,mb_strlen($mname,UTF)-2,UTF).'ьевна';
    }
    elseif ($last === 'ей') {
        $options['patrnames']['m'][] = mb_substr($mname, 0,-1,UTF).'евич';
        $options['patrnames']['f'][] = mb_substr($mname, 0,-1,UTF).'евна';
    }
    elseif ($last === 'ва' || $last === 'ла') { # Савва, Гаврила, Данила ...
        $options['patrnames']['m'][] = mb_substr($mname, 0,mb_strlen($mname,UTF)-1,UTF).'ович';
        $options['patrnames']['f'][] = mb_substr($mname, 0,mb_strlen($mname,UTF)-1,UTF).'овна';
    }
    elseif ($last === 'ма') { # Кузьма - Кузьмич, Кузьминична
        $options['patrnames']['m'][] = mb_substr($mname, 0,mb_strlen($mname,UTF)-1,UTF).'ич';
        $options['patrnames']['f'][] = mb_substr($mname, 0,mb_strlen($mname,UTF)-1,UTF).'инична';
    }
    elseif ($last === 'ка') { # Фока etc
        $options['patrnames']['m'][] = mb_substr($mname, 0,mb_strlen($mname,UTF)-1,UTF).'иевич';
        $options['patrnames']['f'][] = mb_substr($mname, 0,mb_strlen($mname,UTF)-1,UTF).'иевна';
    }
    elseif ($last === 'рь') { # Лазарь, Бондарь, Пономарь ...

        $options['patrnames']['m'][] = mb_substr($mname, 0,mb_strlen($mname,UTF)-1,UTF).'евич';
        $options['patrnames']['f'][] = mb_substr($mname, 0,mb_strlen($mname,UTF)-1,UTF).'евна';
    }
    else  {
        $options['patrnames']['m'][] = $mname . 'ович';
        $options['patrnames']['f'][] = $mname . 'овна';
    }

}
// reegister data for the language
RandomData::registerLanguage('ru', $options);

# Russian Last Name modifier - adding random postfix
# $base can be an array, to mark "stable" last name (no endings): ['Бондарь',1]
function lastname_modifier_ru($base, $gender='m') {

#    $base = ['Горде',3];
#    $base = ['Белы',4];
#    $base = 'Рублев';
    if (is_array($base) && isset($base[1])) {
        $ret = $base[0];
        $endings = false;
        switch($base[1]) {
            case 1: break;
            case 2: $endings = array('','','ский','ченко'); break; # Комаров => Комаровский, Комаровченко
            case 3: $endings = array('ев','йченко','енко'); break; # Горде: => Гордеев, Гордеенко
            case 4: $endings = array('й','х'); break; # Белы:  Белый, Белых
            # ...
        }
        if ($endings) $ret .= $endings[rand(0,count($endings)-1)];
#        echo "modified lastname [$base[1] is : $ret<br>";
    }
    else {
        $last3 = mb_substr($base, mb_strlen($base,UTF)-3, 4,UTF);
        $last2 = mb_substr($base, mb_strlen($base,UTF)-2, 4,UTF);
        $last1 = mb_substr($base, mb_strlen($base,UTF)-1, 4, UTF);
        $pst = false;
        $ret = $base;
        # Non-standard case in russian lastnames endings
        if($last2 === 'ль') {
            $pst = array('ьев','енко','ьков');
            $off = rand(0, count($pst)-1);
            $ret = mb_substr($base,0, mb_strlen($base,UTF)-1,UTF) . $pst[$off];
        }
        elseif($last2 === 'сь') {
            $pst = array('ев','ько','ьков','ь');
            $off = rand(0, count($pst)-1);
            $ret = mb_substr($base,0, mb_strlen($base,UTF)-1,UTF) . $pst[$off];
        }
        elseif($last2 === 'ов') {
            $pst = array('ьев','ко','ушкин','кин','ченко','ин');
            $off = rand(0, count($pst)-1);
            $ret .= $pst[$off];
        }
        elseif($last2 === 'рь') {
            $pst = array('ев','енко','ь');
            $off = rand(0, count($pst)-1);
            $ret = mb_substr($base,0, mb_strlen($base,UTF)-1,UTF) . $pst[$off];
        }
        elseif ($last2 === 'вл') {
            $pst = array('ов','енко','ович','иди','юченко');
            $off = rand(0, count($pst)-1);
            $ret .= $pst[$off];
        }
        elseif ($last2 === 'ин') {
            $pst = array('','ко','енко','цев');
            $off = rand(0, count($pst)-1);
            $ret .= $pst[$off];
        }
        elseif ($last2 === 'ей') {
            $pst = array('ев','йко','енко','йцев');
            $off = rand(0, count($pst)-1);
            $ret = mb_substr($base,0, mb_strlen($base,UTF)-1,UTF) . $pst[$off];
        }
        elseif ($last2 === 'ай') {
            $pst = array('кин','цев','ко');
            $off = rand(0, count($pst)-1);
            $ret = $base . $pst[$off];
        }
        elseif ($last2 === 'ий') {
            $pst = array('ьев','ьевский');
            $off = rand(0, count($pst)-1);
            $ret = mb_substr($base,0, mb_strlen($base,UTF)-2,UTF) . $pst[$off];
        }
        elseif ($last2 === 'ре') {
            $pst = array('ев','йченко','йко','йкин');
            $off = rand(0, count($pst)-1);
            $ret .= $pst[$off];
        }
        elseif ($last3 === 'лев') {
            $pst = array('','ский','ич');
            $off = rand(0, count($pst)-1);
            $ret .= $pst[$off];
        }
        elseif ($last1 === 'ч' ) {
            $pst = array('ев','енко','евский');
            $off = rand(0, count($pst)-1);
            $ret .= $pst[$off];
        }
        elseif ($last1 === 'б' ) {
            $pst = array('','','ов');
            $off = rand(0, count($pst)-1);
            $ret .= $pst[$off];
        }
        elseif ($last1 === 'ь') {
            $pst = array('ев','ко','ков','цов');
            $off = rand(0, count($pst)-1);
            $ret .= $pst[$off];
        }
        elseif ($last2 === 'ый') { }
        else {
            if (in_array($last1, array('а','о','е','и','у','ы','э','я')))
                $pst =  array('ков','ков','ков','йко','цев','цин','кин','вич','енко');
            elseif (in_array($last1, array('ч')))
                $pst =  array('ев','евский','арев','кин');
            elseif (in_array($last1, array('л')))
                $pst =  array('ков','овский','яев','ов','янин');
            else $pst = array('ов','ов','ов','ев','ин','цев','ович','енко');

            $off = rand(0, count($pst)-1);
            $ret = $base . $pst[$off];
        }
    }
    if($gender === 'f') { // add russian female ending: Воронов -> Воронова ...
        $last3 = mb_substr($ret, mb_strlen($ret,UTF)-3, 3,UTF);
        $last2 = mb_substr($ret, mb_strlen($ret,UTF)-2, 2,UTF);
        $last1 = mb_substr($ret, mb_strlen($ret,UTF)-1, 1, UTF);
        if ( in_array($last2, array('oв', 'ев','ин','ын')) ) $ret .= 'а'; # female ending
        elseif (in_array($last3, array('хий','кий','ний')) || ($last2==='ой' || $last2==='ый')) $ret = mb_substr($ret,0,mb_strlen($ret,UTF)-2,UTF) . 'ая';
    }
    return $ret;
}