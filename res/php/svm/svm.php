<?php

/** @phpstub */
class SVM
{
    const C_SVC = 0;
    const EPSILON_SVR = 3;
    const KERNEL_LINEAR = 0;
    const KERNEL_POLY = 1;
    const KERNEL_PRECOMPUTED = 4;
    const KERNEL_RBF = 2;
    const KERNEL_SIGMOID = 3;
    const NU_SVC = 1;
    const NU_SVR = 4;
    const ONE_CLASS = 2;
    const OPT_C = 206;
    const OPT_CACHE_SIZE = 207;
    const OPT_COEF_ZERO = 205;
    const OPT_DEGREE = 103;
    const OPT_EPS = 203;
    const OPT_GAMMA = 201;
    const OPT_KERNEL_TYPE = 102;
    const OPT_NU = 202;
    const OPT_P = 204;
    const OPT_PROBABILITY = NULL;
    const OPT_PROPABILITY = 105;
    const OPT_SHRINKING = 104;
    const OPT_TYPE = 101;

    /**
     * Construct a new SVM object
     */
    public function __construct()
    {
    }

    /**
     * Test training params on subsets of the training data.
     *
     * @param array $problem
     * @param int $number_of_folds
     *
     * @return float The correct percentage, expressed as a floating point number from 0-1.
     *               In the case of NU_SVC or EPSILON_SVR kernels the mean squared error will
     *               returned instead.
     */
    public function crossvalidate($problem, $number_of_folds)
    {
    }

    /**
     * Return the current training parameters
     *
     * @return array Returns an array of configuration settings.
     */
    public function getOptions()
    {
    }

    /**
     * Set training parameters
     *
     * @param array $params
     *
     * @return bool Return true on success, throws SVMException on error.
     */
    public function setOptions($params)
    {
    }

    /**
     * Create a SVMModel based on training data
     *
     * @param array $problem
     * @param array $weights
     *
     * @return SVMModel Returns an SVMModel that can be used to classify previously unseen data.
     *                  Throws SVMException on error
     */
    public function train($problem, $weights = array())
    {
    }
}