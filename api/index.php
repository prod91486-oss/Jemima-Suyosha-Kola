<?php
declare(strict_types=1);

/* ============================================================
   KOLA JEMIMA SUYOSHA — PORTFOLIO & WEB RESUME
   Vercel Ready Version
   ============================================================ */

$profile = [
    'name'        => 'Kola Jemima Suyosha',
    'short'       => 'Jemima',
    'tagline'     => 'I turn research into content, content into attention, and attention into something a business can actually use.',
    'email'       => 'sonukola74@gmail.com',
    'phone'       => '+91 9100253853',
    'phone_raw'   => '+919100253853',
];

// Vercel లో ఆటోమేటిక్ URL మారేలా డైనమిక్ బేస్ URL
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$uri = strtok($_SERVER['REQUEST_URI'] ?? '', '?');
$baseUrl = $protocol . '://' . $host . $uri;

$isResume = isset($_GET['open_resume']);
$navPrefix = $isResume ? $baseUrl : '';

$brings = [
    ['title' => 'The idea person',           'desc' => 'Finding relevant topics, researching audiences and turning scattered thoughts into a content plan.'],
    ['title' => 'The word person',           'desc' => 'Creating website copy, articles, blogs and email messages that communicate without making readers work too hard.'],
    ['title' => 'The search detective',      'desc' => 'Using keywords, search intent and competitor insights to identify content opportunities.'],
    ['title' => 'The improvement enthusiast','desc' => 'Revisiting existing content, spotting gaps and finding ways to make it more useful.'],
    ['title' => 'The AI sidekick user',      'desc' => 'Using tools like ChatGPT and Gemini to support research, ideation and drafting.'],
];

$projects = [
    [
        'num'       => '01',
        'title'     => 'Fexle.com',
        'subtitle'  => 'Organic search growth and SEO content strategy',
        'challenge' => 'Fexle needed stronger organic visibility, better rankings for competitive software services and informative website content that could explain complex technology solutions to potential customers.',
        'work'      => [
            'Independently researched, planned and created 50+ content pieces, including blogs, articles, website pages, landing pages, case studies and service pages.',
            'Covered technology topics such as Salesforce, cloud and automation.',
            'Conducted keyword research, competitor analysis, audience search research and content gap identification.',
            'Created content outlines, researched technical information and incorporated relevant keywords.',
            'Wrote SEO titles, meta descriptions and headings, while improving internal linking and readability.',
            'Optimised 25+ existing articles and coordinated with developers, designers and senior marketing team members.',
            'Monitored search performance through Google Search Console, Google Analytics and keyword ranking reports.',
            'Mentored three junior team members on content research, SEO writing, optimisation and quality checks.',
        ],
        'results'   => [
            'Achieved first-page Google rankings for 20+ articles.',
            'Secured #1 rankings for approximately 10–20 target keywords.',
            'Contributed to approximately 40% organic traffic growth within 1–3 months.',
        ],
    ],
    [
        'num'       => '02',
        'title'     => 'Quizophy',
        'subtitle'  => 'Website SEO optimisation and backlink development',
        'challenge' => 'The online quiz and education platform needed better organic visibility, stronger keyword rankings, improved search competitiveness and a stronger backlink profile.',
        'work'      => [
            'Identified keyword opportunities through keyword research.',
            'Optimised existing website pages to improve search relevance.',
            'Analysed competitor websites to identify SEO opportunities.',
            'Created backlinks through external websites to strengthen off-page SEO.',
            'Conducted website SEO audits to identify technical issues.',
            'Recommended corrective actions to the website team instead of directly implementing all technical fixes.',
            'Tracked keyword rankings and SEO performance.',
        ],
        'results'   => [
            'Improved on-page SEO through targeted page optimisation.',
            'Strengthened off-page SEO through external backlink building.',
            'Identified technical SEO issues and provided recommendations for improvement.',
            'Established a clearer view of keyword and competitor performance through tracking.',
        ],
    ],
    [
        'num'       => '03',
        'title'     => 'Email & Social Media Campaigns',
        'subtitle'  => 'Campaign copywriting, audience engagement and business acquisition',
        'challenge' => 'Fexle wanted to promote its software and website development services, strengthen its online presence and attract potential customers through social media and email marketing.',
        'work'      => [
            'Created service-focused and promotional content for LinkedIn, Facebook and Instagram.',
            'Wrote campaign captions, lead-generation posts, company updates and event promotions.',
            'Developed festival greetings and promotional email content.',
            'Wrote follow-up emails for recipients who opened emails but did not respond.',
            "Created social media content showcasing Fexle's website development services.",
        ],
        'results'   => [
            'Generated approximately 6–7 qualified leads per month through social media campaigns.',
            'Created a social media post that attracted an educational institution looking for website development services.',
            'Helped bring the institution on board as a paying client after discussions and budget approval with the CEO.',
            'Contributed to at least one customer conversion per month through marketing efforts.',
        ],
    ],
];

$workflow = [
    ['step' => '01', 'title' => 'Explore',     'desc' => 'Understand the product, audience and purpose.'],
    ['step' => '02', 'title' => 'Investigate', 'desc' => 'Research topics, keywords, competitors and search intent.'],
    ['step' => '03', 'title' => 'Organise',    'desc' => 'Build a practical content direction.'],
    ['step' => '04', 'title' => 'Create',      'desc' => 'Turn the research into clear, useful content.'],
    ['step' => '05', 'title' => 'Refine',      'desc' => 'Edit, optimise and check the details.'],
    ['step' => '06', 'title' => 'Learn',       'desc' => 'Review performance and identify what can work better next time.'],
];

$toolGroups = [
    'AI Tools & Research' => ['ChatGPT', 'Gemini', 'Claude', 'Perplexity', 'Bing'],
    'Content Creation & Management' => ['WordPress', 'Google Sites', 'Wix', 'Notion', 'Canva', 'Microsoft Word', 'Hemingway Editor', 'Grammarly'],
    'SEO & Keyword Research' => ['Google Search Console', 'Screaming Frog', 'Semrush', 'Ahrefs', 'Google Keyword Planner', 'Google Trends', 'AnswerThePublic'],
    'Analytics & Performance Tracking' => ['Google Analytics 4 (GA4)', 'Looker Studio', 'Google Tag Manager'],
    'Email Marketing & CRM' => ['Mailchimp'],
    'Productivity & Project Management' => ['Microsoft Excel', 'Google Slides', 'Trello', 'Jira', 'Confluence'],
];

function e(?string $s): string {
    return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="theme-color" content="#06070f">
<meta name="description" content="<?= e($profile['name']) ?> — Content Marketing & SEO Portfolio.">
<title><?= e($profile['name']) ?> — <?= $isResume ? 'Resume' : 'Portfolio' ?></title>

<style>
/* ============================================================
   1. TOKENS & RESET
   ============================================================ */
:root{
  --text:#f5f7ff;
  --muted:rgba(232,240,255,.66);
  --faint:rgba(232,240,255,.42);
  --line:rgba(255,255,255,.20);

  --sky:#7dd3fc;
  --violet:#a78bfa;
  --rose:#f0abfc;
  --mint:#5eead4;

  --r-2xl:36px;
  --r-xl:30px;
  --r-lg:22px;
  --r-md:18px;
  --r-sm:14px;

  --ease:cubic-bezier(.16,1,.3,1);
  --blur:32px;
}
*,*::before,*::after{box-sizing:border-box; word-wrap:break-word;}
html{scroll-behavior:smooth;-webkit-text-size-adjust:100%;}
body{
  margin:0;
  min-height:100dvh;
  font-family:-apple-system,BlinkMacSystemFont,"SF Pro Display","Segoe UI",Roboto,Inter,"Helvetica Neue",sans-serif;
  color:var(--text);
  background:#06070f;
  overflow-x:hidden;
  -webkit-font-smoothing:antialiased;
  -moz-osx-font-smoothing:grayscale;
  padding-top:calc(90px + env(safe-area-inset-top));
  padding-bottom:calc(40px + env(safe-area-inset-bottom));
  line-height:1.65;
  letter-spacing:-0.005em;
}
img{max-width:100%;display:block;}
a{color:inherit;text-decoration:none;}
h1,h2,h3,h4,h5,p,ul{margin:0;}
ul{list-style:none;padding:0;}
::selection{background:rgba(167,139,250,.42);color:#fff;}

/* ============================================================
   2. AURORA BACKGROUND
   ============================================================ */
.bg{
  position:fixed; inset:0; z-index:-3; overflow:hidden;
  background:
    radial-gradient(1200px 800px at 12% -10%, #1e0f4a 0%, transparent 60%),
    radial-gradient(1000px 760px at 92% 0%, #06283e 0%, transparent 58%),
    radial-gradient(1000px 1000px at 42% 110%, #2b0a3f 0%, transparent 62%),
    #06070f;
}
.blob{position:absolute; border-radius:50%; filter:blur(86px); opacity:.55; will-change:transform;}
.b1{width:620px;height:620px;left:-14%;top:-16%;background:radial-gradient(circle,#4a7cff 0%,transparent 72%);animation:drift1 24s ease-in-out infinite;}
.b2{width:520px;height:520px;right:-12%;top:0%;background:radial-gradient(circle,#0fd4d4 0%,transparent 72%);animation:drift2 28s ease-in-out infinite;}
.b3{width:680px;height:680px;left:22%;bottom:-26%;background:radial-gradient(circle,#8b5cf6 0%,transparent 72%);animation:drift3 32s ease-in-out infinite;}
.b4{width:440px;height:440px;right:6%;bottom:-8%;background:radial-gradient(circle,#ff69c8 0%,transparent 72%);opacity:.40;animation:drift1 26s ease-in-out infinite reverse;}

@keyframes drift1{50%{transform:translate3d(80px,56px,0) scale(1.18);}}
@keyframes drift2{50%{transform:translate3d(-70px,80px,0) scale(1.14);}}
@keyframes drift3{50%{transform:translate3d(60px,-70px,0) scale(1.20);}}

.grain{
  position:fixed; inset:0; z-index:-2; pointer-events:none; opacity:.038;
  background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='220' height='220'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='220' height='220' filter='url(%23n)'/%3E%3C/svg%3E");
  mix-blend-mode:overlay;
}
.vignette{position:fixed; inset:0; z-index:-1; pointer-events:none; background:radial-gradient(ellipse at center, transparent 42%, rgba(0,0,0,.35) 100%);}

/* ============================================================
   3. LIQUID GLASS BASE
   ============================================================ */
.glass{
  position:relative; isolation:isolate; border-radius:var(--r-2xl);
  background: linear-gradient(152deg, rgba(255,255,255,.165) 0%, rgba(255,255,255,.045) 46%, rgba(255,255,255,.105) 100%);
  border:1px solid rgba(255,255,255,.22);
  -webkit-backdrop-filter:blur(var(--blur)) saturate(200%);
  backdrop-filter:blur(var(--blur)) saturate(200%);
  box-shadow: 0 50px 96px -38px rgba(0,0,0,.85), 0 12px 30px -16px rgba(0,0,0,.6), inset 0 1px 0 rgba(255,255,255,.48), inset 0 -1px 0 rgba(255,255,255,.08), inset 0 0 70px rgba(255,255,255,.035);
}
.glass::before{
  content:""; position:absolute; inset:0; border-radius:inherit; pointer-events:none;
  background:linear-gradient(118deg, rgba(255,255,255,.32) 0%, rgba(255,255,255,0) 30%, rgba(255,255,255,0) 66%, rgba(255,255,255,.14) 100%);
  opacity:.55; mix-blend-mode:screen; z-index:-1;
}
.glass::after{
  content:""; position:absolute; inset:0; border-radius:inherit; pointer-events:none;
  background:radial-gradient(340px circle at var(--mx,50%) var(--my,0%), rgba(255,255,255,.26), transparent 64%);
  opacity:0; transition:opacity .55s var(--ease); z-index:-1;
}
.glass:hover::after{opacity:1;}

/* ============================================================
   4. LAYOUT & UTILS
   ============================================================ */
.wrap{ width:min(1180px, calc(100% - 32px)); margin-inline:auto; }
.section{ padding-block:clamp(30px, 5vw, 60px); }

.eyebrow{
  display:inline-flex; align-items:center; gap:9px; padding:8px 16px; border-radius:999px;
  font-size:.72rem; font-weight:600; letter-spacing:.16em; text-transform:uppercase; color:var(--muted);
  background:rgba(255,255,255,.075); border:1px solid rgba(255,255,255,.18);
  -webkit-backdrop-filter:blur(14px); backdrop-filter:blur(14px); margin-bottom:18px;
}
.eyebrow::before{ content:""; width:6px; height:6px; border-radius:50%; background:linear-gradient(135deg,var(--sky),var(--violet)); box-shadow:0 0 12px rgba(125,211,252,.95); }
.section-title{ font-size:clamp(1.6rem, 4vw, 2.8rem); font-weight:800; letter-spacing:-.03em; line-height:1.14; }
.section-lede{ margin-top:14px; max-width:62ch; color:var(--muted); font-size:clamp(.9rem, 1.7vw, 1.03rem); }
.grad{ background:linear-gradient(100deg,#8fd3ff 0%,#c0a6ff 46%,#ffa8e0 100%); -webkit-background-clip:text; background-clip:text; color:transparent; }

/* ============================================================
   5. NAVIGATION (Fully Responsive)
   ============================================================ */
.nav{
  position:fixed; top:calc(12px + env(safe-area-inset-top)); left:50%; transform:translateX(-50%); z-index:90;
  width:min(1180px, calc(100% - 24px)); display:flex; align-items:center; justify-content:space-between; gap:12px;
  padding:8px 10px 8px 20px; border-radius:999px; --blur:24px;
}
.brand{ display:flex; align-items:center; gap:10px; font-weight:700; letter-spacing:-.01em; font-size:.95rem; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; }
.brand .dot{ width:9px; height:9px; border-radius:50%; background:linear-gradient(135deg,var(--sky),var(--rose)); box-shadow:0 0 14px rgba(125,211,252,.95); animation:pulse 3s ease-in-out infinite; flex:0 0 auto; }
@keyframes pulse{50%{transform:scale(1.35);opacity:.7;}}

.nav-links{ display:flex; align-items:center; gap:4px; flex-shrink:0; overflow-x:auto; scrollbar-width:none; -ms-overflow-style:none; padding-bottom:2px; }
.nav-links::-webkit-scrollbar { display:none; }
.nav-links a:not(.nav-cta) { padding:8px 12px; border-radius:999px; font-size:.82rem; font-weight:600; color:var(--muted); transition:0.3s; white-space:nowrap; }
.nav-links a:not(.nav-cta):hover { color:var(--text); background:rgba(255,255,255,.10); }

.nav-cta{
  display:inline-flex; align-items:center; justify-content:center; gap:6px;
  background:linear-gradient(135deg,rgba(125,211,252,.95),rgba(167,139,250,.95));
  color:#080a16 !important; padding:8px 16px !important; border-radius:999px; font-size:.82rem; font-weight:700;
  box-shadow:0 8px 20px -10px rgba(125,211,252,.9); border:none; cursor:pointer; font-family:inherit; white-space:nowrap; transition:0.3s;
}
.nav-cta:hover { transform:translateY(-1px); box-shadow:0 12px 25px -10px rgba(125,211,252,1); }
.nav-cta .arrow { font-size:.9em; transition:transform .3s; }
.nav-cta:hover .arrow { transform:translate(2px,-2px); }

/* ============================================================
   6. HERO & PORTFOLIO STYLES
   ============================================================ */
.tilt{ transform-style:preserve-3d; will-change:transform; transition:transform .55s var(--ease); }
.hero-card{ padding:clamp(40px, 7vw, 96px) clamp(20px, 4vw, 64px); border-radius:var(--r-2xl); text-align:center; }
.hero-copy{ max-width:820px; margin-inline:auto; display:flex; flex-direction:column; align-items:center; }
.hero-copy h1{ font-size:clamp(2rem, 5.5vw, 4rem); font-weight:800; letter-spacing:-.04em; line-height:1.05; }
.lede{ margin-top:22px; max-width:62ch; color:var(--muted); font-size:clamp(.9rem, 1.7vw, 1.08rem); line-height:1.62; }

.about-card{ padding:clamp(24px, 4vw, 48px); }
.about-card p{ margin-top:16px; color:var(--muted); font-size:clamp(.9rem, 1.6vw, 1rem); line-height:1.72; max-width:70ch; }
.about-card p:first-of-type{ margin-top:6px; color:rgba(238,244,255,.92); font-size:clamp(.95rem, 1.8vw, 1.12rem); font-weight:500; }

.bring-grid{ display:grid; grid-template-columns:repeat(auto-fill, minmax(260px, 1fr)); gap:14px; margin-top:clamp(20px, 4vw, 42px); }
.bring{ padding:24px 22px; border-radius:var(--r-xl); transition:0.4s; --blur:24px; }
.bring:hover{ transform:translateY(-6px); border-color:rgba(255,255,255,.38); }
.bring .icon{ display:grid; place-items:center; width:44px; height:44px; border-radius:12px; font-size:1.1rem; font-weight:800; color:#0a0c18; background:linear-gradient(140deg,var(--sky),var(--violet) 60%,var(--rose)); margin-bottom:16px; }
.bring h4{ font-size:1rem; font-weight:750; line-height:1.3; }
.bring p{ margin-top:8px; font-size:.85rem; color:var(--muted); line-height:1.58; }

.proj{ padding:clamp(20px, 3.5vw, 42px); margin-top:20px; --blur:26px; }
.proj-head{ display:flex; align-items:center; gap:16px; padding-bottom:20px; border-bottom:1px solid rgba(255,255,255,.13); margin-bottom:22px; }
.proj-num{ flex:0 0 auto; display:grid; place-items:center; width:50px; height:50px; border-radius:16px; font-size:1rem; font-weight:800; color:#0a0c18; background:linear-gradient(140deg,#9ad8ff,#c0a6ff); }
.proj-head h3{ font-size:clamp(1.1rem, 2.5vw, 1.4rem); font-weight:800; line-height:1.22; }
.proj-sub{ margin-top:4px; font-size:.75rem; letter-spacing:.06em; text-transform:uppercase; color:var(--faint); font-weight:600; line-height:1.5; }
.proj-body{ display:grid; grid-template-columns:1fr 1fr; gap:clamp(20px, 3.4vw, 36px); }
.block h5{ font-size:.7rem; font-weight:800; letter-spacing:.16em; text-transform:uppercase; color:rgba(160,200,255,.92); margin-bottom:10px; }
.block p{ font-size:.88rem; color:var(--muted); line-height:1.65; }
.block ul li{ position:relative; padding-left:20px; margin-bottom:10px; font-size:.85rem; color:var(--muted); line-height:1.58; }
.block ul li:last-child{ margin-bottom:0; }
.block ul li::before{ content:""; position:absolute; left:4px; top:.66em; width:6px; height:6px; border-radius:50%; background:linear-gradient(135deg,var(--sky),var(--violet)); }
.results-box{ padding:16px; border-radius:var(--r-md); background:linear-gradient(150deg, rgba(94,234,212,.09), rgba(125,211,252,.05)); border:1px solid rgba(94,234,212,.22); }
.results-box li{ color:rgba(230,240,255,.95); padding-left:24px; font-weight:500; }
.results-box li::before{ content:"✓"; left:0; top:0; width:auto; height:auto; background:none; font-size:.85rem; font-weight:900; color:#6dfbb0; }

.workflow-grid{ display:grid; grid-template-columns:repeat(auto-fill, minmax(220px, 1fr)); gap:14px; margin-top:clamp(20px, 4vw, 42px); }
.step{ padding:22px 20px; border-radius:var(--r-xl); transition:0.4s; --blur:22px; position:relative; overflow:hidden; }
.step:hover{ transform:translateY(-6px); border-color:rgba(255,255,255,.38); }
.step-num{ display:inline-block; font-size:2.2rem; font-weight:800; background:linear-gradient(135deg,#8fd3ff,#c0a6ff); -webkit-background-clip:text; background-clip:text; color:transparent; margin-bottom:8px; }
.step h4{ font-size:1rem; font-weight:750; }
.step p{ margin-top:6px; font-size:.82rem; color:var(--muted); line-height:1.55; }
.workflow-note{ margin-top:24px; padding:18px; border-radius:var(--r-lg); background:rgba(125,211,252,.08); border:1px solid rgba(255,255,255,.14); font-size:.9rem; color:rgba(236,242,255,.9); text-align:center; font-style:italic; }

.tools-group{ margin-top:clamp(20px, 3vw, 36px); }
.tools-head{ display:flex; align-items:center; gap:12px; margin-bottom:14px; font-size:.72rem; font-weight:700; letter-spacing:.15em; text-transform:uppercase; color:var(--faint); }
.tools-head::after{ content:""; flex:1; height:1px; background:linear-gradient(90deg, rgba(255,255,255,.22), transparent); }
.chip-grid{ display:flex; flex-wrap:wrap; gap:8px; }
.chip{ padding:8px 14px; border-radius:999px; font-size:.78rem; font-weight:600; color:rgba(240,245,255,.92); background:rgba(255,255,255,.1); border:1px solid rgba(255,255,255,.2); transition:0.3s; }
.chip:hover{ transform:translateY(-2px); border-color:rgba(255,255,255,.4); background:rgba(255,255,255,.15); }

.curious-card{ padding:clamp(24px, 4vw, 48px); --blur:28px; }
.curious-card h2{ font-size:clamp(1.4rem, 3.5vw, 2rem); font-weight:800; margin-top:12px; }
.curious-card p{ margin-top:14px; color:var(--muted); font-size:clamp(.9rem, 1.6vw, 1rem); line-height:1.7; max-width:68ch; }
.curious-card p:last-child{ color:rgba(220,232,255,.8); font-style:italic; }

.footer{ margin-top:clamp(30px, 5vw, 60px); padding:clamp(24px, 4vw, 48px); text-align:center; --blur:26px; }
.footer h2{ font-size:clamp(1.3rem, 3.5vw, 2rem); font-weight:800; }
.contact-links{ display:flex; flex-wrap:wrap; gap:12px; justify-content:center; margin-top:24px; }
.contact-link{ display:inline-flex; align-items:center; gap:8px; padding:12px 20px; border-radius:999px; font-size:.85rem; font-weight:700; background:rgba(255,255,255,.1); border:1px solid rgba(255,255,255,.2); transition:0.3s; }
.contact-link:hover{ transform:translateY(-2px); background:rgba(255,255,255,.15); }
.contact-link .ic{ display:grid; place-items:center; width:24px; height:24px; border-radius:50%; background:linear-gradient(140deg,var(--sky),var(--violet)); color:#080a14; font-size:.7rem; font-weight:900; flex:0 0 auto; }
.copyright{ margin-top:24px; padding-top:16px; border-top:1px solid rgba(255,255,255,.11); font-size:.75rem; color:var(--faint); }

/* ============================================================
   7. RESUME SPECIFIC STYLES
   ============================================================ */
.resume-card{ padding:clamp(20px, 4vw, 50px); --blur:32px; margin-top:10px; }
.resume-header{ border-bottom:1px solid rgba(255,255,255,.15); padding-bottom:20px; margin-bottom:25px; }
.resume-header h1{ font-size:clamp(1.8rem, 4.5vw, 3rem); font-weight:800; margin-bottom:8px; }
.resume-contact{ display:flex; flex-wrap:wrap; gap:15px; color:var(--muted); font-size:.9rem; }
.resume-contact a{ color:var(--sky); text-decoration:none; }
.resume-contact a:hover{ color:var(--violet); }

.resume-section{ margin-bottom:30px; }
.resume-section:last-child{ margin-bottom:0; }
.resume-title{ font-size:.8rem; text-transform:uppercase; letter-spacing:.12em; font-weight:800; color:var(--sky); margin-bottom:15px; border-bottom:1px solid rgba(255,255,255,.1); padding-bottom:8px; }
.resume-item{ margin-bottom:20px; }
.resume-item:last-child{ margin-bottom:0; }
.resume-item-head{ display:flex; justify-content:space-between; align-items:flex-start; flex-wrap:wrap; margin-bottom:4px; gap:8px; }
.resume-item-title{ font-weight:700; font-size:1rem; color:var(--text); }
.resume-item-date{ font-size:.72rem; color:var(--faint); font-weight:700; text-transform:uppercase; background:rgba(255,255,255,.08); padding:3px 8px; border-radius:6px; white-space:nowrap; }
.resume-item-sub{ color:var(--violet); font-weight:600; font-size:.9rem; margin-bottom:8px; }
.resume-list{ padding-left:18px; margin:0; list-style:disc; }
.resume-list li{ margin-bottom:6px; color:var(--muted); font-size:.88rem; line-height:1.55; }
.resume-list li::marker{ color:var(--sky); }

.resume-skills-grid{ display:grid; gap:10px; }
.resume-skill-row{ display:grid; grid-template-columns:180px 1fr; gap:15px; align-items:baseline; }
.resume-skill-name{ font-weight:700; color:var(--text); font-size:.88rem; }
.resume-skill-list{ color:var(--muted); font-size:.88rem; line-height:1.55; }

/* ============================================================
   8. REVEAL
   ============================================================ */
.reveal{ opacity:0; transform:translateY(20px); transition:0.8s var(--ease); transition-delay:var(--d, 0s); }
.reveal.in{ opacity:1; transform:none; }

/* ============================================================
   9. RESPONSIVE (All Devices)
   ============================================================ */
@media (max-width: 900px){
  .proj-body { grid-template-columns: 1fr; }
  .resume-skill-row { grid-template-columns: 1fr; gap:4px; margin-bottom: 8px; }
}

@media (max-width: 768px){
  body { padding-top: calc(80px + env(safe-area-inset-top)); }
  .nav { padding: 6px 8px 6px 16px; }
  .brand { font-size: .88rem; }
  
  .nav-links a:not(.nav-cta) { display: none; }
  
  .nav-links { gap: 6px; overflow: visible; }
  .nav-cta { padding: 7px 12px !important; font-size: .78rem; }
  .nav-cta .arrow { display: none; }
  
  .resume-item-head { flex-direction: column; align-items: flex-start; gap: 4px; }
  .contact-link { width: 100%; justify-content: center; }
  .workflow-grid { grid-template-columns: 1fr; }
  
  .resume-card { padding: 20px 16px; }
  .resume-header h1 { font-size: 1.6rem; }
  .resume-contact { flex-direction: column; gap: 6px; }
}

@media (max-width: 480px){
  .hero-copy h1 { font-size: 1.8rem; }
  .section-title { font-size: 1.4rem; }
  .bring-grid { grid-template-columns: 1fr; }
  .proj-num { width: 40px; height: 40px; font-size: .85rem; border-radius: 12px; }
  
  .nav { width: calc(100% - 12px); padding-left: 12px; }
  .nav-cta { padding: 6px 10px !important; font-size: .75rem; }
}

/* ============================================================
   10. PRINT STYLES (PDF Save)
   ============================================================ */
@media print {
  body { background: #fff; color: #000; padding: 0; margin: 0; }
  .bg, .nav, .grain, .vignette { display: none !important; }
  .wrap { width: 100%; max-width: 100%; }
  .resume-card { box-shadow: none; border: none; background: none; padding: 0; backdrop-filter: none; }
  .resume-title { color: #000; border-bottom-color: #ccc; }
  .resume-item-sub { color: #333; }
  .resume-list li, .resume-contact, .resume-skill-list { color: #444; }
  .resume-list li::marker { color: #000; }
  .resume-item-date { background: #eee; color: #333; }
  .resume-header h1 { font-size: 24pt; }
  .resume-title { font-size: 12pt; }
  .resume-item-title { font-size: 11pt; }
  .resume-list li, .resume-skill-list { font-size: 10pt; }
  .page-break { page-break-before: always; }
}
</style>
<noscript><style>.reveal{opacity:1 !important;transform:none !important;}</style></noscript>
</head>
<body>

<!-- BACKGROUND -->
<div class="bg" aria-hidden="true">
  <span class="blob b1"></span>
  <span class="blob b2"></span>
  <span class="blob b3"></span>
  <span class="blob b4"></span>
</div>
<div class="grain" aria-hidden="true"></div>
<div class="vignette" aria-hidden="true"></div>

<!-- NAVIGATION -->
<nav class="nav glass" aria-label="Primary">
  <a href="<?= $baseUrl ?>" class="brand"><span class="dot"></span><?= e($profile['short']) ?></a>
  <div class="nav-links">
    <a href="<?= $navPrefix ?>#bring">What I Bring</a>
    <a href="<?= $navPrefix ?>#work">Work</a>
    <a href="<?= $navPrefix ?>#contact">Contact</a>
    
    <?php if ($isResume): ?>
      <button onclick="window.print()" class="nav-cta" aria-label="Print Resume">
        🖨️ Print
      </button>
      <a href="<?= $baseUrl ?>" class="nav-cta" aria-label="Back to Portfolio">
        Back <span class="arrow" aria-hidden="true">↗</span>
      </a>
    <?php else: ?>
      <a href="?open_resume=1" class="nav-cta" aria-label="View Resume">
        Resume <span class="arrow" aria-hidden="true">↗</span>
      </a>
    <?php endif; ?>
  </div>
</nav>

<main>
  <?php if ($isResume): ?>
    <!-- ============================================================ -->
    <!-- WEB RESUME VIEW                                              -->
    <!-- ============================================================ -->
    <section class="wrap">
      <div class="glass resume-card reveal in">
        
        <div class="resume-header">
          <h1><?= e($profile['name']) ?></h1>
          <div class="resume-contact">
            <span>✉ <a href="mailto:<?= e($profile['email']) ?>"><?= e($profile['email']) ?></a></span>
            <span>📞 <a href="tel:<?= e($profile['phone_raw']) ?>"><?= e($profile['phone']) ?></a></span>
          </div>
        </div>

        <!-- EDUCATION -->
        <div class="resume-section">
          <div class="resume-title">Education</div>
          <div class="resume-item">
            <div class="resume-item-head">
              <div class="resume-item-title">Jawaharlal Nehru Technological University, Ananthapur</div>
              <div class="resume-item-date">2018 - 2022</div>
            </div>
            <div class="resume-item-sub">Bachelor's in technology, Electronics and communication engineering</div>
          </div>
          <div class="resume-item">
            <div class="resume-item-head">
              <div class="resume-item-title">Narayana Junior college, Nellore</div>
              <div class="resume-item-date">2016 - 2018</div>
            </div>
            <div class="resume-item-sub">MPC</div>
          </div>
        </div>

        <!-- SKILLS -->
        <div class="resume-section">
          <div class="resume-title">Skills and Proficiencies</div>
          <div class="resume-skills-grid">
            <div class="resume-skill-row"><div class="resume-skill-name">Content Marketing & Strategy</div><div class="resume-skill-list">Content Strategy, Content Planning, Content Creation, Content Research, Blog Writing, Website Content Development, Content Optimization, Competitor Research.</div></div>
            <div class="resume-skill-row"><div class="resume-skill-name">Email & Campaign Marketing</div><div class="resume-skill-list">Email Campaign Content, Social Media Content, Content Distribution, Lead Generation.</div></div>
            <div class="resume-skill-row"><div class="resume-skill-name">AI-Assisted Content Creation</div><div class="resume-skill-list">AI-Powered Research, AI-Assisted Writing, Content Editing, Content Refinement, Content Ideation.</div></div>
            <div class="resume-skill-row"><div class="resume-skill-name">SEO & Organic Growth</div><div class="resume-skill-list">Technical SEO, On-Page SEO, Off-Page SEO, Keyword Research, Search Intent Analysis, Website Audits, Link Building.</div></div>
            <div class="resume-skill-row"><div class="resume-skill-name">Website Platforms</div><div class="resume-skill-list">WordPress, Wix, Google Sites.</div></div>
            <div class="resume-skill-row"><div class="resume-skill-name">Leadership & Collaboration</div><div class="resume-skill-list">Independent Project Management, Junior Team Mentoring, Cross-functional Collaboration.</div></div>
          </div>
        </div>

        <!-- WORK EXPERIENCE -->
        <div class="resume-section">
          <div class="resume-title">Work Experience</div>
          <div class="resume-item">
            <div class="resume-item-head">
              <div class="resume-item-title">Fexle Services Pvt Ltd</div>
              <div class="resume-item-date">Jan 2023 - Feb 2025</div>
            </div>
            <div class="resume-item-sub">Marketing Associate</div>
            <ul class="resume-list">
              <li>Independently researched, planned, created and optimized SEO-focused articles, blogs and website content.</li>
              <li>Developed content based on keyword research, search intent, competitor analysis and business requirements.</li>
              <li>Created email campaign content and follow-up emails to support marketing communication and lead nurturing.</li>
              <li>Used AI tools to assist with content research, drafting and refinement.</li>
              <li>Managed website content and technical, on-page and off-page SEO activities.</li>
              <li>Coordinated with developers to implement website improvements.</li>
              <li>Managed social media campaigns to distribute content and generate business enquiries.</li>
              <li>Analyzed marketing performance and prepared weekly reports.</li>
              <li>Mentored three junior team members and organized employee engagement activities.</li>
            </ul>
          </div>
        </div>

        <!-- PROJECTS -->
        <div class="resume-section">
          <div class="resume-title">Projects</div>
          <div class="resume-item">
            <div class="resume-item-title">Quizophy – Website SEO Optimization</div>
            <ul class="resume-list">
              <li>Executed website SEO initiatives to strengthen Quizophy's organic search presence and improve search engine discoverability.</li>
              <li>Focused on optimizing the website for better visibility and long-term organic growth.</li>
            </ul>
          </div>
          <div class="resume-item">
            <div class="resume-item-title">Fexle Services – SEO & Content Marketing Management</div>
            <ul class="resume-list">
              <li>Independently managed diverse SEO and digital marketing initiatives, spanning content development, website optimization, technical audits and supporting website creation.</li>
              <li>Led social media campaigns and lead generation activities, contributing to stronger organic visibility and business enquiries.</li>
              <li>Written content for social media channels (LinkedIn, Instagram, Facebook) and website pages.</li>
            </ul>
          </div>
        </div>

        <!-- ACHIEVEMENTS -->
        <div class="resume-section">
          <div class="resume-title">Achievements</div>
          <ul class="resume-list">
            <li>Produced 50+ SEO content pieces, including articles, blogs and website content.</li>
            <li>Optimized 25+ existing articles to improve search performance.</li>
            <li>Secured first-page Google rankings for 20+ articles.</li>
            <li>Achieved #1 Google rankings for 10–20 target keywords.</li>
            <li>Contributed to 40% organic traffic growth across the website and articles within 1–3 months.</li>
            <li>Generated 6 - 7 qualified leads per month through social media campaigns.</li>
            <li>Contributed to at least one customer conversion per month for software services.</li>
            <li>Developed approximately 5 supporting websites to strengthen off-page SEO initiatives.</li>
          </ul>
        </div>

        <!-- TOOLS -->
        <div class="resume-section">
          <div class="resume-title">Tools & Technologies</div>
          <div class="resume-skills-grid">
            <div class="resume-skill-row"><div class="resume-skill-name">AI Tools & Research</div><div class="resume-skill-list">ChatGPT, Gemini, Claude, Perplexity, Bing.</div></div>
            <div class="resume-skill-row"><div class="resume-skill-name">Content Creation & Mgmt</div><div class="resume-skill-list">WordPress, Google Sites, Wix, Notion, Canva, Microsoft Word, Hemingway Editor, Grammarly.</div></div>
            <div class="resume-skill-row"><div class="resume-skill-name">SEO & Keyword Research</div><div class="resume-skill-list">Google Search Console, Screaming Frog, Semrush, Ahrefs, Google Keyword Planner, Google Trends, AnswerThePublic.</div></div>
            <div class="resume-skill-row"><div class="resume-skill-name">Analytics & Performance</div><div class="resume-skill-list">Google Analytics 4 (GA4), Looker Studio, Google Tag Manager</div></div>
            <div class="resume-skill-row"><div class="resume-skill-name">Email Marketing & CRM</div><div class="resume-skill-list">Mailchimp</div></div>
            <div class="resume-skill-row"><div class="resume-skill-name">Productivity & PM</div><div class="resume-skill-list">Microsoft Excel, Google Slides, Trello, Jira, Confluence.</div></div>
          </div>
        </div>
        
      </div>
    </section>

  <?php else: ?>
    <!-- ============================================================ -->
    <!-- MAIN PORTFOLIO VIEW                                          -->
    <!-- ============================================================ -->
    
    <!-- HERO -->
    <section id="top" class="wrap">
      <div class="tilt" data-tilt="3">
        <div class="glass hero-card reveal">
          <div class="hero-copy">
            <h1>Kola Jemima <span class="grad">Suyosha</span></h1>
            <p class="lede"><?= e($profile['tagline']) ?></p>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section class="section wrap">
      <div class="glass about-card reveal">
        <span class="eyebrow">Hello, I'm Jemima!</span>
        <p>I'm a content marketing professional with a background in software services marketing and SEO.</p>
        <p>I enjoy figuring out what people are searching for, what makes them stop scrolling, and what makes them think, "Okay, this is worth my time."</p>
        <p>From website content to email campaigns, I like taking ideas from the messy first-draft stage to something clear, useful and ready for the world.</p>
        <p>I believe good content should have two things: a reason to exist and a reason to be read.</p>
      </div>
    </section>

    <!-- WHAT I BRING -->
    <section id="bring" class="section wrap">
      <div class="reveal">
        <span class="eyebrow">What I Bring to the Table</span>
        <h2 class="section-title">Five roles, <span class="grad">one content engine</span></h2>
      </div>
      <div class="bring-grid">
        <?php $icons = ['◆','✎','⌕','↻','✦']; $i = 0; foreach ($brings as $b): ?>
          <div class="bring glass reveal" style="--d:<?= number_format($i * 0.05, 2) ?>s">
            <div class="icon"><?= e($icons[$i] ?? '•') ?></div>
            <h4><?= e($b['title']) ?></h4>
            <p><?= e($b['desc']) ?></p>
          </div>
        <?php $i++; endforeach; ?>
      </div>
    </section>

    <!-- PROJECTS -->
    <section id="work" class="section wrap">
      <div class="reveal">
        <span class="eyebrow">A Few Projects I've Worked On</span>
      </div>
      <?php foreach ($projects as $p): ?>
        <article class="proj glass reveal">
          <header class="proj-head">
            <span class="proj-num"><?= e($p['num']) ?></span>
            <div>
              <h3><?= e($p['title']) ?></h3>
              <p class="proj-sub"><?= e($p['subtitle']) ?></p>
            </div>
          </header>
          <div class="proj-body">
            <div class="block">
              <h5>Challenge</h5>
              <p><?= e($p['challenge']) ?></p>
            </div>
            <div class="block">
              <h5>Work Done</h5>
              <ul><?php foreach ($p['work'] as $w): ?><li><?= e($w) ?></li><?php endforeach; ?></ul>
            </div>
            <div class="block" style="grid-column:1 / -1;">
              <h5>Results</h5>
              <div class="results-box"><ul><?php foreach ($p['results'] as $r): ?><li><?= e($r) ?></li><?php endforeach; ?></ul></div>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </section>

    <!-- WORKFLOW -->
    <section class="section wrap">
      <div class="reveal">
        <span class="eyebrow">My Content Workflow</span>
        <h2 class="section-title">A repeatable path <span class="grad">from idea to impact</span></h2>
        <p class="section-lede">I don't believe in creating content just because the calendar says Tuesday.</p>
      </div>
      <div class="workflow-grid">
        <?php $i = 0; foreach ($workflow as $w): ?>
          <div class="step glass reveal" style="--d:<?= number_format($i * 0.05, 2) ?>s">
            <div class="step-num"><?= e($w['step']) ?></div>
            <h4><?= e($w['title']) ?></h4>
            <p><?= e($w['desc']) ?></p>
          </div>
        <?php $i++; endforeach; ?>
      </div>
      <p class="workflow-note reveal">The goal isn't simply to publish more. It's to make every piece count.</p>
    </section>

    <!-- TOOLS -->
    <section class="section wrap">
      <div class="reveal"><span class="eyebrow">Tools &amp; Technologies</span></div>
      <?php $i = 0; foreach ($toolGroups as $group => $items): ?>
        <div class="tools-group reveal" style="--d:<?= number_format($i * 0.05, 2) ?>s">
          <div class="tools-head"><?= e($group) ?></div>
          <div class="chip-grid"><?php foreach ($items as $tool): ?><span class="chip"><?= e($tool) ?></span><?php endforeach; ?></div>
        </div>
      <?php $i++; endforeach; ?>
    </section>

    <!-- CURIOUS -->
    <section class="section wrap">
      <div class="glass curious-card reveal">
        <span class="eyebrow">What I'm Curious About Next</span>
        <h2>Where I want to <span class="grad">take this next</span></h2>
        <p>I'm especially interested in SaaS, technology and global products.</p>
        <p>I love the challenge of making complicated products easier to understand, creating content that earns attention, and finding fresh ways to connect brands with people.</p>
        <p>I'm always learning, experimenting and collecting ideas. Some become content strategies. Others remain in my notes app, waiting for their moment.</p>
      </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="wrap">
      <div class="footer glass reveal">
        <h2>Let's make something <span class="grad">worth reading.</span></h2>
        <div class="contact-links">
          <a href="mailto:<?= e($profile['email']) ?>" class="contact-link"><span class="ic">@</span><?= e($profile['email']) ?></a>
          <a href="tel:<?= e($profile['phone_raw']) ?>" class="contact-link"><span class="ic">☎</span><?= e($profile['phone']) ?></a>
        </div>
        <div class="copyright">© <?= date('Y') ?> <?= e($profile['name']) ?></div>
      </div>
    </section>

  <?php endif; ?>
</main>

<script>
(() => {
  'use strict';
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const canHover     = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

  /* ---------- Scroll reveal ---------- */
  const revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && !reduceMotion) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -5% 0px' });
    revealEls.forEach((el) => io.observe(el));
  } else {
    revealEls.forEach((el) => el.classList.add('in'));
  }

  /* ---------- 3D tilt ---------- */
  if (canHover && !reduceMotion) {
    document.querySelectorAll('[data-tilt]').forEach((el) => {
      const max = parseFloat(el.dataset.tilt) || 3;
      let tx = 0, ty = 0, cx = 0, cy = 0;
      let raf = null, hovering = false;

      const loop = () => {
        cx += (tx - cx) * 0.14;
        cy += (ty - cy) * 0.14;
        el.style.transform = 'perspective(1100px) rotateX(' + (-cy * max).toFixed(3) + 'deg) rotateY(' + (cx * max).toFixed(3) + 'deg) translateZ(0)';
        if (hovering || Math.abs(tx - cx) > 0.0006 || Math.abs(ty - cy) > 0.0006) {
          raf = requestAnimationFrame(loop);
        } else {
          raf = null;
          el.style.transform = '';
        }
      };

      const start = () => { if (!raf) raf = requestAnimationFrame(loop); };

      el.addEventListener('pointerenter', () => {
        hovering = true;
        el.style.transition = 'transform .18s linear';
        start();
      });

      el.addEventListener('pointermove', (ev) => {
        const r = el.getBoundingClientRect();
        const px = (ev.clientX - r.left) / r.width;
        const py = (ev.clientY - r.top) / r.height;
        tx = (px - 0.5) * 2; ty = (py - 0.5) * 2;
        const glass = el.querySelector('.glass') || el;
        glass.style.setProperty('--mx', (px * 100).toFixed(2) + '%');
        glass.style.setProperty('--my', (py * 100).toFixed(2) + '%');
      });

      el.addEventListener('pointerleave', () => {
        hovering = false; tx = 0; ty = 0;
        el.style.transition = 'transform .75s cubic-bezier(.16,1,.3,1)';
        start();
      });
    });
  }

  /* ---------- Cursor specular on all glass ---------- */
  if (canHover && !reduceMotion) {
    document.querySelectorAll('.glass').forEach((card) => {
      card.addEventListener('pointermove', (ev) => {
        const r = card.getBoundingClientRect();
        const px = ((ev.clientX - r.left) / r.width) * 100;
        const py = ((ev.clientY - r.top) / r.height) * 100;
        card.style.setProperty('--mx', px.toFixed(2) + '%');
        card.style.setProperty('--my', py.toFixed(2) + '%');
      });
    });
  }

  /* ---------- Nav shadow on scroll ---------- */
  const nav = document.querySelector('.nav');
  let lastState = false;
  window.addEventListener('scroll', () => {
    const scrolled = window.scrollY > 12;
    if (scrolled !== lastState) {
      lastState = scrolled;
      nav.style.boxShadow = scrolled ? '0 30px 60px -28px rgba(0,0,0,.92), inset 0 1px 0 rgba(255,255,255,.45)' : '';
    }
  }, { passive: true });

  /* ---------- Smooth anchor scroll ---------- */
  document.querySelectorAll('a[href^="#"]').forEach((link) => {
    link.addEventListener('click', (ev) => {
      const id = link.getAttribute('href');
      if (!id || id === '#') return;
      const target = document.querySelector(id);
      if (!target) return;
      ev.preventDefault();
      const offset = nav ? nav.getBoundingClientRect().height + 28 : 90;
      const top = target.getBoundingClientRect().top + window.scrollY - offset;
      window.scrollTo({ top: Math.max(top, 0), behavior: reduceMotion ? 'auto' : 'smooth' });
    });
  });
})();
</script>

</body>
</html>
