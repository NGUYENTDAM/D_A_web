<?php
    class Product{
        var $id;
        var $num;
    }

    class ShoppingCart{
        var $listProduct;

        public function __construct(){
            $this->listProduct = array();
        }

        public function update($id, $newnum){
            for($i = 0; $i < count($this->listProduct); $i++){
                if($this->listProduct[$i]->id == $id){
                    $this->listProduct[$i]->num = $newnum;
                }
            }
        }

        public function delete($id){
            for($i = 0; $i < count($this->listProduct); $i++){
                if($this->listProduct[$i]->id == $id){
                   array_splice($this->listProduct, $i, 1);
                }
            }
        }

        public function add($id){
            if(count($this->listProduct) == 0){
                //Chua co san pham trong gio hang
                $p = new Product();
                $p->id = $id;
                $p->num = 1;

                $this->listProduct[] = $p;
            }
            else{
                //Neu da co sp trong gio hang
                //Ktra xem sp do da ton tai trong gio hang hay chua
                //Neu chua thi them, neu co roi thi cap nhat
                for($i = 0; $i < count($this->listProduct); $i++){
                    if($this->listProduct[$i]->id = $id)
                        break;
                }

                if($i == count($this->listProduct)){
                    $p = new Product();
                    $p->id = $id;
                    $p->num = 1;

                    $this->listProduct[] = $p;
                }
                else{
                    $this->listProduct[$i]->num++;
                }
            }
        }
    }
?>