<?php

class Post
{
    public int $Id;
    public int $AuthorId;
    public string $Title;
    public string $Description;
    public DateTime $CreateDate;
    public ?string $ImagePath;
    public int $CategoryId;
}