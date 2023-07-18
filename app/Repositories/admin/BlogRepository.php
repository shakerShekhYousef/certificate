<?php

namespace App\Repositories\admin;

use App\Exceptions\GeneralException;
use App\Models\Blog;
use App\Repositories\BaseRepository;
use App\Traits\UploadFile;
use Illuminate\Support\Facades\DB;

class BlogRepository extends BaseRepository
{
    use UploadFile;

    public function model()
    {
        return Blog::class;
    }

    public function create(array $data)
    {
        return DB::transaction(function () use ($data){
            $blog = parent::create([
                'title_en'=>$data['title_en'],
                'title_ar'=>$data['title_ar'],
                'body_en'=>$data['body_en'],
                'body_ar'=>$data['body_ar'],
                'image'=>$this->UploadFile(
                    $data['image'],
                    BLOG_IMG_PATH),
                'user_id'=>auth()->id(),
            ]);
            return $blog;
        });
        throw new GeneralException('error');
    }
//isset($data['image']) ? $this->Updatefile(
//$data['image'],
//BLOG_IMG_PATH.'/'.$data['title'],$blog->image) ,$blog->image)
    public function update(Blog $blog,array $data){
        return DB::transaction(function () use ($blog,$data){
           if ($blog->update([
               'title_en'=>$data['title_en'] ?? $blog->title_en,
               'title_ar'=>$data['title_ar'] ?? $blog->title_ar,
               'body_en'=>$data['body_en'] ?? $blog->body_en,
               'body_ar'=>$data['body_ar'] ?? $blog->body_ar,
               'image'=>isset($data['image']) ? $this->UploadFile($data['image'],
                   BLOG_IMG_PATH) : $blog->image
           ])){
               return $blog;
           }
            throw new GeneralException('error');
        });

    }
}
