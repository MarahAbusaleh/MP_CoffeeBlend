<?php

namespace App\Http\Controllers;

use App\DataTables\CategoryDataTable;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{

    public function index(CategoryDataTable $dataTables)
    {
        return $dataTables->render('Admin.Pages.category.index');
    }


    public function create()
    {
        return view('Admin.Pages.category.create');
    }


    public function store(Request $request)
    {
        // Data Validate
        $request->validate([
            'name' => ['required', 'max:20'],
            'image1' => ['required', 'image', 'max:4192'],
        ]);

        $relativeImagePath1 = null;
        if ($request->hasFile('image1')) {
            $newImageName1 = uniqid() . '-' . $request->input('name') . '.' . $request->file('image1')->extension();
            $relativeImagePath1 = 'assets/images/' . $newImageName1;
            $request->file('image1')->move(public_path('assets/images'), $newImageName1);
        }

        Category::create([
            'name' => $request->input('name'),
            'image1' => $relativeImagePath1,
        ]);

        $notification = array(
            'message' => 'Category Added Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('category.index')->with($notification);
    }



    public function show(Category $category)
    {
        $categories = Category::all();
        return view('Pages.shop', compact('categories'));
    }


    public function showProducts($id)
    {
        $categories = Category::all();
        $products = Product::where('category_id', $id)->paginate(3);
        $allProducts = Product::latest()->get();
        return view('Pages.subcategories', compact('categories', 'products', 'allProducts'));
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('Admin.Pages.category.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        // Data Validate
        $request->validate([
            'name' => ['required', 'max:20'],
            'image1' => ['image', 'max:4192'],
        ]);

        $data = $request->except(['_token', '_method']);

        $relativeImagePath1 = null;
        if ($request->hasFile('image1')) {
            $newImageName1 = uniqid() . '-' . $request->input('name') . '.' . $request->file('image1')->extension();
            $relativeImagePath1 = 'assets/images/' . $newImageName1;
            $request->file('image1')->move(public_path('assets/images'), $newImageName1);
            $data['image1'] = $relativeImagePath1;
        }

        Category::where('id', $id)->update($data);

        $notification = array(
            'message' => 'Category Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('category.index')->with($notification);
    }


    public function destroy($id)
    {
        $user = Category::findOrFail($id);
        $user->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
