<?php

namespace App\Http\Controllers;
use App\DataTables\ProductDataTable;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

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
            'name' => ['required', 'max:20'],
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

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }


    public function show(Product $product)
    {
        //
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

        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }


    public function destroy($id)
    {
        // dd($id);
        Product::destroy($id);
        // dd($id);

        return back()->with('success', 'Product deleted successfully.');
    }
}
