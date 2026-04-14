# Hiram Farm Theme

Custom WordPress theme for the Hiram Farm site.

This repository tracks the theme only. It does not include the full WordPress install, plugins, uploads, or Local site files outside this directory.

## Local Workflow

- Local site name: `hiram-farm`
- Theme path: `/Users/sethtipton/Local Sites/hiram-farm/app/public/wp-content/themes/hiram-farm`
- Local app URL: use the site URL shown in Local, typically `https://hiram-farm.local`

To work on the site locally:

1. Open the `hiram-farm` site in Local.
2. Click `Start Site`.
3. Open a terminal in this theme directory.
4. Run `npm run watch`.
5. Open the Local site URL in your browser.

## New Machine Setup

1. Install Node.js and npm, then switch to the project version with `nvm use` if you use `nvm`.
2. Open the theme folder in VS Code.
3. Run `npm install`.
4. Start the Local site in the Local app.
5. Run `npm run watch`.
6. Open the Local site URL.

## Frontend Tooling

- Sass is compiled with modern Dart Sass.
- The Sass codebase has been migrated away from deprecated `@import` usage and now uses the Sass module system (`@use`).
- `style.css` is generated from `sass/style.scss` and is committed to the repository.
- `style-rtl.css` is generated from the current `style.css`.

## Development Commands

Install dependencies:

```sh
nvm use
npm install
```

Start Sass watch mode for active development:

```sh
npm run watch
```

Create a clean production build of the theme CSS:

```sh
npm run build
```

Generate the RTL stylesheet from the current `style.css`:

```sh
npm run build:rtl
```

Run all lint checks:

```sh
npm run lint
```

Run the full pre-commit check:

```sh
npm run check
```

Format supported project files with Prettier:

```sh
npm run format
```

## Project Notes

- Edit files in `sass/`; `style.css` is generated and committed.
- Run `npm run build` before committing when you want to refresh both `style.css` and `style-rtl.css`.
- Local development is hosted through the Local app on macOS.
- The project Node version is pinned in `.nvmrc`.
- Generated source maps are ignored by Git.
- Prettier is intentionally limited to Markdown and JSON so it does not fight WordPress lint rules for JS, PHP, CSS, or SCSS.
- Comments are currently disabled in the theme UI.
- The current content architecture will likely use ACF for structured fields and flexible content.
