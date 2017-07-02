<?php

namespace SuperTransfer;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
  
  public function onEnable(){
     $this->saveDefaultConfig();
  }
  
}
