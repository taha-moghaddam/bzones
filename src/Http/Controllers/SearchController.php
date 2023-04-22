<?php

namespace Bikaraan\BZones\Http\Controllers;

use Bikaraan\BZones\Http\Resources\ZoneResource;
use Bikaraan\BZones\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'q' => 'required|min:2',
        ]);

        $q = trim($request->input('q'));

        $results = Zone::where('name', 'like', "%$q%")
            ->whereIsLeaf()
            ->with('ancestors')
            ->get();

        return ZoneResource::collection($results);
    }
}
