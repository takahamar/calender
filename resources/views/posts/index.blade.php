<?php

function h($s) {
        return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
        }



?>


<!DOCTYPE html>
<html lang=ja>
<head>
    <meta charset=="Utf-8">
    <title>Calender</title>
    <link rel="stylesheet" href="/css/styles.css" >
</head>
<body>
    <div class="parent">
        <p><a href="{{ url('/') }}">login</a></p>
    </div>
    <br>
    <table>
        <thead>
            <tr>
                <th><a href="/calender?t=<?php echo h($cal->prev); ?>">&laquo;</a></th>
                <th colspan="5"><?php echo h($cal->yearMonth); ?></th>
                <th><a href="/calender?t=<?php echo h($cal->next); ?>">&raquo;</a></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sun</td>
                <td>Mon</td>
                <td>Tue</td>
                <td>wed</td>
                <td>Thu</td>
                <td>Fri</td>
                <td>Sat</td>
            </tr>
            

            <tr>
               {{$cal->show()}}
            </tr>
                
        </tbody>
        <tfoot>
            <tr>
                <th colspan="7">
                    <a href="/calender">Today</a>
                </th>
            </tr>
        </tfoot>
    </table>
</body>
</html>