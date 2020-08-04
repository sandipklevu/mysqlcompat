<?php
/**
 * Klevu override of the score builder for use on preserve layout
 * NOTE: Class is only suitable upto Magento 2.3 versions and MySQL as Catalog Search Engine
 */
namespace Klevu\MysqlCompat\Adapter\Mysql;

use Magento\Framework\Registry as MagentoRegistry;

/**
 * Class ScoreBuilder
 * @package Klevu\MysqlCompat\Adapter\Mysql
 *
 * Class for generating sql condition for calculating store manager
 */
class ScoreBuilder extends \Magento\Framework\Search\Adapter\Mysql\ScoreBuilder
{
    /**
     * @var MagentoRegistry
     */
    private $magentoRegistry;

    /**
     * ScoreBuilder constructor.
     * @param MagentoRegistry $magentoRegistry
     */
    public function __construct(
        MagentoRegistry $magentoRegistry
    ) {
        $this->magentoRegistry = $magentoRegistry;
        if (is_callable('parent::__construct')) {
            parent::__construct();
        }
    }

    /**
     * Get generated sql condition for global score
     *
     * @return string
     */
    public function build()
    {
        $scoreAlias = parent::getScoreAlias();
        $sessionOrder = $this->magentoRegistry->registry('search_ids');
        if(is_array($sessionOrder)) return new \Zend_Db_Expr("FIELD(search_index.entity_id,".implode(",",array_reverse($sessionOrder)).") AS {$scoreAlias}");
        return parent::build();
    }

}
