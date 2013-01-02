PHP mySQL Profiler
==================

A very basic Profiler to show mySQL query activity in a PHP application.
This is a simple PHP file which opens mySQL's log file
To make sure your mySQL database is recording logs, make sure the following is in your my.ini file
    [mysqld]
    general_log = 1
More information http://dev.mysql.com/doc/refman/5.1/en/query-log.html


Usage
-----
To use the profiler in your application, just include it in your PHP file.

Example usage
-------------

    <?php
    include 'profiler.php';
    ?>

Output
------

<table>
<tr>
<td>hh:mm:ss</td>
<td>mySQL query</td>
</tr>
<tr>
<td></td>
<td>mySQL query</td>
</tr>
</table>