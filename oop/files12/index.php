<?php
    require_once 'modules/Figure.php';
    require_once 'modules/FiguresCollection.php';
    require_once 'modules/Quadrant.php';
    require_once 'modules/Rectangle.php';

    $figuresCollection = new FiguresCollection;
    $figuresCollection->addFigure(new Quadrant(2));
    $figuresCollection->addFigure(new Quadrant(3));

    $figuresCollection->addFigure(new Rectangle(2, 3));
    $figuresCollection->addFigure(new Rectangle(3, 4));

    echo $figuresCollection->getTotalSquare();