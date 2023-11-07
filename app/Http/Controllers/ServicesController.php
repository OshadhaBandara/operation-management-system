<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    //

    function store()
    {

  



        request()->validate([
            "First_Name" => 'required|string|max:255',
            "Last_Name" => 'required|string|max:255',
            "NIC" => 'required|string|max:12|exists:citizens,nic', 
            "Email" => 'required|string|email|max:255', 
            "Phone" => 'required|string|max:20',
            "District" => 'required|string|max:255',
            "Division" => 'required|string|max:255',
            "Address" => 'required|string',
            "Certificate" => 'required|string',
            "delivary-method" => 'required|string',
        ]);
        
        // ddd(Request('delivary-method'));

    

        if(request()->Certificate == 'Birth Certificates') 
        {
            $productItemPrice = 1500.00;
        }

        if(request()->Certificate == 'Marriag Certificates') 
        {
            $productItemPrice = 5000.00;
        }

        if(request()->Certificate == 'Grama Niladari Certificates') 
        {
            $productItemPrice = 500.00;
        }







        if(Request('delivary-method') == 'deliver')
        {
            $Dilivery_price = 1000.00;
        }
        else
        {
            $Dilivery_price = 500.00;
        }


        $totalPrice = $productItemPrice + $Dilivery_price;

        $service = Service::create([
            'citizen_id' => request('cid'), 
            'certificate_type' => request('Certificate'),
            'delivary_method' => request('delivary-method'),
            'item_price' => $productItemPrice,
            'delivery_price' => $Dilivery_price,
            'total' =>$totalPrice,
        ]);

        //dd($service);



        session()->put('delivary_method',  Request('delivary-method'));
        session()->put('product_item',  Request('Certificate'));
        session()->put('productItemPrice',  $productItemPrice );
        session()->put('service_id',  $service->id);
        session()->put('delivery_price', $Dilivery_price);
        session()->put('total_price', $totalPrice);


        return redirect('payment')->with('success', 'Request is successfully created, Please make payment');
        //return redirect('payment')->with('data', $data)->with('success', 'Request is successfully created, Please make payment');




    }


    function payment()
    {
 


       request()->validate([

        "cardnumber" => 'required|numeric|Min:10|',
        "mm/yy" => 'required|size:5',
        "cvv" => 'required|size:3',
        "cardname" => 'required|string|max:255',

       ]);

      

        $payment = Payment::create([
            'service_id' => request('service_id'), 
            'product_item' => request('product_item'),
            'item_price' => request('productItemPrice'),    
            'delivery_price' => request('delivery_price'),
            'delivary_method' => request('delivary_method'),
            'total' => request('total'),
        ]);

        $serviceStatus = Service::where('id', request('service_id'))->first();

        $serviceStatus->service_payment = true;

        $serviceStatus->update();

       // dd($serviceStatus);

        session()->pull('delivary_method');
        session()->pull('product_item');
        session()->pull('productItemPrice' );
        session()->pull('service_id');
        session()->pull('delivery_price');
        session()->pull('totalPrice');
     
        

        return redirect('profile')->with('success', 'Payment successful');

    }

    function paymentPending($id)
    {
       
        $service = Service::where('id', $id)->first();

        // dd($service->certificate_type);


         

        if($service->certificate_type == 'Birth Certificates') 
        {
            $productItemPrice = 1500.00;
        }

        if($service->certificate_type == 'Marriag Certificates') 
        {
            $productItemPrice = 5000.00;
        }

        if($service->certificate_type == 'Grama Niladari Certificates') 
        {
            $productItemPrice = 500.00;
        }







        if($service->delivary_method == 'deliver')
        {
            $Dilivery_price = 1000.00;
        }
        else
        {
            $Dilivery_price = 500.00;
        }

        $totalPrice = $productItemPrice + $Dilivery_price;


        session()->put('delivary_method',  $service->delivary_method);
        session()->put('product_item',  $service->certificate_type);
        session()->put('productItemPrice',  $productItemPrice );
        session()->put('service_id',  $service->id);
        session()->put('delivery_price', $Dilivery_price);
        session()->put('totalPrice', $totalPrice);


        return redirect('payment');
    }





    
    function nicStore()
    {

  
         ddd(Request()->all());


        request()->validate([
            "First_Name" => 'required|string|max:255',
            "Last_Name" => 'required|string|max:255',
            "NIC" => 'required|string|max:12|exists:citizens,nic', 
            "Email" => 'required|string|email|max:255', 
            "Phone" => 'required|string|max:20',
            "District" => 'required|string|max:255',
            "Division" => 'required|string|max:255',
            "Address" => 'required|string',
            "Certificate" => 'required|string',
            "delivary-method" => 'required|string',
        ]);
        
        // ddd(Request('delivary-method'));

    
        $service = Service::create([
            'citizen_id' => request('cid'), 
            'certificate_type' => request('Certificate'),
            'delivary_method' => request('delivary-method'),
            //'price' => 5.00,


        ]);

        //dd(request()->delivary-method);


        if(request()->Certificate == 'Birth Certificates') 
        {
            $productItemPrice = 1500.00;
        }

        if(request()->Certificate == 'Marriag Certificates') 
        {
            $productItemPrice = 5000.00;
        }

        if(request()->Certificate == 'Grama Niladari Certificates') 
        {
            $productItemPrice = 500.00;
        }







        if(Request('delivary-method') == 'deliver')
        {
            $Dilivery_price = 1000.00;
        }
        else
        {
            $Dilivery_price = 500.00;
        }

        $totalPrice = $productItemPrice + $Dilivery_price;


        session()->put('delivary_method',  Request('delivary-method'));
        session()->put('product_item',  Request('Certificate'));
        session()->put('productItemPrice',  $productItemPrice );
        session()->put('service_id',  $service->id);
        session()->put('delivery_price', $Dilivery_price);
        session()->put('totalPrice', $totalPrice);


        return redirect('payment')->with('success', 'Request is successfully created, Please make payment');
        //return redirect('payment')->with('data', $data)->with('success', 'Request is successfully created, Please make payment');




    }
}
