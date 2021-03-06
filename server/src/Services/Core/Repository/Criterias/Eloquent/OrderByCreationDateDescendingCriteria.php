<?php

namespace Mega\Services\Core\Repository\Criterias\Eloquent;

use Mega\Services\Core\Repository\Abstracts\Criteria;
use Prettus\Repository\Contracts\RepositoryInterface as PrettusRepositoryInterface;

/**
 * Class OrderByCreationDateDescendingCriteria.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 */
class OrderByCreationDateDescendingCriteria extends Criteria
{
    /**
     * @param                                                   $model
     * @param \Prettus\Repository\Contracts\RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, PrettusRepositoryInterface $repository)
    {
        return $model->orderBy('created_at', 'desc');
    }
}
