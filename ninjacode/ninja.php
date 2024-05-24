<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
 
<p>
<?php
// クラスを定義する
class NINJA {
  public $title;
  public $sub_title;

  public function__construct(string $title,string $sub_title){
    $this->title = $title;
    $this->sub_title = $sub_title;
  }
  public function render(){
    echo $this->title.'今から'.$this->sub_title;
  }

}

$ninja=new NINJA('PHPの問題集','スタート！');
$ninja->render();

?>
</p>
</body>
</html>