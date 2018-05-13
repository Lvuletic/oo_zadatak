<?php

class Triangle extends Shape
{
    protected $a;
    protected $b;
    protected $c;
    protected $height; // assuming this is height on $a
    protected $surface;
    protected $circumference;

    public function setA($a) {
        $this->a = $a;
        return $this;
    }

    public function setB($b) {
        $this->b = $b;
        return $this;
    }

    public function setC($c) {
        $this->c = $c;
        return $this;
    }

    public function setHeight($height) {
        $this->height = $height;
        return $this;
    }

    public function getA() {
        return $this->a;
    }

    public function getB() {
        return $this->b;
    }

    public function getC() {
        return $this->c;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getSurface () {
        return $this->surface;
    }

    public function getCircumference () {
        return $this->circumference;
    }

    public function calculateSurface () {
        $this->surface = ($this->a * $this->height) / 2;
    }

    public function calculateCircumference () {
        $this->circumference = $this->a + $this->b + $this->c;
    }
}