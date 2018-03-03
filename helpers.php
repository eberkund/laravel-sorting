<?php

/**
 * Merges sorting parameters to the current URL.
 *
 * @param $sort
 * @return array
 */
function sort_link($sort)
{
    $order = request('order') === 'asc' ? 'dsc' : 'asc';

    return array_merge(request()->all(), [
        'sort' => $sort,
        'order' => $order
    ]);
}

/**
 * Returns an icon indicating the direction of the sort order.
 *
 * @param $sort
 * @return string
 */
function sort_icon($sort)
{
    if (request('sort') === $sort && request('order') === 'dsc') {
        return '<i class="fa fa-caret-down"></i>';
    }

    return '<i class="fa fa-caret-up"></i>';
}

/**
 * Returns 'active' if the URL matches the given pattern.
 *
 * @param $pattern
 * @return string
 */
function active($pattern)
{
    return request()->is($pattern) ? 'active' : '';
}

/**
 * Returns 'checked' if the two values are equal.
 *
 * @param $a
 * @param $b
 * @return string
 */
function checked($a, $b = true)
{
    return $a === $b ? 'checked' : '';
}
