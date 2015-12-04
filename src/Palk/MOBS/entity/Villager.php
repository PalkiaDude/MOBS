namespace Palk\MOBS\entity;
use pocketmine\Player;
use pocketmine\item\Item;
use pocketmine\event\entity\EntityDamageByEntityEvent;
class Villager extends Animal{
const NETWORK_ID = 15;
public $width = 0.6
public $length = 0.6;
public $height = 1.8;
public function getName(){
return "Villager";
}
