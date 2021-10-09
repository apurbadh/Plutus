<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Varbox\Contracts\PageModelContract;

class PagesController extends Controller
{
    /**
     * @var PageModelContract
     */
    protected $page;

    /**
     * @param Request $request
     * @set Page $page
     */
    public function __construct(Request $request)
    {
        $this->page = $request->route()->action['model'] ?? null;

        if (!($this->page && $this->page->exists) || $this->page->isDrafted()) {
            abort(404);
        }
    }

    /**
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('pages.show')->with([
            'page' => $this->page
        ]);
    }
}
