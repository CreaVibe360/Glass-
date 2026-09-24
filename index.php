<?php
require __DIR__.'/src/Config.php';
require __DIR__.'/src/Http.php';
require __DIR__.'/src/Store.php';
require __DIR__.'/src/Security.php';
require __DIR__.'/src/Users.php';
require __DIR__.'/src/Messages.php';
require __DIR__.'/src/Media.php';
require __DIR__.'/src/Presence.php';
require __DIR__.'/src/Diagnostics.php';
require __DIR__.'/src/Router.php';
Router::run();
