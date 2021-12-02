<?php

namespace App\Http\Controllers;

use App\Models\Reactblog;
use Illuminate\Http\Request;

class ReactblogController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $reactblogs = Reactblog::all();
        return response()->json($reactblogs);
    }

    public function show($id)
    {
        $reactblog = Reactblog::find($id);
        return response()->json($reactblog);
    }

    public function update(Request $request, $id)
    {
        $reactblog = Reactblog::findOrFail($id);
        $reactblog->update($request->all());

        return response()->json($reactblog, 200);
    }

    public function store(Request $request)
    {
        $reactblog = Reactblog::create($request->all());

        return response()->json($reactblog, 201);
    }

    public function destroy($id)
    {
        Reactblog::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
