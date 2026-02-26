# Contributing

Thanks for your interest in contributing to blade-ui.sharkvel.com. We're happy to have you here.

Please take a moment to review this document before submitting your first pull request. We also strongly recommend that you check for open issues and pull requests to see if someone else is working on something similar.

If you need any help, feel free to reach out to [@\_sharkvel](https://x.com/_sharkvel).

## About this repository

- We use [npm](https://npmjs.com) package manager
- We use [Lucide](https://lucide.dev/) icons
- We use [Prettier](https://prettier.io/) code formatter

## Structure

This repository is structured as follows:

```
resources
├── css
│   └── app.css
├── js
│   └── bootstrap.js
├── stubs
│   ├── themes
│   └── app.css
└── views
    ├── components
    │   └── ui
    ├── contents
    └── examples
```

| **Path**                        | **Description**                              |
| ------------------------------- | -------------------------------------------- |
| `resources/css/app.css`         | Website global `.css` file                   |
| `resources/js/bootstrap.js`     | Website global `.js` file. Rollup on build.  |
| `resources/stubs/themes`        | Contains themes . Ex. blue.css               |
| `resources/stubs/app.css`       | Init CSS for global `app.css`                |
| `resources/views/components/ui` | Root folder where all components are created |
| `resources/views/contents`      | Docs view file of each components            |
| `resources/views/examples`      | Component examples for it docs               |

## Development

### Fork this repo

You can fork this repo by clicking the fork button in the top right corner of this page.

#### Clone on your local machine

```shell
git clone https://github.com/your-username/blade-ui.git
```

#### Navigate to project directory

```shell
cd blade-ui
```

#### Create a new Branch

```shell
git checkout -b my-new-branch
```

#### Install dependencies

```shell
composer setup-dev
```

### Vscode setup

.vscode/settings.json on project root folder

```json
{
    "editor.wordWrap": "wordWrapColumn",
    "editor.wordWrapColumn": 120,
    "tailwindCSS.experimental.classRegex": [
        ["[a-zA-Z]+Classes\\s*=\\s*[`'\"]([^`'\"]*)[`'\"]"],
        ["[a-zA-Z]+Classes\\s*=\\s*\\[([^\\]]*)\\]", "[`'\"]([^`'\"]*)[`'\"]"],
        ["[a-zA-Z]+Classes\\s*=\\s*match\\s*\\([^)]*\\)\\s*\\{([^}]*)\\}", "=>\\s*[`'\"]([^`'\"]*)[`'\"]"],
        [
            "[a-zA-Z]+Classes\\s*=\\s*match\\s*\\([^)]*\\)\\s*\\{([\\s\\S]*?)\\}(?=\\s*;)",
            "=>\\s*\\[\\s*[`'\"]([^`'\"]+)[`'\"]"
        ],
        [
            "[a-zA-Z]+Classes\\s*=\\s*match\\s*\\([^)]*\\)\\s*\\{([\\s\\S]*?)\\}(?=\\s*;)",
            ",\\s*[`'\"]([^`'\"]+)[`'\"](?!\\s*=>)"
        ]
    ],
    "php.version": "8.4"
}
```

`tailwindCSS.experimental.classRegex` use for get Tailwind CSS IntelliSense on specific condition.

```js
// Explanation of tailwindCSS.experimental.classRegex patterns
[
    /*
     * 1. Variable ending with 'Classes' assigned a plain string
     *    Example: $buttonClasses = 'hidden'
     */
    ['[a-zA-Z]+Classes\\s*=\\s*[`\'"]([^`\'"]*)[`\'"]'],

    /*
     * 2. Variable ending with 'Classes' assigned an array
     *    Example: $buttonClasses = ['hidden','bg-red-500']
     */
    ['[a-zA-Z]+Classes\\s*=\\s*\\[([^\\]]*)\\]', '[`\'"]([^`\'"]*)[`\'"]'],

    /*
     * 3. Variable ending with 'Classes' = match() — string values after =>
     *    Example: $buttonClasses = match($variant) {
     *                  'primary' => 'bg-primary text-primary-foreground'
     *              }
     */
    ['[a-zA-Z]+Classes\\s*=\\s*match\\s*\\([^)]*\\)\\s*\\{([^}]*)\\}', '=>\\s*[`\'"]([^`\'"]*)[`\'"]'],

    /*
     * 4. Variable ending with 'Classes' = match() — array values after =>
     *    Example: $buttonClasses = match($variant) {
     *                  'primary' => ['bg-primary', 'text-primary-foreground']
     *              }
     */
    [
        '[a-zA-Z]+Classes\\s*=\\s*match\\s*\\([^)]*\\)\\s*\\{([\\s\\S]*?)\\}(?=\\s*;)',
        '=>\\s*\\[\\s*[`\'"]([^`\'"]+)[`\'"]',
    ],
    [
        '[a-zA-Z]+Classes\\s*=\\s*match\\s*\\([^)]*\\)\\s*\\{([\\s\\S]*?)\\}(?=\\s*;)',
        ',\\s*[`\'"]([^`\'"]+)[`\'"](?!\\s*=>)',
    ],
];
```
