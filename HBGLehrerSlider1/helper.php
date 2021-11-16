<?php
/**
 * Helper class for hbglehrerslider1 module
 *
 * @package    hbglehrerslider1
 * @subpackage Modulese
 * @license        GNU/GPL, see LICENSE.php
 * mod_hbglehrerslider1 is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

class modvertretungenhbghelper
{
    /**
     * Retrieves the Vertretungen
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */

     public static function getvertretungen0hbg($params)
    {
       $db = JFactory::getDbo();
       $query = $db -> getQuery(true);

        $query
               -> select(array ('a.datum','a.stunde','c.alias','a.klasse','a.fach','b.alias','a.raum','a.kommentar'))
                -> from($db->quoteName ('#__school_vertretung', 'a'))

                 -> join('LEFT', $db->quoteName('#__school_teachers','b')  . ' ON ' . $db->quoteName('a.lehrerid'). ' = ' . $db->quoteName('b.id'))

                 -> join('LEFT', $db->quoteName('#__school_teachers','c')  . ' ON ' . $db->quoteName('a.vertretungslehrerid'). ' = ' . $db->quoteName('c.id'))


                -> where($db->quoteName('a.datum')." >= subdate(now(),1)" . 'AND' .  $db->quoteName('a.datum') ." <= subdate(now(),0)" )

                -> order($db->quoteName('c.alias'). ' ASC')

                -> order($db->quoteName('a.Stunde'). ' ASC');

        $db->setQuery($query);
        $results = $db->loadRowList();

       return $results;
    }

    public static function getvertretungen1hbg($params)
    {
       $db = JFactory::getDbo();
       $query = $db -> getQuery(true);

        $query
               -> select(array ('a.datum','a.stunde','c.alias','a.klasse','a.fach','b.alias','a.raum','a.kommentar'))
                -> from($db->quoteName ('#__school_vertretung', 'a'))

                 -> join('LEFT', $db->quoteName('#__school_teachers','b')  . ' ON ' . $db->quoteName('a.lehrerid'). ' = ' . $db->quoteName('b.id'))

                 -> join('LEFT', $db->quoteName('#__school_teachers','c')  . ' ON ' . $db->quoteName('a.vertretungslehrerid'). ' = ' . $db->quoteName('c.id'))


                -> where($db->quoteName('a.datum')." >= subdate(now(),0)" . 'AND' .  $db->quoteName('a.datum') ." <= subdate(now(),-1)" )
                -> order($db->quoteName('c.alias'). ' ASC')

                -> order($db->quoteName('a.Stunde'). ' ASC');

        $db->setQuery($query);
        $results = $db->loadRowList();

       return $results;
    }


    public static function getvertretungen2hbg($params)
    {
       $db = JFactory::getDbo();
       $query = $db -> getQuery(true);

        $query
               -> select(array ('a.datum','a.stunde','c.alias','a.klasse','a.fach','b.alias','a.raum','a.kommentar'))
                -> from($db->quoteName ('#__school_vertretung', 'a'))

                 -> join('LEFT', $db->quoteName('#__school_teachers','b')  . ' ON ' . $db->quoteName('a.lehrerid'). ' = ' . $db->quoteName('b.id'))

                 -> join('LEFT', $db->quoteName('#__school_teachers','c')  . ' ON ' . $db->quoteName('a.vertretungslehrerid'). ' = ' . $db->quoteName('c.id'))



                -> where($db->quoteName('a.datum')." >= subdate(now(),-1)" . 'AND' .  $db->quoteName('a.datum') . " <= subdate(now(),-2)" )
                -> order($db->quoteName('c.alias'). ' ASC')

                -> order($db->quoteName('a.Stunde'). ' ASC');

        $db->setQuery($query);
        $results = $db->loadRowList();

       return $results;
    }


    public static function getvertretungen3hbg($params)
    {
       $db = JFactory::getDbo();
       $query = $db -> getQuery(true);

        $query
               -> select(array ('a.datum','a.stunde','c.alias','a.klasse','a.fach','b.alias','a.raum','a.kommentar'))
                -> from($db->quoteName ('#__school_vertretung', 'a'))

                 -> join('LEFT', $db->quoteName('#__school_teachers','b')  . ' ON ' . $db->quoteName('a.lehrerid'). ' = ' . $db->quoteName('b.id'))

                 -> join('LEFT', $db->quoteName('#__school_teachers','c')  . ' ON ' . $db->quoteName('a.vertretungslehrerid'). ' = ' . $db->quoteName('c.id'))



                -> where($db->quoteName('a.datum')." >= subdate(now(),-2)" . 'AND' .  $db->quoteName('a.datum') ." <= subdate(now(),-3)" )
                -> order($db->quoteName('c.alias'). ' ASC')

                -> order($db->quoteName('a.Stunde'). ' ASC');

        $db->setQuery($query);
        $results = $db->loadRowList();

       return $results;
    }


    public static function getvertretungen4hbg($params)
    {
       $db = JFactory::getDbo();
       $query = $db -> getQuery(true);

        $query
               -> select(array ('a.datum','a.stunde','c.alias','a.klasse','a.fach','b.alias','a.raum','a.kommentar'))
                -> from($db->quoteName ('#__school_vertretung', 'a'))

                 -> join('LEFT', $db->quoteName('#__school_teachers','b')  . ' ON ' . $db->quoteName('a.lehrerid'). ' = ' . $db->quoteName('b.id'))

                 -> join('LEFT', $db->quoteName('#__school_teachers','c')  . ' ON ' . $db->quoteName('a.vertretungslehrerid'). ' = ' . $db->quoteName('c.id'))



                -> where($db->quoteName('a.datum')." >= subdate(now(),-3)" . 'AND' . $db->quoteName('a.datum') . " <= subdate(now(),-4)" )
                -> order($db->quoteName('c.alias'). ' ASC')

                -> order($db->quoteName('a.Stunde'). ' ASC');

        $db->setQuery($query);
        $results = $db->loadRowList();

       return $results;
    }

    public static function getvertretungen5hbg($params)
    {
       $db = JFactory::getDbo();
       $query = $db -> getQuery(true);

        $query
               -> select(array ('a.datum','a.stunde','c.alias','a.klasse','a.fach','b.alias','a.raum','a.kommentar'))
                -> from($db->quoteName ('#__school_vertretung', 'a'))

                 -> join('LEFT', $db->quoteName('#__school_teachers','b')  . ' ON ' . $db->quoteName('a.lehrerid'). ' = ' . $db->quoteName('b.id'))

                 -> join('LEFT', $db->quoteName('#__school_teachers','c')  . ' ON ' . $db->quoteName('a.vertretungslehrerid'). ' = ' . $db->quoteName('c.id'))



                -> where($db->quoteName('a.datum')." >= subdate(now(),-4)" . 'AND' . $db->quoteName('a.datum') . " <= subdate(now(),-5)" )
                -> order($db->quoteName('c.alias'). ' ASC')

                -> order($db->quoteName('a.Stunde'). ' ASC');

        $db->setQuery($query);
        $results = $db->loadRowList();

       return $results;
    }


}