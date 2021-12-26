<?php
namespace app\model;

use app\core\Model;

use R;

class PostModel extends Model
{

    public array $attributes = [
        'title'=>'',
        'content'=>'',
        'title_img'=>'',
        'is_published'=>'',
        'category_id'=>'',
        'user_id' => ''
    ];

    public function getUserPostsCount($userId): int
    {
        return $count = R::count('posts', 'user_id = ?',[$userId]);
    }

    public function getUserPosts($userId): array
    {
        return $posts = R::findAll('posts', 'user_id = ?', [$userId]);
    }

    public function delete($id){
        if($postDel = R::load('posts', $id)){
            R::trash($postDel);
            return true;
        }
    }
}