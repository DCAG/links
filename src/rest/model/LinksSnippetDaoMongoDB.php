<?php
/**
 * Created by PhpStorm.
 * User: digic
 * Date: 10/09/2016
 * Time: 21:58
 */

namespace links\model;
require __DIR__ . '/../../vendor/autoload.php'; // include Composer goodies
use \MongoDB;

class LinksSnippetDaoMongoDB implements ILinksSnippetDao
{
    /** @var MongoDB\Collection */
    private $col;
    /**
     * LinksSnippetDaoMongoDB constructor.
     * @param $db MongoDB\Database
     */
    public function __construct($db)
    {
        $this->col = $db->snippet;
    }

    function findById($id)
    {
        $this->col->findOne(array('_id' => new MongoId($id)));
    }

    function save($entity)
    {
        $this->col->save($entity);
    }

    function remove($entity)
    {
        $this->col->deleteOne($entity);
    }
}