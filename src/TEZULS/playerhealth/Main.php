<?php

/*
© copryright TEZULS 2020

FR: Je réserve tout droit de rendre le plugin publique même après achat ou donation si je n'apparaîs plus comme Author de se plugin, ou/et si mon code est réutilisé sans me créditer.

EN: I reserve all rights to make the plugin public even after purchase or donation if I no longer appear as the Author of this plugin, or/and if my code is reused without crediting me.
*/

namespace TEZULS\playerhealth;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;

// utile plugin

use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityRegainHealthEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerRespawnEvent;


class Main extends PluginBase implements Listener{
	
	public function onEnable(){
    
	$this->getLogger()->info("§aPlayerHealth loaded by TEZULS");
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onDisable(){

    }

    public function OnJoin(PlayerJoinEvent $event){

    	$player = $event->getPlayer();

    	if($player->getHealth() == 20){
	
    	$player->setScoreTag("§c■■■■■■■■■■");

    	}
    	if($player->getHealth() == 19){

    	$player->setScoreTag("§c■■■■■■■■■■");

    	}

    	if($player->getHealth() == 18){

    	$player->setScoreTag("§c■■■■■■■■■§7■");
    	
    	}
    	if($player->getHealth() == 17){

    	$player->setScoreTag("§c■■■■■■■■■§7■");
    	
    	}

    	if($player->getHealth() == 16){

    	$player->setScoreTag("§c■■■■■■■■§7■■");
    	
    	}
    	if($player->getHealth() == 15){

    	$player->setScoreTag("§c■■■■■■■■§7■■");
    	
    	}

    	if($player->getHealth() == 14){

    	$player->setScoreTag("§c■■■■■■■§7■■■");
    	
    	}
    	if($player->getHealth() == 13){

    	$player->setScoreTag("§c■■■■■■■§7■■■");
    	
    	}

    	if($player->getHealth() == 12){

    	$player->setScoreTag("§c■■■■■■§7■■■■");
    	
    	}
    	if($player->getHealth() == 11){

    	$player->setScoreTag("§c■■■■■■§7■■■■");
    	
    	}

    	if($player->getHealth() == 10){

    	$player->setScoreTag("§c■■■■■§7■■■■■");
    	
    	}
    	if($player->getHealth() == 9){

    	$player->setScoreTag("§c■■■■■§7■■■■■");
    	
    	}

    	if($player->getHealth() == 8){

    	$player->setScoreTag("§c■■■■§7■■■■■■");
    	
    	}
    	if($player->getHealth() == 7){

    	$player->setScoreTag("§c■■■■§7■■■■■■");
    	
    	}

    	if($player->getHealth() == 6){

    	$player->setScoreTag("§c■■■§7■■■■■■■");
    	
    	}
    	if($player->getHealth() == 5){

    	$player->setScoreTag("§c■■■§7■■■■■■■");
    	
    	}

    	if($player->getHealth() == 4){

    	$player->setScoreTag("§c■■§7■■■■■■■■");
    	
    	}
    	if($player->getHealth() == 3){

    	$player->setScoreTag("§c■■§7■■■■■■■■");
    	
    	}

    	if($player->getHealth() == 2){

    	$player->setScoreTag("§c■§7■■■■■■■■■");
    	
    	}
    	if($player->getHealth() == 1){

    	$player->setScoreTag("§c■§7■■■■■■■■■");
    	
    	}
    }


    public function EntityDamageEvent(EntityDamageEvent $event){

    	$player = $event->getEntity();


    	if($player instanceof Player){

    		if($player->getHealth() == 20){
	
    		$player->setScoreTag("§c■■■■■■■■■■");
	
    		}

    		if($player->getHealth() == 19){
	
    		$player->setScoreTag("§c■■■■■■■■■■");
	
    		}
	
    		if($player->getHealth() == 18){
	
    		$player->setScoreTag("§c■■■■■■■■■§7■");
    		
    		}

    		if($player->getHealth() == 17){
	
    		$player->setScoreTag("§c■■■■■■■■■§7■");
    		
    		}
	
    		if($player->getHealth() == 16){
	
    		$player->setScoreTag("§c■■■■■■■■§7■■");
    		
    		}

    		if($player->getHealth() == 15){
	
    		$player->setScoreTag("§c■■■■■■■■§7■■");
    		
    		}
	
    		if($player->getHealth() == 14){
	
    		$player->setScoreTag("§c■■■■■■■§7■■■");
    		
    		}

    		if($player->getHealth() == 13){
	
    		$player->setScoreTag("§c■■■■■■■§7■■■");
    		
    		}
	
    		if($player->getHealth() == 12){
	
    		$player->setScoreTag("§c■■■■■■§7■■■■");
    		
    		}

    		if($player->getHealth() == 11){
	
    		$player->setScoreTag("§c■■■■■■§7■■■■");
    		
    		}
	
    		if($player->getHealth() == 10){
	
    		$player->setScoreTag("§c■■■■■§7■■■■■");
    		
    		}

    		if($player->getHealth() == 9){
	
    		$player->setScoreTag("§c■■■■■§7■■■■■");
    		
    		}
	
    		if($player->getHealth() == 8){
	
    		$player->setScoreTag("§c■■■■§7■■■■■■");
    		
    		}

    		if($player->getHealth() == 7){
	
    		$player->setScoreTag("§c■■■■§7■■■■■■");
    		
    		}
	
    		if($player->getHealth() == 6){
	
    		$player->setScoreTag("§c■■■§7■■■■■■■");
    		
    		}

    		if($player->getHealth() == 5){
	
    		$player->setScoreTag("§c■■■§7■■■■■■■");
    		
    		}
	
    		if($player->getHealth() == 4){
	
    		$player->setScoreTag("§c■■§7■■■■■■■■");
    		
    		}

    		if($player->getHealth() == 3){
	
    		$player->setScoreTag("§c■■§7■■■■■■■■");
    		
    		}
	
    		if($player->getHealth() == 2){
	
    		$player->setScoreTag("§c■§7■■■■■■■■■");
    		
    		}

    		if($player->getHealth() == 1){
	
    		$player->setScoreTag("§c■§7■■■■■■■■■");
    		
    		}
    	}
    }

    public function onRegainHealth(EntityRegainHealthEvent $event){

		$player = $event->getEntity();

		if($player instanceof Player){

    		if($player->getHealth() == 20){
	
    		$player->setScoreTag("§c■■■■■■■■■■");
	
    		}

    		if($player->getHealth() == 19){
	
    		$player->setScoreTag("§c■■■■■■■■■■");
	
    		}
	
    		if($player->getHealth() == 18){
	
    		$player->setScoreTag("§c■■■■■■■■■§7■");
    		
    		}

    		if($player->getHealth() == 17){
	
    		$player->setScoreTag("§c■■■■■■■■■§7■");
    		
    		}
	
    		if($player->getHealth() == 16){
	
    		$player->setScoreTag("§c■■■■■■■■§7■■");
    		
    		}

    		if($player->getHealth() == 15){
	
    		$player->setScoreTag("§c■■■■■■■■§7■■");
    		
    		}
	
    		if($player->getHealth() == 14){
	
    		$player->setScoreTag("§c■■■■■■■§7■■■");
    		
    		}

    		if($player->getHealth() == 13){
	
    		$player->setScoreTag("§c■■■■■■■§7■■■");
    		
    		}
	
    		if($player->getHealth() == 12){
	
    		$player->setScoreTag("§c■■■■■■§7■■■■");
    		
    		}

    		if($player->getHealth() == 11){
	
    		$player->setScoreTag("§c■■■■■■§7■■■■");
    		
    		}
	
    		if($player->getHealth() == 10){
	
    		$player->setScoreTag("§c■■■■■§7■■■■■");
    		
    		}

    		if($player->getHealth() == 9){
	
    		$player->setScoreTag("§c■■■■■§7■■■■■");
    		
    		}
	
    		if($player->getHealth() == 8){
	
    		$player->setScoreTag("§c■■■■§7■■■■■■");
    		
    		}

    		if($player->getHealth() == 7){
	
    		$player->setScoreTag("§c■■■■§7■■■■■■");
    		
    		}
	
    		if($player->getHealth() == 6){
	
    		$player->setScoreTag("§c■■■§7■■■■■■■");
    		
    		}

    		if($player->getHealth() == 5){
	
    		$player->setScoreTag("§c■■■§7■■■■■■■");
    		
    		}
	
    		if($player->getHealth() == 4){
	
    		$player->setScoreTag("§c■■§7■■■■■■■■");
    		
    		}

    		if($player->getHealth() == 3){
	
    		$player->setScoreTag("§c■■§7■■■■■■■■");
    		
    		}
	
    		if($player->getHealth() == 2){
	
    		$player->setScoreTag("§c■§7■■■■■■■■■");
    		
    		}

    		if($player->getHealth() == 1){
	
    		$player->setScoreTag("§c■§7■■■■■■■■■");
    		
    		}
    	}  	
    }

    public function PlayerRespawnEvent(PlayerRespawnEvent $event){

    	$player = $event->getPlayer();

    	$player->setScoreTag("§c■■■■■■■■■■");
    }
}
