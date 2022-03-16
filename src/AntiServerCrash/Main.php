<?php

declare(strict_types=1);

namespace AntiServerCrash;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\event\ServerCrashEvent;

class Main extends PluginBase implements Listener
{
    public function onEnable(): void
    {
        $this->getLogger()->info(TextFormat::GREEN."Enabled, Now your server won't crash!");
        exit();
    }
    public function onDisable(): void
    {
        $this->getLogger()->info(TextFormat::RED."Disabled, Now your server will crash!");
    }
    public function onCrash(ServerCrashEvent $event)
    {
        $event->cancel();
    }
}