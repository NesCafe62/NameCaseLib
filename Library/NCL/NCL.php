<?php
/**
 * @license Dual licensed under the MIT or GPL Version 2 licenses.
 * @package NameCaseLib
 */

/**
 * Класс, который содержит основные константы библиотеки:
 * - индексы мужского и женского пола
 * - индексы всех падежей
 * 
 * @author Андрей Чайка <bymer3@gmail.com>
 * @version 0.4.1
 * @package NameCaseLib
 */
class NCL
{
    
    const CASE_NOMINATIVE = 0; //именительный
    const CASE_GENITIVE = 1; //родительный
    const CASE_DATIVE = 2; //дательный
    const CASE_ACCUSATIVE = 3; //винительный
    const CASE_INSTRUMENTAL = 4; //творительный
    const CASE_PREPOSITIONAL = 5; //предложный
    
    const GENDER_MALE = 1; // Мужской
    const GENDER_FEMALE = 2; // Женский
    
    /**
     * Мужской пол
     * @static integer
     */
    static $MAN = 1;

    /**
     * Женский пол
     * @static integer 
     */
    static $WOMAN = 2;

    /**
     * Именительный падеж
     * @static integer 
     */
    static $IMENITLN = 0;
    
    /**
     * Родительный падеж
     * @static integer 
     */
    static $RODITLN = 1;
    
    /**
     * Дательный падеж
     * @static integer 
     */
    static $DATELN = 2;
    
    /**
     * Винительный падеж
     * @static integer 
     */
    static $VINITELN = 3;
    
    /**
     * Творительный падеж
     * @static integer 
     */
    static $TVORITELN = 4;
    
    /**
     * Предложный падеж
     * @static integer 
     */
    static $PREDLOGN = 5;
    
    /**
     * Назвиний відмінок
     * @static integer 
     */
    static $UaNazyvnyi = 0;
    
    /**
     * Родовий відмінок
     * @static integer 
     */
    static $UaRodovyi = 1;
    
    /**
     * Давальний відмінок
     * @static integer 
     */
    static $UaDavalnyi = 2;
    
    /**
     * Знахідний відмінок
     * @static integer 
     */
    static $UaZnahidnyi = 3;
    
    /**
     * Орудний відмінок
     * @static integer 
     */
    static $UaOrudnyi = 4;
    
    /**
     * Місцевий відмінок
     * @static integer 
     */
    static $UaMiszevyi = 5;
    
    /**
     * Кличний відмінок
     * @static integer 
     */
    static $UaKlychnyi = 6;

}

?>
