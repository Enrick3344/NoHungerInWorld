<?php

namespace NoHungerInWorld;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerExhaustEvent;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener {

  public function onEnable(){
      $this->getServer()->getPluginManager()->registerEvents($this,$this);
      $this->getLogger()->info(TextFormat::AQUA . "NoHungerInWorld Enabled.");;
  }
  
  public function onDisable(){
      $this->getLogger()->info(TextFormat::AQUA . "NoHungerInWorld Disabled.")
  }
  
  public function onExhaust(PlayerExhaustEvent $event){
      $event->setCancelled(true);
  }
}
