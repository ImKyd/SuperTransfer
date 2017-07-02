<?php

namespace SuperTransfer;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;

class Main extends PluginBase{
  
  public function onEnable(){
     $this->saveDefaultConfig();
  }
  
  public function transfer($server, Player $p){
    $cfg = $this->getConfig();
    $servers = $cfg->get("Servers");
    if(empty($server[$servers])){
      $p->sendMessage("§cCould not find server $server");
    }else{
      $a = array_search($server, $servers);
      if($a !== null){
        $p->transfer($servers[$server], 19132); //TODO search port by Connector
      }
  }
}
