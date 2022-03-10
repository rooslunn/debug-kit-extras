<?php
declare(strict_types=1);

namespace DebugKitExtras\Panel;

use DebugKit\Panel\SqlLogPanel;

class SqlLogExtraPanel extends SqlLogPanel
{
    public $plugin = 'DebugKitExtras';

    /**
     * Default highlight hex color (yellow)
     */
    public const HIGHLIGHT_OPACITY = '40';

    /**
     * Panel title
     *
     * @return string
     */
    public function title(): string
    {
        return 'Sql Log Extra';
    }
}
