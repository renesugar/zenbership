<?php/** * * * Zenbership Membership Software * Copyright (C) 2013-2016 Castlamp, LLC * * This program is free software: you can redistribute it and/or modify * it under the terms of the GNU General Public License as published by * the Free Software Foundation, either version 3 of the License, or * (at your option) any later version. * * This program is distributed in the hope that it will be useful, * but WITHOUT ANY WARRANTY; without even the implied warranty of * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the * GNU General Public License for more details. * * You should have received a copy of the GNU General Public License * along with this program.  If not, see <http://www.gnu.org/licenses/>. * * @author      Castlamp * @link        http://www.castlamp.com/ * @link        http://www.zenbership.com/ * @copyright   (c) 2013-2016 Castlamp * @license     http://www.gnu.org/licenses/gpl-3.0.en.html * @project     Zenbership Membership Software */?><script type="text/javascript">    $.ctrl('S', function () {        return json_add('options-add', '', '1', 'popupform');    });</script><form action="" method="post" id="popupform" onsubmit="return json_add('plugin-add','','1','popupform');"><div id="popupsave">    <input type="submit" value="Save" class="save"/>    <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>" /></div><h1>Plugin Options</h1><div class="pad24t popupbody">    <?php    $q1 = $db->run_query("        SELECT *        FROM `ppSD_options`        WHERE `id` LIKE 'pg_" . $db->mysql_cleans($_POST['id']) . "_%' AND `section`='widgets'        ORDER BY `display` ASC    ");    $more = 0;    $current_section = '';    while ($row = $q1->fetch()) {        $more++;        if ($current_section != $row['section']) {            if (!empty($current_section)) {                echo "</ul>";            }            echo "<ul class=\"option_editor\">";            $current_section = $row['section'];        }        $option = $db->format_option($row, '', true);        echo $option;    }    if ($more == '0') {        echo "<li class=\"weak\">There are no options to display.</li>";    }    ?>    </ul></div>