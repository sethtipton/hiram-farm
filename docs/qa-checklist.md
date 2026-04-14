# QA Checklist

Use this checklist during manual reviews **after any code change** (especially Sass, PHP templates, or JavaScript). Keep reviews fast and focused.

## Pre-Checks
- Run `nvm use` (to ensure correct Node version)
- Run `npm install` only if dependencies appear stale
- Run `npm run check`

## Core Verification
- Start/restart the site in Local (`https://hiram-farm.local`)
- Homepage renders correctly with no layout shifts
- Main navigation works on both desktop and mobile (including mobile menu)
- At least one standard content page renders properly
- At least one blog post renders properly (if posts are in use)
- Check browser console for JavaScript errors or warnings
- Visually scan edited sections for responsive issues or overflow on mobile, tablet, and desktop

## Sass / CSS Specific
- If any Sass files were changed:
  - Confirm `npm run build` was run
  - Verify `style.css` and `style-rtl.css` were regenerated correctly (no manual edits)

## Final Pass
- Confirm no obvious visual regressions in the changed area
- Ensure the site still feels lightweight and brochure-friendly
- If anything feels off, note it and consider simplifying before committing

---

**Quick Rule**: If the change was small, the review should take under 2 minutes. Delete or simplify anything that repeatedly fails this checklist.
