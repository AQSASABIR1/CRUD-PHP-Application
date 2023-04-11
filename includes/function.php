<?php
/**
 * Summary of get_site_setting
 * @param mixed $con
 * @param mixed $setting_key
 * @param mixed $prefix
 * @param mixed $postfix
 * @return int|string
 */
function get_site_setting ($con, $setting_key='', $prefix='', $postfix=''){
    $sql = "SELECT * FROM site_settings WHERE setting_key = '$setting_key'";
    $result = $con->query($sql);
    $setting_value= -1;
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        return $prefix.$row["setting_value"].$postfix;
      }
    }
    return $setting_value;
}

/**
 * Summary of get_page_content
 * @param mixed $con
 * @param mixed $page_title
 * @param mixed $prefix
 * @param mixed $postfix
 * @return int|string
 */
function get_page_content ($con, $page_title='', $prefix='', $postfix=''){
    $sql = "SELECT * FROM pages WHERE title = '$page_title'";
    $result = $con->query($sql);
    $setting_value= -1;
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        return $prefix.$row["description"].$postfix;
      }
    }
    return $setting_value;
}
?>