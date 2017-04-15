<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\sch_imp;
use App\shipment_name;
use App\category;
use App\currency;
use App\supplier;
use App\origin;
use App\ship;
use App\forwader;
use App\User;
use Yajra\Datatables\Datatables;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void					
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}
	public function data1()
	{
		$row_tabel3=\DB::table('sch_imp')
		->join('shipment_name','sch_imp.id_shipment_name','=','shipment_name.id_shipment_name')
		->join('supplier','sch_imp.id_supplier','=','supplier.id_supplier')
		->join('category','sch_imp.id_category','=','category.id_category')
		->join('currency','sch_imp.id_currency','=','currency.id_currency')
		->join('forwader','sch_imp.id_forwader','=','forwader.id_forwader')
		->join('origin','sch_imp.id_origin','=','origin.id_origin')
		->join('ship','sch_imp.id_ship','=','ship.id_ship')
		->select(['shipment_name.shipment_name','supplier.supplier','origin.origin','ship.ship','sch_imp.cont_number','sch_imp.etd','sch_imp.eta','sch_imp.eta_aiia','sch_imp.ata_aiia','sch_imp.remark']);
		return Datatables::of($row_tabel3)->make(true);		
	}
	public function sch_imp()
	{
		$row_tabel1=\DB::table('sch_imp')
		->join('shipment_name','sch_imp.id_shipment_name','=','shipment_name.id_shipment_name')
		->join('supplier','sch_imp.id_supplier','=','supplier.id_supplier')
		->join('category','sch_imp.id_category','=','category.id_category')
		->join('currency','sch_imp.id_currency','=','currency.id_currency')
		->join('forwader','sch_imp.id_forwader','=','forwader.id_forwader')
		->join('origin','sch_imp.id_origin','=','origin.id_origin')
		->join('ship','sch_imp.id_ship','=','ship.id_ship')
		->select('*')
		->whereNull('sch_imp.ata_aiia')
		->get();
		$row_tabel2=\DB::table('sch_imp')
		->join('shipment_name','sch_imp.id_shipment_name','=','shipment_name.id_shipment_name')
		->join('supplier','sch_imp.id_supplier','=','supplier.id_supplier')
		->join('category','sch_imp.id_category','=','category.id_category')
		->join('currency','sch_imp.id_currency','=','currency.id_currency')
		->join('forwader','sch_imp.id_forwader','=','forwader.id_forwader')
		->join('origin','sch_imp.id_origin','=','origin.id_origin')
		->join('ship','sch_imp.id_ship','=','ship.id_ship')
		->select('*')
		->whereNotNull('sch_imp.ata_aiia')
		->get();
		$shipment_name=shipment_name::all();
		$category=category::all();
		$currency=currency::all();
		$supplier=supplier::all();
		$origin=origin::all();
		$ship=ship::all();
		$forwader=forwader::all();	
		return view('sch_imp/crud',compact
		('row_tabel1','row_tabel2','shipment_name','category','currency','supplier','origin','ship','forwader'));
	}
	public function store(Request $request)
    {
		sch_imp::create(\Request::all());
		return redirect('/sch_imp');	    	    	    	    			    
	}
	public function update(Request $request, $id)
    {
        $update = sch_imp::findOrFail($id);
        $nama = $request->name;
        $update->$nama = $request->value;
        $update->save();
    }    
	public function del_sch_imp(Request $request,$id)
    {
		sch_imp::findOrFail($id)->delete();
		return redirect('/sch_imp');	    	    	    	    			    
	}
	public function data(Request $request)
    {
		$row=shipment_name::lists('shipment_name','id_shipment_name');
		return $row;	    	    	    	    			    
	}
	public function data2(Request $request)
    {
		$row=supplier::lists('supplier','id_supplier');
		return $row;	    	    	    	    			    
	}
	public function data3(Request $request)
    {
		$row=origin::lists('origin','id_origin');
		return $row;	    	    	    	    			    
	}
	public function data4(Request $request)
    {
		$row=ship::lists('ship','id_ship');
		return $row;	    	    	    	    			    
	}
	public function data5(Request $request)
    {
		$row=category::lists('category','id_category');
		return $row;	    	    	    	    			    
	}
	public function data6(Request $request)
    {
		$row=currency::lists('currency','id_currency');
		return $row;	    	    	    	    			    
	}
	public function data7(Request $request)
    {
		$row=forwader::lists('forwader','id_forwader');
		return $row;	    	    	    	    			    
	}	
	public function edit($id,Request $request)
    {
		$row=\DB::table('sch_imp')
		->join('shipment_name','sch_imp.id_shipment_name','=','shipment_name.id_shipment_name')
		->join('supplier','sch_imp.id_supplier','=','supplier.id_supplier')
		->join('category','sch_imp.id_category','=','category.id_category')
		->join('currency','sch_imp.id_currency','=','currency.id_currency')
		->join('forwader','sch_imp.id_forwader','=','forwader.id_forwader')
		->join('origin','sch_imp.id_origin','=','origin.id_origin')
		->join('ship','sch_imp.id_ship','=','ship.id_ship')
		->select('*')
		->where('sch_imp.id_sch_imp','=',$id)
		->get();
		$shipment_name=shipment_name::all();
		$category=category::all();
		$currency=currency::all();
		$supplier=supplier::all();
		$origin=origin::all();
		$ship=ship::all();
		$forwader=forwader::all();	
		return view('sch_imp/show',compact
		('row','shipment_name','category','currency','supplier','origin','ship','forwader'));
	}
	public function sendEmailReminder(Request $request)
    {
        $user = User::findOrFail(1);

        \Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });
        return redirect('/sch_imp');
    }			
}