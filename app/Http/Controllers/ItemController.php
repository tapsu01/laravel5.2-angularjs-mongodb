<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Item;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $input = $request->all();
        if ($request->get('search')) {
            $items = Item::where('title', 'LIKE', "%{$request->get('search')}%")->paginate(5);
        } else {
            $items = Item::paginate(5);
        }
        return response($items);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $create = Item::create($input);
        return response($create);
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return response($item);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        unset($input['_id']);
        Item::where('_id', $id)->update($input);
        $item = Item::find($id);
        return response($item);
    }

    public function destroy($id)
    {
        return Item::where('_id', $id)->delete();
    }
}
