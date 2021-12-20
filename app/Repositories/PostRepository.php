<?php

namespace App\Repositories;

use App\Repositories\Impl\PostRepositoryInterface;
use Illuminate\Support\Facades\DB;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    protected $table = "posts";

    public function store($request)
    {
        // TODO: Implement store() method.
         DB::table($this->table)->insert([
            'title' => $request->title,
            'content' => $request->content,
            'post_time' => $request->post_time
        ]);

    }

    public function update($id, $request)
    {
        // TODO: Implement update() method.
        $data = $request->only("title","content","post_time");
        DB::table($this->table)
            ->where('id', $id)
            ->update($data);
            return $data;
    }
}
