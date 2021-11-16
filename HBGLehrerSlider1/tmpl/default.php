<?php
// No direct access
defined('_JEXEC') or die; ?>

  <!--   <META http-equiv="refresh" content="5; https://www.hardtberg-gymnasium.de/index.php?option=com_content&view=article&id=1047">
  -->

   <div id='heute' style='display: block'>
<h4>Vertretungen am <?php echo date("d.m.y"); ?> :</h4>
         <table>
             <tr>
             <th>
             Datum
             </th>
             <th>
             Stunde
             </th>
             <th>
             Vertretungskraft
             </th>
             <th>
             Klasse
             </th>
             <th>
             Fach
             </th>
             <th>
             Fehlend
             </th>
             <th>
             Raum
             </th>
             <th>
             Kommentar
             </th>
             </tr>
             <?php
            foreach( $vertretungheute as $row ) {
            ?> <tr> <?php
            foreach( $row as  $element ){
             ?> <td> <?php
            echo $element; ?> </td> <?php  } ?> </tr> <?php  } ?>

         </table>
        </div>

         <div id='scrollEnde'>
           </div>
           <script>
                jQuery("html, body").animate({ scrollTop: jQuery('#scrollEnde').offset().top }, 15000);
           </script>