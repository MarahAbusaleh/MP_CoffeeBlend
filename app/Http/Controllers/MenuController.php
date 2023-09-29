<?php

namespace App\Http\Controllers;

use App\DataTables\MenuDataTable;
use App\Models\Menu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MenuController extends Controller
{
    public function index(MenuDataTable $dataTables)
    {
        return $dataTables->render('Admin.Pages.menu.index');
    }

    public function create()
    {
        return view('Admin.Pages.menu.create');
    }


    public function store(Request $request)
    {
        // Data Validate
        $request->validate([
            'name' => ['required', 'max:20'],
            'price' => ['required', 'numeric', 'min:0'],
            'description' => ['required', 'string'],
            'type' => ['required'],
            'image' => ['required', 'image', 'max:4192'],
        ]);

        $relativeImagePath = null;
        if ($request->hasFile('image')) {
            $newImageName1 = uniqid() . '-' . $request->input('name') . '.' . $request->file('image')->extension();
            $relativeImagePath = 'assets/images/' . $newImageName1;
            $request->file('image')->move(public_path('assets/images'), $newImageName1);
        }

        Menu::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'type' => $request->input('type'),
            'image' => $relativeImagePath,
        ]);

        Alert::success('success', 'Item Added Successfully');
        return redirect()->route('menu.index');
    }


    public function show(Menu $menu)
    {
        //
    }


    public function edit($id)
    {
        $item = Menu::findOrFail($id);
        return view('Admin.Pages.menu.edit', compact('item'));
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

        Menu::where('id', $id)->update($data);

        Alert::success('success', 'Item updated Successfully');

        return redirect()->route('menu.index');
    }


    public function destroy($id)
    {
        $user = Menu::findOrFail($id);
        $user->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
