<?php/** * * * Zenbership Membership Software * Copyright (C) 2013-2016 Castlamp, LLC * * This program is free software: you can redistribute it and/or modify * it under the terms of the GNU General Public License as published by * the Free Software Foundation, either version 3 of the License, or * (at your option) any later version. * * This program is distributed in the hope that it will be useful, * but WITHOUT ANY WARRANTY; without even the implied warranty of * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the * GNU General Public License for more details. * * You should have received a copy of the GNU General Public License * along with this program.  If not, see <http://www.gnu.org/licenses/>. * * @author      Castlamp * @link        http://www.castlamp.com/ * @link        http://www.zenbership.com/ * @copyright   (c) 2013-2016 Castlamp * @license     http://www.gnu.org/licenses/gpl-3.0.en.html * @project     Zenbership Membership Software */?><h1>Select Preset Template</h1><div class="popupbody">    <ul class="popup_longlist">        <!--<li><a href="null.php" onclick="return populate_template('def001');">Default E-Mail Template</a></li>-->        <?php        $query = $db->run_query("    SELECT `template`,`title`    FROM `ppSD_templates_email`    WHERE      ppSD_templates_email.custom='1' AND      (          ppSD_templates_email.public='1' OR          ppSD_templates_email.owner='" . $employee['id'] . "'      )    ORDER BY title ASC    LIMIT 0,50");        while ($row = $query->fetch()) {            echo "<li><a href=\"null.php\" onclick=\"return populate_template('" . $row['template'] . "');\">" . $row['title'] . "</a></li>";        }        ?>    </ul></div>