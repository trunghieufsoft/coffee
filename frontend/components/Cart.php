<?php 
namespace frontend\components;

use Yii;
/**
* 
*/
class Cart 
{
	public $cartstore;
	
	public function __construct()
	{
		$this->cartstore = Yii::$app->session['cart'];
		
	}

	public function add($data,$quantity)
	{
		if(isset($this->cartstore[$data->id])){
			
			$this->cartstore[$data->id]->quantity = $quantity + $this->cartstore[$data->id]->quantity;
			Yii::$app->session['cart'] = $this->cartstore;
		}
		else{
			$this->cartstore[$data->id] = $data;
			$this->cartstore[$data->id]->quantity = $quantity;			
		Yii::$app->session['cart'] = $this->cartstore;

		}
		
	}

	public function remove($data){
		unset($this->cartstore[$data->id]);
		Yii::$app->session['cart'] = $this->cartstore;
	}

	public function clear(){
		$this->cartstore=[];
		Yii::$app->session['cart'] = $this->cartstore;
		
	}

	public function update($data,$quantity){
		$this->cartstore[$data->id]->quantity = $quantity;			
		Yii::$app->session['cart'] = $this->cartstore;
	}

	public function getCost(){
		$cost = 0;
		if($this->cartstore){
			foreach ($this->cartstore as $item) {
				$cost += $item->quantity * $item->price; 
			}
		}
		return $cost;
	}

	public function getTotalItem(){
		$total = 0;
		if($this->cartstore){
			foreach ($this->cartstore as $item) {
				$total += $item->quantity; 
			}
		}
		return $total;
	}
}



 ?>

