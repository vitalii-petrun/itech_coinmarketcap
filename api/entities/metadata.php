<?php
class Metadata
{
    public $id;
    public $name;
    public $symbol;
    public $slug;
    public $description;
    public $website;
    public $technical_doc;
    public $twitter;
    public $reddit;
    public $message_board;
    public $announcement;
    public $chat;
    public $explorer;
    public $source_code;
    public $logo;
    public $date_added;
    public $date_launched;
    public $tags;
    public $platform;
    public $category;

    function __construct($data)
    {
        $this->id = $data->id;
        $this->name = $data->name;
        $this->symbol = $data->symbol;
        $this->slug = $data->slug;
        $this->description = $data->description;
        $this->website = $data->urls->website;
        $this->technical_doc = $data->urls->technical_doc;
        $this->twitter = $data->urls->twitter;
        $this->reddit = $data->urls->reddit;
        $this->message_board = $data->urls->message_board;
        $this->announcement = $data->urls->announcement;
        $this->chat = $data->urls->chat;
        $this->explorer = $data->urls->explorer;
        $this->source_code = $data->urls->source_code;
        $this->logo = $data->logo;
        $this->date_added = $data->date_added;
        $this->date_launched = $data->date_launched;
        $this->tags = $data->tags;
        $this->platform = $data->platform;
        $this->category = $data->category;
    }
}