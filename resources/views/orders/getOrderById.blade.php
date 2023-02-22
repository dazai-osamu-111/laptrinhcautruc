<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/front-end/plugins/fontawesome/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <style>
        .wrapper {
            width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .shop {
            display: flex;

        }

        .order-content {
            border: 2px solid black;
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
        .product-order{
            display: flex;
            justify-content: space-between;
            padding: 10px 0px;
        }
        .order-center-left {
            display: flex;
        }

        a {
            text-decoration: none;
            color: black;
        }
        a:hover{
            color: red;
        }
        .order-bottom {
            display: flex;
            justify-content: space-between;
            padding: 10px 0px;
        }

        .order-bottom-left {
            display: flex;

        }

        .btn {
            margin-right: 10px;
        }

        .info-product {
            margin-left: 10px;
        }
        .menu-order{
            margin-top: 20px;
        }
        .menu-order ul li{
            display: inline;
            margin-right: 20px;
            padding: 10px;
        }
        a:active {
            color: red;

        }
        .active{
            color: red;
        }
        .list-order .list-order-info:hover .order-content{
            background-color: blanchedalmond;
        }
        .input-search{
            padding: 10px;
            margin-bottom: 10px;
            width: 800px;
            background-color: rgba(231, 231, 231, 0.782);
        }
    </style>
    <div class="wrapper">
        <div class="menu-order">
            <ul type="none">
                <li><a href="listOrder" class="active">Tất cả</a></li>
                <li><a href="cholayhang">Chờ lấy hàng</a></li>
                <li><a href="danggiao">Đang giao</a></li>
                <li><a href="dagiao">Đã giao</a></li>
                <li><a href="dahuy">Đã hủy</a></li>
                <li><a href="trahang">Trả hàng</a></li>
            </ul>
        </div>
        <div class="search-order">
            <form action="/listOrder/{id}" method = "get">
                <input  class="input-search" type="text" placeholder="Tìm kiếm theo ID đơn hàng hoặc Tên Sản phẩm" name = "id">
                <input type="submit" value = "Tìm kiếm">
            </form>
        </div>
        <div class="order">
            <div class="list-order">
                <ul class="list-group">
                    @foreach($orders as $order)
                        <li style = "list-style-type: none;">
                        <div class="list-order-info">
                            <div class="order-content">
                                <div class="order-top">
                                    <div class="shop">
                                        <div class="avt-shop"><img src="/img/O1CN01CkHsHe1GczqFAjRmF_!!2206710620644-0-cib.jpg"
                                                alt="" width="30px"></div>
                                        <div class="shopname">Tên shop</div>
                                    </div>
                                    <div class="order status">
                                        <p><span><i class="fa-solid fa-truck"></i></span></p>
                                    </div>
                                </div>
                                <div class="order-center">
                                    <div class="product-order">
                                        <div class="order-center-left">
                                            <div class="img-product">
                                                <a href="#"><img src="img/sp1.jfif" alt="" width="60px" height="60px"></a>
                                            </div>
                                            <div class="info-product">
                                                <div>
                                                    <div class="name-product">
                                                        <a href="#">
                                                            <p>{{$order->product_name}}</p>
                                                        </a>
                                                    </div>
                                                    <div class="amount-product">
                                                        <p>{{$order->qty}}</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="order-center-right">
                                            <p>{{$order->price}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-bottom">
                                    <div class="order-bottom-left">
                                        <div><a href="#" class="btn btn-success">Đánh giá</a></div>
                                        <div><a href="#" class="btn btn-outline-secondary">Liên hệ </a></div>
                                        <div><a href="#" class="btn btn-outline-secondary">Mua lại</a></div>
                                    </div>
                                    <div class="order-bottom-right">
                                        <p><span><i class="fa-sharp fa-solid fa-sack-dollar"></i></span> Tổng số tiền :
                                            <span>{{$order->amount}}</span></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>

</body>

</html>
