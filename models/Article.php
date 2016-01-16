<?php

namespace Models;

use Models\Base\Article as BaseArticle;

/**
 * Skeleton subclass for representing a row from the 'articles' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Article extends BaseArticle
{
    public static function recent(){
        $recent = ArticleQuery::create()
            ->joinWithImage()
            ->orderByCreatedAt("desc")
            ->limit(5)
            ->find();
    
        return $recent;
    }
}
