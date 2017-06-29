<?php namespace FastFood\Http\Controllers;

use Illuminate\Support\Facades\Session;
use FastFood\Http\Requests;
use FastFood\Http\Controllers\Controller;
use FastFood\Product;
use FastFood\User;
use FastFood\Donhang;
use FastFood\Guest;
use Illuminate\Http\Request;
use FastFood\Http\Requests\UserFormRequest;
use Input;

class FastfoodController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$count = 0;
		$product = Product::All();
		$category = 'home';
		$moinhat = 'background: #75ae31';
		$banchaynhat ='';
		$giatotnhat ='';
		foreach ($product as $p) {
			$count++;
		};

		$product = Product::orderBy('Pid', 'DESC')->paginate(12);
		return view('fastfood.index', compact('product', 'count', 'category', 'moinhat', 'banchaynhat', 'giatotnhat'));
	}

	public function category($category)
	{
		$product = Product::All();
		$moinhat = 'background: #75ae31';
		$banchaynhat ='';
		$giatotnhat ='';
		$count = 0;
		foreach ($product as $p) {
			if($p->Category==$category){
				$count++;
			}
		};
		$product = Product::where('Category', '=', $category)->orderBy('Pid', 'DESC')->paginate(12);
		return view('fastfood.index', compact('product', 'count', 'category', 'banchaynhat', 'giatotnhat', 'moinhat'));
	}

	public function sort($category, $sort)
	{
		if($category!='home'){
			$product = Product::All();
			$count = 0;
			foreach ($product as $p) {
				if($p->Category==$category){
					$count++;
				}
			};
			if($sort=='moi-nhat'){
				$product = Product::where('Category', '=', $category)->orderBy('Pid', 'DESC')->paginate(12);
				$moinhat = 'background: #75ae32';
				$banchaynhat ='';
				$giatotnhat ='';
			}
			if($sort=='ban-chay-nhat'){
				$product = Product::where('Category', '=', $category)->orderBy('Pnow', 'DESC')->paginate(12);
				$banchaynhat = 'background: #75ae32';
				$moinhat ='';
				$giatotnhat='';
			}
			if($sort=='gia-tot-nhat'){
				$product = Product::where('Category', '=', $category)->orderBy('Pcost', 'ASC')->paginate(12);
				$giatotnhat = 'background: #75ae32';
				$banchaynhat ='';
				$moinhat ='';
			}
			return view('fastfood.index', compact('product', 'count', 'category', 'moinhat', 'banchaynhat', 'giatotnhat'));
		}
		else{
			if($category=='home'){
				$product = Product::All();
				$count = 0;
				foreach ($product as $p) {
				$count++;

				};
				if($sort=='moi-nhat'){
					$product = Product::orderBy('Pid', 'DESC')->paginate(12);
					$moinhat = 'background: #75ae32';
					$banchaynhat ='';
					$giatotnhat ='';

				}
				if($sort=='ban-chay-nhat'){
					$product = Product::orderBy('Pnow', 'DESC')->paginate(12);
					$banchaynhat = 'background: #75ae32';
					$moinhat ='';
					$giatotnhat='';
				}
				if($sort=='gia-tot-nhat'){
					$product = Product::orderBy('Pcost', 'ASC')->paginate(12);
					$giatotnhat = 'background: #75ae32';
					$moinhat='';
					$banchaynhat='';
				}
				return view('fastfood.index', compact('product', 'count', 'category', 'moinhat', 'banchaynhat', 'giatotnhat'));
			}
			else{
				return 'Hello world';
			}
		}
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($sanpham)
	{
		$pro = Product::All();
		foreach ($pro as $p) {
			if($p->Pname==$sanpham){
				$moinhat = Product::where('Pid', '>', $p->Pid, 'and', 'Pid', '<', ($p->Pid)+5)->paginate(4);
				return view('fastfood.show', compact('p', 'moinhat'));
			}
		};
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		$user = User::find(\Auth::user()->id);

		return view('fastfood.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, UserFormRequest $request)
	{
		$user = User::find(\Auth::user()->id);
		$category = '';
		if($user->id==\Auth::user()->id){
		$user->update([
			'email' => $request->get('email'),
			'password' => bcrypt($request->get('password')),
			'name' => $request->get('name'),
			'address' => $request->get('address'),
			'phone' => $request->get('phone')
		]);
		}
		if(Session::has('tuan')){
			$sanpham = Session::get('tuan');
			return redirect()->route('fastfood.thanhtoan', compact('sanpham'));
		}
		else{
			return redirect()->route('fastfood.index', compact('category'));
		}


	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($Did)
	{
		$donhang = Donhang::find($Did);
		$Pid = $donhang->Pid;
		$product = Product::find($Pid);
		$product->update([
			'Pnow' => $product->Pnow - $donhang->amount
		]);
		$donhang->delete();
		return redirect()->back();
	}

	public function donhang(){
		$user = User::find(\Auth::user()->id);
		$uid = $user->id;
		$count = 0;
		$donhang = Donhang::where('Uid', '=', $uid)->orderBy('Did', 'DESC')->paginate(12);
        foreach($donhang as $d){
        	$count++;
        }
		return view('fastfood.donhang', compact('donhang','count'));
	}

	public function chitiet($id){
		$donhang = Donhang::All();
		foreach ($donhang as $d) {
			if ($d->Did == $id) {
				return view('fastfood.chitietdonhang', compact('d'));
			}
		}
	}

	public function thanhtoan($sanpham)
	{
		$product = Product::All();
		foreach ($product as $p) {
			if($p->Pname==$sanpham){
				return view('fastfood.thanhtoan', compact('p'));
			}
		};
	}

	public function store($Pid)
	{
		$product = Product::All();
		$soluong = Input::get('soluong');
		foreach ($product as $p) {
			if($p->Pid == $Pid){
				$total = ($p->Pcost)*$soluong;
				if(\Auth::check()){
				Donhang::create([
					'status' => 'Shipping',
					'Pname' => $p->Pname,
					'Pid' => $p->Pid,
					'Pcost' => $p->Pcost,
					'amount' => $soluong,
					'total' => $total,
					'Uid' => \Auth::user()->id
				]);
				$c = Product::find($Pid);
				$c->update([
					'Pnow' => $c->Pnow + $soluong,
				]);
				return redirect()->route('fastfood.donhang');
				}
				else{
					Guest::create([
						'name' => Input::get('name'),
						'address' => Input::get('address'),
						'phone' => Input::get('phone'),
						'status' => 'Shipping',
						'Pname' => $p->Pname,
						'Pcost' => $p->Pcost,
						'Pid' => $p->Pid,
						'Pcost' => $p->Pcost,
						'amount' => $soluong,
						'total' => $total
					]);
					$c = Product::find($Pid);
					$c->update([
					'Pnow' => $c->Pnow + $soluong,
					]);
					Session::put('dathang', "Bạn đã đặt hàng thành công!^^");
					return redirect()->back();
				}


			}
		}
	}

	public function search(){
		$search = Input::get('search');
		$count = 0;
		$count = Product::where('Pname', 'like', '%'.$search."%")->count();
		$product = Product::where('Pname', 'like', '%'.$search."%")->get();
		return view('fastfood.search', compact('product', 'count', 'search'));
	}

}
