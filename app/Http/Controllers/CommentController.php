<?php

namespace App\Http\Controllers;

use App\DataTables\CommentDataTable;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index(CommentDataTable $dataTables)
    {
        return $dataTables->render('Admin.Pages.comment.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Comment $comment)
    {
    }


    public function edit(Comment $comment)
    {
        //
    }


    public function update(Request $request, Comment $comment)
    {
        //
    }


    public function destroy($id)
    {
        $user = Comment::findOrFail($id);
        $user->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
