<?php

class PDOWrapper {
    /**
     * @psalm-taint-sink sql $sql
     */
    public function exec(string $sql) : void {}
}

/** @var string $bad_data */
(new PDOWrapper())->exec($bad_data);
