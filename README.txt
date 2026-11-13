# Jemima Portfolio — Vercel PHP deployment

## Files
- `api/index.php` — your original PHP portfolio (unchanged)
- `vercel.json` — routes requests to the PHP entry point using the community PHP runtime

## Deploy
1. Extract this ZIP.
2. Upload the extracted folder contents to a GitHub repository (not the ZIP itself).
3. In Vercel, choose **Add New → Project**, import that GitHub repository, and deploy.
4. If Vercel asks for settings, keep the project root as the folder containing `vercel.json`.

## Important
This uses `vercel-php@0.9.0`, a community-maintained runtime, not an official Vercel PHP runtime. Vercel's PHP deployment via containers is its recommended route for new projects. This package is prepared for the community runtime approach.
