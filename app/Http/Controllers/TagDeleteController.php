<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Tag;

final class TagDeleteController extends Controller
{
    public function __invoke(string $id)
    {
        Tag::find($id)->delete();

        return redirect('/');
    }
}
