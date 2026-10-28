<?php

namespace MediaWiki\Extension\Clang;

use Parser;
use PPFrame;

class Hooks {
    /**
     * Registrasi tag <clang> pada parser MediaWiki
     *
     * @param Parser $parser
     */
    public static function onParserFirstCallInit( Parser $parser ) {
        $parser->setHook( 'clang', [ __CLASS__, 'renderClangTag' ] );
    }

    /**
     * Render konten di dalam tag <clang>
     *
     * @param string $input Konten di dalam tag
     * @param array $args Argumen tag
     * @param Parser $parser
     * @param PPFrame $frame
     * @return string
     */
    public static function renderClangTag( $input, array $args, Parser $parser, PPFrame $frame ) {
        // Sanitasi dasar atau format syntax highlighting
        // Di sini kita hanya membungkusnya dengan tag pre dan code untuk C
        $safeInput = htmlspecialchars( $input );
        return "<pre><code class=\"language-c\">" . $safeInput . "</code></pre>";
    }
}
