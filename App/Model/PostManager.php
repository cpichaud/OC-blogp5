<?php

namespace App\Model;

use PDO;
use App\config\connectionDb;
use App\Entity\post;

class PostManager extends connectionDb
{


 

    /**
     * @param string $title
     * @param string $content
     * @param $created_at
     * @param $update_at
     * @param int $comment_id
     * @return int
     */
    public function createPost(string $title, string $content, $created_at, $update_at, int $comment_id, $role)
    {
        $sql = "INSERT INTO post(content, title, created_at, update_at, comment_id, role)  
        VALUES (:content, :title, :created_at, :update_at, :comment_id, :role)" ;
        $r = $this->db->prepare($sql);
        $r->execute([
            ':content' => $content,
            ':title'  => $title,
            ':created_at'     => $created_at,
            ':update_at'     => $update_at,
            ':comment_id'  => $comment_id,
            ':role'      => $role
        ]);

        $new = $this->db->lastInsertId();
        return $new;  
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
        $postId->bindValue(1, $id, PDO::PARAM_INT);
        $postId->execute();

        return new post($postId->fetch());

    }

    // public function findByEmail(string $email)
    // {
    //     $sql = "SELECT * FROM post WHERE email = ?" ;
    //     $postEmail = $this->db->prepare($sql);
    //     $postEmail->bindValue(1, $email, PDO::PARAM_STR);
    //     $postEmail->execute();
    //     $r = $postEmail->fetch();
    //     return new post($r);
    // }

    public function Delete(int $id)
    {
        $sql = "DELETE FROM post WHERE id = ?" ;
        $delete = $this->db->prepare($sql);
        $delete->execute([$id]);
    }
    
}
