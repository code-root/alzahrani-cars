<?php

namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Api\BookController;
use App\Models\Book\Author;
use App\Models\Book\AuthorRating;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function language() {
        $language = session('language', 'en');
        if ($language === 'ar') {
        return '_ar';
        } else {
            return '_en';
    }

}

    public function getAll(Request $request) {
        $data = Page::where('id' , $request->page_id)->first();
        $d = 'description'.$this->language();
        $m = 'meta'.$this->language();
        return response()->json([
            'name'=>$data->nameLanguage() ,
            'description'=>$data->$d ,
            'meta'=>$data->$m ,
        ]);
    }

        public function getIds () {
        return Page::select('name_en' , 'id')->get();
        }

        public function getPage (Request $request) {
        return Page::where('id' , 'LIKE' , $request->id)->first();
        }

        public function index()
    {
        $pages = Page::all();
        return view('dashboard.pages.edit', compact('pages'));
    }

    
    public function showPage(Request $request) {
    
        $page = Page::findOrFail($request->id);
          $pages = Page::all();

        return view('home.page', compact('page' , 'pages'));
    }
    public function show(Request $request) {
    
        $page = Page::findOrFail($request->id);
        return response()->json($page);
    }



    public function update(Request $request)
    {
        $data = $request->validate([
            'meta_ar' => 'nullable|string',
            'meta_en' => 'nullable|string',
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'description_ar' => 'nullable|string',
            'description_en' => 'nullable|string',
        ]);

        $page = Page::findOrFail($request->id);
        $page->update($data);

        return response()->json(['message' => 'Page updated successfully']);
    }
}
