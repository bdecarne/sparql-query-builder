<?php

/*
 * This file is part of the Nemrod package.
 *
 * (c) Conjecto <contact@conjecto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Conjecto\SparqlQueryBuilder\Expr;

class Union extends Base
{
    /**
     * @var string
     */
    protected $preSeparator = ' { ';

    /**
     * @var string
     */
    protected $separator = ' } UNION { ';

    /**
     * @var string
     */
    protected $postSeparator = ' } ';

    public function __construct($arrayPredicates)
    {
        return $this->addMultiple($arrayPredicates);
    }

    protected $allowedClasses = array(
        'Conjecto\\SparqlQueryBuilder\\Expr\\GroupExpr',
    );

    /**
     * @return array
     */
    public function getParts()
    {
        return $this->parts;
    }
}
