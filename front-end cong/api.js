const list = document.getElementById('list');
const userid = document.getElementsByClassName('nguoi-dung');
// const data = [
//     {
//         "orderId": 1,
//         "status": "thành công",
//         "payment_method": "viettel pay",
//         "userId": 2,
//         "created_at": "1998-12-31 18:30:28",
//         "update_at": "1998-12-31 18:30:56",
//         "shiptime_start_at": "1999-01-01 01:30:28",
//         "completed_at": "1999-01-01 01:45:00",
//         "paytime": "1999-01-01 02:50:28",
//         "order_time": "1998-12-31 18:40:00",
//         "DistrictID": "D01",
//         "ProvinceID": "P04",
//         "WardCode": "W25",
//         "detailAddress": "hai ba trung ha noi",
//         "total_price": 185000,
//         "comment": "",
//         "rate": "",
//         "products": [
//             {
//                 "productId": 34,
//                 "productName": "Dép tổ ong",
//                 "productStatus": "1",
//                 "price": "85000",
//                 "quantity": 1,
//                 "img": "https://lzd-img-global.slatic.net/g/p/543d7be238bdd9fb6eec5cbdb0d970ca.jpg_360x360q75.jpg_.webp",
//                 "size": "XL",
//                 "color": "Trắng"
//             },
//             {
//                 "productId": 24,
//                 "productName": "Mũ cối",
//                 "productStatus": "1",
//                 "price": "60000",
//                 "quantity": 1,
//                 "img": "https://namtrungsafety.com/wp-content/uploads/2019/09/mu-coi.jpg",
//                 "size": "L",
//                 "color": "Xanh"
//             },
//             {
//                 "productId": 14,
//                 "productName": "Bút chì shin",
//                 "productStatus": "1",
//                 "price": "20000",
//                 "quantity": 1,
//                 "img": "http://img.websosanh.vn/v2/users/root_product/images/but-chi-go-2b-thien-long-gp02/2jgr174h4dbhl.jpg",
//                 "size": "XL",
//                 "color": "Trắng"
//             }
//         ]
//     },
//     {
//         "orderId": 1,
//         "status": "thành công",
//         "payment_method": "viettel pay",
//         "userId": 2,
//         "created_at": "1998-12-31 18:30:28",
//         "update_at": "1998-12-31 18:30:56",
//         "shiptime_start_at": "1999-01-01 01:30:28",
//         "completed_at": "1999-01-01 01:45:00",
//         "paytime": "1999-01-01 02:50:28",
//         "order_time": "1998-12-31 18:40:00",
//         "DistrictID": "D01",
//         "ProvinceID": "P04",
//         "WardCode": "W25",
//         "detailAddress": "hai ba trung ha noi",
//         "total_price": 185000,
//         "comment": "",
//         "rate": "",
//         "products": [
//             {
//                 "productId": 34,
//                 "productName": "Dép tổ ong",
//                 "productStatus": "1",
//                 "price": "85000",
//                 "quantity": 1,
//                 "img": "https://lzd-img-global.slatic.net/g/p/543d7be238bdd9fb6eec5cbdb0d970ca.jpg_360x360q75.jpg_.webp",
//                 "size": "XL",
//                 "color": "Trắng"
//             },
//             {
//                 "productId": 24,
//                 "productName": "Mũ cối",
//                 "productStatus": "1",
//                 "price": "60000",
//                 "quantity": 1,
//                 "img": "https://namtrungsafety.com/wp-content/uploads/2019/09/mu-coi.jpg",
//                 "size": "L",
//                 "color": "Xanh"
//             },
//             {
//                 "productId": 14,
//                 "productName": "Bút chì shin",
//                 "productStatus": "1",
//                 "price": "20000",
//                 "quantity": 1,
//                 "img": "http://img.websosanh.vn/v2/users/root_product/images/but-chi-go-2b-thien-long-gp02/2jgr174h4dbhl.jpg",
//                 "size": "XL",
//                 "color": "Trắng"
//             }
//         ]
//     },
//     {
//         "orderId": 1,
//         "status": "thành công",
//         "payment_method": "viettel pay",
//         "userId": 2,
//         "created_at": "1998-12-31 18:30:28",
//         "update_at": "1998-12-31 18:30:56",
//         "shiptime_start_at": "1999-01-01 01:30:28",
//         "completed_at": "1999-01-01 01:45:00",
//         "paytime": "1999-01-01 02:50:28",
//         "order_time": "1998-12-31 18:40:00",
//         "DistrictID": "D01",
//         "ProvinceID": "P04",
//         "WardCode": "W25",
//         "detailAddress": "hai ba trung ha noi",
//         "total_price": 185000,
//         "comment": "",
//         "rate": "",
//         "products": [
//             {
//                 "productId": 34,
//                 "productName": "Dép tổ ong",
//                 "productStatus": "1",
//                 "price": "85000",
//                 "quantity": 1,
//                 "img": "https://lzd-img-global.slatic.net/g/p/543d7be238bdd9fb6eec5cbdb0d970ca.jpg_360x360q75.jpg_.webp",
//                 "size": "XL",
//                 "color": "Trắng"
//             },
//             {
//                 "productId": 24,
//                 "productName": "Mũ cối",
//                 "productStatus": "1",
//                 "price": "60000",
//                 "quantity": 1,
//                 "img": "https://namtrungsafety.com/wp-content/uploads/2019/09/mu-coi.jpg",
//                 "size": "L",
//                 "color": "Xanh"
//             },
//             {
//                 "productId": 14,
//                 "productName": "Bút chì shin",
//                 "productStatus": "1",
//                 "price": "20000",
//                 "quantity": 1,
//                 "img": "http://img.websosanh.vn/v2/users/root_product/images/but-chi-go-2b-thien-long-gp02/2jgr174h4dbhl.jpg",
//                 "size": "XL",
//                 "color": "Trắng"
//             }
//         ]
//     }
// ]
// đọc API
async function getDataFromPublicAPI() {
    const responseAPI = await fetch('https://dev.shepherd.appoly.io/fruit.json');
    const data = await responseAPI.json();

    console.log(data);

    data.forEach(element => {
        const divItem = [];
        const divItem1 = document.createElement('div');
        const divItem2 = document.createElement('div');
        const divItem3 = document.createElement('div');
        // console.log('element' , element);
        // console.log(typeof(element));
        divItem1.innerHTML = `
            <div class="order-content">
                <div class="order-top">
                    <div class="shop">
                        <div class="avt-shop"><img src="img/O1CN01CkHsHe1GczqFAjRmF_!!2206710620644-0-cib.jpg" alt="" width="30px">
                        </div>
                        <div class="shopname">Địa chỉ : ${element.detailAddress}</div>
                    </div>
                    <div class="order-status">
                        <p><span><i class="fa-solid fa-truck"></i></span>Mã Đơn Hàng: ${element.orderId}</p>
                    </div>
                </div>
                `
        list.appendChild(divItem1);
                element.products.forEach(e => {
                    var  i = 0 ;
                     divItem[i] = document.createElement('div');
                    divItem[i].innerHTML = `
                    <div class="order-center">
                    <div class="product-order">
                        <div class="order-center-left title1">
                            <div class="img-product">
                                <a href="#"><img src="${e.img}" alt="" width="60px" height="60px"></a>
                            </div>
                            <div class="info-product">
                                <div class="info-product-item">
                                    <div class="name-product">
                                        <a href="#">
                                            <p>${e.productName}</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="amount-product">
                                    <p>x${e.quantity}</p>
                                </div>
                            </div>
                        </div>
                        <div class="order-center-right title2">
                            <p>${e.price}</p>
                        </div>
                        <div class="order-center-right  title2">
                            <p>${element.status}</p>
                        </div>
                        <div class="order-center-right title2">
                            <a href="#">Chi tiết đơn hàng</a>
                        </div>
                    </div>
                </div>

                `
                    list.appendChild(divItem[i]);
                i++;

                })




            divItem2.innerHTML = `
            <div class="order-bottom">

                            <div class="order-bottom-right">
                                <p><span><i class="fa-sharp fa-solid fa-sack-dollar"></i></span> Tổng số tiền :
                                    <span>${element.total_price}</span></p>
                            </div>
                </div>
            </div>
            `
        list.appendChild(divItem2);


    });

}
// gọi hàm
getDataFromPublicAPI();
