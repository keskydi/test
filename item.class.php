<?php 

define("WIKI_PATH","http://oldschoolrunescape.wikia.com/wiki/");

class item { 

    public $id,$name,$icon,$description,$price,$link; 

    function setId($id){
        $this->id = $id;
    }
    //http://oldschoolrunescape.wikia.com/wiki/
    
    function getItem($id) { 
    
    $path = "http://services.runescape.com/m=itemdb_oldschool/api/catalogue/detail.json?item=" . $id;


    $content = file_get_contents($path);
    $content = json_decode($content,true);

    $info = $content['item'];

    $this->name = $info['name'];
    $this->icon = $info['icon_large'];
    $this->description = $info['description'];
    $this->price = $info['current']['price'];
    $this->link = WIKI_PATH . str_replace(' ', '_', $info['name']);
    } 

    
} 


?> 