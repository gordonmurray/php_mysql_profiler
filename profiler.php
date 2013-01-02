<?php
/*
 * A very basic attempt to create a Profiler to show mySQL query activity in a PHP application
 * The goal is the make a facility similar to Codeigniters Profiler
 * Based on mysql general log information here: http://dev.mysql.com/doc/refman/5.1/en/query-log.html
 */
$mysql_log_name = 'Localhost.log'; // name of your log file
$mysql_log_path = 'C:\\xampp\\mysql\\data\\'; // location of your log file
$mysql_log = file($mysql_log_path . $mysql_log_name);
?>

<table width="100%">
    <?php
    if (empty($mysql_log))
    {
        echo "<tr>\n<td>No log data found</td>\n</tr>\n";
    }
    else
    {
        foreach ($mysql_log as $log)
        {
            $log_item_array = explode("\t", trim($log), 3);
            echo "<tr>\n";
            echo "\t<td>";
            echo (substr($log_item_array[0], 0, 6) == date("ymd")) ? str_replace(date("ymd"), "", $log_item_array[0]) : "";
            echo "</td>\n";
            echo "\t<td>";
            echo (substr($log_item_array[0], 0, 6) != date("ymd")) ? trim(preg_replace('/\s+/', ' ', $log_item_array[0])) : "";
            echo (isset($log_item_array[1])) ? " " . preg_replace('/\s+/', ' ', trim($log_item_array[1])) : "";
            echo "</td>\n";
            echo "</tr>\n";
        }
    }
    ?>
</table>
