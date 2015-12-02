namespace Palk\MOBS\entity;
use pocketmine\entity\Rideable;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\event\entity\EntityDamageByEntityEvent;
class Wold extends Animal implements Tameable{
    const NETWORK_ID = 14;
    public $width = 1.6;
    public $length = 0.8;
    public $height = 1.12;
    public function getName(){
        return "Wolf";
    }
    public function initEntity(){
        $this->setMaxHealth(14);
        if(isset($this->namedtag->Health)){
            $this->setHealth((int) $this->namedtag["Health"]);
        }else{
            $this->setHealth($this->getMaxHealth());
        }
        parent::initEntity();
        $this->created = true;
    }
    public function targetOption(Player $player, $distance){
        return $player->spawned && $player->isAlive() && !$player->closed && $player->getInventory()->getItemInHand()->getId() == Item::BONE && $distance <= 49;
    }
        return [];
    }
}
