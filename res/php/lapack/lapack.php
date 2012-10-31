<?php

/** @phpstub */
class Lapack
{
    /**
     * This function returns the eigenvalues for a given square matrix
     *
     * @param array $a
     * @param array $left
     * @param array $right
     *
     * @return array Returns an array of arrays representing the eigenvalues for the array.
     */
    public function eigenValues($a, $left = array(), $right = array())
    {
    }

    /**
     * Return an identity matrix
     *
     * @param int $n
     *
     * @return array Will return a an array of n arrays, each containing n entries. The diagonals of the matrix will be 1s, the other positions 0.
     */
    public function identity($n)
    {
    }

    /**
     * Calculate the linear least squares solution of a matrix using QR factorisation
     *
     * @param array $a
     * @param array $b
     *
     * @return array Array of the solution matrix
     */
    public function leastSquaresByFactorisation($a, $b)
    {
    }

    /**
     * Solve the linear least squares problem, using SVD
     *
     * @param array $a
     * @param array $b
     *
     * @return array Returns the solution as an array of arrays.
     */
    public function leastSquaresBySVD($a, $b)
    {
    }

    /**
     * Calculate the inverse of a matrix
     *
     * @param array $a
     *
     * @return array Inverted matrix (array of arrays).
     */
    public function pseudoInverse($a)
    {
    }

    /**
     * Calculated the singular values of a matrix
     *
     * @param array $a
     *
     * @return array The singular values
     */
    public function singularValues($a)
    {
    }

    /**
     * Solve a system of linear equations
     *
     * @param array $a
     * @param array $b
     *
     * @return array Matrix X
     */
    public function solveLinearEquation($a, $b)
    {
    }
}