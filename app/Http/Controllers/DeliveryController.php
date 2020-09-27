<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery;
use Illuminate\Support\Facades\DB;

class DeliveryController extends Controller
{
    public function index()
    {
    	$delivery = DB::table('delivery')->paginate(10);

    	return view('delivery', ['delivery' => $delivery]);
    }

    public function create()
    {
        return view('create_delivery');
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':Isian tidak boleh kosong!',
            'min' => ':Isian harus diisi minimal :min karakter!'
        ];

        $this->validate($request,[
    		'name' => 'required|min:5',
            'phonenumber' => 'required|min:5',
            'address' => 'required'
        ]);

        Delivery::create([
    		'name' => $request->name,
            'phonenumber' => $request->phonenumber,
            'address' => $request->address
        ]);

    	return redirect('/delivery');
    }

    public function edit($id)
    {
        $delivery = Delivery::find($id);
        return view('edit_delivery', ['delivery' => $delivery]);
    }

    public function delete($id)
    {
        $delivery = Delivery::find($id);
        $delivery->delete();
        return redirect('/delivery');
    }

    public function update($id, Request $request)
    {
        $messages = [
            'required' => ':Isian tidak boleh kosong!',
            'min' => ':Isian harus diisi minimal :min karakter!'
        ];

        $this->validate($request,[
    		'name' => 'required|min:5',
            'phonenumber' => 'required|min:5',
            'address' => 'required'
        ]);

        $delivery = Delivery::find($id);
        $delivery->name = $request->name;
        $delivery->phonenumber = $request->phonenumber;
        $delivery->address = $request->address;
        $delivery->save();

        return redirect('/delivery');

    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;

    		// mengambil data dari table pegawai sesuai pencarian data
		$delivery = DB::table('delivery')
		->where('address','like',"%".$search."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('delivery',['delivery' => $delivery]);

	}


}
