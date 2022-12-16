<?php

namespace App\Model;

use PDO;
use App\config\connectionDb;
use App\Entity\Comment;

class CommentManager extends connectionDb
{

    /**
     * @param string $title
     * @param string $content
     * @param $created_at
     * @param $updated_at
     * @param int $user_id
     * @param int $post_id
     * @return int
     */
    public function createComment(string $title, string $content, $created_at, $updated_at, int $user_id, int $post_id)
    {
        $sql = "INSERT INTO comment(content, title, created_at, updated_at, user_id, post_id)  
        VALUES (:content, :title, :created_at, :updated_at, :user_id, :post_id)" ;
        $r = $this->db->prepare($sql);
        $r->execute([
            ':content' => $content,
            ':title'  => $title,
            ':created_at'     => $created_at,
            ':updated_at'     => $updated_at,
            ':user_id'  => $user_id,
            ':post_id' => $post_id
        ]);

        $new = $this->db->lastInsertId();
        return $new;  
    }

    /**
     * @return array
     */
    public function findAll():array
    {
        $comments = [];
        $sql = "SELECT * FROM `comment`" ;
        $r = $this->db->query($sql);
         while ($comment = $r->fetch()) {
            new comment($comment);
            $comments[] = $comment;
            
        }
        return $comments;
    }

    public function findById(int $id)
    {
        $sql = "SELECT * FROM comment WHERE post_id = ?" ;
        $commentId = $this->db->prepare($sql);
        //$commentId->bindValue(1, $id, PDO::PARAM_INT);
        $commentId->execute([$id]);
        $r = $commentId->fetch();
        return $r;

        return new comment($commentId->fetch());

    }

    // public function findByEmail(string $email)
    // {
    //     $sql = "SELECT * FROM comment WHERE email = ?" ;
    //     $commentEmail = $this->db->prepare($sql);
    //     $commentEmail->bindValue(1, $email, PDO::PARAM_STR);
    //     $commentEmail->execute();
    //     $r = $commentEmail->fetch();
    //     return new comment($r);
    // }

    public function Delete(int $id)
    {
        $sql = "DELETE FROM comment WHERE id = ?" ;
        $delete = $this->db->prepare($sql);
        $delete->execute([$id]);
    }
    
}
