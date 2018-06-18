{
        "workbench.colorTheme": "Dracula Soft",
        "workbench.iconTheme": "material-icon-theme",
        "window.zoomLevel": 1,
        "path-intellisense.showHiddenFiles": true,
        "intelephense.completionProvider.backslashPrefix": false,
        "php.suggest.basic": false,
        "files.trimTrailingWhitespace": true,
        "files.trimFinalNewlines": true,
        "workbench.startupEditor": "none",
        "editor.renderControlCharacters": false,
        "editor.renderIndentGuides": false,
        "editor.renderLineHighlight": "none",
        "editor.matchBrackets": false,
        "explorer.openEditors.visible": 0,
        "workbench.fontAliasing": "antialiased",
        "editor.renderWhitespace": "all",
        // When I accidentally hit copy without selecting anything and it overrides my clipboard - ugh.
        // When I accidentally hit copy without selecting anything and it overrides my clipboard - ugh.
        "editor.emptySelectionClipboard": false,
        // I removed the hyphen "-" from this list for better multi-cursor navigation.
        // @freekmurze suggested I remove "$" too for php variables - brilliant!
        "editor.wordSeparators": "`~!@#%^&*()=+[{]}\\|;:'\",.<>/?",
        // Give it to me as fast as you have it.
        "editor.quickSuggestionsDelay": 0,
        // In sublime I got used to almost exclusively using "cmd+shift+v" (format on paste) - now it will do it by default!
        "editor.formatOnPaste": true,
        // Show me whitespace in diffs, just in case some slips through, shows up in the GitHub PR, and I look like a dummy.
        "diffEditor.ignoreTrimWhitespace": false,

        "emmet.includeLanguages": {
                "php": "html"
        },
        "files.associations": {
                ".php_cs": "php",
                ".php_cs.dist": "php",
                "*.php": "php" // this is super important, otherwise intelephense will not auto-index your project.
        },
        "search.exclude": {
                "**/node_modules": true,
                "**/bower_components": true,
                // Hide everything in /public, except "index.php"
                "**/public/[abcdefghjklmnopqrstuvwxyz]*": true,
                "**/public/i[abcdefghijklmopqrstuvwxyz]*": true,
                // Hide everything in /vendor, except "laravel" folder.
                "**/vendor/[abcdefghijkmnopqrstuvwxyz]*": true,
                "**/vendor/l[bcdefghijklmnopqrstuvwxyz]*": true,
                "storage/framework/views": true
            }
}