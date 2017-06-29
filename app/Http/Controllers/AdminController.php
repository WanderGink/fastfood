<?php namespace FastFood\Http\Controllers;

use FastFood\Http\Requests\Request;
use FastFood\Product;
use FastFood\User;
use FastFood\Donhang;
use FastFood\Guest;
use FastFood\Admin;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function manageUser()
    {
        if(Session::has('admin')){
        $user = User::paginate(10);
        return view('admin.manage_user', compact('user'));
        }
        else{
            return redirect()->route('admin.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function manageProduct()
    {   
        if(Session::has('admin')){
        $product = Product::orderBy('Pid', 'DESC')->paginate(10);
        return view('admin.manage_product', compact('product'));
        }
        else{
            return redirect()->route('admin.login');
        }
    }


    public function showUserCart()
    {   
        if(Session::has('admin')){
        $donhang = Donhang::orderBy('Did', 'DESC')->paginate(10);

        return view('admin.userCart', compact('donhang'));
        }
        else{
            return redirect()->route('admin.login');
        }
    }

    public function showGuestCart()
    {
        if(Session::has('admin')){
        $donhang = Guest::orderBy('Gid', 'DESC')->paginate(10);

        return view('admin.guestCart', compact('donhang'));
        }else{
            return redirect()->route('admin.login');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function showAddProduct()
    {   
        if(Session::has('admin')){
        return view('admin.add_product');
        }else{
            return redirect()->route('admin.login');
        }
    }

    public function addNewProduct() {
        if(Session::has('admin')){
        Product::create([
            'Pname' => Input::get('Pname'),
            'Category' => Input::get('Category'),
            'Pcost' => Input::get('Pcost'),
            'Ptotal' => Input::get('Ptotal'),
            'Plink' => Input::get('Plink'),
            'Pdes' => Input::get('Pdes')
        ]);
        return redirect()->route('admin.manage_product');
        } else{
             return redirect()->route('admin.login');
        }  
    }

    public function deleteUser($id)
    {   
        if(Session::has('admin')){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.manage_user');
        }
        else{
            return redirect()->route('admin.login');
        }
    }

    public function login()
    {
        return view('admin.login');
    }

    public function updateProduct($Pid)
    {   
        if(Session::has('admin')){
        $product = Product::find($Pid);
        $product->update([
            'Pname' => Input::get('Pname'),
            'Category' => Input::get('Category'),
            'Pcost' => Input::get('Pcost'),
            'Ptotal' => Input::get('Ptotal'),
            'Plink' => Input::get('Plink'),
            'Pdes' => Input::get('Pdes')
        ]);
        return redirect()->route('admin.manage_product');
        }else{
            return redirect()->route('admin.login');
        }
    }

    public function destroy($Gid)
    {   
        if(Session::has('admin')){
        $donhang = Guest::find($Gid);
        $Pid = $donhang->Pid;
        $product = Product::find($Pid);
        $product->update([
            'Pnow' => $product->Pnow - $donhang->amount
        ]);
        $donhang->delete();
        return redirect()->back();
        }else{
            return redirect()->route('admin.login');
        }
    }


    public function editProduct($Pid)
    {   
        if(Session::has('admin')){
        $product = Product::find($Pid);
        return view('admin.edit_product', compact('product'));
        }else{
            return redirect()->route('admin.login');
        }
    }

    public function deleteProduct($Pid)
    {   
        if(Session::has('admin')){
        $product = Product::find($Pid);

        $product->delete();

        return redirect()->route('admin.manage_product');
        }else{
            return redirect()->route('admin.login');
        }
    }
    

    //quan ly admin
    public function check()
    {   
        $admin = Admin::All();
        foreach ($admin as $a) {
            if(Input::get('user') == $a->username && md5(Input::get('pass'))==$a->password){
            Session::put('admin', $a->username);
            $admin = Admin::paginate(10);
            return redirect()->route('admin.manage_admin', compact('admin'));
            }
        }
        return redirect()->route('admin.login');
        
    }

    public function logout()
    {
        Session::forget('admin');
        return redirect()->route('admin.login');
    }

    public function showAdmin()
    {   
        if(Session::has('admin')){
            $admin = Admin::paginate(10);
            return view('admin.showAdmin', compact('admin'));
        }
        else{
            return redirect()->route('admin.login');
        }
        
    }

    public function createAdmin()
    {
        if(Session::has('admin')){
            return view('admin.createAdmin');
        }
        else{
            return redirect()->route('admin.login');
        }
    }

    public function store()
    {
        if(Session::has('admin')){
            Admin::create([
                'username' => Input::get('user'),
                'password' => md5(Input::get('pass')),
                'nguoitao' => Session::get('admin')
            ]);
            $admin = Admin::paginate(10);
            return redirect()->route('admin.manage_admin', compact('admin'));
        }
        else{
            return redirect()->route('admin.login');
        }
    }

    public function deleteAdmin($Aid)
    {
        $admin = Admin::find($Aid);
        $admin->delete();
        return redirect()->back();
    }

}
