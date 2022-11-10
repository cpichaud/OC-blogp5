<?php

namespace App\Entity;



class Comment
{
    private $id;
    private $content;
    private $title;
    private $created_at;
    private $update_at;


    public function getId():int
    {
        return $this->id;
    }

    public function getTitle():string
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent():string
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getCreated_at():string
    {
        return $this->created_at;
    }
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getUpdate_at()
    {
        return $this->update_at;
    }
    public function setUpdate_at($update_at)
    {
        $this->update_at = $update_at;
    }

    public function __toString()
    {
        
    }
}
