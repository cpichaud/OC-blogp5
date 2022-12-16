<?php

namespace App\Entity;



class Comment
{
    private $id;
    private $content;
    private $title;
    private $created_at;
    private $updated_at;


    function __construct()
    {
    }
    
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

    public function getupdated_at()
    {
        return $this->updated_at;
    }
    public function setupdated_at($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    public function __toString()
    {
        
    }
}
