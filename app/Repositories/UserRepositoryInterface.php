<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function all();

    public function store($restore);

    public function destroy($id);
}