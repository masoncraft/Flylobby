<?php

namespace Mason\HFly;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\plugin\PluginBase;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        $name = $player->getName();
        $player->setAllowFlight(false);
        if ($player->getLevel()->getName() == 'lobby') {

            if($player->hasPermission("DarkSide.h.fly")) {
                $player->setAllowFlight(true);
				$player->setFlying(true);
            }
        }
    }
}