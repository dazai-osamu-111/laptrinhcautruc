<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('orders/plugins/fontawesome/css/all.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     {{-- <link rel="stylesheet" href="a.css"> --}}
    <title>Order</title>
    <style>
        .wrapper {
    width: 1100px;
    margin-left: auto;
    margin-right: auto;
}

.shop {
    display: flex;
    justify-content:space-around;

}

.order-content {
    /* border: 2px solid black; */
    padding: 10px;
    margin-bottom: 20px;
}

.order-top {
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid rgb(200, 194, 194);
}

.shopname {
    margin-left: 10px;
}

.order-center {
    border-bottom: 1px solid rgb(200, 194, 194);
    padding: 10px 0px;

}

.product-order {
    display: flex;
    justify-content: space-between;
    /* padding: 10px 0px; */
}

.order-center-left {
    display: flex;
}

a {
    text-decoration: none;
    color: black;
}

a:hover {
    color: red;
}

.order-bottom {
    display: flex;
    justify-content: space-between;
    padding: 10px 0px;
}

.order-bottom-left {
    /* display: flex; */
    /* margin: 10px 0px 0px  10px; */
    margin-left: 20px;

}
.order-bottom-right {
    margin-right: 20px;
}

.btn {
    margin-right: 10px;
}

.info-product {
    margin-left: 10px;
    display: flex;
}
.amount-product{
     margin-left: 10px;
}
.menu-order {
    margin-top: 20px;
    /* width: 1100px; */
}

.menu-order ul li {

    display: inline;
    margin-right: 20px;
    padding: 10px;
    /* display: flex; */
    justify-content:space-between;

}

.active {
    color: red;
}
.list-order-info {
    border: 2px solid black;
}
.list-order .list-order-info .order-content:hover {
    background-color: blanchedalmond;


}

.input-search {
    padding-bottom: 10px;
    margin-bottom: 10px;
    width: 800px;
    background-color: rgba(231, 231, 231, 0.782);
}

.order-list-top{
    display: flex;
    justify-content:space-between;
    border: 1px black;
    background-color: #eead8244;
}
.order-list-top-title {
    border: 1px black;
    font-family: -webkit-body;
    font-weight: 900;
    font-size: larger;
}
.info-product-item{
    display: flex;
    justify-content: space-between;
}

.list-order-count-donhang{
    font-family: Arial, Helvetica, sans-serif;
    font-size: larger;
    font-weight: 700;
}
.search-order{
    display: flex;
    justify-self:center;

}
.title1 {
    margin-left: 15px;
    flex:3;
}
.title2{
    flex:1;
}
.order-status p {
    margin-right: 66px;
}
.order-center-right a {
    margin-left: 5px;
}

    </style>
</head>

<body>
    <?php
    print(' <div style="margin:10px" class="btn btn-info" id="nguoi-dung"> Userid : '. $output[0]['userId'] .'</div>'); ?>
    <div class="wrapper">

        <div class="menu-order">
            <ul type="none">
                <li><a href="/listOrderByUser/21" class="active">T???t c???</a></li>
                <li><a href="/getOrderByState/th??nh c??ng">Th??nh c??ng</a></li>
                <li><a href="/getOrderByState/ch??? l???y h??ng/">Ch??? l???y h??ng</a></li>
                <li><a href="/getOrderByState/??ang giao">??ang giao</a></li>
                <li><a href="/getOrderByState/???? giao">???? giao</a></li>
                <li><a href="/getOrderByState/???? h???y">???? h???y</a></li>
                <li><a href="/getOrderByState/tr??? h??ng-ho??n ti???n">Tr??? h??ng/ho??n ti???n</a></li>
            </ul>
        </div>
        <form action="">
            <div class="search-order">
                <div>
                    <input class="input-search" name = "orderId" type="text" placeholder="T??m ki???m theo m?? ????n h??ng ho???c T??n S???n ph???m">
                </div>
                <div class="order-bottom-left">
                    <input type="submit" class="btn btn-success" value="T??m Ki???m">
                    {{-- <div><a href="/getOrderById/1" class="btn btn-success">T??m Ki???m</a></div> --}}
                </div>
            </div>
        </form>


        <div class="order">
            <div class="list-order">
                <div style="margin-bottom: 20px" class="list-order-count-donhang">
                                        <?php
                                    $message = Session::get('message');
                                    if($message){
                                        echo '<span style="margin-left:20px" class= "text-danger">',$message,'</span>';
                                        Session::put('message',null);
                                    }
                                    ?>
                                    </div>

                <div class="list-order-info">
                    <div class="order-list-top">
                        <div class="order-list-top-title title1 ">S???n Ph???m</div>
                        <div class="order-list-top-title title2">Gi??</div>
                        <div class="order-list-top-title title2">Tr???ng Th??i</div>
                        <div class="order-list-top-title title2">Thao t??c</div>
                    </div>
                    <div class="list" id="list">

                    <div>
                        <?php
                        foreach($output as $order){
                            print('
                            </div>
                            <div class="order-content">
                        <div class="order-top">
                            <div class="shop">
                                <div class="avt-shop"><img src="https://i.pinimg.com/736x/ce/56/99/ce5699233cbc0f142250b520d967dff7.jpg" alt="" width="30px">
                                </div>
                                <div class="shopname"></div>
                            </div>
                            <div class="order-status">
                                <p><span><i class="fa-solid fa-truck"></i></span>ma don hang:'  . $order['orderId'] . '</p>
                            </div>
                        </div>

                        ');
                            foreach($order['products'] as $product){
                                print('
                                <div class="order-center">
                            <div class="product-order">
                                <div class="order-center-left title1">
                                    <div class="img-product">
                                        <a href="#"><img src="' . $product['img'] . '" alt="" width="60px" height="60px"></a>
                                    </div>
                                    <div class="info-product">
                                        <div class="info-product-item">
                                            <div class="name-product">
                                                <a href="#">
                                                    <p>' . $product['productName']. '</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="amount-product">
                                            <p>x' .$product['quantity'] . '</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-center-right title2">
                                    <p>' .$product['price']. '</p>
                                </div>
                                <div class="order-center-right  title2">
                                    <p>' .$product['productStatus'] . '</p>
                                </div></p>
                                <div class="order-center-right title2">
                                    <a href="#">Chi ti???t ????n h??ng</a>

                                </div>
                                 </div>



                            </div>');

                            }

                            print('
                        <div class="order-bottom">
                            <div class="order-bottom-left" style="display: inline-flex">
                                <div><a href="https://customer-service-60a44.web.app/home/order-detail?orderId=' . $order['orderId']. '" class="btn btn-success">????nh gi?? </a></div>

                            </div>
                            <div class="order-bottom-right">
                                <p><span><i class="fa-sharp fa-solid fa-sack-dollar"></i></span> T???ng s??? ti???n :
                                    <span>' .$order['total_price'] .'</span>
                                </p>
                            </div>
                        </div>
                            ');
                        }
                        ?>
                    </div>




</body>

</html>
