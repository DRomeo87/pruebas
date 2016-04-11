<?php
/**
 * Created by PhpStorm.
 * User: dromeo
 * Date: 11/04/2016
 * Time: 16:12
 */
$xml = simplexml_load_file("http://ep00.epimg.net/rss/elpais/portada.xml");
for ($i = 0; $i <= 10; $i++){
    echo "<a href='".$xml->channel->item[$i]->link."'>".$xml->channel->item[$i]->title."</a>";
    echo "<br/>";
}
?>
