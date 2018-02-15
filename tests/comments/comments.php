<?php
/** @var int $int This is a counter. */
$int = 0;

// there should be no docblock here
$int++;

/**
 * This class acts as an example on where to position a DocBlock.
 */
class Foo
{
    /** @var string|null $title contains a title for the Foo with a max. length of 24 characters */
    protected $title = null;

    /**
     * Sets a single-line title.
     *
     * @param string $title A text with a maximum of 24 characters.
     *
     * @return void
     */
    public function setTitle($title)
    {
        // there should be no docblock here
        $this->title = $title;
    }
}