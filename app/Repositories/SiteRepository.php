<?php

namespace App\Repositories;

use App\Models\Site;
use App\Repositories\BaseRepository;

/**
 * Class SiteRepository
 * @package App\Repositories
 * @version September 27, 2020, 1:17 pm GMT
*/

class SiteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'link',
        'description',
        'logo'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Site::class;
    }
}
