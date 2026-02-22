# Contributing

Thanks for your interest in contributing to blade-ui.sharkvel.com. We're happy to have you here.

Please take a moment to review this document before submitting your first pull request. We also strongly recommend that you check for open issues and pull requests to see if someone else is working on something similar.

If you need any help, feel free to reach out to [@\_sharkvel](https://x.com/_sharkvel).

## About this repository

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

### Clone on your local machine

```
git clone https://github.com/your-username/blade-ui.git
```

### Navigate to project directory

```
cd blade-ui
```

### Create a new Branch

```
git checkout -b my-new-branch
```

### Install dependencies

```
composer setup-dev
```