<?php

require_once 'Buku.php';

class BukuDigital extends Buku
{
    protected $ukuranFile;

    public function __construct($judul, $penulis, $ukuranFile)
    {
        parent::__construct($judul, $penulis);
        $this->ukuranFile = $ukuranFile;
    }

    public function infoBuku()
    {
        return "\n\n*Info Buku Digital* \nJudul: {$this->judul}, \nPenulis: {$this->penulis}, \nUkuran File: {$this->ukuranFile}";
    }
}
