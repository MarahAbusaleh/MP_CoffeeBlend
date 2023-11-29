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
            // 'image2' => ['required', 'image', 'max:4192'],
            // 'image3' => ['required', 'image', 'max:4192'],
        ]);

        $relativeImagePath1 = null;
        if ($request->hasFile('image1')) {
            $newImageName1 = uniqid() . '-' . $request->input('name') . '.' . $request->file('image1')->extension();
            $relativeImagePath1 = 'assets/images/' . $newImageName1;
            $request->file('image1')->move(public_path('assets/images'), $newImageName1);
        }

        // $relativeImagePath2 = null;
        // if ($request->hasFile('image2')) {
        //     $newImageName2 = uniqid() . '-' . $request->input('name') . '.' . $request->file('image2')->extension();
        //     $relativeImagePath2 = 'assets/images/' . $newImageName2;
        //     $request->file('image2')->move(public_path('assets/images'), $newImageName2);
        // }

        // $relativeImagePath3 = null;
        // if ($request->hasFile('image3')) {
        //     $newImageName3 = uniqid() . '-' . $request->input('name') . '.' . $request->file('image3')->extension();
        //     $relativeImagePath3 = 'assets/images/' . $newImageName3;
        //     $request->file('image3')->move(public_path('assets/images'), $newImageName3);
        // }

        Category::create([
            'name' => $request->input('name'),
            'image1' => $relativeImagePath1,
            // 'image2' => $relativeImagePath2,
            // 'image3' => $relativeImagePath3,
        ]);

        Alert::success('success', 'Category Added Successfully');

        return redirect()->route('category.index');
    }



    public function show(Category $category)
    {
        $categories = Category::all();
        return view('Pages.shop', compact('categories'));
    }


    public function showProducts($id)
    {
        $categories = Category::all();
        $products = Product::where('category_id', $id)->get();
        $allProducts = Product::latest()->paginate(3);
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
            // 'image2' => ['image', 'max:4192'],
            // 'image3' => ['image', 'max:4192'],
        ]);

        $data = $request->except(['_token', '_method']);

        $relativeImagePath1 = null;
        if ($request->hasFile('image1')) {
            $newImageName1 = uniqid() . '-' . $request->input('name') . '.' . $request->file('image1')->extension();
            $relativeImagePath1 = 'assets/images/' . $newImageName1;
            $request->file('image1')->move(public_path('assets/images'), $newImageName1);
            $data['image1'] = $relativeImagePath1;
        }

        // $relativeImagePath2 = null;
        // if ($request->hasFile('image2')) {
        //     $newImageName2 = uniqid() . '-' . $request->input('name') . '.' . $request->file('image2')->extension();
        //     $relativeImagePath2 = 'assets/images/' . $newImageName2;
        //     $request->file('image2')->move(public_path('assets/images'), $newImageName2);
        //     $data['image2'] = $relativeImagePath2;
        // }

        // $relativeImagePath3 = null;
        // if ($request->hasFile('image3')) {
        //     $newImageName3 = uniqid() . '-' . $request->input('name') . '.' . $request->file('image3')->extension();
        //     $relativeImagePath3 = 'assets/images/' . $newImageName3;
        //     $request->file('image3')->move(public_path('assets/images'), $newImageName3);
        //     $data['image3'] = $relativeImagePath3;
        // }

        Category::where('id', $id)->update($data);

        Alert::success('success', 'Category Updated Successfully');

        return redirect()->route('category.index');
    }


    public function destroy($id)
    {
        $user = Category::findOrFail($id);
        $user->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
