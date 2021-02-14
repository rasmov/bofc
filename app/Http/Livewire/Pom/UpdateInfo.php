<?php

namespace App\Http\Livewire\Pom;

use App\Models\Pom;
use Livewire\Component;

class UpdateInfo extends Component
{
	public $pom, $name, $color, $height, $weight, $teeth, 
	$birthday, $is_for_sale, $is_puppy, $father, 
	$mother, $grandfather, $grandmother, $breeder, 
	$owner, $titles, $gender, $fontanel;
	
	public function mount($id)
	{
		$this->pom = Pom::find($id);
	}
	
	public function updateInfo($string)
	{
		$this->pom->$string = $this->$string;
		$this->pom->update();
	}

	public function toggleParam($param)
	{
		$current = $this->pom->$param;
		$current = !$current;
		$this->pom->$param = $current ? 1 : 0;
		$this->pom->update();
	}
	
    public function render()
    {
        return view('livewire.pom.update-info');
    }
}