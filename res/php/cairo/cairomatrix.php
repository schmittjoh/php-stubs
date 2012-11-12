<?php

/** @phpstub */
class CairoMatrix
{
    /**
     * Creates a new CairoMatrix object
     *
     * @param float $xx
     * @param float $yx
     * @param float $xy
     * @param float $yy
     * @param float $x0
     * @param float $y0
     * @param float $xx
     * @param float $yx
     * @param float $xy
     * @param float $yy
     * @param float $x0
     * @param float $y0
     *
     * @return object Returns a new CairoMatrix object that can be used with surfaces, contexts, and patterns.
     */
    public function __construct($xx = 1, $yx = false, $xy = false, $yy = 1, $x0 = false, $y0 = false, $xx = 1, $yx = false, $xy = false, $yy = 1, $x0 = false, $y0 = false)
    {
    }

    /**
     * Creates a new identity matrix
     *
     * @return object Returns a new CairoMatrix object that can be used with surfaces, contexts, and patterns.
     */
    public function initIdentity()
    {
    }

    /**
     * Creates a new rotated matrix
     *
     * @param float $radians
     * @param float $radians
     *
     * @return object Returns a new CairoMatrix object that can be used with surfaces, contexts, and patterns.
     */
    public function initRotate($radians, $radians)
    {
    }

    /**
     * Creates a new scaling matrix
     *
     * @param float $sx
     * @param float $sy
     * @param float $sx
     * @param float $sy
     *
     * @return object Returns a new CairoMatrix object that can be used with surfaces, contexts, and patterns.
     */
    public function initScale($sx, $sy, $sx, $sy)
    {
    }

    /**
     * Creates a new translation matrix
     *
     * @param float $tx
     * @param float $ty
     * @param float $tx
     * @param float $ty
     *
     * @return object Returns a new CairoMatrix object that can be used with surfaces, contexts, and patterns.
     */
    public function initTranslate($tx, $ty, $tx, $ty)
    {
    }

    /**
     * The invert purpose
     *
     * @return void Description...
     */
    public function invert()
    {
    }

    /**
     * The multiply purpose
     *
     * @param CairoMatrix $matrix1
     * @param CairoMatrix $matrix2
     *
     * @return CairoMatrix Description...
     */
    public function multiply($matrix1, $matrix2)
    {
    }

    /**
     * The rotate purpose
     *
     * @param string $sx
     * @param string $sy
     * @param CairoContext $context
     * @param string $angle
     *
     * @return void Description...
     */
    public function rotate($sx, $sy, $context, $angle)
    {
    }

    /**
     * Applies scaling to a matrix
     *
     * @param float $sx
     * @param float $sy
     * @param CairoContext $context
     * @param float $sx
     * @param float $sy
     *
     * @return void
     */
    public function scale($sx, $sy, $context, $sx, $sy)
    {
    }

    /**
     * The transformDistance purpose
     *
     * @param string $dx
     * @param string $dy
     *
     * @return array Description...
     */
    public function transformDistance($dx, $dy)
    {
    }

    /**
     * The transformPoint purpose
     *
     * @param string $dx
     * @param string $dy
     *
     * @return array Description...
     */
    public function transformPoint($dx, $dy)
    {
    }

    /**
     * The translate purpose
     *
     * @param string $tx
     * @param string $ty
     * @param CairoContext $context
     * @param string $x
     * @param string $y
     *
     * @return void Description...
     */
    public function translate($tx, $ty, $context, $x, $y)
    {
    }
}