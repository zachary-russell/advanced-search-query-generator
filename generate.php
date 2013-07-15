<?php
/**
 * PHP search query generator.
 *
 * A quick search query generator using some of the more popular
 * operators, including inurl:, site:, +, and OR.
 *
 * Copyright 2013 ProTech Internet Group
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_GET['d'])) {
        var_dump($_POST);
    }

    $squery = build_search_query($_POST);
    echo $squery;
} else {
    echo 'Hello';
}

/**
 * Builds a search engine query using the given parameters.
 *
 * @param params the parameters
 * @return a query using these parameters
 */
function build_search_query($params) {
    $squery = get_search_terms($params);

    if ($params['tld'] != 'any') {
        $squery .= " site:*.{$params['tld']}";
    }

    if (strlen($params['filetype'])) {
        $squery .= " filetype:{$params['filetype']}";
    }

    if (strlen($params['negative-keywords'])) {
        $squery .= ' -' . preg_replace('/, */', ' -', $params['negative-keywords']);
    }

    return $squery;
}

/**
 * Formats search terms for use in a query.
 *
 * Parameters include exact match (""), in(url|title|...), and +/OR.
 *
 * @param params the parameters
 * @return a string containing the terms
 */
function get_search_terms($params) {
    $terms = array();

    $term_1 = $params['term-1'];
    $term_2 = $params['term-2'];
    $term_3 = $params['term-3'];

    if (strlen($term_1)) {
        if ($params['term-1-match'] == 'exact') {
            $term_1 = "\"$term_1\"";
        }

        if ($params['term-1-in'] != 'none') {
            $term_1 = "{$params['term-1-in']}:$term_1";
        }

        $terms[] = $term_1;
    }

    if (strlen($term_2)) {
        if ($params['term-2-match'] == 'exact') {
            $term_2 = "\"$term_2\"";
        }

        if ($params['term-2-in'] != 'none') {
            $term_2 = "{$params['term-2-in']}:$term_2";
        }
        
        $terms[] = $term_2;
    }

    if (strlen($term_3)) {
        if ($params['term-3-match'] == 'exact') {
            $term_3 = "\"$term_3\"";
        }

        if ($params['term-3-in'] != 'none') {
            $term_3 = "{$params['term-3-in']}:$term_3";
        }

        $terms[] = $term_3;
    }

    if ($params['andor'] == 'none') {
        $glue = ' ';
    } else {
        $glue = " {$params['andor']} ";
    }

    return implode($glue, $terms);
}
