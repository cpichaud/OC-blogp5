<?php

namespace App\Model;

use PDO;
use App\config\connectionDb;
use App\Entity\post;
use DateTime;

class PostManager extends connectionDb
{
    /**
     * @param string $title
     * @param string $content
     * @param $created_at
     * @param $update_at
     * @param $comment_id
     * @param int $user_id
     * @return int
     */
    public function createPost(string $title, string $content, $created_at, $update_at, int $user_id, $comment_id)
    {
        $sql = "INSERT INTO post(content, title, created_at, update_at, user_id, comment_id)  
        VALUES (:content, :title, :created_at, :update_at, :user_id, :comment_id)" ;
        $r = $this->db->prepare($sql);
        $r->execute([
            ':content'    => $content,
            ':title'      => $title,
            ':created_at' => $created_at,
            ':update_at'  => $update_at,
            ':comment_id' => $comment_id,
            ':user_id'    => $user_id
        ]);

        $new = $this->db->lastInsertId();
        return $new;  
    }

    /**
     * @param int $id
     * @param string $title
     * @param string $content
     * @param $update_at
     * @param int $user_id
     * @return int
     */
    public function editPost(int $id, string $title, string $content, $update_at, int $user_id)
    {
        $sql = "UPDATE post SET 
                        content = :content, 
                        title = :title,  
                        update_at = :update_at, 
                        user_id = :user_id 
                WHERE id = :id";

        $r = $this->db->prepare($sql);
        $date = new DateTime();
        
        $r->bindValue(':id', $id, PDO::PARAM_INT);
        $r->bindValue(':content', $content);
        $r->bindValue(':title', $title);
        $r->bindValue(':update_at', $update_at);
        $r->bindValue(':user_id', $user_id);

        $r->execute();
    }

    /**
     * @return array
     */
    public function findAll():array
    {
        $posts = [];
        $sql = "SELECT * FROM `post`" ;
        $r = $this->db->query($sql);
         while ($post = $r->fetch()) {
            new post($post);
            $posts[] = $post;
            
        }
        return $posts;
    }


    public function findById(int $id)
    {
        $sql = "SELECT * FROM post WHERE id = ?" ;
        $postId = $this->db->prepare($sql);
        //$postId->bindValue(1, $id, PDO::PARAM_INT);
        $postId->execute([$id]);
        $r = $postId->fetch();
        return $r;

    }

    public function Delete(int $id)
    {
        $sql = "DELETE FROM post WHERE id = ?" ;
        $delete = $this->db->prepare($sql);
        $delete->execute([$id]);
    }
    
}
