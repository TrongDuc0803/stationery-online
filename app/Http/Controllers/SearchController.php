<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        if ($query) {
            // Tìm kiếm trong trường "name" của bảng nhân viên
            $results = Product::where('title', 'like', "%$query%")
                ->get();
        } else {
            $results = Product::all(); // Trả về tất cả dữ liệu nếu không có từ khóa
        }

        return view('products.results', ['results' => $results]);
    }
}
