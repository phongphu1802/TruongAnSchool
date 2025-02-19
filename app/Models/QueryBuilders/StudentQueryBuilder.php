<?php

namespace App\Models\QueryBuilders;

use App\Abstracts\AbstractQueryBuilder;
use App\Models\SearchQueryBuilders\SearchQueryBuilder;
use App\Models\Student;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\Concerns\SortsQuery;
use Spatie\QueryBuilder\QueryBuilder;

class StudentQueryBuilder extends AbstractQueryBuilder
{
    /**
     * @return string
     */
    public static function baseQuery()
    {
        return Student::class;
    }

    /**
     * @return SortsQuery|QueryBuilder
     */
    public static function initialQuery()
    {
        $modelKeyName = (new Student())->getKeyName();

        return static::for(static::baseQuery())
            ->allowedFields([
                $modelKeyName,
                'uuid',
                'name',
                'course_uuid',
                'sex',
                'status',
                'created_at',
                'updated_at'
            ])
            ->defaultSort('created_at')
            ->allowedSorts([
                $modelKeyName,
                'uuid',
                'name',
                'course_uuid',
                'sex',
                'status',
                'created_at',
                'updated_at'
            ])
            ->allowedFilters([
                $modelKeyName,
                AllowedFilter::exact('exact__' . $modelKeyName, $modelKeyName),
                'uuid',
                AllowedFilter::exact('exact__uuid', 'uuid'),
                'name',
                AllowedFilter::exact('exact__name', 'name'),
                'course_uuid',
                AllowedFilter::exact('exact__course_uuid', 'course_uuid'),
                'sex',
                AllowedFilter::exact('exact__sex', 'sex'),
                'status',
                AllowedFilter::exact('exact__status', 'status'),
                'created_at',
                AllowedFilter::exact('exact__created_at', 'created_at'),
                'updated_at',
                AllowedFilter::exact('exact__updated_at', 'updated_at'),
            ]);

    }

    /**
     * @return string
     */
    public static function fillAble()
    {
        return Student::class;
    }

    /**
     * @param $search
     * @param $searchBy
     * @return mixed
     */
    public static function searchQuery($search, $searchBy)
    {
        $initialQuery = static::initialQuery();
        $baseQuery = static::fillAble();

        return SearchQueryBuilder::search($baseQuery, $initialQuery, $search, $searchBy);
    }
}