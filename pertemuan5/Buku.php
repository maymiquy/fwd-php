<?php

class Buku
{
    protected $judul;
    protected $penulis;

    public function __construct($judul, $penulis)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function infoBuku()
    {
        return "*Info Buku* \nJudul: {$this->judul}, \nPenulis: {$this->penulis}";
    }
}
