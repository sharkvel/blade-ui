.vscode/settings.json

```json
{
    "editor.wordWrap": "wordWrapColumn",
    "editor.wordWrapColumn": 120,
    "tailwindCSS.experimental.classRegex": [
        // Variable ending with 'Classes' assigned a plain string
        ["[a-zA-Z]+Classes\\s*=\\s*[`'\"]([^`'\"]*)[`'\"]"],
        // Variable ending with 'Classes' assigned an array
        ["[a-zA-Z]+Classes\\s*=\\s*\\[([^\\]]*)\\]", "[`'\"]([^`'\"]*)[`'\"]"],
        // Variable ending with 'Classes' = match() — string values after =>
        ["[a-zA-Z]+Classes\\s*=\\s*match\\s*\\([^)]*\\)\\s*\\{([^}]*)\\}", "=>\\s*[`'\"]([^`'\"]*)[`'\"]"],
        [
            "[a-zA-Z]+Classes\\s*=\\s*match\\s*\\([^)]*\\)\\s*\\{([^}]*)\\}",
            "=>\\s*\\[[^\\]]*\\]",
            "[`'\"]([^`'\"]*)[`'\"]"
        ],
        // Variable ending with 'Classes' = match() — array values after =>
        [
            "[a-zA-Z]+Classes\\s*=\\s*match\\s*\\([^)]*\\)\\s*\\{(?:[^}]*=>\\s*\\[([^\\]]*)\\])+\\s*\\}",
            "[`'\"]([^`'\"]+)[`'\"]"
        ]
    ]
}
```
