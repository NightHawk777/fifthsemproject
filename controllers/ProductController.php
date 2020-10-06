<?php 
    class ProductController extends BaseController
    {
        public static function showItem($route)
        {
            $products = ProductModel::listProducts();
            $data = ['products'=>$products];
            self::createView($route, $data);
        }
        public static function searchItem($search_query)
        {
            if (isset($search_query['query'])) {
                $result = ProductModel::getProduct($search_query['query']);
               // var_dump($result);
                $data = ['products'=>$result];
                self::createView('list_products', $data);
             
            }
        }

        public static function addCart($dataGet)
        {
            //var_dump($dataGet);

            if(array_key_exists('action',$dataGet) && $dataGet['action']=='add' )
            {
               $_SESSION['shopping_cart'][] = $dataGet['id'];
               ProductModel::storeCart($_SESSION['logged_user'],$dataGet['id']);
            }
            
        }
        public static function showProduct($route)
        {
            self::createView($route);
        }
    }
?>