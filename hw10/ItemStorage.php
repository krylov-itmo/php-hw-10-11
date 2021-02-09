<?php


class ItemStorage{
    private $items = [];

    public function add_item(Item $item){
        $this->items[$item->getId()] = $item;
    }


    public function get_by_id(string $id){
        return $this->items[$id];
    }

    public function get_by_title(string $title){
            foreach ($this->items as $item) {
                if ($item->getTitle() === $title) {
                    return $item; 
                }
            }
    }

    public function get_by_price(int $price_from, int $price_to){
      $result_items = [];
      foreach ($this->items as $item) {
          if ($item->getPrice() >= $price_from && $item->getPrice() <= $price_to) {
            $result_items[] = $item;   
          }
      }
      return $result_items;


    }

    public function get_by_material(...$materials){
        $result_items = [];
        foreach ($this->items as $item) {
            if (in_array($item->getMaterial(), $materials)) {
              $result_items[] = $item;   
            }
        }
        return $result_items;
        
    }

    public function get_by_price_and_material(int $price_to, string $material){
        $result_items = [];
        foreach ($this->items as $item) {
            if ($price_to <=$item->getPrice() && $material === $item->getMaterial()) {
              $result_items[] = $item;   
            }
        }
        return $result_items;
    }
}
