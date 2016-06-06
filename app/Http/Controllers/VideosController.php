<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\FormTestValidation;

use App\Http\Requests;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::paginate(5);
        return Response::json([
                'data' => $this->transformCollection($videos)
        ], 200);	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $videos = Video::find($id);
 
        if(!$videos){
            return Response::json([
                'error' => [
                    'message' => 'Joke does not exist'
                ]
            ], 404);
        }
 
        return Response::json([
                'data' => $this->transform($videos)
        ], 200);
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	

	private function transformCollection($videos){
	    $videosArray = $videos->toArray();
        return [
            'total' => $videosArray['total'],
            'per_page' => intval($videosArray['per_page']),
            'current_page' => $videosArray['current_page'],
            'last_page' => $videosArray['last_page'],
            'next_page_url' => $videosArray['next_page_url'],
            'prev_page_url' => $videosArray['prev_page_url'],
            'from' => $videosArray['from'],
            'to' =>$videosArray['to'],
            'video' => array_map([$this, 'transform'], $videosArray['data'])
        ];	
	}

	private function transform($videos){
		return [
			   'title' => $videos['title'],
			   'url' => $videos['url']
			];
	}
}
