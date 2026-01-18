<p align="center">
  <img src="./repo-banner.png" width="100%" />
</p>

# JL Creations – AI Visual & Audio Showcase

**Creations.johnliter.blog** is a modular, self-hosted platform designed to display, organize, and scale AI-generated digital assets.

This subsite serves as a creative hub for:

* AI-generated **images**
* AI-engineered **prompts** (coming soon)
* AI-produced **music** (coming soon)

The goal is to provide a clean, futuristic, and mobile-optimized gallery experience, inspired by **daily.dev’s layout and flow**, while maintaining full ownership of the data and infrastructure.

---

## 🌐 Live Deployment

Hosted at:

```
https://creations.johnliter.blog
```

This runs as a subdomain under the broader **JL Services ecosystem**, which focuses on digital services, automation, and AI-driven workflows.

---

## 🧠 Core Purpose

This platform allows me to:

* Showcase and archive my **AI image creations**
* Store and organize my **prompt engineering work**
* Link and present my **Suno AI music creations**
* Maintain full control over hosting, structure, and data
* Scale toward automation, dashboards, and client-ready delivery

This is not just a gallery — it’s the foundation for a **personal AI content operating system.**

---

## 🏗️ Tech Stack

| Layer           | Technology                                    |
| --------------- | --------------------------------------------- |
| Frontend        | HTML, CSS, JavaScript                         |
| Layout          | Sidebar + Mobile Bottom Nav (daily.dev style) |
| Backend         | PHP                                           |
| Database        | MySQL                                         |
| Media Storage   | Google Drive (dedicated creations account)    |
| Deployment      | Hostinger (Shared + VPS ready)                |
| Version Control | Git + GitHub                                  |
| Editor          | VSCode                                        |

---

## 📁 Project Structure

```
/creations
  /assets
    styles.css
    app.js
  /inc
    config.php
    db.php
    functions.php
    header.php
    footer.php
  index.php
  images.php
  prompts.php
  music.php
```

---

## 🗄️ Database Design

The database is structured to support:

* AI image metadata and storage links
* Prompt organization by model, topic, aspect ratio, and style
* Music links and classification by platform

### Tables

| Table               | Purpose                                      |
| ------------------- | -------------------------------------------- |
| `creations_images`  | Stores image metadata and Google Drive links |
| `creations_prompts` | Stores prompts and model-specific settings   |
| `creations_music`   | Stores music links from Suno or Drive        |

Images themselves are **not stored in MySQL** — only metadata and storage references are stored.

---

## 🖼️ Image Workflow

1. Generate image using AI (Grok / Midjourney / etc.)
2. Upload image to the **Creations Google Drive account**
3. Copy the public Drive share link
4. Insert metadata into MySQL
5. The site automatically:

   * Displays the thumbnail
   * Opens the full image in a modal preview
   * Supports future tagging and filtering

---

## 🧩 File Naming Convention

To maintain structured scaling and automation-readiness, all assets follow this format:

```
YYYY-MM-DD_model_topic_aspectRatio_style_variant
```

Example:

```
2026-01-17_grok_brain_16x9_raw_v1.webp
```

---

## 📱 Mobile Optimization

This project is designed for:

* Clean desktop browsing
* Full mobile-app-style navigation
* Immersive modal previews on phones and tablets
* Responsive layout and typography

Navigation becomes a **bottom mobile app bar** on smaller screens.

---

## 🔒 Security & Privacy

* Media is stored on a **dedicated Google Drive account**
* Only public creative assets are stored there
* Database credentials are excluded from GitHub using `.gitignore`
* The site is designed for secure, scalable deployment

---

## 🚀 Planned Enhancements

* Prompt gallery + copy interface
* Music section with Suno embeds
* Admin dashboard for uploading + managing creations
* Tag filtering + search
* Automated ingestion from Google Drive to MySQL
* API-driven creative management
* Full JL branding integration

---

## ✍️ Author

**John Liter**
Retired U.S. Army Veteran
Founder of JL Services
Focused on AI, Automation, and Digital Ecosystem Design

---

## 📌 Vision

This is the starting point for a **centralized, creative, AI-powered digital identity system** — fully owned, hosted, and controlled.

Built to scale. Built to inspire. Built to last.
