<?php
/**
 * Set the routes the app responds to
 * @link http://www.slimframework.com/docs/objects/router.html
 * @author Digital D.Lo <WebDevDLo@gmail.com>
 */

$app->get('/', '\ToDo\Controllers\MainSiteController:showHome');
