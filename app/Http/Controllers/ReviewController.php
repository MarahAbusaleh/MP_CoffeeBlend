<?php

namespace App\Http\Controllers;

use App\DataTables\ReviewDataTable;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index(ReviewDataTable $dataTables)
    {
        return $dataTables->render('Admin.Pages.review.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Review $review, $product_id)
    {
        $Reviews = Review::where();
        dd($Reviews);
    }


    public function edit(Review $review)
    {
        //
    }


    public function update(Request $request, Review $review)
    {
        //
    }


    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
