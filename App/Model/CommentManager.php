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
     * @param $update_at
     * @param int $user_id
     * @return int
     */
    public function createComment(string $title, string $content, $created_at, $update_at, int $user_id)
    {
        $sql = "INSERT INTO comment(content, title, created_at, update_at, user_id, role)  
        VALUES (:content, :title, :created_at, :update_at, :user_id, :role)" ;
        $r = $this->db->prepare($sql);
        $r->execute([
            ':content' => $content,
            ':title'  => $title,
            ':created_at'     => $created_at,
            ':update_at'     => $update_at,
            ':user_id'  => $user_id,
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
        $sql = "SELECT * FROM comment WHERE id = ?" ;
        $commentId = $this->db->prepare($sql);
        $commentId->bindValue(1, $id, PDO::PARAM_INT);
        $commentId->execute();

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
