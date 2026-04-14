# AGENTS.md

## Agent Instructions (Read Before Any Change)

This file is the working agreement for any agent editing or reviewing this theme.

Read it fully before making changes. Follow it strictly. If a request conflicts with generic WordPress, Sass, or AI-generated best practices, follow this file.

Priorities, in order:

1. Preserve the project’s deliberate, lightweight, senior-looking style.
2. Prefer deletion, simplification, and clarity over added abstraction.
3. Keep changes small, obvious, and easy to verify.
4. Do not invent architecture, features, files, or workflows that were not requested.
5. Finish with a verifiable result, not a speculative suggestion.

## Project Context

- This is a **custom classic WordPress theme** for the Hiram Farm brochure site.
- Development happens locally in Local on macOS.
- Only the theme folder is tracked in Git, not the full WordPress install.
- The site should remain brochure-site light unless a request clearly requires more.
- `style.css` and `style-rtl.css` are generated assets and are intentionally committed.

## Core Mindset

Work like a careful senior engineer maintaining a custom theme, not like a framework author.

That means:

- Favor explicit code over clever code.
- Favor stable WordPress patterns over abstractions.
- Favor direct edits over scaffolding.
- Favor small diffs over broad rewrites.
- Favor confidence and verification over speed theater.

When in doubt, choose the simpler solution.

## What Success Looks Like

A good change in this codebase should feel:

- intentional
- minimal
- readable at a glance
- easy to review in Git
- easy to maintain six months from now
- native to this theme, not imported from a generic starter or AI pattern

## Architectural Principles

- Deletion beats addition.
- Flat beats layered.
- Explicit beats abstract.
- Project-specific beats generic.
- Present needs beat speculative future-proofing.

Only add a new file, abstraction, pattern, or dependency when it clearly improves maintainability for this actual project.

## Hard Rules

- Never add WooCommerce, Jetpack, ACF, `theme.json`, block-theme features, or plugin-specific logic unless explicitly requested.
- Never reintroduce starter-theme residue that the project does not need.
- Never add speculative folders such as `inc/`, `utils/`, `helpers/`, `services/`, or `components/` without a clear, project-specific reason.
- Never edit generated CSS directly.
- Never invent requirements, APIs, content structures, or admin workflows.
- Never give partial implementation code unless explicitly asked.
- Never leave TODO scaffolding, placeholder code, or dead abstractions behind.
- Never treat this as a reusable starter theme. It is a custom site theme.

## Theme-Specific Development Rules

### WordPress

- Use the WordPress template hierarchy correctly.
- Keep templates close to the real site structure.
- Prefer core WordPress functions and hooks over custom wrappers.
- Escape output correctly with context-appropriate functions.
- Sanitize incoming data appropriately.
- Enqueue scripts and styles properly with clear dependencies and versioning.
- Keep `functions.php` focused and easy to scan.
- Split code only when the split clearly improves readability.

### PHP

- Keep PHP small, flat, and obvious.
- Prefer straightforward conditionals over indirection.
- Do not create “helper” abstractions for one-off logic.
- Use template parts sparingly and only when reuse is real.
- Homepage-specific logic may be treated as its own entry point when useful.

### Sass and CSS

- Only edit source files in `sass/`.
- Treat generated CSS as build output only.
- Use CSS custom properties for core design tokens that function as system values, such as color, spacing, radius, and main type scale.
- Use Sass variables, modules, maps, and mixins for internal config, compile-time structure, breakpoints, and one-off implementation details.
- Avoid utility systems, design-system sprawl, and abstract naming taxonomies.
- Prefer semantic, component-level styling.
- Mobile-first is the default.

## Request Handling Rules

For every task, do this in order:

1. Understand the exact requested outcome.
2. Inspect the smallest relevant area of the codebase first.
3. Reuse existing patterns before creating new ones.
4. Make the smallest correct change.
5. Validate the result.
6. Report what changed, what was verified, and any limits.

Do not widen scope just because you notice adjacent improvements. Note them briefly only if they are highly relevant.

## Output Contract

When responding about code changes, be concise and concrete.

Unless the user asked for something else, your response should include:

1. What you changed
2. Why this approach fits this theme
3. What you verified
4. Any limitation or uncertainty

Do not write long essays.
Do not narrate obvious steps.
Do not oversell the work.

## Investigation Rules

Before changing code:

- Check whether the requested behavior already exists.
- Check whether the project already has a pattern for the same problem.
- Check whether the code is generated before editing it.
- Check whether a requested abstraction is truly needed or whether direct code is better.

If a request appears to require a new file or larger structural change, justify that decision against this file before doing it.

## Accuracy and Anti-Hallucination Rules

- Do not assume plugins, admin screens, build tools, or theme features exist unless the codebase shows they exist.
- Do not assume Gutenberg-first architecture.
- Do not assume React, REST endpoints, or JavaScript state systems unless they are actually present.
- Do not cite generic WordPress conventions as a reason to add unused code.
- Do not fabricate “best practice” boilerplate.

If something is uncertain, inspect the codebase. If it is still uncertain and the uncertainty materially changes the implementation, say so clearly.

## Validation Workflow

Use the commands defined in `package.json`:

- Development: `npm run watch`
- Validation: `npm run check`
- Production build: `npm run build`
- Formatting: `npm run format`

Before considering a front-end task complete:

1. Run `npm run check`
2. Run `npm run build`

If a task affects PHP templates, markup, front-end behavior, or styling, also mentally verify:

- template hierarchy still makes sense
- output escaping is correct
- no starter-theme residue was reintroduced
- the change still feels brochure-site appropriate

If you could not run a command or verify something locally, say that explicitly.

## Local Development Notes

- Local site name: `hiram-farm`
- Typical local URL: `https://hiram-farm.local`
- Theme path: `/Users/sethtipton/Local Sites/hiram-farm/app/public/wp-content/themes/hiram-farm`
- Use the exact Node version in `.nvmrc`
- Run `nvm use` before npm commands
- All development happens inside the Local environment
- Workspace-level editor behavior lives in `.vscode/settings.json`
- Manual verification steps live in `docs/qa-checklist.md`

## Git and Diff Expectations

- Keep diffs tight.
- Avoid unrelated cleanup unless it directly improves the requested change.
- Preserve surrounding style and structure.
- Make changes that will read clearly in commit history.
- Prefer one clean solution over layered follow-up patches.

## Definition of Done

Do not call a task complete until all of these are true:

- The request was addressed directly.
- The solution matches the project’s existing style.
- No unnecessary abstraction or file was added.
- Generated files were not edited manually.
- Validation was run when applicable.
- Any unverified assumption or limitation was stated clearly.

## Quick Mental Checklist

Before finishing, confirm:

- Did I keep this simple?
- Did I avoid generic starter-theme behavior?
- Did I edit the correct source files?
- Did I reuse existing patterns?
- Did I avoid adding speculative structure?
- Did I verify what I reasonably could?

If any answer is “no,” fix that before finishing.

## Do / Don’t

### Do

- delete unused code aggressively
- keep naming explicit and project-specific
- prefer direct solutions
- match the existing tone of the code
- report limitations honestly

### Don’t

- add dependencies casually
- add files to look organized
- introduce framework-like architecture
- comment obvious code
- leave behind dead code or placeholders
- optimize for hypothetical future needs

---

This file exists to make development faster, more accurate, and less speculative. Update it whenever a repeated rule, mistake, or exception becomes clear enough to be worth standardizing.
