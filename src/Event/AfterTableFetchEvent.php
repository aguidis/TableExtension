<?php

declare(strict_types = 1);

namespace LoversOfBehat\TableExtension\Event;

use LoversOfBehat\TableExtension\HtmlContainer;
use Symfony\Component\EventDispatcher\GenericEvent;

/**
 * Event that fires after fetching a table from the web page.
 */
class AfterTableFetchEvent extends GenericEvent implements TableEventInterface
{
    /**
     * An object containing the HTML of the fetched table.
     *
     * @var HtmlContainer
     */
    protected $htmlContainer;

    /**
     * Constructs a new AfterTableFetchEvent object.
     *
     * @param HtmlContainer $htmlContainer
     */
    public function __construct(HtmlContainer $htmlContainer)
    {
        parent::__construct($htmlContainer);

        $this->htmlContainer = $htmlContainer;
    }

    /**
     * {@inheritdoc}
     */
    public function getHtmlContainer(): HtmlContainer
    {
        return $this->htmlContainer;
    }
}
