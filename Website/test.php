<!DOCTYPE html>

<?php
include "shows/shows.php";
?>

<html>

    <head>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <h2 align="center">Favorite Netflix Shows</h2>

        <p id="test">Testing, testing...</p>

        <?php $test = "wow"; ?>
        <button type="button" onclick='document.getElementById("test").innerHTML = "1, 2, 3"'>testing</button>


        <?php 

        //$v = "yoloswaggypants";

        //var_dump($v);

        ?>

        <table>
            <tr>
                <th id="c1">Shows</th>
                <th id="c2">C2</th>
                <th id="c3">C3</th>
            </tr>
            <tr>
                <td>
                    <table>
                        <?php /*foreach($competitionShows as $s) { echo "<tr><td>
                             <button type='text' onclick='document.getElementById('test').innerHTML = '$s''>$s</button>
                             </td></tr>"; } */?>
                        <?php foreach($competitionShows as $s) {
                        echo "<tr><td>";
                        echo "<button type='text' onclick='document.getElementById('test').innerHTML = \'$s\''>$s</button>";
                        echo "</td></tr>";
                        } ?>
                    </table>
                </td>
                <td>
                    Column 2
                </td>
                <td>
                    Column 3
                </td>
            </tr>
            <tr>
                <td> What </td>
                <td> is </td>
                <td> going </td>
            </tr>
        </table>

    </body>
</html>