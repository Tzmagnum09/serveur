<?php

namespace App\Doctrine\Functions;

use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\SqlWalker;

/**
 * Fonction DQL personnalisée pour JSON_CONTAINS
 */
class JsonContainsFunction extends FunctionNode
{
    /**
     * @var \Doctrine\ORM\Query\AST\Node
     */
    protected $jsonDocExpr;

    /**
     * @var \Doctrine\ORM\Query\AST\Node
     */
    protected $jsonValExpr;

    /**
     * @inheritdoc
     */
    public function parse(Parser $parser): void
    {
        // JSON_CONTAINS(json_doc, json_val)
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        
        // Premier argument: le document JSON
        $this->jsonDocExpr = $parser->ArithmeticPrimary();
        
        // Virgule entre les arguments
        $parser->match(Lexer::T_COMMA);
        
        // Deuxième argument: la valeur JSON à chercher
        $this->jsonValExpr = $parser->ArithmeticPrimary();
        
        // Parenthèse fermante
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }

    /**
     * @inheritdoc
     */
    public function getSql(SqlWalker $sqlWalker): string
    {
        return sprintf(
            'JSON_CONTAINS(%s, %s)',
            $this->jsonDocExpr->dispatch($sqlWalker),
            $this->jsonValExpr->dispatch($sqlWalker)
        );
    }
}