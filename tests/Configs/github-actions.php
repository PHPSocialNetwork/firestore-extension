<?php

use Phpfastcache\Drivers\Firestore\Config as FirestoreConfig;

return (new FirestoreConfig())
    ->setCollectionName('phpfastcache');
