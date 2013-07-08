<?php require_once 'php/auth.php'; ?>

<!doctype html>
<html>

    <head>

        <title>Tasks API Sample</title>

        <script src="js/ajax.js" type="text/javascript"></script>

        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Droid+Serif|Droid+Sans:regular,bold' />

        <link rel='stylesheet' href='css/style.css' />

    </head>

    <body>

        <div id='container'>

            <div id='top'><h1>My Tasks</h1></div>

            <div id='main'>

                <?php
                    $lists = $tasksService->tasklists->listTasklists();

                    foreach ($lists['items'] as $list) {
                        //print "<h3>{$list['title']}</h3>";
                        echo "<a href=''>" . $list['title'] . "</a><br/>";

                        $tasks = $tasksService->tasks->listTasks($list['id']);
                        //eval( '(' + JSON_response + ')' );
                        //print_r($tasks);

                        foreach ($tasks as $task) 
                        {
                            //echo "<a href=''>" . $task['title'] . "</a><br/>";
                            print_r( $task[0] );
                        }

                        echo "<br/>";
                        
                    }
                ?>

            </div>

        </div>

    </body>
</html>

<?php $_SESSION['access_token'] = $client->getAccessToken(); ?>