<?php
  // include main module.
  require_once ("vs-cms-fns.php");

  // check for the form normal submission.
  if (!array_key_exists ('submit_check', $_POST))
    die (clean_for_display ($security_file_insuff_params_error));
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
        <tr>
          <td class="side_box" valign="top">
            <table cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td><b><?php echo clean_for_display ($admin_upd_type_process); ?></b></td>
                </tr>
                <tr>
                  <td height="1"><?php echo space (1, 10); ?></td>
                </tr>
                <tr>
                  <td style="font-weight: bold;">
                    <?php
                      // try to update the type.
                      update_type ($_POST);
                    ?>
                    <p><?php echo clean_for_display ($navigate_goto_text); ?>&nbsp;[ <a href="<?php echo FILE_MAN_TYPE_LIST; ?>"><?php echo clean_for_display ($navigate_list_text); ?></a> | <a href="javascript: history.go(-1);"><?php echo clean_for_display ($navigate_back_text); ?></a> ]</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>

</html>
