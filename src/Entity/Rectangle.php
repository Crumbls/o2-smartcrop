<?php

namespace O2Group\SmartCrop\Entity;

class Rectangle
{
    public $x;
    public $y;
    public $x2;
    public $y2;

    public function __construct(int $x, int $y, int $width, int $height)
    {
        $this->x = $x;
        $this->y = $y;
        $this->x2 = $this->x + $width;
        $this->y2 = $this->y + $height;

    }

    public function canFit(Rectangle $in) {
        return (
            $this->x2 - $this->x > $in->x2 - $in->x
            &&
            $this->y2 - $this->y > $in->y2 - $in->y
        );
        print_r($this);
        print_r($in);exit;
    }


    public function contains(Rectangle $in)
    {
        return (
            $this->x <= $in->x
            &&
            $this->y <= $in->y
            &&
            $this->x2 >= $in->x2
            &&
            $this->y2 >= $in->y2
        );
    }

    public function intersects(Rectangle $in) {
        print_r($in);
        exit;
    }
}