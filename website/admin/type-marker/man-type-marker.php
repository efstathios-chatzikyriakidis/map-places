<?php
  // include main module.
  require_once ("vs-cms-fns.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<!--
  Copyright (C) 2010  Efstathios Chatzikyriakidis (stathis.chatzikyriakidis@gmail.com)
  Copyright (C) 2010  Stefanos Tzagias            (steftzag@gmail.com)

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program. If not, see <http://www.gnu.org/licenses/>.
-->

<html>
  <head>
    <title><?php echo clean_for_display ($html_window_title); ?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="<?php echo clean_for_display ($html_meta_keywords); ?>">
    <meta name="description" content="<?php echo clean_for_display ($html_meta_descript); ?>">

    <link rel="icon" type="image/png" href="<?php echo '../../'.DIR_GRAPHICS.'/'.FILE_FAVICON; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo '../../'.DIR_CSS.'/'.FILE_CSS_MAIN; ?>">
  </head>

  <body>
    <table cellpadding="30" cellspacing="0" border="0" class="hundred">
      <tbody>
        <tr valign="top">
          <td class="side_box">
            <b>- <a href="<?php echo FILE_MAN_TYPE_LIST; ?>"><?php echo clean_for_display ($admin_op_man_type_text); ?></a></b>
            <br>
            <b>- <a href="<?php echo FILE_MAN_MARKER_LIST; ?>"><?php echo clean_for_display ($admin_op_man_marker_text); ?></a></b>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
