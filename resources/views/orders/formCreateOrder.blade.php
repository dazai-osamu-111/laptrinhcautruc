<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/front-end/plugins/fontawesome/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>new order</title>
</head>

<body>
    <style>
        .container {
            width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .delivery-content-top-left {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .delivery-content {
            display: flex;
        }

        .delivery-content-right {
            background-color: rgb(240, 240, 240);
            width: 30%;
            margin-left: 20px;
            padding: 10px;
        }

        input {
            margin-bottom: 10px;
            padding: 10px;
        }

        .name-phone {
            display: flex;
            justify-content: space-between;
            width: auto;
        }

        .name input {
            width: 350px;
        }

        .phone input {
            width: 300px;
        }

        .adress input {
            width: 100%;
        }

        .email input {
            width: 100%;
        }

        .delivery-content-left-phuongthucgiaohang input {
            width: 100%;
        }

        .delivery-content-left-ghichu input {
            width: 100%;
        }

        .order-center {
            margin-top: 20px;
            margin-bottom: 20px;
            border-top: 1px solid rgb(129, 134, 136);
            padding: 10px;
            border-bottom: 1px solid rgb(129, 134, 136);
        }

        .product-order {
            display: flex;
            margin-top: 10px;
            justify-content: space-between;
        }

        .order-center-left {
            display: flex;
        }

        .img-product {
            margin-right: 10px;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .voucher {
            margin-bottom: 20px;
        }

        .voucher input {
            width: 100%;
            background-color: rgb(230, 234, 237);
        }

        .order-bottom {
            border-bottom: 1px solid rgb(129, 134, 136);
            padding-bottom: 10px;
        }

        .total-money {
            margin-top: 20px;
            font-weight: bold;
        }

        .flex {
            display: flex;
            justify-content: space-between;
        }

        .adress {
            display: flex;
            justify-content: space-between;
        }

        .form-select {
            width: 210px;
        }
    </style>
    <section class="delivery">
        <div class="container">
            <div class="delivery-content">
                <div class="delivery-content-left ">
                    <div class="delivery-content-top-left">
                        <div class="delivery-content-left-thongtinkhachhang">
                            Th??ng tin kh??ch h??ng
                        </div>
                        <div class="delivery-content-left-login" id = "userId" value = "{{$user['id']}}">
                            <p >UserId:  {{$user['id']}}</p>
                        </div>
                    </div>
                    <div class="delivery-content-left-email">
                        <div class="email"><input type="email" name="email" value="{{ $user['email'] }}"></div>
                        <div>

                            <div>
                                <input type="checkbox" name="luachon">
                                <label>I accept to receive shop updates, promotions and other marketing information from
                                    SHOP</label>
                            </div>
                        </div>
                    </div>
                    <div class="delivery-content-left-chitietgiaohang">
                        <div>
                            <div class="name-phone">
                                <div class="name"><input type="text" name="name" id=""
                                        value="{{ $user['name'] }}"></div>
                                <div class="phone"><input type="tel" name="phone" id=""
                                        value="{{ $user['phoneNumber'] }}"> </div>

                            </div>
                            <div class="adress">
                                <input type="text" name="adress" placeholder="?????a ch???">

                            </div>
                            <div class="adress">

                                <div>
                                    <select class="form-select form-select-lg mb-3 " id="city"
                                        aria-label=".form-select-sm">
                                        <option value="" selected>Ch???n t???nh th??nh</option>
                                    </select>
                                </div>

                                <div>
                                    <select class="form-select form-select-lg mb-3 " id="district"
                                        aria-label=".form-select-sm">
                                        <option value="" selected>Ch???n qu???n huy???n</option>
                                    </select>
                                </div>
                                <div>
                                    <select class="form-select form-select-lg " id="ward"
                                        aria-label=".form-select-sm">
                                        <option value="" selected>Ch???n ph?????ng x??</option>
                                    </select>
                                </div>


                            </div>


                            <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
                            <script>
                                var citis = document.getElementById("city");
                                var districts = document.getElementById("district");
                                var wards = document.getElementById("ward");
                                var provincceId;
                                var Parameter = {
                                    url: "https://online-gateway.ghn.vn/shiip/public-api/master-data/province",
                                    method: "GET",
                                    headers: {
                                        'token': '11802752-8ab4-11ed-b190-ea4934f9883e'
                                    },
                                    responseType: "application/json",
                                };
                                var promise = axios(Parameter);
                                promise.then(function(result) {
                                    // console.log(result.data.data);
                                    renderCity(result.data.data);
                                });

                                function renderCity(data) {
                                    for (const x of data) {
                                        citis.options[citis.options.length] = new Option(x.ProvinceName, x.ProvinceID);
                                    }
                                    citis.onchange = function() {
                                        // console.log(this.value);
                                        var provincceId = this.value;
                                        var Parameter = {
                                            url: "https://online-gateway.ghn.vn/shiip/public-api/master-data/district",
                                            method: "GET",
                                            headers: {
                                                'token': '11802752-8ab4-11ed-b190-ea4934f9883e'
                                            },
                                            data: {
                                                province_id: 202
                                            },
                                            responseType: "application/json",
                                        };
                                        var promise = axios(Parameter);
                                        promise.then(function(result) {
                                            district.length = 1;
                                            ward.length = 1;
                                            for (const x of result.data.data) {
                                                // console.log(provincceId);
                                                if (x.ProvinceID == provincceId) {
                                                    // console.log(x);
                                                    districts.options[districts.options.length] = new Option(x.DistrictName, x
                                                        .DistrictID);
                                                }
                                            }



                                        });

                                        district.onchange = function() {
                                            ward.length = 1;
                                            districtId = this.value;

                                            var Parameter = {
                                                url: "https://online-gateway.ghn.vn/shiip/public-api/master-data/ward",
                                                method: "GET",
                                                headers: {
                                                    'token': '11802752-8ab4-11ed-b190-ea4934f9883e'
                                                },
                                                params: {
                                                    district_id: districtId
                                                },
                                                responseType: "application/json",
                                            };
                                            var promise = axios(Parameter);
                                            promise.then(function(result) {
                                                ward.length = 1;
                                                // console.log(result.data.data);
                                                for (const x of result.data.data) {
                                                    wards.options[wards.options.length] = new Option(x.WardName, x.WardCode);
                                                }
                                            });

                                            ward.onchange = function() {

                                                var Parameter = {
                                                    url: "https://tungsnk.tech:8082/api/shipping_fee",
                                                    method: "POST",
                                                    data: {
                                                        "from_district_id": 1488,
                                                        "to_district_id": districtId,
                                                        "to_ward_code": "440610",
                                                        "cod_value": 10000
                                                    },
                                                    responseType: "application/json",
                                                };
                                                var promise = axios(Parameter);
                                                promise.then(function(result) {
                                                    console.log(result.data);
                                                    var shippingfee = document.getElementById("shippingfee");
                                                    shippingfee.innerHTML = `Ph?? v???n chuy???n l?? : ${result.data.data.totalFee}`;

                                                    var totalshippingfee = document.getElementById("totalshippingfee");
                                                    totalshippingfee.innerHTML = `${result.data.data.totalFee}`;

                                                    var tongtienhang = document.getElementById("tongtienhang");
                                                    var tongtiensp = document.getElementById("tongtiensp").getAttribute('value');
                                                    tongtienhang.innerHTML = `T???ng ti???n h??ng:          ${parseInt(result.data.data.totalFee) + parseInt(tongtiensp)} `;
                                                    var sum = parseInt(result.data.data.totalFee) + parseInt(tongtiensp);
                                                    tongtienhang.setAttribute("value", sum);

                                                });

                                            }

                                        };
                                    };

                                }
                            </script>
                            <div>
                                <input type="checkbox" id="luudiachi">
                                <label for="luudiachi">L??u ?????a ch??? m???i n??y v??o s??? ?????a ch??? c???a t??i</label>
                            </div>
                        </div>
                    </div>
                    <div class="delivery-content-left-phuongthucgiaohang">
                        <p id="shippingfee">Ph?? v???n chuy???n : </p>
                        <input type="text" name="" id="" value="Giao h??ng to??n qu???c">
                    </div>
                    <div class="delivery-content-left-chitietthanhtoan" id="paymentmethod">
                        <p>Ph????ng th???c thanh to??n</p>
                        <input type="radio" name="checkout" value="vnpay">
                        <label for="thanhtoankhinhanhang">vnpay</label>
                        <input type="radio" name="checkout" value="atm">
                        <label for="nganhangdientu">atm</label>
                        <input type="radio" name="checkout" value="shipcod">
                        <label for="nganhangdientu">shipcod</label>

                    </div>
                    <div class="delivery-content-left-ghichu" >
                        <p>Th??ng tin kh??c</p>
                        <input type="text" placeholder="????? l???i ghi ch?? cho ????n h??ng">
                    </div>
                    <div class="delivery-content-left-order">
                        <button type="button" class="btn btn-success" id="dathangbtn">?????t h??ng</button>
                    </div>


                    <script>
                        var dathangbtn = document.getElementById("dathangbtn");

                        dathangbtn.addEventListener("click", function() {
                            var productOrders = document.querySelectorAll(".order-center");
                            var divPaymentMethod = document.querySelector('#paymentmethod');
                            // console.log(divPaymentMethod);
                            var paymentMethod = divPaymentMethod.querySelector('input[type="radio"]:checked').getAttribute('value');
                            var userId = document.querySelector('#userId').getAttribute('value');
                            // console.log(userId);
                            // console.log(paymentMethod);
                            // console.log(productOrders);

                            var shippingfee = document.getElementById("totalshippingfee");
                            console.log(shippingfee.textContent);
                            for(var i=0;i<productOrders.length;i++){
                                var orderId = productOrders[i].getAttribute('orderId');
                                var productid = productOrders[i].getAttribute('productid');
                                var productname = productOrders[i].getAttribute('productname');
                                var productstatus = productOrders[i].getAttribute('productstatus');
                                var price = productOrders[i].getAttribute('price');
                                var quantity = productOrders[i].getAttribute('quantity');
                                var img = productOrders[i].getAttribute('img');
                                var size = productOrders[i].getAttribute('size');
                                var color = productOrders[i].getAttribute('color');
                                var tongtienhang = document.getElementById("#tongtienhang").getAttribute("value");
                                console.log(tongtienhang);
                                var Parameter = {
                                                    url: "https://tungsnk.tech:8888/api/save-order",
                                                    method: "POST",
                                                    data: {
                                                        orderId : orderId,
                                                        productId : productid,
                                                        productName : productname,
                                                        productStatus : productstatus,
                                                        price : price,
                                                        quantity : quantity,
                                                        img : img,
                                                        size : size,
                                                        color : color,
                                                        status : "ch??? x??c nh???n",
                                                        ship_price: shippingfee,
                                                        total_price: tongtienhang,
                                                        DistrictID: "D03",
                                                        ProvinceID: "P12",
                                                        WardCode: "W11",
                                                        detailAddress: "cau giay",
                                                        comment : "oke",
                                                        rate : "4",
                                                        userId : "3"
                                                    },
                                                    responseType: "application/json",
                                                };
                                                var promise = axios(Parameter);
                                                promise.then(function(result) {
                                                    console.log(result.data);

                                                });
                            }

                        });
                    </script>

                </div>
                <?php
                print '
                                    <div class="delivery-content-right">
                                    <h4 style="text-align: center;">Danh s??ch s???n ph???m</h4>';
                foreach ($cart['data'] as $product) {
                    print '<div class="order-center" productId = "' . $product['id'] . '"
                    productName = "' . $product['name'] .'"
                    productStatus = "' . $product['status'] .'"
                    price = "' . $product['price'] .'"
                    quantity = "' . $product['quanty'] .'"
                    img = "' . $product['image_url'] .'"
                    size = "' . $product['size'] .'"
                    color = "' . $product['color'] .'"
                    userId = "' . $product['id_user'] .'"
                    orderId = "' . $orderId .'"
                    >
                                        <div class="product-order">
                                            <div class="order-center-left">
                                                <div class="img-product" >
                                                    <a href="#"><img src="' .
                        $product['image_url'] .
                        '" alt="" width="60px"
                                                            height="60px"></a>
                                                </div>
                                                <div class="info-product">
                                                    <div>
                                                        <div class="name-product" value = "' .$product['name'] . '" >
                                                            <a href="#">
                                                                <p>' .
                        $product['name'] .
                        '</p>
                                                            </a>
                                                        </div>
                                                        <div class="amount-product" value = "'. $product['quanty'] . '">
                                                            <p>x' .
                        $product['quanty'] .
                        '</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-center-right">
                                                <p> ' .
                        $product['total_price'] .
                        '</p>
                                            </div>
                                        </div>
                                    </div>
                                        ';
                }
                // <div class="voucher">
                //     <input type="text" placeholder="Nh???p m?? gi???m gi??">
                // </div>
                print '<div class="order-bottom">
                                        <div class="flex ">
                                            <div>T???ng c??c m???c :</div>
                                            <div id="tongtiensp" value = "' .$cart['totalPrice']. '">' .
                    $cart['totalPrice'] .
                    '</div>
                                        </div>
                                        <div class="flex">
                                            <div>Ph?? v???n chuy???n :</div>
                                            <div id = "totalshippingfee"></div>
                                        </div>
                                    </div>
                                    <div class="total-money flex">
                                        <div id = "tongtienhang">T???ng ti???n h??ng : </div>
                                        <div></div>
                                    </div>              </div>
                                    ';
                ?>
            </div>

        </div>

        </div>

    </section>
</body>

</html>
