<?php

namespace BlockHead;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\utils\TextFormat;
use pocketmine\item\Item;
use pocketmine\block\Block;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getLogger()->info(TextFormat::GREEN."BlockHead - Enabled");
}

public function onCommand(CommandSender $sender, Command $command, $label, array $args){
  switch($command->getName()){
			case "head":
			  if($sender instanceof Player){
			    if(count($args == 2)){
			      $block = ($args[0]);
			        $sender->getInventory()->setHelmet(Block::get($block));
			          }else{
			            $sender->sendMessage(TextFormat::RED."Usage: /head <block-id>");
			            }
			            }else{
			              return false;
			              }
			              }
			              }
			              }
			      
