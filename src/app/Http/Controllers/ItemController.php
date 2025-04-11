<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index(){

        $images = DB::table('item_image as im')
            ->join('item', 'im.item_id', '=', 'item.id')
            ->get();

        return view('index', compact('images'));
    }

    public function detail($item_id)
    {
        $item_detail = DB::table('item')
        // $item_detail = item::select('item.*','item_image.file_name','category.category_name',
        // 'item_state.item_state',
        // 'payment_method.payment_method',
        // 'comment.comment_details' )
        ->where('item.id', '=', $item_id)
        ->join('item_image', 'item.id', '=', 'item_image.item_id')
        ->join('category', 'item.category_id', '=', 'category.id')
        ->join('item_state', 'item.item_state_id', '=', 'item_state.id')
        ->join('payment_method', 'item.payment_method_id', '=', 'payment_method.id')
        // ->join('comment', 'item.id', '=', 'comment.comment_item_id')
        ->get();
        return view('detail',compact('item_detail'));
    }
}