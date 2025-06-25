# Corrim Custom WordPress Theme

This is the custom WordPress theme for [Corrim Company](https://corrim.com), built to modernize the website while keeping it manageable for non-technical users.

---

## 🚀 Features

- Custom page templates:
  - **Find Your Local Expert** – dynamic rep directory via JSON
  - **Quote Request** – smart, collapsible UI based on PDF form
  - **Order Form** – mirrors official order form with modern UX
  - **Installations** – automatically loads images from a directory
- Tailwind CSS integration for utility-first styling
- Clean separation between logic, layout, and assets
- Designed for long-term content management by non-technical staff

---

## 🗂 Directory Structure

```bash
/wp-content/themes/corrim-theme/
├── page-find-your-local-expert.php
├── page-quote-request.php
├── page-order-form.php
├── page-installations.php
├── functions.php
├── style.css
├── site_assets/
│   ├── reps.json
│   └── installations/  # contains installation images
