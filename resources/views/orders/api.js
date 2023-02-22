// const list = document.getElementById('list'); 

// // đọc API
// async function getDataFromPublicAPI() {
//     const responseAPI = await fetch('https://jsonplaceholder.typicode.com/posts');
//     const data = await responseAPI.json();
//     console.log('data : >>', data);
//     console.log(typeof (data));
//     data.forEach(element => {
//         const divItem = document.createElement('div');
//         console.log(element);
//         divItem.innerHTML = `
//             <div class="order-content">
//                 <div class="order-top">
//                     <div class="shop">
//                         <div class="avt-shop"><img src="img/O1CN01CkHsHe1GczqFAjRmF_!!2206710620644-0-cib.jpg" alt="" width="30px">
//                         </div>
//                         <div class="shopname">${element.userId}</div>
//                     </div>
//                     <div class="order-status">
//                         <p><span><i class="fa-solid fa-truck"></i></span>Mã Đơn Hàng: 1</p>
//                     </div>
//                 </div>
//                 <div class="order-center">
//                     <div class="product-order">
//                         <div class="order-center-left title1">
//                             <div class="img-product">
//                                 <a href="#"><img src="img/sp1.jfif" alt="" width="60px" height="60px"></a>
//                             </div>
//                             <div class="info-product">
//                                 <div class="info-product-item">
//                                     <div class="name-product">
//                                         <a href="#">
//                                             <p>${element.title} </p>
//                                         </a>
//                                     </div>
//                                 </div>
//                                 <div class="amount-product">
//                                     <p>${element.id}</p>
//                                 </div>
//                             </div>
//                         </div>
//                         <div class="order-center-right title2">
//                             <p>200.000đ</p>
//                         </div>
//                         <div class="order-center-right  title2">
//                             <p>Chờ Lấy Hàng</p>
//                         </div>
//                         <div class="order-center-right title2">
//                             <p>Nhanh</p>
//                         </div>
//                         <div class="order-center-right title2">
//                             <a href="#">Chi tiết đơn hàng</a>
//                         </div>
//                     </div>
//                 </div>
//             </div>
//         `;
//         list.appendChild(divItem);

//     });

// }
// // gọi hàm
// getDataFromPublicAPI();
function calcRate(r) {
 const f = ~~r,//Tương tự Math.floor(r)
 id = 'star' + f + (r % f ? 'half' : '')
 id && (document.getElementById(id).checked = !0)
}