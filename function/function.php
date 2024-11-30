<?php

include("config.php");

function fnOutCardsUser(){
    global $connect;

    $sql = "SELECT `order`.`id` AS `oid`,`product`.`name` AS `pname`, `status`.`name` AS `sname`, `address`, `price` FROM `order` INNER JOIN `status` ON `order`.`id_status` = `status`.`id` INNER JOIN `product` ON `order`.`id_product` = `product`.`id` WHERE `id_user` = '{$_SESSION['id']}'";

    $result = $connect->query($sql);

    if($result->num_rows){
        $data = '<div class="cards my-4">';
        foreach($result as $item){
            $data .= sprintf('
            <div class="card my-3">
                <div class="card-body">
                    <h5 class="card-title">Заказ №%s</h5>
                    <p class="card-text">Статус: %s</p>
                    <p class="card-text">Товар: %s</p>
                    <p class="card-text">Адрес: %s</p>
                    <p class="card-text">Цена: %s рублей</p>
                </div>
            </div>', $item['oid'], $item['sname'], $item['pname'],  $item['address'], $item['price'] );
        }
        $data .= '</div>';
        return $data;
    }else{
        return '<h4 class="fs-3 text-center">Заказов не найдено</h4>';
    }
}

function fnOutCardsProduct(){
    global $connect;

    $sql = "SELECT * FROM `product`";

    $result = $connect->query($sql);

    if($result->num_rows){
        $data = '
        <div class="mb-3">
            <label for="product" class="form-label">Выберите товар</label>
            <select name="product" class="form-select" id="product">';
        foreach($result as $key => $item){
            if($key == 1){
                $data .= sprintf('
                <option value="%s" selected>%s (%s рублей)</option>',  
                $item['id'],$item['name'], $item['price']); 
            }else{
                $data .= sprintf('
                <option value="%s">%s (%s рублей)</option>',  
                $item['id'],$item['name'], $item['price']); 
            }
            
        }
        $data .= '</select></div>';
        return $data;
    }else{
        return '<h4 class="fs-3 text-center">Заказов не найдено</h4>';
    }
}

function fnOutCardsAdmin(){
    global $connect;

    $sql = "SELECT `full_name`, `login`, `order`.`id` AS `oid`,`product`.`name` AS `pname`, `status`.`name` AS `sname`, `status`.`code` AS `scode`,`address`, `count`, `price` FROM `order` INNER JOIN `status` ON `order`.`id_status` = `status`.`id` INNER JOIN `product` ON `order`.`id_product` = `product`.`id` INNER JOIN `user` ON `order`.`id_user` = `user`.`id`";

    $result = $connect->query($sql);

    if($result->num_rows){
        $data = '<div class="cards my-4">';
        foreach($result as $item){
            if($item['scode'] == "new"){
                $data .= sprintf('
                <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title">Заказ №%s</h5>
                        <p class="card-text">Статус: %s</p>
                        <p class="card-text">Заказчик: %s</p>
                        <p class="card-text">Email: %s</p>
                        <p class="card-text">Товар: %s</p>
                        <p class="card-text">Количество: %s</p>
                        <p class="card-text">Адрес: %s</p>
                        <p class="card-text">Цена: %s рублей</p>
                        <div class="buttons d-flex justify-content-between">
                            <a href="controllers/update-order.php?type=confirmed&id_order=%s" class="btn btn-outline-success">Подтвердить</a>
                            <a href="controllers/update-order.php?type=canceled&id_order=%s" class="btn btn-outline-danger">Отменить</a>
                        </div>
                    </div>
                </div>', $item['oid'], $item['sname'], $item['full_name'], $item['login'], $item['pname'], $item['count'], $item['address'], $item['price'] * $item['count'], $item['oid'], $item['oid']);
            }else{
                $data .= sprintf('
                <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title">Заказ №%s</h5>
                        <p class="card-text">Статус: %s</p>
                        <p class="card-text">Заказчик: %s</p>
                        <p class="card-text">Email: %s</p>
                        <p class="card-text">Товар: %s</p>
                        <p class="card-text">Количество: %s</p>
                        <p class="card-text">Адрес: %s</p>
                        <p class="card-text">Цена: %s рублей</p>
                    </div>
                </div>', $item['oid'], $item['sname'], $item['full_name'], $item['login'], $item['pname'], $item['count'], $item['address'], $item['price'] * $item['count']);
            }
            
        }
        $data .= '</div>';
        return $data;
    }else{
        return '<h4 class="fs-3 text-center">Заказов не найдено</h4>';
    }
}

?>