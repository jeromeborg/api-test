<?php

namespace App\Http\Controllers;

use App\Models\Reactblog;
use Illuminate\Http\Request;
use App\Http\Resources\ReactblogResource;

class ReactblogController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * @OA\Get(
     *     path="/api/reactblogs",
     *     operationId="index reactblogs",
     *     tags={"endpoints"},
     *     @OA\Response(
     *         response="200",
     *         description="Returns some list of reactblogs",
     *         @OA\JsonContent(
     *              type="array",
     *             @OA\Items(ref="#/components/schemas/Reactblog")
     *          ),
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Error: Bad request. No required parameters.",
     *     ),
     * )
     */
    public function index()
    {
        $reactblogs = ReactblogResource::collection(Reactblog::all());
        return response()->json($reactblogs);
    }

    /**
     * @OA\Get(
     *     path="/api/reactblogs/{id}",
     *     operationId="show reactblogs/id",
     *     tags={"endpoints"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="The id parameter in path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Returns some sample reactblog",
     *         @OA\JsonContent(
     *              type="array",
     *             @OA\Items(ref="#/components/schemas/Reactblog")
     *          ),
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Error: Bad request. When required parameters were not supplied.",
     *     ),
     * )
     */
    public function show($id)
    {
        $reactblog = new ReactblogResource(Reactblog::find($id));
        return response()->json($reactblog);
    }

    public function update(Request $request, $id)
    {
        $reactblog = Reactblog::findOrFail($id);
        $reactblog->update($request->all());

        return response()->json($reactblog, 200);
    }

    /**
     * Add a new reactblog to the store
     * 
     * @OA\Post(
     *     path="/api/reactblogs",
     *     tags={"endpoint"},
     *     operationId="store reactblog",
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     
     *     requestBody={"$ref": "#/components/requestBodies/Reactblog"}
     * )
     */
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
