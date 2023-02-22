<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use GuzzleHttp\Client as Client;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Log;
use Illuminate\Support\Facades\Session;
class OrderManagermentRestController extends Controller
{
    public function listOrderByUser($userId)
    {

        $orders = DB::table('orders')
            ->select('*')
            ->where('userId', '=', $userId)
            ->get();

        $output = array();
        for ($i = 0; $i < count($orders);) {
            $tmparray = array();
            $tmparray["orderId"] = $orders[$i]->orderId;
            $tmparray["status"] = $orders[$i]->status;
            $tmparray["payment_method"] = $orders[$i]->payment_method;
            $tmparray["userId"] = $orders[$i]->userId;
            $tmparray["created_at"] = $orders[$i]->created_at;
            $tmparray["update_at"] = $orders[$i]->update_at;
            $tmparray["shiptime_start_at"] = $orders[$i]->shiptime_start_at;
            $tmparray["completed_at"] = $orders[$i]->completed_at;
            $tmparray["paytime"] = $orders[$i]->paytime;
            $tmparray["order_time"] = $orders[$i]->order_time;
            $tmparray["DistrictID"] = $orders[$i]->DistrictID;
            $tmparray["ProvinceID"] = $orders[$i]->ProvinceID;
            $tmparray["WardCode"] = $orders[$i]->WardCode;
            $tmparray["detailAddress"] = $orders[$i]->detailAddress;
            $tmparray["total_price"] = $orders[$i]->total_price;
            $tmparray["comment"] = $orders[$i]->comment;
            $tmparray["rate"] = $orders[$i]->rate;
            $tmpProduct = array();
            $tmparray["products"] = array();
            for ($j = $i; $j < count($orders); $j++) {

                if ($orders[$j]->orderId == $orders[$i]->orderId) {
                    $tmpProduct["productId"] = $orders[$j]->productId;
                    $tmpProduct["productName"] = $orders[$j]->productName;
                    $tmpProduct["productStatus"] = $orders[$j]->productStatus;
                    $tmpProduct["price"] = $orders[$j]->price;
                    $tmpProduct["quantity"] = $orders[$j]->quantity;
                    $tmpProduct["img"] = $orders[$j]->img;
                    $tmpProduct["size"] = $orders[$j]->size;
                    $tmpProduct["color"] = $orders[$j]->color;
                    array_push($tmparray["products"], $tmpProduct);
                    // return "co den day";
                } else {
                    break;
                }
            }

            $i = $j;
            array_push($output, $tmparray);
        }
        return $output;
    }

    public function getOrderById($orderId)
    {
        $orders = DB::table('orders')
            ->select('*')
            ->where('orderId', '=', $orderId)
            ->get();
        $output = array();
        for ($i = 0; $i < count($orders);) {
            $tmparray = array();
            $tmparray["orderId"] = $orders[$i]->orderId;
            $tmparray["status"] = $orders[$i]->status;
            $tmparray["payment_method"] = $orders[$i]->payment_method;
            $tmparray["userId"] = $orders[$i]->userId;
            $tmparray["created_at"] = $orders[$i]->created_at;
            $tmparray["update_at"] = $orders[$i]->update_at;
            $tmparray["shiptime_start_at"] = $orders[$i]->shiptime_start_at;
            $tmparray["completed_at"] = $orders[$i]->completed_at;
            $tmparray["paytime"] = $orders[$i]->paytime;
            $tmparray["order_time"] = $orders[$i]->order_time;
            $tmparray["DistrictID"] = $orders[$i]->DistrictID;
            $tmparray["ProvinceID"] = $orders[$i]->ProvinceID;
            $tmparray["WardCode"] = $orders[$i]->WardCode;
            $tmparray["detailAddress"] = $orders[$i]->detailAddress;
            $tmparray["total_price"] = $orders[$i]->total_price;
            $tmparray["comment"] = $orders[$i]->comment;
            $tmparray["rate"] = $orders[$i]->rate;
            $tmpProduct = array();
            $tmparray["products"] = array();
            for ($j = $i; $j < count($orders); $j++) {

                if ($orders[$j]->orderId == $orders[$i]->orderId) {
                    $tmpProduct["productId"] = $orders[$j]->productId;
                    $tmpProduct["productName"] = $orders[$j]->productName;
                    $tmpProduct["productStatus"] = $orders[$j]->productStatus;
                    $tmpProduct["price"] = $orders[$j]->price;
                    $tmpProduct["quantity"] = $orders[$j]->quantity;
                    $tmpProduct["img"] = $orders[$j]->img;
                    $tmpProduct["size"] = $orders[$j]->size;
                    $tmpProduct["color"] = $orders[$j]->color;
                    array_push($tmparray["products"], $tmpProduct);
                    // return "co den day";
                } else {
                    break;
                }
            }

            $i = $j;
            array_push($output, $tmparray);
        }
        return $output;
    }

    public function getOrderByStatus($status)
    {
        $orders = DB::table('orders')
            ->select('*')
            ->where('status', '=', $status)
            ->get();
        $output = array();
        for ($i = 0; $i < count($orders);) {
            $tmparray = array();
            $tmparray["orderId"] = $orders[$i]->orderId;
            $tmparray["status"] = $orders[$i]->status;
            $tmparray["payment_method"] = $orders[$i]->payment_method;
            $tmparray["userId"] = $orders[$i]->userId;
            $tmparray["created_at"] = $orders[$i]->created_at;
            $tmparray["update_at"] = $orders[$i]->update_at;
            $tmparray["shiptime_start_at"] = $orders[$i]->shiptime_start_at;
            $tmparray["completed_at"] = $orders[$i]->completed_at;
            $tmparray["paytime"] = $orders[$i]->paytime;
            $tmparray["order_time"] = $orders[$i]->order_time;
            $tmparray["DistrictID"] = $orders[$i]->DistrictID;
            $tmparray["ProvinceID"] = $orders[$i]->ProvinceID;
            $tmparray["WardCode"] = $orders[$i]->WardCode;
            $tmparray["detailAddress"] = $orders[$i]->detailAddress;
            $tmparray["total_price"] = $orders[$i]->total_price;
            $tmparray["comment"] = $orders[$i]->comment;
            $tmparray["rate"] = $orders[$i]->rate;
            $tmpProduct = array();
            $tmparray["products"] = array();
            for ($j = $i; $j < count($orders); $j++) {

                if ($orders[$j]->orderId == $orders[$i]->orderId) {
                    $tmpProduct["productId"] = $orders[$j]->productId;
                    $tmpProduct["productName"] = $orders[$j]->productName;
                    $tmpProduct["productStatus"] = $orders[$j]->productStatus;
                    $tmpProduct["price"] = $orders[$j]->price;
                    $tmpProduct["quantity"] = $orders[$j]->quantity;
                    $tmpProduct["img"] = $orders[$j]->img;
                    $tmpProduct["size"] = $orders[$j]->size;
                    $tmpProduct["color"] = $orders[$j]->color;
                    array_push($tmparray["products"], $tmpProduct);
                    // return "co den day";
                } else {
                    break;
                }
            }

            $i = $j;
            array_push($output, $tmparray);
        }
        return $output;
    }

    public function updateOrderStatus($orderId, Request $request)
    {

        $newStatus = $request['newStatus'];
        DB::table('orders')->where('orderId', $orderId)
            ->update(['status' => $newStatus]);
    }

    public function createNewOrder(Request $request)
    {

        try {
            $orderId = $request['orderId'];
            $status = $request['status'];
            $payment_method = $request['payment_method'];
            $userId = $request['userId'];
            $created_at = $request['created_at'];
            $update_at = $request['update_at'];
            $shiptime_start_at = $request['shiptime_start_at'];
            $completed_at = $request['completed_at'];
            $paytime = $request['paytime'];
            $order_time = $request['order_time'];
            $DistrictID = $request['DistrictID'];
            $ProvinceID = $request['ProvinceID'];
            $WardCode = $request['WardCode'];
            $detailAddress = $request['detailAddress'];
            $total_price = $request['total_price'];
            $comment = $request['comment'];
            $rate = $request['rate'];
            $productStatus = "bình thường";
            $dataProduct = ["products"];
            // $client =  new Client();
            // $response = $client->request('GET', 'quanlidonhang.test/api/listOrderByUser/2');
            // $dataProduct = json_decode($response->getBody()->getContents(), true);

            // foreach ($dataProduct['Item'] as $product) {
            //     DB::table('orders')->insert([
            //         "orderId" => $orderId,
            //         "status" => $status,
            //         "payment_method" => $payment_method,
            //         "userId" => $userId,
            //         "created_at" => $created_at,
            //         "update_at" => $update_at,
            //         "shiptime_start_at" => $shiptime_start_at,
            //         "completed_at" => $completed_at,
            //         "paytime" => $paytime,
            //         "order_time" => $order_time,
            //         "DistrictID" => $DistrictID,
            //         "ProvinceID" => $ProvinceID,
            //         "WardCode" => $WardCode,
            //         "detailAddress" => $detailAddress,
            //         "total_price" => $total_price,
            //         "comment" => $comment,
            //         "rate" => $rate,
            //         "productId" => $product->productInfo->id,
            //         "productName" => $product->productInfo->name,
            //         "productStatus" => $productStatus,
            //         "price" => $product->price,
            //         "quantity" => $product->quanty,
            //         "img" => $product->productInfo->image_url,
            //         "size" => $product->productInfo->size,
            //         "color" => $product->productInfo->color
            //     ]);
            // }


            // return  $orders;
        } catch (Exception $e) {
            print('error');
        }
    }


    public function createOrder($userId){

        $user_info = DB::table('orders')->where('userId',$userId)->get();

        return view('createOrder.create_order',[
            'userId'=>$userId,
            'user_info'=>$user_info
        ]);
    }
    public function saveOrder(Request $request){



        $data = array();
        $data['orderId'] = $request->orderId;
        $data['productId'] = $request->productId;
        $data['productName'] = $request->productName;
        $data['productStatus'] = $request->productStatus;
        $data['price'] = $request->price;
        $data['quantity'] = $request->quantity;
        $data['img'] = $request->img;
        $data['size'] = $request->size;
        $data['color'] = $request->color;
        $data['status'] = $request->status;
        $data['userId'] = $request->userId;
        $data['detailAddress'] = $request->detailAddress;
        $data['ship_price'] = $request->ship_price;
        $data['payment_method'] = $request->payment_method;
        $data['total_price'] = $request->total_price;
        $data['DistrictID'] = $request->DistrictID;
        $data['ProvinceID'] = $request->ProvinceID;
        $data['WardCode'] = $request->WardCode;

        $data['created_at'] = date("Y-m-d H:i:s");
        $data['update_at'] = date("Y-m-d H:i:s");
        $data['shiptime_start_at'] = date("Y-m-d H:i:s");
        $data['completed_at'] = date("Y-m-d H:i:s");
        $data['paytime'] = date("Y-m-d H:i:s");
        $data['order_time'] = date("Y-m-d H:i:s");
        $data['comment'] = $request->comment;
        $data['rate'] = $request->rate;



        DB::table('orders')->insert($data);
        Session::put('message', 'Thêm đơn hàng thành công!');

        // return 'oke';

        $orders = DB::table('orders')
            ->select('*')
            ->where('userId', '=', $request->userId)
            ->get();

        $output = array();
        for ($i = 0; $i < count($orders);) {
            $tmparray = array();
            $tmparray["orderId"] = $orders[$i]->orderId;
            $tmparray["status"] = $orders[$i]->status;
            $tmparray["payment_method"] = $orders[$i]->payment_method;
            $tmparray["userId"] = $orders[$i]->userId;
            $tmparray["created_at"] = $orders[$i]->created_at;
            $tmparray["update_at"] = $orders[$i]->update_at;
            $tmparray["shiptime_start_at"] = $orders[$i]->shiptime_start_at;
            $tmparray["completed_at"] = $orders[$i]->completed_at;
            $tmparray["paytime"] = $orders[$i]->paytime;
            $tmparray["order_time"] = $orders[$i]->order_time;
            $tmparray["DistrictID"] = $orders[$i]->DistrictID;
            $tmparray["ProvinceID"] = $orders[$i]->ProvinceID;
            $tmparray["WardCode"] = $orders[$i]->WardCode;
            $tmparray["detailAddress"] = $orders[$i]->detailAddress;
            $tmparray["total_price"] = $orders[$i]->total_price;
            $tmparray["comment"] = $orders[$i]->comment;
            $tmparray["rate"] = $orders[$i]->rate;
            $tmpProduct = array();
            $tmparray["products"] = array();
            for ($j = $i; $j < count($orders); $j++) {

                if ($orders[$j]->orderId == $orders[$i]->orderId) {
                    $tmpProduct["productId"] = $orders[$j]->productId;
                    $tmpProduct["productName"] = $orders[$j]->productName;
                    $tmpProduct["productStatus"] = $orders[$j]->productStatus;
                    $tmpProduct["price"] = $orders[$j]->price;
                    $tmpProduct["quantity"] = $orders[$j]->quantity;
                    $tmpProduct["img"] = $orders[$j]->img;
                    $tmpProduct["size"] = $orders[$j]->size;
                    $tmpProduct["color"] = $orders[$j]->color;
                    array_push($tmparray["products"], $tmpProduct);
                } else {
                    break;
                }
            }

            $i = $j;
            array_push($output, $tmparray);
        }

        return $output;
    }


    public function listOrder()
    {

        $orders = DB::table('orders')
            ->select('*')
            // ->where('userId', '=', $userId)
            ->get();

        $output = array();
        for ($i = 0; $i < count($orders);) {
            $tmparray = array();
            $tmparray["orderId"] = $orders[$i]->orderId;
            $tmparray["status"] = $orders[$i]->status;
            $tmparray["payment_method"] = $orders[$i]->payment_method;
            $tmparray["userId"] = $orders[$i]->userId;
            $tmparray["created_at"] = $orders[$i]->created_at;
            $tmparray["update_at"] = $orders[$i]->update_at;
            $tmparray["shiptime_start_at"] = $orders[$i]->shiptime_start_at;
            $tmparray["completed_at"] = $orders[$i]->completed_at;
            $tmparray["paytime"] = $orders[$i]->paytime;
            $tmparray["order_time"] = $orders[$i]->order_time;
            $tmparray["DistrictID"] = $orders[$i]->DistrictID;
            $tmparray["ProvinceID"] = $orders[$i]->ProvinceID;
            $tmparray["WardCode"] = $orders[$i]->WardCode;
            $tmparray["detailAddress"] = $orders[$i]->detailAddress;
            $tmparray["total_price"] = $orders[$i]->total_price;
            $tmparray["comment"] = $orders[$i]->comment;
            $tmparray["rate"] = $orders[$i]->rate;
            $tmpProduct = array();
            $tmparray["products"] = array();
            for ($j = $i; $j < count($orders); $j++) {

                if ($orders[$j]->orderId == $orders[$i]->orderId) {
                    $tmpProduct["productId"] = $orders[$j]->productId;
                    $tmpProduct["productName"] = $orders[$j]->productName;
                    $tmpProduct["productStatus"] = $orders[$j]->productStatus;
                    $tmpProduct["price"] = $orders[$j]->price;
                    $tmpProduct["quantity"] = $orders[$j]->quantity;
                    $tmpProduct["img"] = $orders[$j]->img;
                    $tmpProduct["size"] = $orders[$j]->size;
                    $tmpProduct["color"] = $orders[$j]->color;
                    array_push($tmparray["products"], $tmpProduct);
                    // return "co den day";
                } else {
                    break;
                }
            }

            $i = $j;
            array_push($output, $tmparray);
        }
        return $output;
    }



    public function listOrderByStatus($status)
    {
        $orders = DB::table('orders')
            ->select('*')
            ->where('status', '=', $status)
            ->get();
        $output = array();
        for ($i = 0; $i < count($orders);) {
            $tmparray = array();
            $tmparray["orderId"] = $orders[$i]->orderId;
            $tmparray["status"] = $orders[$i]->status;
            $tmparray["payment_method"] = $orders[$i]->payment_method;
            $tmparray["userId"] = $orders[$i]->userId;
            $tmparray["created_at"] = $orders[$i]->created_at;
            $tmparray["update_at"] = $orders[$i]->update_at;
            $tmparray["shiptime_start_at"] = $orders[$i]->shiptime_start_at;
            $tmparray["completed_at"] = $orders[$i]->completed_at;
            $tmparray["paytime"] = $orders[$i]->paytime;
            $tmparray["order_time"] = $orders[$i]->order_time;
            $tmparray["DistrictID"] = $orders[$i]->DistrictID;
            $tmparray["ProvinceID"] = $orders[$i]->ProvinceID;
            $tmparray["WardCode"] = $orders[$i]->WardCode;
            $tmparray["detailAddress"] = $orders[$i]->detailAddress;
            $tmparray["total_price"] = $orders[$i]->total_price;
            $tmparray["comment"] = $orders[$i]->comment;
            $tmparray["rate"] = $orders[$i]->rate;
            $tmpProduct = array();
            $tmparray["products"] = array();
            for ($j = $i; $j < count($orders); $j++) {

                if ($orders[$j]->orderId == $orders[$i]->orderId) {
                    $tmpProduct["productId"] = $orders[$j]->productId;
                    $tmpProduct["productName"] = $orders[$j]->productName;
                    $tmpProduct["productStatus"] = $orders[$j]->productStatus;
                    $tmpProduct["price"] = $orders[$j]->price;
                    $tmpProduct["quantity"] = $orders[$j]->quantity;
                    $tmpProduct["img"] = $orders[$j]->img;
                    $tmpProduct["size"] = $orders[$j]->size;
                    $tmpProduct["color"] = $orders[$j]->color;
                    array_push($tmparray["products"], $tmpProduct);
                    // return "co den day";
                } else {
                    break;
                }
            }

            $i = $j;
            array_push($output, $tmparray);
        }
        return $output;
    }

    public function update_productStatus(Request $request, $productId){
        $data = array();
        $data['productStatus'] = $request->productStatus;

        DB::table('orders')->where('productId',$productId)->update($data);
        return $data['productStatus'];
    }



}



