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
     * @param int $validate
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
            ':post_id' => $post_id,
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
        $sql = " SELECT comment.*, user.firstname FROM comment INNER JOIN user ON comment.user_id = user.id   WHERE post_id = ?" ;
        $commentId = $this->db->prepare($sql);
        $commentId->execute([$id]);
        $r = $commentId->fetchAll();
        return $r;

        return new comment($commentId->fetch());
    }

    public function Delete(int $id)
    {
        $sql = "DELETE FROM comment WHERE id = ?" ;
        $delete = $this->db->prepare($sql);
        $delete->execute([$id]);
    }

     /**
     * @param int $id
     * @return int
     */
    public function validateComment(int $id)
    {
        $sql = "UPDATE comment SET validate = 1 WHERE id= :id";

        $r = $this->db->prepare($sql);  
        $r->bindValue(':id', $id, PDO::PARAM_INT);
        $r->execute();
    }
}
