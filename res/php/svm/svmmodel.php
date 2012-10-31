<?php

/** @phpstub */
class SVMModel
{
    /**
     * Construct a new SVMModel
     *
     * @param string $filename
     */
    public function __construct($filename = NULL)
    {
    }

    /**
     * Returns true if the model has probability information
     *
     * @return bool Return a boolean value
     */
    public function checkProbabilityModel()
    {
    }

    /**
     * Get the labels the model was trained on
     *
     * @return array Return an array of labels
     */
    public function getLabels()
    {
    }

    /**
     * Returns the number of classes the model was trained with
     *
     * @return int Return an integer number of classes
     */
    public function getNrClass()
    {
    }

    /**
     * Get the SVM type the model was trained with
     *
     * @return int Return an integer SVM type
     */
    public function getSvmType()
    {
    }

    /**
     * Get the sigma value for regression types
     *
     * @return float Returns a sigma value
     */
    public function getSvrProbability()
    {
    }

    /**
     * Load a saved SVM Model
     *
     * @param string $filename
     *
     * @return bool Throws SVMException on error.
     *              Returns true on success.
     */
    public function load($filename)
    {
    }

    /**
     * Predict a value for previously unseen data
     *
     * @param array $data
     *
     * @return float Float the predicted value. This will be a class label in the case of
     *               classification, a real value in the case of regression.
     *               Throws SVMException on error
     */
    public function predict($data)
    {
    }

    /**
     * Return class probabilities for previous unseen data
     *
     * @param array $data
     *
     * @return float Float the predicted value. This will be a class label in the case of
     *               classification, a real value in the case of regression.
     *               Throws SVMException on error
     */
    public function predict_probability($data)
    {
    }

    /**
     * Save a model to a file
     *
     * @param string $filename
     *
     * @return bool Throws SVMException on error.
     *              Returns true on success.
     */
    public function save($filename)
    {
    }
}