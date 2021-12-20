<?php

namespace App\Repositories\Impl;

use App\Repositories\BaseRepository;

interface PostRepositoryInterface extends BaseRepositoryInterface
{
    public function store($request);

    public function update($id, $request);
}
