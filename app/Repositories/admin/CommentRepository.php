<?php

namespace App\Repositories\admin;

use App\Exceptions\GeneralException;
use App\Models\Comment;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class CommentRepository extends BaseRepository
{
    public function model()
    {
        return Comment::class;
    }

    public function create(array $data)
    {
        return DB::transaction(function () use ($data){
            $comment = parent::create([
                'email'=>$data['email'],
                'name'=>$data['name'],
                'website'=>$data['website'],
                'comment'=>$data['comment'],
                'blog_id'=>$data['blog_id']
            ]);
            return $comment;
        });
        throw new GeneralException('error');
    }
}
