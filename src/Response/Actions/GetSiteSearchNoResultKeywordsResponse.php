<?php


namespace MatomoReport\Response\Actions;


use MatomoReport\Entity\Actions\SiteSearchNoResultKeywordsEntity;
use MatomoReport\Response\CommentListResponse;

class GetSiteSearchNoResultKeywordsResponse extends CommentListResponse
{
    /**
     * @return SiteSearchNoResultKeywordsEntity[]
     */
    public function getList(): array
    {
        return parent::getList(); // TODO: Change the autogenerated stub
    }
}