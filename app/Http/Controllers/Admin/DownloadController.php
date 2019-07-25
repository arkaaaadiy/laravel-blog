<?php

namespace App\Http\Controllers\Admin;

use App\Download;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DownloadController extends Controller
{
   

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file->store('uploads', 'public');

        $download = Download::create([
            'title' => $request->title,            
            'path' => $path,
            'mime' => $request->file->getMimeType(),
            'size' => $request->file->getSize(),
        ]);

        return $download->id;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Download $download)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function destroy(Download $download)
    {
        if (! \Storage::disk('public')->delete($download->path)) {
            return;
        }

        if ($download->delete()) {
            return ['result' => true];
        }
    }
}
