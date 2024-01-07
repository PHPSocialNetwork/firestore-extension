<?php

declare(strict_types=1);

namespace Phpfastcache;

use Phpfastcache\Extensions\Drivers\Firestore\{Config, Event, Driver, Item};

// Semver Compatibility until v10
class_alias(Config::class, Drivers\Firestore\Config::class);
class_alias(Driver::class, Drivers\Firestore\Driver::class);
class_alias(Event::class, Drivers\Firestore\Event::class);
class_alias(Item::class, Drivers\Firestore\Item::class);

ExtensionManager::registerExtension('Firestore', Driver::class);
