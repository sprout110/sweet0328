<?php
class JsonDataAccessObject {
    private $json_filepath = "";
    private $items;

    public function __construct($key, $jsonfile) {
        $this->json_filepath  = $jsonfile;
        $this->items = json_decode(file_get_contents($this->json_filepath), true);
    }

    public function __destruct() {

    }

    public function getItems(){
        return $this->items; 
    }

    public function showFilePath()
    {
      echo $this->json_filepath;
    }

	public function showItems()
	{
		echo '<pre>'; print_r($this->items); echo '</pre>';
	}
	
	public function add($itemId, $item)
	{
		$this->items[$itemId] = $item;
	}
	
	public function save()
	{
		file_put_contents($this->json_filepath, json_encode($this->items, JSON_UNESCAPED_UNICODE));
	}
}
?>
