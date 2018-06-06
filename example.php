class Slime{
 public $type='スライム’;
 public $hp='10';
 public $power='3';
 
 function attack($character_name){
  print $this->type . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた' . PHP_EOL;
  }
  }