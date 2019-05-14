<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Slide;
use App\Product;
use App\User;
use App\TypeProduct;
use App\Bill;

class PagesController extends Controller
{
    // PAGES
    public function getIndex()
    {
        $slide = Slide::all();
        $new_products = Product::limit(4)->get();
        $top_products = Product::limit(8)->get();
        return view('pages.index', compact('slide', 'new_products', 'top_products'));
    }

    public function getProducts()
    {
        return view('pages.products');
    }

    public function getProductDetail($id)
    {
        $product_detail = Product::find($id);
        $related_products = Product::limit(3)->get();
        return view('pages.product-detail', compact('product_detail', 'related_products'));
    }

    public function getProductType($id)
    {
        $current_type = TypeProduct::find($id);
        $products = Product::where('id_type', $id)->get();
        $top_products = Product::limit(3)->get();
        return view('pages.product-type', compact('current_type', 'products', 'top_products'));
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function getAbout()
    {
        return view('pages.about');
    }

    // ADMIN PAGES

    // TABLE users
    public function getTableUsers()
    {
        $users = User::all();
        return view('admin.tables.users.users', compact('users'));
    }

    // TABLE type_procucts

    public function getTableCategories()
    {
        $types = TypeProduct::all();
        return view('admin.tables.categories', compact('types'));
    }

    public function deleteTypeProduct($id)
    {
        $type = TypeProduct::find($id);
        if ($type->delete()) {
            return redirect()->back()->with('success', 'Xóa danh mục sản phẩm thành công!');
        } else {
            return redirect()->back()->with('failed', 'Xóa danh mục sản phẩm không thành công!');
        }
    }

    // TABLE products

    public function getTableProducts()
    {
        $products = Product::all();
        return view('admin.tables.products', compact('products'));
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if ($product->delete()) {
            return redirect()->back()->with('success', 'Xóa sản phẩm thành công!');
        } else {
            return redirect()->back()->with('failed', 'Xóa sản phẩm không thành công!');
        }
    }

    // public function getTableOrders()
    // {
    //     return view('admin.tables.orders');
    // }

    // TABLE bills

    public function getTableBills()
    {
        $bills = DB::table('bills')
            ->join('users', 'users.id', '=', 'bills.id_customer')
            ->get(['bills.*', 'users.full_name']);
        return view('admin.tables.bills', compact('bills'));
    }

    public function deleteBill($id)
    {
        $bill = Bill::find($id);
        if ($bill->delete()) {
            return redirect()->back()->with('success', 'Xóa đơn hàng thành công!');
        } else {
            return redirect()->back()->with('failed', 'Xóa đơn hàng không thành công!');
        }
    }
}
