<?php
declare(strict_types=1);

/* ============================================================
   KOLA JEMIMA SUYOSHA — PORTFOLIO & WEB RESUME
   ============================================================ */

$profile = [
    'name'        => 'Kola Jemima Suyosha',
    'short'       => 'Jemima',
    'tagline'     => 'I turn research into content, content into attention, and attention into something a business can actually use.',
    'email'       => 'sonukola74@gmail.com',
    'phone'       => '+91 9100253853',
    'phone_raw'   => '+919100253853',
    'resume_link' => '?open_resume=1',
];

// ============================================================
// 1. WEB RESUME PAGE (Replaces the PDF)
// ============================================================
if (isset($_GET['open_resume'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Resume — <?= htmlspecialchars($profile['name']) ?></title>
    <style>
        :root{
            --text:#f5f7ff; --muted:rgba(232,240,255,.7); --faint:rgba(232,240,255,.5);
            --sky:#7dd3fc; --violet:#a78bfa; --rose:#f0abfc;
            --glass-bg:linear-gradient(152deg, rgba(255,255,255,.165) 0%, rgba(255,255,255,.045) 46%, rgba(255,255,255,.105) 100%);
            --glass-border:1px solid rgba(255,255,255,.22);
        }
        *{box-sizing:border-box;}
        body{
            margin:0; min-height:100dvh; font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;
            color:var(--text); background:#06070f; line-height:1.6; padding:40px 20px;
            -webkit-font-smoothing:antialiased;
        }
        .bg{position:fixed; inset:0; z-index:-3; background:radial-gradient(1200px 800px at 12% -10%, #1e0f4a 0%, transparent 60%), radial-gradient(1000px 760px at 92% 0%, #06283e 0%, transparent 58%), #06070f;}
        .blob{position:absolute; border-radius:50%; filter:blur(86px); opacity:.55;}
        .b1{width:620px;height:620px;left:-14%;top:-16%;background:radial-gradient(circle,#4a7cff 0%,transparent 72%);}
        .b2{width:520px;height:520px;right:-12%;top:0%;background:radial-gradient(circle,#0fd4d4 0%,transparent 72%);}
        .b3{width:680px;height:680px;left:22%;bottom:-26%;background:radial-gradient(circle,#8b5cf6 0%,transparent 72%);}
        
        .resume-wrap{max-width:900px; margin:0 auto; position:relative;}
        .glass{
            position:relative; border-radius:32px; background:var(--glass-bg); border:var(--glass-border);
            backdrop-filter:blur(32px) saturate(200%); -webkit-backdrop-filter:blur(32px) saturate(200%);
            box-shadow:0 50px 96px -38px rgba(0,0,0,.85), inset 0 1px 0 rgba(255,255,255,.48);
            padding:50px;
        }
        
        /* Top Actions */
        .actions{display:flex; justify-content:space-between; align-items:center; margin-bottom:30px;}
        .btn{
            display:inline-flex; align-items:center; gap:8px; padding:12px 24px; border-radius:99px;
            font-weight:700; font-size:.9rem; text-decoration:none; cursor:pointer; transition:0.3s;
            background:rgba(255,255,255,.1); border:1px solid rgba(255,255,255,.2); color:#fff;
        }
        .btn:hover{background:rgba(255,255,255,.2);}
        .btn-primary{background:linear-gradient(135deg,#8fd3ff,#b9a3ff); color:#080a16; border:none;}
        .btn-primary:hover{transform:translateY(-2px); box-shadow:0 10px 20px rgba(125,211,252,.3);}

        /* Resume Content */
        .header{border-bottom:1px solid rgba(255,255,255,.15); padding-bottom:30px; margin-bottom:30px;}
        .header h1{font-size:2.5rem; font-weight:800; margin:0 0 10px 0; letter-spacing:-.03em;}
        .contact-info{display:flex; flex-wrap:wrap; gap:20px; color:var(--muted); font-size:.95rem;}
        .contact-info a{color:var(--sky); text-decoration:none;}
        
        .section{margin-bottom:35px;}
        .section-title{
            font-size:1.1rem; text-transform:uppercase; letter-spacing:.1em; font-weight:800;
            color:var(--sky); margin-bottom:15px; border-bottom:1px solid rgba(255,255,255,.1); padding-bottom:8px;
        }
        .item{margin-bottom:20px;}
        .item:last-child{margin-bottom:0;}
        .item-header{display:flex; justify-content:space-between; align-items:baseline; flex-wrap:wrap; margin-bottom:5px;}
        .item-title{font-weight:700; font-size:1.1rem;}
        .item-date{font-size:.85rem; color:var(--faint); font-weight:600; text-transform:uppercase; letter-spacing:.05em;}
        .item-sub{color:var(--violet); font-weight:600; font-size:.95rem; margin-bottom:10px;}
        
        ul{padding-left:20px; margin:0;}
        li{margin-bottom:8px; color:var(--muted);}
        li::marker{color:var(--sky);}
        
        .skills-grid{display:grid; gap:12px;}
        .skill-row{display:grid; grid-template-columns:200px 1fr; gap:15px;}
        .skill-name{font-weight:700; color:var(--text);}
        .skill-list{color:var(--muted);}
        
        @media (max-width: 768px){
            .glass{padding:25px;}
            .header h1{font-size:2rem;}
            .skill-row{grid-template-columns:1fr; gap:5px;}
            .actions{flex-direction:column; gap:10px;}
            .btn{width:100%; justify-content:center;}
        }
        
        @media print {
            body{background:#fff; color:#000; padding:0;}
            .bg, .actions{display:none;}
            .glass{box-shadow:none; border:none; background:none; padding:0; backdrop-filter:none;}
            .section-title{color:#000; border-bottom-color:#ccc;}
            .item-sub{color:#333;}
            li, .contact-info, .skill-list{color:#444;}
            li::marker{color:#000;}
        }
    </style>
    </head>
    <body>
        <div class="bg"><div class="blob b1"></div><div class="blob b2"></div><div class="blob b3"></div></div>
        
        <div class="resume-wrap">
            <div class="actions">
                <a href="./" class="btn">← Back to Portfolio</a>
                <button onclick="window.print()" class="btn btn-primary">🖨️ Print / Save as PDF</button>
            </div>
            
            <div class="glass">
                <div class="header">
                    <h1><?= htmlspecialchars($profile['name']) ?></h1>
                    <div class="contact-info">
                        <span>✉ <a href="mailto:<?= htmlspecialchars($profile['email']) ?>"><?= htmlspecialchars($profile['email']) ?></a></span>
                        <span>📞 <a href="tel:<?= htmlspecialchars($profile['phone_raw']) ?>"><?= htmlspecialchars($profile['phone']) ?></a></span>
                    </div>
                </div>

                <!-- EDUCATION -->
                <div class="section">
                    <div class="section-title">Education</div>
                    <div class="item">
                        <div class="item-header">
                            <div class="item-title">Jawaharlal Nehru Technological University, Ananthapur</div>
                            <div class="item-date">2018 - 2022</div>
                        </div>
                        <div class="item-sub">Bachelor's in technology, Electronics and communication engineering</div>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="item-title">Narayana Junior college, Nellore</div>
                            <div class="item-date">2016 - 2018</div>
                        </div>
                        <div class="item-sub">MPC</div>
                    </div>
                </div>

                <!-- SKILLS -->
                <div class="section">
                    <div class="section-title">Skills and Proficiencies</div>
                    <div class="skills-grid">
                        <div class="skill-row"><div class="skill-name">Content Marketing & Strategy</div><div class="skill-list">Content Strategy, Content Planning, Content Creation, Content Research, Blog Writing, Website Content Development, Content Optimization, Competitor Research.</div></div>
                        <div class="skill-row"><div class="skill-name">Email & Campaign Marketing</div><div class="skill-list">Email Campaign Content, Social Media Content, Content Distribution, Lead Generation.</div></div>
                        <div class="skill-row"><div class="skill-name">AI-Assisted Content Creation</div><div class="skill-list">AI-Powered Research, AI-Assisted Writing, Content Editing, Content Refinement, Content Ideation.</div></div>
                        <div class="skill-row"><div class="skill-name">SEO & Organic Growth</div><div class="skill-list">Technical SEO, On-Page SEO, Off-Page SEO, Keyword Research, Search Intent Analysis, Website Audits, Link Building.</div></div>
                        <div class="skill-row"><div class="skill-name">Website Platforms</div><div class="skill-list">WordPress, Wix, Google Sites.</div></div>
                        <div class="skill-row"><div class="skill-name">Leadership & Collaboration</div><div class="skill-list">Independent Project Management, Junior Team Mentoring, Cross-functional Collaboration.</div></div>
                    </div>
                </div>

                <!-- WORK EXPERIENCE -->
                <div class="section">
                    <div class="section-title">Work Experience</div>
                    <div class="item">
                        <div class="item-header">
                            <div class="item-title">Fexle Services Pvt Ltd</div>
                            <div class="item-date">Jan 2023 - Feb 2025</div>
                        </div>
                        <div class="item-sub">Marketing Associate</div>
                        <ul>
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
                <div class="section">
                    <div class="section-title">Projects</div>
                    <div class="item">
                        <div class="item-title">Quizophy – Website SEO Optimization</div>
                        <ul>
                            <li>Executed website SEO initiatives to strengthen Quizophy's organic search presence and improve search engine discoverability.</li>
                            <li>Focused on optimizing the website for better visibility and long-term organic growth.</li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="item-title">Fexle Services – SEO & Content Marketing Management</div>
                        <ul>
                            <li>Independently managed diverse SEO and digital marketing initiatives, spanning content development, website optimization, technical audits and supporting website creation.</li>
                            <li>Led social media campaigns and lead generation activities, contributing to stronger organic visibility and business enquiries.</li>
                            <li>Written content for social media channels (LinkedIn, Instagram, Facebook) and website pages.</li>
                        </ul>
                    </div>
                </div>

                <!-- ACHIEVEMENTS -->
                <div class="section">
                    <div class="section-title">Achievements</div>
                    <ul>
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
                <div class="section">
                    <div class="section-title">Tools & Technologies</div>
                    <div class="skills-grid">
                        <div class="skill-row"><div class="skill-name">AI Tools & Research</div><div class="skill-list">ChatGPT, Gemini, Claude, Perplexity, Bing.</div></div>
                        <div class="skill-row"><div class="skill-name">Content Creation & Mgmt</div><div class="skill-list">WordPress, Google Sites, Wix, Notion, Canva, Microsoft Word, Hemingway Editor, Grammarly.</div></div>
                        <div class="skill-row"><div class="skill-name">SEO & Keyword Research</div><div class="skill-list">Google Search Console, Screaming Frog, Semrush, Ahrefs, Google Keyword Planner, Google Trends, AnswerThePublic.</div></div>
                        <div class="skill-row"><div class="skill-name">Analytics & Performance</div><div class="skill-list">Google Analytics 4 (GA4), Looker Studio, Google Tag Manager</div></div>
                        <div class="skill-row"><div class="skill-name">Email Marketing & CRM</div><div class="skill-list">Mailchimp</div></div>
                        <div class="skill-row"><div class="skill-name">Productivity & PM</div><div class="skill-list">Microsoft Excel, Google Slides, Trello, Jira, Confluence.</div></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
    exit; // Stop executing the rest of the portfolio page
}

// ============================================================
// 2. MAIN PORTFOLIO PAGE
// ============================================================

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

/* ---------- helper ---------- */
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
<meta name="description" content="Kola Jemima Suyosha — content marketing and SEO portfolio. Research-driven content that earns attention and delivers business results.">
<title><?= e($profile['name']) ?> — Portfolio</title>

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
*,*::before,*::after{box-sizing:border-box;}
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
  padding-top:calc(96px + env(safe-area-inset-top));
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
  position:fixed;
  inset:0;
  z-index:-3;
  overflow:hidden;
  background:
    radial-gradient(1200px 800px at 12% -10%, #1e0f4a 0%, transparent 60%),
    radial-gradient(1000px 760px at 92% 0%, #06283e 0%, transparent 58%),
    radial-gradient(1000px 1000px at 42% 110%, #2b0a3f 0%, transparent 62%),
    #06070f;
}
.blob{
  position:absolute;
  border-radius:50%;
  filter:blur(86px);
  opacity:.55;
  will-change:transform;
  transform:translate3d(0,0,0);
}
.b1{width:620px;height:620px;left:-14%;top:-16%;background:radial-gradient(circle,#4a7cff 0%,transparent 72%);animation:drift1 24s ease-in-out infinite;}
.b2{width:520px;height:520px;right:-12%;top:0%;background:radial-gradient(circle,#0fd4d4 0%,transparent 72%);animation:drift2 28s ease-in-out infinite;}
.b3{width:680px;height:680px;left:22%;bottom:-26%;background:radial-gradient(circle,#8b5cf6 0%,transparent 72%);animation:drift3 32s ease-in-out infinite;}
.b4{width:440px;height:440px;right:6%;bottom:-8%;background:radial-gradient(circle,#ff69c8 0%,transparent 72%);opacity:.40;animation:drift1 26s ease-in-out infinite reverse;}

@keyframes drift1{50%{transform:translate3d(80px,56px,0) scale(1.18);}}
@keyframes drift2{50%{transform:translate3d(-70px,80px,0) scale(1.14);}}
@keyframes drift3{50%{transform:translate3d(60px,-70px,0) scale(1.20);}}

.grain{
  position:fixed;inset:0;z-index:-2;pointer-events:none;opacity:.038;
  background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='220' height='220'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='220' height='220' filter='url(%23n)'/%3E%3C/svg%3E");
  mix-blend-mode:overlay;
}
.vignette{
  position:fixed;inset:0;z-index:-1;pointer-events:none;
  background:radial-gradient(ellipse at center, transparent 42%, rgba(0,0,0,.35) 100%);
}

/* ============================================================
   3. LIQUID GLASS BASE
   ============================================================ */
.glass{
  position:relative;
  isolation:isolate;
  border-radius:var(--r-2xl);
  background:
    linear-gradient(152deg,
      rgba(255,255,255,.165) 0%,
      rgba(255,255,255,.045) 46%,
      rgba(255,255,255,.105) 100%);
  border:1px solid rgba(255,255,255,.22);
  -webkit-backdrop-filter:blur(var(--blur)) saturate(200%);
  backdrop-filter:blur(var(--blur)) saturate(200%);
  box-shadow:
    0 50px 96px -38px rgba(0,0,0,.85),
    0 12px 30px -16px rgba(0,0,0,.6),
    inset 0 1px 0 rgba(255,255,255,.48),
    inset 0 -1px 0 rgba(255,255,255,.08),
    inset 0 0 70px rgba(255,255,255,.035);
}
.glass::before{
  content:"";
  position:absolute;
  inset:0;
  border-radius:inherit;
  pointer-events:none;
  background:linear-gradient(118deg,
      rgba(255,255,255,.32) 0%,
      rgba(255,255,255,0)   30%,
      rgba(255,255,255,0)   66%,
      rgba(255,255,255,.14) 100%);
  opacity:.55;
  mix-blend-mode:screen;
  z-index:-1;
}
.glass::after{
  content:"";
  position:absolute;
  inset:0;
  border-radius:inherit;
  pointer-events:none;
  background:radial-gradient(340px circle at var(--mx,50%) var(--my,0%),
      rgba(255,255,255,.26), transparent 64%);
  opacity:0;
  transition:opacity .55s var(--ease);
  z-index:-1;
}
.glass:hover::after{opacity:1;}

/* ============================================================
   4. LAYOUT
   ============================================================ */
.wrap{
  width:min(1180px, calc(100% - 32px));
  margin-inline:auto;
}
.section{padding-block:clamp(40px, 6vw, 76px);}

.eyebrow{
  display:inline-flex;
  align-items:center;
  gap:9px;
  padding:8px 16px;
  border-radius:999px;
  font-size:.72rem;
  font-weight:600;
  letter-spacing:.16em;
  text-transform:uppercase;
  color:var(--muted);
  background:rgba(255,255,255,.075);
  border:1px solid rgba(255,255,255,.18);
  -webkit-backdrop-filter:blur(14px);
  backdrop-filter:blur(14px);
  margin-bottom:18px;
}
.eyebrow::before{
  content:"";
  width:6px;height:6px;border-radius:50%;
  background:linear-gradient(135deg,var(--sky),var(--violet));
  box-shadow:0 0 12px rgba(125,211,252,.95);
}
.section-title{
  font-size:clamp(1.85rem, 4.4vw, 2.9rem);
  font-weight:800;
  letter-spacing:-.03em;
  line-height:1.14;
}
.section-lede{
  margin-top:14px;
  max-width:62ch;
  color:var(--muted);
  font-size:clamp(.94rem, 1.7vw, 1.03rem);
}
.grad{
  background:linear-gradient(100deg,#8fd3ff 0%,#c0a6ff 46%,#ffa8e0 100%);
  -webkit-background-clip:text;
  background-clip:text;
  color:transparent;
}

/* ============================================================
   5. NAV
   ============================================================ */
.nav{
  position:fixed;
  top:calc(14px + env(safe-area-inset-top));
  left:50%;
  transform:translateX(-50%);
  z-index:90;
  width:min(1180px, calc(100% - 24px));
  display:flex;
  align-items:center;
  justify-content:space-between;
  gap:16px;
  padding:9px 10px 9px 22px;
  border-radius:999px;
  --blur:24px;
}
.brand{
  display:flex;
  align-items:center;
  gap:10px;
  font-weight:700;
  letter-spacing:-.01em;
  font-size:.96rem;
  white-space:nowrap;
  overflow:hidden;
  text-overflow:ellipsis;
}
.brand .dot{
  width:9px;height:9px;border-radius:50%;
  background:linear-gradient(135deg,var(--sky),var(--rose));
  box-shadow:0 0 14px rgba(125,211,252,.95);
  animation:pulse 3s ease-in-out infinite;
  flex:0 0 auto;
}
@keyframes pulse{50%{transform:scale(1.35);opacity:.7;}}
.nav-links{
  display:flex;
  align-items:center;
  gap:3px;
  flex-shrink:0;
}
.nav-links a{
  padding:9px 15px;
  border-radius:999px;
  font-size:.85rem;
  font-weight:600;
  color:var(--muted);
  transition:color .3s var(--ease), background .3s var(--ease);
  white-space:nowrap;
}
.nav-links a:hover{color:var(--text);background:rgba(255,255,255,.10);}
.nav-cta{
  display:inline-flex;
  align-items:center;
  gap:7px;
  background:linear-gradient(135deg,rgba(125,211,252,.95),rgba(167,139,250,.95));
  color:#080a16 !important;
  padding:10px 20px !important;
  box-shadow:0 10px 26px -12px rgba(125,211,252,.9);
  transition:transform .35s var(--ease), box-shadow .35s var(--ease);
}
.nav-cta:hover{transform:translateY(-1px);box-shadow:0 14px 30px -12px rgba(125,211,252,1);}
.nav-cta .arrow{
  font-size:.95em;
  line-height:1;
  transition:transform .35s var(--ease);
}
.nav-cta:hover .arrow{transform:translate(2px,-2px);}

/* ============================================================
   6. HERO
   ============================================================ */
.tilt{
  transform-style:preserve-3d;
  will-change:transform;
  transition:transform .55s var(--ease);
}
.hero-card{
  padding:clamp(48px, 7vw, 96px) clamp(28px, 5vw, 64px);
  border-radius:var(--r-2xl);
  text-align:center;
}
.hero-copy{
  max-width:820px;
  margin-inline:auto;
  display:flex;
  flex-direction:column;
  align-items:center;
}
.hero-copy h1{
  font-size:clamp(2.2rem, 6vw, 4rem);
  font-weight:800;
  letter-spacing:-.04em;
  line-height:1.05;
}
.lede{
  margin-top:22px;
  max-width:62ch;
  color:var(--muted);
  font-size:clamp(.95rem, 1.8vw, 1.08rem);
  line-height:1.62;
}

/* ============================================================
   7. ABOUT
   ============================================================ */
.about-card{
  padding:clamp(28px, 4.4vw, 52px);
}
.about-card p{
  margin-top:16px;
  color:var(--muted);
  font-size:clamp(.92rem, 1.7vw, 1rem);
  line-height:1.72;
  max-width:70ch;
}
.about-card p:first-of-type{
  margin-top:6px;
  color:rgba(238,244,255,.92);
  font-size:clamp(1rem, 1.9vw, 1.12rem);
  font-weight:500;
}

/* ============================================================
   8. WHAT I BRING
   ============================================================ */
.bring-grid{
  display:grid;
  grid-template-columns:repeat(auto-fill, minmax(268px, 1fr));
  gap:14px;
  margin-top:clamp(24px, 4vw, 42px);
}
.bring{
  padding:24px 22px;
  border-radius:var(--r-xl);
  transition:transform .55s var(--ease), border-color .5s var(--ease);
  --blur:24px;
}
.bring:hover{transform:translateY(-6px);border-color:rgba(255,255,255,.38);}
.bring .icon{
  display:grid;
  place-items:center;
  width:46px;height:46px;
  border-radius:14px;
  font-size:1.2rem;
  font-weight:800;
  color:#0a0c18;
  background:linear-gradient(140deg,var(--sky),var(--violet) 60%,var(--rose));
  box-shadow:0 12px 26px -12px rgba(150,180,255,.95), inset 0 1px 0 rgba(255,255,255,.6);
  margin-bottom:16px;
}
.bring h4{
  font-size:1.02rem;
  font-weight:750;
  letter-spacing:-.015em;
  line-height:1.3;
}
.bring p{
  margin-top:8px;
  font-size:.86rem;
  color:var(--muted);
  line-height:1.58;
}

/* ============================================================
   9. PROJECTS
   ============================================================ */
.proj{
  padding:clamp(24px, 3.6vw, 42px);
  margin-top:20px;
  --blur:26px;
}
.proj-head{
  display:flex;
  align-items:center;
  gap:18px;
  padding-bottom:22px;
  border-bottom:1px solid rgba(255,255,255,.13);
  margin-bottom:26px;
}
.proj-num{
  flex:0 0 auto;
  display:grid;
  place-items:center;
  width:56px;height:56px;
  border-radius:18px;
  font-size:1.05rem;
  font-weight:800;
  letter-spacing:-.02em;
  color:#0a0c18;
  background:linear-gradient(140deg,#9ad8ff,#c0a6ff);
  box-shadow:0 16px 34px -14px rgba(150,180,255,.95), inset 0 1px 0 rgba(255,255,255,.65);
}
.proj-head h3{
  font-size:clamp(1.12rem, 2.8vw, 1.45rem);
  font-weight:800;
  letter-spacing:-.024em;
  line-height:1.22;
}
.proj-sub{
  margin-top:4px;
  font-size:.78rem;
  letter-spacing:.06em;
  text-transform:uppercase;
  color:var(--faint);
  font-weight:600;
  line-height:1.5;
}
.proj-body{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:clamp(20px, 3.4vw, 36px);
}
.block h5{
  font-size:.72rem;
  font-weight:800;
  letter-spacing:.16em;
  text-transform:uppercase;
  color:rgba(160,200,255,.92);
  margin-bottom:10px;
}
.block p{
  font-size:.9rem;
  color:var(--muted);
  line-height:1.65;
}
.block ul li{
  position:relative;
  padding-left:22px;
  margin-bottom:10px;
  font-size:.875rem;
  color:var(--muted);
  line-height:1.58;
}
.block ul li:last-child{margin-bottom:0;}
.block ul li::before{
  content:"";
  position:absolute;
  left:4px;top:.66em;
  width:6px;height:6px;
  border-radius:50%;
  background:linear-gradient(135deg,var(--sky),var(--violet));
  box-shadow:0 0 9px rgba(125,211,252,.8);
}
.results-box{
  padding:18px 20px;
  border-radius:var(--r-md);
  background:linear-gradient(150deg, rgba(94,234,212,.09), rgba(125,211,252,.05));
  border:1px solid rgba(94,234,212,.22);
}
.results-box li{
  color:rgba(230,240,255,.95);
  padding-left:28px;
  font-weight:500;
}
.results-box li::before{
  content:"✓";
  left:0;top:0;
  width:auto;height:auto;
  background:none;
  box-shadow:none;
  font-size:.88rem;
  font-weight:900;
  color:#6dfbb0;
  text-shadow:0 0 12px rgba(109,251,176,.75);
}

/* ============================================================
   10. WORKFLOW
   ============================================================ */
.workflow-grid{
  display:grid;
  grid-template-columns:repeat(auto-fill, minmax(240px, 1fr));
  gap:14px;
  margin-top:clamp(24px, 4vw, 42px);
}
.step{
  padding:24px 22px;
  border-radius:var(--r-xl);
  transition:transform .55s var(--ease), border-color .5s var(--ease);
  --blur:22px;
  position:relative;
  overflow:hidden;
}
.step:hover{transform:translateY(-6px);border-color:rgba(255,255,255,.38);}
.step::before{
  content:"";
  position:absolute;
  top:-20%;right:-10%;
  width:120px;height:120px;
  border-radius:50%;
  background:radial-gradient(circle, rgba(167,139,250,.32), transparent 70%);
  filter:blur(16px);
  pointer-events:none;
}
.step-num{
  display:inline-block;
  font-size:2.4rem;
  font-weight:800;
  letter-spacing:-.05em;
  line-height:1;
  background:linear-gradient(135deg,#8fd3ff,#c0a6ff);
  -webkit-background-clip:text;
  background-clip:text;
  color:transparent;
  margin-bottom:10px;
}
.step h4{
  font-size:1.02rem;
  font-weight:750;
  letter-spacing:-.014em;
}
.step p{
  margin-top:6px;
  font-size:.85rem;
  color:var(--muted);
  line-height:1.55;
}
.workflow-note{
  margin-top:clamp(24px, 3.5vw, 36px);
  padding:20px 24px;
  border-radius:var(--r-lg);
  background:linear-gradient(150deg, rgba(125,211,252,.08), rgba(167,139,250,.05));
  border:1px solid rgba(255,255,255,.14);
  font-size:clamp(.9rem, 1.6vw, .98rem);
  color:rgba(236,242,255,.9);
  text-align:center;
  font-style:italic;
}

/* ============================================================
   11. TOOLS
   ============================================================ */
.tools-group{
  margin-top:clamp(22px, 3.4vw, 36px);
}
.tools-head{
  display:flex;
  align-items:center;
  gap:12px;
  margin-bottom:14px;
  font-size:.76rem;
  font-weight:700;
  letter-spacing:.16em;
  text-transform:uppercase;
  color:var(--faint);
}
.tools-head::after{
  content:"";
  flex:1;
  height:1px;
  background:linear-gradient(90deg, rgba(255,255,255,.22), transparent);
}
.chip-grid{
  display:flex;
  flex-wrap:wrap;
  gap:9px;
}
.chip{
  padding:10px 16px;
  border-radius:999px;
  font-size:.82rem;
  font-weight:600;
  color:rgba(240,245,255,.92);
  background:linear-gradient(150deg, rgba(255,255,255,.13), rgba(255,255,255,.045));
  border:1px solid rgba(255,255,255,.20);
  -webkit-backdrop-filter:blur(14px);
  backdrop-filter:blur(14px);
  transition:transform .4s var(--ease), border-color .4s var(--ease), background .4s var(--ease);
}
.chip:hover{
  transform:translateY(-3px);
  border-color:rgba(255,255,255,.4);
  background:linear-gradient(150deg, rgba(255,255,255,.19), rgba(255,255,255,.07));
}

/* ============================================================
   12. CURIOUS
   ============================================================ */
.curious-card{
  padding:clamp(28px, 4.5vw, 52px);
  --blur:28px;
}
.curious-card h2{
  font-size:clamp(1.55rem, 3.6vw, 2.2rem);
  font-weight:800;
  letter-spacing:-.028em;
  line-height:1.16;
  margin-top:12px;
}
.curious-card p{
  margin-top:16px;
  color:var(--muted);
  font-size:clamp(.93rem, 1.7vw, 1rem);
  line-height:1.7;
  max-width:68ch;
}
.curious-card p:last-child{color:rgba(220,232,255,.8);font-style:italic;}

/* ============================================================
   13. CONTACT / FOOTER
   ============================================================ */
.footer{
  margin-top:clamp(36px, 5vw, 66px);
  padding:clamp(28px, 4vw, 52px);
  text-align:center;
  --blur:26px;
}
.footer h2{
  font-size:clamp(1.4rem, 3.8vw, 2.1rem);
  font-weight:800;
  letter-spacing:-.03em;
  line-height:1.18;
}
.contact-links{
  display:flex;
  flex-wrap:wrap;
  gap:12px;
  justify-content:center;
  margin-top:28px;
}
.contact-link{
  display:inline-flex;
  align-items:center;
  gap:10px;
  padding:14px 22px;
  border-radius:999px;
  font-size:.9rem;
  font-weight:700;
  background:linear-gradient(150deg, rgba(255,255,255,.13), rgba(255,255,255,.045));
  border:1px solid rgba(255,255,255,.22);
  -webkit-backdrop-filter:blur(14px);
  backdrop-filter:blur(14px);
  transition:transform .45s var(--ease), background .4s var(--ease), border-color .4s var(--ease);
}
.contact-link:hover{
  transform:translateY(-3px);
  background:linear-gradient(150deg, rgba(255,255,255,.19), rgba(255,255,255,.07));
  border-color:rgba(255,255,255,.4);
}
.contact-link .ic{
  display:grid;
  place-items:center;
  width:26px;height:26px;
  border-radius:50%;
  background:linear-gradient(140deg,var(--sky),var(--violet));
  color:#080a14;
  font-size:.72rem;
  font-weight:900;
  flex:0 0 auto;
}
.copyright{
  margin-top:28px;
  padding-top:20px;
  border-top:1px solid rgba(255,255,255,.11);
  font-size:.76rem;
  color:var(--faint);
  letter-spacing:.03em;
}

/* ============================================================
   14. REVEAL
   ============================================================ */
.reveal{
  opacity:0;
  transform:translateY(32px) scale(.985);
  transition:opacity 1s var(--ease), transform 1s var(--ease);
  transition-delay:var(--d, 0s);
  will-change:opacity, transform;
}
.reveal.in{opacity:1;transform:none;}

/* ============================================================
   15. RESPONSIVE
   ============================================================ */
@media (max-width: 920px){
  .proj-body{grid-template-columns:1fr;}
}
@media (max-width: 640px){
  :root{--blur:22px;--r-2xl:28px;--r-xl:24px;}
  body{padding-top:calc(88px + env(safe-area-inset-top));}
  .nav{padding:8px 8px 8px 16px;}
  .nav-links a:not(.nav-cta){display:none;}
  .brand{font-size:.88rem;}
  .bring-grid{grid-template-columns:1fr;}
  .workflow-grid{grid-template-columns:1fr 1fr;gap:10px;}
  .step{padding:18px 16px;}
  .step-num{font-size:2rem;}
  .proj-head{flex-direction:row;align-items:flex-start;gap:14px;}
  .proj-num{width:46px;height:46px;font-size:.92rem;border-radius:14px;}
  .chip{padding:8px 13px;font-size:.78rem;}
  .contact-link{width:100%;justify-content:center;}
}
@media (max-width: 400px){
  .workflow-grid{grid-template-columns:1fr;}
}
@media (prefers-reduced-motion: reduce){
  *,*::before,*::after{
    animation-duration:.001ms !important;
    animation-iteration-count:1 !important;
    transition-duration:.001ms !important;
    scroll-behavior:auto !important;
  }
  .reveal{opacity:1;transform:none;}
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

<!-- NAV -->
<nav class="nav glass" aria-label="Primary">
  <a href="#top" class="brand"><span class="dot"></span><?= e($profile['short']) ?></a>
  <div class="nav-links">
    <a href="#bring">What I Bring</a>
    <a href="#work">Work</a>
    <a href="#contact">Contact</a>
    <!-- Resume Button triggers the PHP Web Resume -->
    <a href="<?= e($profile['resume_link']) ?>"
       target="_blank"
       rel="noopener"
       class="nav-cta"
       aria-label="View Web Resume">
      Resume <span class="arrow" aria-hidden="true">↗</span>
    </a>
  </div>
</nav>

<main>

  <!-- ============ HERO ============ -->
  <section id="top" class="wrap">
    <div class="tilt" data-tilt="4">
      <div class="glass hero-card reveal">
        <div class="hero-copy">
          <h1>Kola Jemima <span class="grad">Suyosha</span></h1>
          <p class="lede"><?= e($profile['tagline']) ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ ABOUT ============ -->
  <section class="section wrap">
    <div class="glass about-card reveal">
      <span class="eyebrow">Hello, I'm Jemima!</span>
      <p>
        I'm a content marketing professional with a background in software services marketing and SEO.
      </p>
      <p>
        I enjoy figuring out what people are searching for, what makes them stop scrolling, and what makes them think, "Okay, this is worth my time."
      </p>
      <p>
        From website content to email campaigns, I like taking ideas from the messy first-draft stage to something clear, useful and ready for the world.
      </p>
      <p>
        I believe good content should have two things: a reason to exist and a reason to be read.
      </p>
    </div>
  </section>

  <!-- ============ WHAT I BRING ============ -->
  <section id="bring" class="section wrap">
    <div class="reveal">
      <span class="eyebrow">What I Bring to the Table</span>
      <h2 class="section-title">Five roles, <span class="grad">one content engine</span></h2>
    </div>

    <div class="bring-grid">
      <?php $icons = ['◆','✎','⌕','↻','✦']; $i = 0; foreach ($brings as $b): ?>
        <div class="bring glass reveal" style="--d:<?= number_format($i * 0.07, 2) ?>s">
          <div class="icon"><?= e($icons[$i] ?? '•') ?></div>
          <h4><?= e($b['title']) ?></h4>
          <p><?= e($b['desc']) ?></p>
        </div>
      <?php $i++; endforeach; ?>
    </div>
  </section>

  <!-- ============ PROJECTS ============ -->
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
            <ul>
              <?php foreach ($p['work'] as $w): ?>
                <li><?= e($w) ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="block" style="grid-column:1 / -1;">
            <h5>Results</h5>
            <div class="results-box">
              <ul>
                <?php foreach ($p['results'] as $r): ?>
                  <li><?= e($r) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
  </section>

  <!-- ============ WORKFLOW ============ -->
  <section class="section wrap">
    <div class="reveal">
      <span class="eyebrow">My Content Workflow</span>
      <h2 class="section-title">A repeatable path <span class="grad">from idea to impact</span></h2>
      <p class="section-lede">
        I don't believe in creating content just because the calendar says Tuesday.
      </p>
    </div>

    <div class="workflow-grid">
      <?php $i = 0; foreach ($workflow as $w): ?>
        <div class="step glass reveal" style="--d:<?= number_format($i * 0.07, 2) ?>s">
          <div class="step-num"><?= e($w['step']) ?></div>
          <h4><?= e($w['title']) ?></h4>
          <p><?= e($w['desc']) ?></p>
        </div>
      <?php $i++; endforeach; ?>
    </div>

    <p class="workflow-note reveal">
      The goal isn't simply to publish more. It's to make every piece count.
    </p>
  </section>

  <!-- ============ TOOLS ============ -->
  <section class="section wrap">
    <div class="reveal">
      <span class="eyebrow">Tools &amp; Technologies</span>
    </div>

    <?php $i = 0; foreach ($toolGroups as $group => $items): ?>
      <div class="tools-group reveal" style="--d:<?= number_format($i * 0.06, 2) ?>s">
        <div class="tools-head"><?= e($group) ?></div>
        <div class="chip-grid">
          <?php foreach ($items as $tool): ?>
            <span class="chip"><?= e($tool) ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    <?php $i++; endforeach; ?>
  </section>

  <!-- ============ CURIOUS ============ -->
  <section class="section wrap">
    <div class="glass curious-card reveal">
      <span class="eyebrow">What I'm Curious About Next</span>
      <h2>Where I want to <span class="grad">take this next</span></h2>
      <p>
        I'm especially interested in SaaS, technology and global products.
      </p>
      <p>
        I love the challenge of making complicated products easier to understand, creating content that earns attention, and finding fresh ways to connect brands with people.
      </p>
      <p>
        I'm always learning, experimenting and collecting ideas. Some become content strategies. Others remain in my notes app, waiting for their moment.
      </p>
    </div>
  </section>

  <!-- ============ CONTACT ============ -->
  <section id="contact" class="wrap">
    <div class="footer glass reveal">
      <h2>Let's make something <span class="grad">worth reading.</span></h2>

      <div class="contact-links">
        <a href="mailto:<?= e($profile['email']) ?>" class="contact-link">
          <span class="ic">@</span>
          <?= e($profile['email']) ?>
        </a>
        <a href="tel:<?= e($profile['phone_raw']) ?>" class="contact-link">
          <span class="ic">☎</span>
          <?= e($profile['phone']) ?>
        </a>
      </div>

      <div class="copyright">
        © <?= date('Y') ?> <?= e($profile['name']) ?>
      </div>
    </div>
  </section>

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
    }, { threshold: 0.12, rootMargin: '0px 0px -6% 0px' });
    revealEls.forEach((el) => io.observe(el));
  } else {
    revealEls.forEach((el) => el.classList.add('in'));
  }

  /* ---------- 3D tilt ---------- */
  if (canHover && !reduceMotion) {
    document.querySelectorAll('[data-tilt]').forEach((el) => {
      const max = parseFloat(el.dataset.tilt) || 4;
      let tx = 0, ty = 0, cx = 0, cy = 0;
      let raf = null, hovering = false;

      const loop = () => {
        cx += (tx - cx) * 0.14;
        cy += (ty - cy) * 0.14;
        el.style.transform =
          'perspective(1100px) rotateX(' + (-cy * max).toFixed(3) + 'deg) ' +
          'rotateY(' + (cx * max).toFixed(3) + 'deg) translateZ(0)';
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
        tx = (px - 0.5) * 2;
        ty = (py - 0.5) * 2;
        const glass = el.querySelector('.glass') || el;
        glass.style.setProperty('--mx', (px * 100).toFixed(2) + '%');
        glass.style.setProperty('--my', (py * 100).toFixed(2) + '%');
      });

      el.addEventListener('pointerleave', () => {
        hovering = false;
        tx = 0; ty = 0;
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
  const onScroll = () => {
    const scrolled = window.scrollY > 12;
    if (scrolled !== lastState) {
      lastState = scrolled;
      nav.style.boxShadow = scrolled
        ? '0 30px 60px -28px rgba(0,0,0,.92), inset 0 1px 0 rgba(255,255,255,.45)'
        : '';
    }
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

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
      window.scrollTo({
        top: Math.max(top, 0),
        behavior: reduceMotion ? 'auto' : 'smooth'
      });
    });
  });
})();
</script>

</body>
</html>