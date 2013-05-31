<?php
/**
 * @package    local
 * @subpackage questionssimplified
 * @copyright  2013 Silecs {@link http://www.silecs.info/societe}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace sqc;

class Question
{
    /** @var integer */
    private $id;

    /** @var string */
    public $title;

    /** @var string */
    public $description;

    /** @var Answer[] */
    public $answers;

    /**
     * Create a new Question from a HTML string.
     *
     * @param string $html
     * @return Question
     */
    public static function createFromHtml($html)
    {
        $q = new self;

        // TODO

        return $q;
    }

    /**
     * Create several Questions from a HTML string.
     *
     * @param string $html
     * @return Question[]
     */
    public static function createMultiFromHtml($html)
    {
        // TODO
        $split = array($html);

        return array_map(array(self, 'createFromHtml'), $split);
    }
}

