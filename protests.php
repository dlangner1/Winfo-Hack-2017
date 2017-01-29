<?php
    insert_top();
    insert_current_protests();
    insert_bottom();

    function insert_current_protests() {
        if (file_exists("events.txt")) {
            $lines = file("events.txt", FILE_IGNORE_NEW_LINES);
            foreach ($lines as $line) {
                $event = explode(";", $line);
                list($name, $city, $state, $date,
                    $start_time, $purpose, $long_description) = $event;
                ?>
                <div class="events">
                    <h2>
                        <a href="eventPage.html"></a><?= $purpose ?>
                    </h2>
                    <img src="images/background-header.jpg" alt="Protest image">
                    <p class="info">
                        Date: <?= $date ?>
                    </p>
                    <p class="info">
                       Location: <?= $city?>, <?= $state ?>
                    </p>
                    <p class="info">
                        Time: <?= $start_time ?>
                    </p>
                    <p>
                        <?= $long_description?>
                    </p>
                    <p>
                       Created by: <?= $name ?>
                    </p>
                </div>
                <?php
            }
        }
    }

    function insert_top() { ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Protest</title>
            <link href="protests.css" type="text/css" rel="stylesheet"/>
        </head>
        <body>
        <div id="nav-bar">
            <ul>
                <li><a href="">About</a></li>
                <li><a href="createProtest.html">Create A Protest</a></li>
                <li><a href="browse.html">Browse</a></li>
                <li><a href="">Home</a></li>
            </ul>
        </div>
        <header>
            <span>Make A <br> Difference</span>
            <div id="create-button">
                <p>
                    <a href="createProtest.html">Start Your Own Protest Here!</a>
                </p>
            </div>
        </header>

        <div id="event-div">
        <p id="upcoming">Upcoming Events</p>
        <?php
    }

    function insert_bottom() { ?>
        </div>
        </body>
        </html>
        <?php
    }