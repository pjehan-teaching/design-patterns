<?php

spl_autoload_register(static fn($class_name) => include $class_name . '.php');

$notif1 = new Notification("Une ancienne notification déjà vue", new DateTime("2021-10-05 15:25:35"), true);
$notif2 = new Notification("Une ancienne notification jamais vue", new DateTime("2021-10-06 18:34:16"));
$notif3 = new Notification("Une nouvelle notification", new DateTime());

$aggregate = new NotificationAggregate([$notif1, $notif2, $notif3]);
$iterator = $aggregate->getIterator();

while ($iterator->valid()) {
    echo $iterator->current()->getMessage() . "<br>";
    $iterator->next();
}
$iterator->rewind();

echo "<hr>";

$aggregate->removeAlreadySeen();

foreach ($iterator as $notification) {
    echo $notification->getMessage() . "<br>";
}