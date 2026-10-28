<?php

namespace MediaWiki\Extension\Clang;

use Parser;
use PPFrame;

class Hooks {
    /**
     * Register <clang> tag on MediaWiki parser
     *
     * @param Parser $parser
     */
    public static function onParserFirstCallInit( Parser $parser ) {
        $parser->setHook( 'clang', [ __CLASS__, 'renderClangTag' ] );
    }

    /**
     * Render content inside <clang> tag
     *
     * @param string $input Content inside the tag
     * @param array $args Tag arguments
     * @param Parser $parser
     * @param PPFrame $frame
     * @return string
     */
    public static function renderClangTag( $input, array $args, Parser $parser, PPFrame $frame ) {
        // Basic sanitation or syntax highlighting format
        // Here we just wrap it with pre and code tags for C
        $safeInput = htmlspecialchars( $input );
        return "<pre><code class=\"language-c\">" . $safeInput . "</code></pre>";
    }
}
