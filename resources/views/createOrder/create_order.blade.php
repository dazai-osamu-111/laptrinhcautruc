<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/front-end/plugins/fontawesome/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Delivery</title>
    
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
        .adress{
            display: flex;
            justify-content: space-between;
        }
        .form-select{
            width: 210px;
        }
        
    </style>
    <section class="delivery">
        <form action="/save-order/{{$userId}}" method="post">
            {{ csrf_field() }}
            <div class="container">
            <div class="delivery-content">
                <div class="delivery-content-left ">
                    <div class="delivery-content-top-left">
                        <div class="delivery-content-left-thongtinkhachhang">
                            Th??ng tin kh??ch h??ng
                        </div>
                        <div class="delivery-content-left-login">
                            <p><span>???? ????ng k??? </span><button type="button" class="btn btn-success">????ng nh???p</button>
                            </p>
                        </div>
                    </div>
                <?php    $info = $user_info[0];  ?>
                        <div class="delivery-content-left-email">
                        <div class="email"><input type="email" name="email" value="ngocongthang1@gmail.com" ></div>
                        <div>
                            <div>
                                <input type="checkbox" name="luachon" value="1">
                                <label>T???o 1 t??i kho???n v???i SHOP c???a ch??ng t??i</label>
                            </div>
                            <div>
                                <input type="checkbox" name="luachon" value="2">
                                <label>I accept to receive shop updates, promotions and other marketing information from
                                    SHOP</label>
                            </div>
                        </div>
                    </div>
                    <div class="delivery-content-left-chitietgiaohang">
                        <div>
                            <div class="name-phone">
                                <div class="name"><input type="text" name="name" value="B??i T??n ??i???p" ></div>
                                <div class="phone"><input type="number" name="phoneNumber" value="0878524640"  > </div>

                            </div>
                            <div class="adress">
                                <input value="{{$info->detailAddress}}" type="text" name="detailAddress" placeholder="?????a ch???" >
                                
                            </div>
                            <div class="adress">

                                <div>
                                    <select name="ProvinceID" class="form-select form-select-lg mb-3 "  id="city"
                                        aria-label=".form-select-sm">
                                        <option value="{{$info->ProvinceID}}" selected>Ch???n t???nh th??nh</option>
                                    </select>
                                </div>

                                <div>
                                    <select name="DistrictID" class="form-select form-select-lg mb-3 " id="district"
                                        aria-label=".form-select-sm">
                                        <option value="{{$info->DistrictID}}" selected>Ch???n qu???n huy???n</option>
                                    </select>
                                </div>
                                <div>
                                    <select name="WardCode" class="form-select form-select-lg " id="ward" aria-label=".form-select-sm">
                                        <option  value="{{$info->WardCode}}" selected>Ch???n ph?????ng x??</option>
                                    </select>
                                </div>


                            </div>


                            
                            <div>
                                <input type="checkbox" id="luudiachi">
                                <label for="luudiachi">L??u ?????a ch??? m???i n??y v??o s??? ?????a ch??? c???a t??i</label>
                            </div>
                        </div>
                    </div>
                    <div class="delivery-content-left-phuongthucgiaohang">
                        <p>Ph?? v???n chuy???n : 30.000</p>
                        <input type="text" name="" id="" value="Giao h??ng to??n qu???c">
                    </div>
                    <div class="delivery-content-left-chitietthanhtoan">
                        <p>Ph????ng th???c thanh to??n</p>
                        <input type="radio" name="payment_method" value="cash" id="thanhtoankhinhanhang">
                        <label for="thanhtoankhinhanhang">Thanh to??n khi nh???n h??ng</label>
                        <input type="radio" name="payment_method" value="ATM" id="nganhangdientu">
                        <label for="nganhangdientu">Ng??n h??ng ??i???n t???</label>
                    </div>
                    <div class="delivery-content-left-ghichu">
                        <p>Th??ng tin kh??c</p>
                        <input type="text" name="note" placeholder="????? l???i ghi ch?? cho ????n h??ng">
                    </div>
                    <div class="delivery-content-left-order">
                        <button type="submit" class="btn btn-success">?????t h??ng</button>
                    </div>

                    
                </div>

                <div class="delivery-content-right">
                    <h4 style="text-align: center;">Danh s??ch s???n ph???m</h4>
                {{-- @foreach ($product_info as $pro) --}}
                    <div class="order-center">
                        <div class="product-order">
                            <div class="order-center-left">
                                <div class="img-product">
                                    <a href="#"><img src="" alt="" width="60px" height="60px"></a>
                                </div>
                                <div class="info-product">
                                    <div>
                                        <div class="name-product">
                                            <a href="#">
                                                <p></p>
                                            </a>
                                        </div>
                                        <div class="amount-product">
                                            <p>x1</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="order-center-right">
                                <p>200.000??</p>
                            </div>
                        </div>
                    </div>
                    <div class="voucher">
                        <input type="text" placeholder="Nh???p m?? gi???m gi??">
                    </div>
                    <div class="order-bottom">
                        <div class="flex ">
                            <div>T???ng c??c m???c :</div>
                            <div> 200.000??</div>
                        </div>
                        <div class="flex">
                            <div>Ph?? v???n chuy???n :</div>
                            <div>30.000??</div>
                        </div>

                    </div>
                    <div class="total-money flex">
                        <div>T???ng ti???n h??ng : </div>
                        <div>230.000??</div>
                    </div>
                {{-- @endforeach --}}
                    
                </div>
            </div>

        </div>
        </form>
    </section>
    <?php
                        // $data = array("data" => "
                        //     {
                        //         "from_district_id": 1488,
                        //         "to_district_id": 1452,
                        //         "to_ward_code": "21012",
                        //         "weight": 200,
                        //         "cod_value": 10000
                        //     }                        
                        // ");
                        // $data_string = json_encode($data);
                        // $ch = curl_init('https://hedspi.dev:8082/api/shipping_fee');
                        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                        // curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
                        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                        //     'Content-Type: application/json',
                        //     'Content-Length: ' . strlen($data_string))
                        // );
                        // $result = curl_exec($ch);
                        // $response = json_decode($result, true);
                        // $html = '';
                        // foreach ($response as $item) {
                        // $html .= '<div>' . $item['totalFee'] . '</div>';
                        // }
                        // echo $html;

                    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
                            <script>
                                var citis = document.getElementById("city");
                                var districts = document.getElementById("district");
                                var wards = document.getElementById("ward");
                                var Parameter = {
                                    url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
                                    method: "GET",
                                    responseType: "application/json",
                                };
                                var promise = axios(Parameter);
                                promise.then(function (result) {
                                    renderCity(result.data);
                                });

                                function renderCity(data) {
                                    for (const x of data) {
                                        citis.options[citis.options.length] = new Option(x.Name, x.Id);
                                    }
                                    citis.onchange = function () {
                                        district.length = 1;
                                        ward.length = 1;
                                        if (this.value != "") {
                                            const result = data.filter(n => n.Id === this.value);

                                            for (const k of result[0].Districts) {
                                                district.options[district.options.length] = new Option(k.Name, k.Id);
                                            }
                                        }
                                    };
                                    district.onchange = function () {
                                        ward.length = 1;
                                        const dataCity = data.filter((n) => n.Id === citis.value);
                                        if (this.value != "") {
                                            const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                                            for (const w of dataWards) {
                                                wards.options[wards.options.length] = new Option(w.Name, w.Id);
                                            }
                                        }
                                    };
                                }
                            </script>
                    
</body>

</html>