<?php

/**
 * PerformanceReviewTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PerformanceReviewTable extends PluginPerformanceReviewTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object PerformanceReviewTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('PerformanceReview');
    }
}