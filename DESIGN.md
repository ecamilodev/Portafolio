---
name: Camilo Sánchez Portfolio
description: Backend & full-stack developer portfolio built to convert visitors into first conversations
colors:
  void-black: "#0a0a0f"
  surface-raised: "#16181f"
  surface-sunken: "#0f1014"
  text-primary: "#e2e8f0"
  text-secondary: "#cbd5e1"
  text-muted: "#9ca3af"
  text-dim: "#6b7280"
  azure-bright: "#60a5fa"
  azure-core: "#3b82f6"
  violet-light: "#a78bfa"
  violet-core: "#8b5cf6"
typography:
  display:
    fontFamily: "Space Grotesk, system-ui, sans-serif"
    fontSize: "clamp(3.75rem, 10vw, 7rem)"
    fontWeight: 700
    lineHeight: 0.95
    letterSpacing: "-0.025em"
  headline:
    fontFamily: "Space Grotesk, system-ui, sans-serif"
    fontSize: "clamp(2.25rem, 5vw, 3rem)"
    fontWeight: 700
    lineHeight: 1.2
    letterSpacing: "-0.015em"
  title:
    fontFamily: "Space Grotesk, system-ui, sans-serif"
    fontSize: "1.25rem"
    fontWeight: 600
    lineHeight: 1.3
    letterSpacing: "-0.01em"
  body:
    fontFamily: "Inter, system-ui, sans-serif"
    fontSize: "0.875rem"
    fontWeight: 400
    lineHeight: 1.6
    letterSpacing: "normal"
  label:
    fontFamily: "JetBrains Mono, monospace"
    fontSize: "0.6875rem"
    fontWeight: 400
    lineHeight: 1.4
    letterSpacing: "0.3em"
rounded:
  pill: "9999px"
  card: "1rem"
  input: "0.5rem"
  row: "0.75rem"
spacing:
  xs: "4px"
  sm: "8px"
  md: "16px"
  card-pad: "28px"
  section: "128px"
components:
  button-primary:
    backgroundColor: "{colors.azure-core}"
    textColor: "{colors.text-primary}"
    rounded: "{rounded.pill}"
    padding: "12px 24px"
  button-primary-hover:
    backgroundColor: "{colors.violet-core}"
    textColor: "{colors.text-primary}"
    rounded: "{rounded.pill}"
    padding: "12px 24px"
  button-ghost:
    backgroundColor: "transparent"
    textColor: "{colors.text-secondary}"
    rounded: "{rounded.pill}"
    padding: "12px 24px"
  card:
    backgroundColor: "{colors.surface-raised}"
    textColor: "{colors.text-secondary}"
    rounded: "{rounded.card}"
    padding: "{spacing.card-pad}"
  chip:
    backgroundColor: "transparent"
    textColor: "{colors.text-muted}"
    rounded: "{rounded.pill}"
    padding: "4px 12px"
  input:
    backgroundColor: "transparent"
    textColor: "{colors.text-primary}"
    rounded: "{rounded.input}"
    padding: "10px 16px"
---

# Design System: Camilo Sánchez Portfolio

## 1. Overview

**Creative North Star: "The First Conversation"**

This system is built for a specific human moment: a recruiter or founder opens the page and decides, within 60 seconds, whether to reach out. The design cannot shout. It has to feel like a person is already in the room — present, warm, no performance anxiety. The typography leads. The spacing breathes. The color exists to orient, not impress.

The current implementation (dark ink backgrounds, violet/azure accent split) is a documented baseline captured before a deliberate palette rethink. The north star and component character are the fixed points; the palette is the active variable. Any future pass that introduces a new color strategy must still honor the warmth, legibility, and restraint that "The First Conversation" demands. A palette change does not license decoration.

The register is **brand**: design IS the product. Every visitor is forming an opinion about Camilo as a collaborator before they read a single line of copy. The system must never contradict that person with a template.

**Key Characteristics:**
- Typographic hierarchy carries the page; color is secondary
- Generous spacing at section level (128px between sections), tighter inside components
- Pill-shaped interactive elements — friendly, not corporate
- Cards are solid dark panels, not glass (backdrop-blur removed from base class)
- Motion is respectful: `prefers-reduced-motion` guarded, ease-out-quart easing throughout
- Keyboard-navigable with violet-500 focus rings on every interactive element

## 2. Colors: The Ink & Signal Palette

A near-black ground with two signal colors: azure (links, data, availability) and violet (primary accent, CTA, emphasis). The palette reads "developer-built" and is technically competent. It is also the most common palette choice for developer portfolios in 2024-2025, which is its primary weakness.

### Primary
- **Void Black** (`#0a0a0f`): The page background. Nearly black with an imperceptible violet tint. Used on `<body>` and as `ring-offset` for focus indicators.
- **Violet Core** (`#8b5cf6`): Primary accent. CTA gradient endpoint, timeline dots, badge backgrounds, section decorator, focus rings. The most saturated color on any given screen.
- **Azure Core** (`#3b82f6`): Secondary accent. Email links, availability indicator, badge borders (azure variant), scrollbar thumb gradient start. Functions as a cooler counterpart to violet.

### Secondary
- **Violet Light** (`#a78bfa`): Hover state for project titles (`group-hover:text-violet-300`), hero H1 second line ("Sánchez"), CTA gradient midpoint.
- **Azure Bright** (`#60a5fa`): Icon color in hero contact strip, section eyebrow labels, data table email links. Lighter reading weight than Azure Core.

### Neutral
- **Surface Raised** (`#16181f`): Card backgrounds (`bg-ink-800/75`). Distinguished from the void by tonal contrast alone — no border needed on its own.
- **Surface Sunken** (`#0f1014`): Rarely used directly; appears in favicon and meta theme-color.
- **Text Primary** (`#e2e8f0`): Body copy, form input text, all legible text on dark surfaces.
- **Text Secondary** (`#cbd5e1`): Description text, card body, data values.
- **Text Muted** (`#9ca3af`): Labels, chip text, timestamps, secondary metadata.
- **Text Dim** (`#6b7280`): Data-label text (`<dt>` elements), section separators, very secondary metadata.

### Named Rules

**The Earned Accent Rule.** Violet and azure are used to signal meaning: links, interactive states, focus, and emphasis. They are not used as decoration. If a surface can be dark without them, it must be dark without them.

**The Palette Warning.** The current void-black + violet/azure split is the first-order reflex palette for developer portfolios. It is documented here as the baseline. The forthcoming `/impeccable craft` palette rethink should break this reflex before any new surface is built. If the output of that session is still dark + violet + azure, it has failed.

## 3. Typography

**Display Font:** Space Grotesk (400, 500, 600, 700), with `system-ui, sans-serif` fallback
**Body Font:** Inter (300, 400, 500, 600, 700), with `system-ui, sans-serif` fallback
**Label / Mono Font:** JetBrains Mono (400, 500), with `monospace` fallback

**Character:** Space Grotesk is geometric with subtle personality — more human than Neue Haas, less clinical than DM Sans. Inter handles body copy cleanly at small sizes. JetBrains Mono is used intentionally for code-adjacent labels (eyebrows, data keys, badge text) where monospacing signals precision without irony.

**Warning on both display fonts:** Space Grotesk and Inter are both on the reflex-reject list for brand surfaces (overused training-data defaults). The current pairing is functional but anonymous. The palette rethink should include a typography review.

### Hierarchy
- **Display** (700, `clamp(3.75rem, 10vw, 7rem)`, 0.95 leading): Hero H1 only. Two-line split: first line white, second line accent color. Tight leading, negative tracking.
- **Headline** (700, `clamp(2.25rem, 5vw, 3rem)`, 1.2 leading): Section titles (`section-title` class). Left-aligned in content sections, centered in the About hero moment.
- **Title** (600, `1.25rem`, 1.3 leading): Card headings (experience entries, education), AI tools names.
- **Body** (400, `0.875rem`, 1.6 leading): All paragraph copy, card descriptions, form field text. Reads at 14px — tight for body but consistent with developer tooling conventions.
- **Label** (400, `0.6875rem`, 1.4 leading, `tracking-[0.3em]` uppercase): Section eyebrows (`01 · Sobre mí`), data-label `<dt>` elements, badge text, chip text. Mono family enforces a code-adjacent register.

### Named Rules

**The Label Language Rule.** Monospaced uppercase labels are reserved for structural metadata: section numbers, data keys, timestamps, tech badges. If a text element is prose, it does not get the mono label treatment. Overusing mono as decoration degrades the signal.

**The Measure Rule.** Body copy containers cap at `max-w-2xl` (672px) in single-column contexts. The hero description, contact page intro, and project taglines all use this constraint. Long lines on dark backgrounds cause eye fatigue faster than on light ones.

## 4. Elevation

This system uses **tonal layering** exclusively. Depth is communicated through background color steps, not shadows. The page background (`#0a0a0f`) is the lowest surface; cards (`#16181f` at 75% opacity) sit one step above it. There are no decorative drop shadows on resting surfaces.

The `backdrop-blur-sm` that previously appeared on all `.card` instances was removed as a performance and aesthetic correction. The card surface earns its separation from the page through opacity contrast alone.

Hover states on cards use `hover:bg-ink-800/90` (higher opacity = visually lifted) alongside `hover:border-white/20` (brighter border) and `hover:shadow-xl hover:shadow-violet-500/5` (trace shadow). The shadow is intentionally trace-level — a whisper of elevation, not a billboard.

### Shadow Vocabulary
- **Trace hover glow** (`0 20px 25px -5px rgb(139, 92, 246, 0.05), 0 8px 10px -6px rgb(139, 92, 246, 0.05)`): Applied to cards on hover only. Not decorative; signals interactivity.
- **CTA lift** (`shadow-lg shadow-violet-500/25` → `hover:shadow-xl hover:shadow-violet-500/45`): Primary button only. The shadow grows on hover to reinforce the `-translate-y-0.5` lift.
- **Logo glow** (`shadow-lg shadow-violet-500/30` → `hover:shadow-violet-500/50`): Navbar CS badge only. Identifies the brand anchor.

### Named Rules

**The Flat-By-Default Rule.** Every surface is flat at rest. Shadow appears only in response to state: hover on interactive cards, focus on buttons, and the brand glow on the logo. If a shadow appears on a surface that cannot be interacted with, it must be removed.

## 5. Components

Components feel **fluid and open**: pill-shaped interactive elements, generous card padding (28px), and consistent 44px minimum touch targets. Nothing feels cramped.

### Buttons
- **Shape:** Fully rounded (9999px). Pills signal approachability; the portfolio is not a serious enterprise tool.
- **Primary (`btn-primary`):** Azure-to-violet gradient background. White text. 12px/24px padding. On hover: lifts `-0.5px`, shadow intensifies. On `focus-visible`: violet-500 ring, 2px offset against void-black background. Used for CTAs (Contacto, Enviar mensaje, Ver proyectos).
- **Ghost (`btn-ghost`):** Transparent background, `border-white/15`, fog-200 text. Hover brightens border and background. Used for secondary actions.
- **Social (`social-btn`):** 44×44px circle. Border and background variant. Hover shifts to violet-500 tint. All social icons and footer links use this or the footer-icon inline pattern.

### Chips
- **Style:** Transparent background, `border-white/10`, fog-300 mono text, pill shape, `px-3 py-1` (12px/4px). Read-only technology tags used in project cards and skills spec sheet.
- **Hover:** Border brightens to `white/20`, text lifts to fog-100.

### Cards / Containers
- **Corner Style:** Gently curved (16px radius, `rounded-2xl`)
- **Background:** Surface Raised (`#16181f` at 75% opacity)
- **Shadow Strategy:** Flat at rest; trace violet glow on hover (see Elevation)
- **Border:** `border-white/10` at rest, `border-white/20` on hover
- **Internal Padding:** 28px (`p-7`), overridden with `!p-0` for cert cards (image-led layout)

### Inputs / Fields
- **Style:** Transparent background, `border-white/10`, white text at 14px, 8px radius
- **Focus:** `border-violet-500/50` + `ring-1 ring-violet-500/30` — a combined border + ring treatment that clearly indicates active state without a jarring full ring
- **Placeholder:** fog-500 (`#6b7280`) text
- **Consistent across both form surfaces** (homepage and `/contact` page). Labels use the mono uppercase label style.

### Navigation
- **Desktop:** Horizontal link list. `nav-link` class: fog-300 text, animated underline (`::after` pseudo-element, azure-to-violet gradient, width 0 → 100% on hover/focus-visible, 300ms ease-out-quart). `btn-primary` for the Contacto CTA.
- **Mobile menu:** Full-width dropdown. `py-3` per link (45px tap height). `focus-visible:outline` on each link. Backdrop blur (`backdrop-blur-xl`) on the menu panel — the one intentional blur in the system.
- **Scroll state:** On scroll, nav gains `bg-ink-950/85` + `backdrop-blur-xl` + `border-white/5` separator. Transparent at top of page.

### Spec Sheet List (signature component)
The skills and AI-tools sections use a two-column spec-sheet layout: a fixed-width mono label column (`10rem` or `1fr`) left, content right, separated by a `divide-y divide-white/5` rule. No card wrapper. Replaces the previously used identical card grids.

### Data Table (signature component)
The About section uses `<dl>/<dt>/<dd>` semantic structure. `.data-row` flex container: `<dt class="data-label">` (7.5rem wide, mono uppercase, fog-500) / `<dd class="data-value">` (fog-200, grows to fill). `rounded-xl bg-ink-800/70` background, subtle hover.

## 6. Do's and Don'ts

### Do:
- **Do** use `focus-visible:ring-2 focus-visible:ring-violet-500 focus-visible:ring-offset-2 focus-visible:ring-offset-void-black` on every interactive element. Keyboard users must see a consistent violet ring.
- **Do** preserve 128px (`py-32`) between major page sections. The section-level breathing room is deliberate rhythm, not waste.
- **Do** use `<dl>/<dt>/<dd>` for key/value data (About table, project metadata, anywhere a label-value relationship exists).
- **Do** use monospaced uppercase labels only for structural metadata: section numbers, data keys, tech badges. Not for prose.
- **Do** use `aspect-[16/9]` on media container divs before lazy-loaded images. Prevents CLS.
- **Do** add `motion-safe:` prefix to `animate-spin` and `animate-ping`. CRT intro must check `prefers-reduced-motion` before running.
- **Do** run a scene sentence before choosing any color strategy: who views this, where, under what light. If the sentence doesn't force a color answer, add detail until it does.

### Don't:
- **Don't** use `background-clip: text` with a gradient. Gradient text on headlines is a hard ban — the most visible AI-generated portfolio tell. Use a solid color.
- **Don't** build stat card grids: big number, small mono label, gradient bottom accent. This is the SaaS hero-metric template. Use prose, a ruled list, or inline text instead.
- **Don't** apply `backdrop-blur` to card components by default. Glassmorphism as a universal card treatment is decoration, not depth. The nav menu is the only intentional blur.
- **Don't** use the purple/blue gradient + dark background palette for any new surface without explicitly running the category-reflex check. This is the anti-reference from PRODUCT.md: "Generic dark SaaS landing page: purple/blue gradient heroes, glowing card grids." If it looks like an AI tool landing page, the palette failed.
- **Don't** use Space Grotesk or Inter for new work without reviewing alternatives. Both are on the reflex-reject list for brand surfaces. They are documented here as existing choices, not endorsed defaults.
- **Don't** render a GitHub contribution graph, language badge grid, or star counter on any surface. The GitHub-profile aesthetic is explicitly listed in PRODUCT.md's anti-references.
- **Don't** use identical card grids (same card shape, same heading+body layout) for more than one section. Vary the structure: spec-sheet list, definition list, timeline, ruled prose. The portfolio has eight sections; eight identical card grids read as one.
- **Don't** add `100% Compromiso` or equivalent empty confidence metrics. State only what is verifiable or felt. Inflated claims reduce trust.
