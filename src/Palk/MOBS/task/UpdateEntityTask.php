
namespace Palk\MOBS\task;
use Palk\MOBS\Mobs;
use pocketmine\scheduler\PluginTask;
class UpdateEntityTask extends PluginTask{
    public function onRun($currentTicks){
        foreach(MOBS::getEntities() as $entity){
            if($entity->isCreated()) $entity->updateTick();
        }
    }
}
