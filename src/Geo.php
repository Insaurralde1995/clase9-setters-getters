<?php

namespace App;

class Geo 

{
    private $lat;
    private $lng;


public function setLat ($lat){
    $this->lat=$lat;
    return $this;
}
public function getLag (){
    return $this->lat;

}
public function setIng($ing){
    $this->ing=$ing;
    return $this;
}
public function getIng(){
    return $this->ing;
}
}