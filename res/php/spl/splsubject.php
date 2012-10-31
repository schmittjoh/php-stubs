<?php

/** @phpstub */
interface SplSubject
{
    /**
     * Attach an SplObserver
     *
     * @param SplObserver $observer
     *
     * @return void 
     */
    public function attach($observer);

    /**
     * Detach an observer
     *
     * @param SplObserver $observer
     *
     * @return void 
     */
    public function detach($observer);

    /**
     * Notify an observer
     *
     * @return void 
     */
    public function notify();
}