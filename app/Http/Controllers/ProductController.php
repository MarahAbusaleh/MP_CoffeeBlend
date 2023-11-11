<?php

namespace App\Http\Controllers;

use App\DataTables\ProductDataTable;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function index(ProductDataTable $dataTables)
    {
        return $dataTables->render('Admin.Pages.product.index');
    }

    public function create()
    {
        $category = Category::all();

        return view('Admin.Pages.product.create', compact('category'));
    }


    public function store(Request $request)
    {
        // Data Validate
        $request->validate([
            'name' => ['required', 'max:40'],
            'price' => ['required', 'numeric', 'min:0'],
            'description' => ['required', 'string'],
            'category' => ['required'],
            'image' => ['required', 'image', 'max:4192'],
        ]);

        $relativeImagePath = null;
        if ($request->hasFile('image')) {
            $newImageName1 = uniqid() . '-' . $request->input('name') . '.' . $request->file('image')->extension();
            $relativeImagePath = 'assets/images/' . $newImageName1;
            $request->file('image')->move(public_path('assets/images'), $newImageName1);
        }

        Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category'),
            'image' => $relativeImagePath,
        ]);

        Alert::success('success', 'Product Added Successfully');
        return redirect()->route('product.index');
    }


    public function show($category_id, $product_id)
    {
        $product = Product::find($product_id);
        $Items = Product::where('category_id', $category_id)->inRandomOrder()->take(4)->get();
        $reviews = Review::where('product_id', $product_id)->get();
        return view('Pages.product-single2', compact('product', 'Items', 'reviews'));
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('Admin.Pages.product.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        // Data Validate
        $request->validate([
            'name' => ['required', 'max:20'],
            'price' => ['required', 'numeric', 'min:0'],
            'description' => ['required', 'string'],
            'image' => ['image', 'max:4192'],
        ]);

        $data = $request->except(['_token', '_method']);

        $relativeImagePath = null;
        if ($request->hasFile('image')) {
            $newImageName = uniqid() . '-' . $request->input('name') . '.' . $request->file('image')->extension();
            $relativeImagePath = 'assets/images/' . $newImageName;
            $request->file('image')->move(public_path('assets/images'), $newImageName);
            $data['image'] = $relativeImagePath;
        }

        Product::where('id', $id)->update($data);

        Alert::success('success', 'Product Updated Successfully');
        return redirect()->route('product.index');
    }


    public function AddReview(Request $request, $user_id, $product_id)
    {
        // Data Validate
        $request->validate([
            'comment' => 'required|string',
            'rating' => ['required', 'integer', Rule::in([1, 2, 3, 4, 5])],
        ]);


        Review::create([
            'comment' => $request->input('comment'),
            'rating' => $request->input('rating'),
            'user_id' => $user_id,
            'product_id' => $product_id
        ]);

        return redirect()->back();
    }


    public function destroy($id)
    {
        $user = Product::findOrFail($id);
        $user->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
