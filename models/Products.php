<?php

namespace app\models;
use yii\db\ActiveRecord;

class Products extends ActiveRecord{

private $name;
private $price;
private $description;

public function rules(){
    return [
        [['name','price','description'] , 'required']
    ];
}


}



?>