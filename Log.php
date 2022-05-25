<?php

require_once "Config.php";

class Log
{
    protected $db;
    protected int $id;
    protected int $user_id;
    protected DateTime $date;
    protected string $command;
    protected string $status;
    protected string $error_log;

    public function __construct($user_id, $command, $status, $error_log) {
        $this->db = Config::instance();
        $this->user_id = $user_id;
        $this->command = $command;
        $this->status = $status;
        $this->error_log = $error_log;
    }

    public function save(): void {
        $this->db->run("INSERT INTO logs (`user_id`, `command`, `status`, `error_log`) VALUES (?, ?, ?, ?)", [$this->user_id, $this->command, $this->status, $this->error_log]);
    }
}