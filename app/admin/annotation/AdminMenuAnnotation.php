<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2017 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 老猫 <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace app\admin\annotation;

use mindplay\annotations\AnnotationException;
use mindplay\annotations\Annotation;

/**
 * Specifies validation of a string, requiring a minimum and/or maximum length.
 *
 * @usage('method'=>true, 'inherited'=>true)
 */
class AdminMenuAnnotation extends Annotation
{
    /**
     * @var int|null Minimum string length (or null, if no minimum)
     */
    public $remark = '';

    /**
     * @var int|null Maximum string length (or null, if no maximum)
     */
    public $icon = '';

    /**
     * @var int|null Minimum string length (or null, if no minimum)
     */
    public $name = '';

    public $param = '';

    public $parent = '';

    public $display = false;

    public $order = 10000;

    /**
     * Initialize the annotation.
     */
    public function initAnnotation(array $properties)
    {
        parent::initAnnotation($properties);
    }
}
