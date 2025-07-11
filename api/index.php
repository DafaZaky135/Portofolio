<?php
// Data Mahasiswa
$name = "Ananda Dafa Zaky";
$title = "Student in Data Science and Analytics";
$email = "anan23184ti@student.nurulfikri.ac.id";
$phone = "IDN (+62) 821-1484-1600";
$location = "Depok, West Java, Indonesia";
$university = "Sekolah Tinggi Teknologi Terpadu Nurul Fikri";
$major = "Informatics Engineering - Data Science Track";
$year = "5th Semester";

// Data Proyek
$projects = [
    [
        'title' => 'Sales Forecasting for a Leading Indonesian Minimarket',
        'description' => 'Developed time-series models in Python (ARIMA, Prophet, ETS) to forecast monthly sales for one year using historical real data from September 2023 to April 2025. Provided actionable insights for inventory planning and business strategy.',
        'tech' => ['Python', 'ARIMA', 'Prophet', 'ETS'],
        'image' => '',
        'category' => 'Campus Projects',
        'colab' => 'https://colab.research.google.com/drive/17HcT5XtVHNgsKXDLaR-2RyJBqyWl-3uE?usp=sharing',
    ],
    [
        'title' => 'Interactive Trend Analysis of Poverty and Unemployment in Indonesia',
        'description' => 'Developed a web-based dashboard using Python, Streamlit, and Plotly to visualize BPS data across provinces from 2020 to 2024. Features include interactive filters, correlation charts, heatmaps, and summary statistics.',
        'tech' => ['Python', 'Streamlit', 'Plotly'],
        'image' => '',
        'category' => 'Campus Projects',
        'github' => 'https://github.com/DafaZaky135/Visualisasi-Data',
    ]
];

// Data Skill
$skills = [
    'Languages' => ['Indonesian (Native)', 'English (Intermediate)', 'Arabic (Intermediate)'],
    'Programming Languages' => ['Python', 'R', 'SQL'],
    'Libraries' => ['Pandas', 'NumPy', 'Matplotlib', 'Seaborn', 'Prophet', 'Streamlit', 'ggplot2', 'dplyr', 'tidyr', 'readr'],
    'Software' => ['Jupyter Notebook', 'Google Colab', 'Visual Studio Code', 'Microsoft Excel', 'Microsoft Word'],
    'Collaboration' => ['Git', 'GitLab', 'Google Drive'],
    'Other Skills' => ['Public Speaking', 'Leadership', 'Collaboration', 'Critical Thinking', 'Time Management', 'Adaptability', 'Mentoring & Teaching']
];

// Data Pendidikan dan Pengalaman
$education = [
    [
        'degree' => 'Informatics Engineering Student',
        'school' => $university,
        'period' => 'Sep 2023 - Expected 2027',
        'specialization' => 'Data Science Track',
        'gpa' => '3.67/4.00',
        'description' => 'Focused on data science, including statistics, and real-world data problem-solving through various projects'
    ]
];

$experiences = [
    [
        'position' => 'Media Coordinator',
        'company' => 'Ulumul Qur\'an Islamic Boarding School Organization',
        'period' => 'Apr 2021 - Mar 2022',
        'description' => 'Led the media team in capturing and editing photos/videos for social media, delivered weekly reports, and ensured effective communication and task delegation within the team.',
        'type' => 'organizational'
    ],
    [
        'position' => 'Substitute Teacher',
        'company' => 'SMP Fatahillah',
        'period' => 'Nov 2022 - May 2023',
        'description' => 'Taught Qur\'an recitation and substituted general subjects for grades 7-9, followed the official curriculum, and collaborated with staff for seamless academic delivery.',
        'type' => 'teaching'
    ],
    [
        'position' => 'Project Officer',
        'company' => 'HIMATI (Informatics Student Association)',
        'period' => 'Mar 2024 - Jan 2025',
        'description' => 'Mentored new students through additional learning sessions and acted as Project Officer for Oscar 1.0, a creative web development competition for high school students in Jabdeudabek.',
        'type' => 'academic'
    ],
    [
        'position' => 'Public Relation',
        'company' => 'Nurul Fikri Esport (NEST)',
        'period' => 'Mar 2024 - Present',
        'description' => 'Managed social media presence and audience engagement, served as the main communication point for participants during events.',
        'type' => 'organizational'
    ]
];

// Fungsi untuk menampilkan projects berdasarkan kategori
function filterProjects($projects, $category = 'all') {
    if ($category === 'all') return $projects;
    return array_filter($projects, function($project) use ($category) {
        return $project['category'] === $category;
    });
}

$currentFilter = isset($_GET['filter']) ? htmlspecialchars($_GET['filter']) : 'all';
$filteredProjects = filterProjects($projects, $currentFilter);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of Ananda Dafa Zaky, a Student in Data Science and Analytics.">
    <meta name="keywords" content="data science, portfolio, Ananda Dafa Zaky, Sekolah Tinggi Teknologi Terpadu Nurul Fikri">
    <meta name="author" content="Ananda Dafa Zaky">
    <title><?php echo htmlspecialchars($name); ?> - Portfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #D32F2F 0%, #FF6F61 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(45deg, #D32F2F, #FF6F61);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: #D32F2F;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(45deg, #D32F2F, #FF6F61);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Mobile Menu */
        .mobile-menu {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
            color: #333;
        }

        .nav-links.active {
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 60px;
            left: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            padding: 1rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        /* Hero Section */
        .hero {
            padding: 120px 0 80px;
            text-align: center;
            color: white;
            background: linear-gradient(135deg, #D32F2F 0%, #FF6F61 100%);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><circle cx="200" cy="200" r="100" fill="%23ffffff08"/><circle cx="800" cy="300" r="150" fill="%23ffffff05"/><circle cx="400" cy="700" r="120" fill="%23ffffff08"/></svg>');
            animation: float 15s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(0, 0, 0, 0.2);
            color: white;
            border-radius: 25px;
            padding: 0.3rem 1rem;
            margin-bottom: 1rem;
            font-size: 0.9rem;
            backdrop-filter: blur(10px);
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
            opacity: 0;
            animation: fadeInUp 1s ease 0.5s forwards;
        }

        .hero .subtitle {
            font-size: 1.4rem;
            margin-bottom: 0.5rem;
            opacity: 0;
            animation: fadeInUp 1s ease 0.7s forwards;
        }

        .hero .university {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 2rem;
            opacity: 0;
            animation: fadeInUp 1s ease 0.9s forwards;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            opacity: 0;
            animation: fadeInUp 1s ease 1.1s forwards;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .btn-primary {
            background: #333;
            color: white;
            border-color: transparent;
        }

        .btn-secondary {
            background: transparent;
            color: #333;
            border: 2px solid #333;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .btn-primary:hover {
            background: transparent;
            color: #333;
            border: 2px solid #333;
        }

        .btn-secondary:hover {
            background: #333;
            color: white;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Section Styles */
        section {
            padding: 80px 0;
            background: white;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #333;
        }

        .contact .section-title {
            color: white;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 3rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .contact .section-subtitle {
            color: #ddd;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(45deg, #D32F2F, #FF6F61);
            margin: 1rem auto;
            border-radius: 2px;
        }

        /* About Section */
        .about {
            background: #FFF8E1;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        .about-text p {
            margin-bottom: 1.5rem;
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .stat-item {
            text-align: center;
            padding: 1.5rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: #D32F2F;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #666;
            font-size: 0.9rem;
        }

        .education-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border-left: 4px solid #D32F2F;
        }

        .education-degree {
            font-size: 1.3rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .education-school {
            color: #D32F2F;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .education-period {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .education-details {
            display: flex;
            gap: 2rem;
            margin-bottom: 1rem;
        }

        .education-gpa {
            background: #FF6F61;
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* Skills Section */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .skill-category {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border-top: 4px solid #D32F2F;
            transition: transform 0.3s ease;
        }

        .skill-category:hover {
            transform: translateY(-5px);
        }

        .skill-category h3 {
            margin-bottom: 1.5rem;
            color: #333;
            font-size: 1.2rem;
        }

        .skill-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
        }

        .skill-tag {
            background: linear-gradient(45deg, #D32F2F, #FF6F61);
            color: white;
            padding: 0.4rem 1rem;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: transform 0.3s ease;
        }

        .skill-tag:hover {
            transform: scale(1.05);
        }

        /* Projects Section */
        .projects {
            background: #FFF8E1;
        }

        .project-filters {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            background: white;
            border: 2px solid #D32F2F;
            color: #D32F2F;
            padding: 0.6rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: #D32F2F;
            color: white;
            transform: translateY(-2px);
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .project-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .project-content {
            padding: 1.5rem;
        }

        .project-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.8rem;
            color: #333;
        }

        .project-description {
            color: #666;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .tech-tag {
            background: #F8F9FA;
            color: #333;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .project-links {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .project-link {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #D32F2F;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .project-link:hover {
            color: #FF6F61;
        }

        .project-link.disabled {
            color: #666;
            cursor: not-allowed;
            text-decoration: line-through;
        }

        /* Experience Section */
        .experience-timeline {
            position: relative;
            padding-left: 2rem;
        }

        .experience-timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(to bottom, #D32F2F, #FF6F61);
            border-radius: 2px;
        }

        .experience-item {
            position: relative;
            margin-bottom: 3rem;
            padding-left: 2rem;
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            margin-left: 1rem;
        }

        .experience-item::before {
            content: '';
            position: absolute;
            left: -2.5rem;
            top: 2rem;
            width: 15px;
            height: 15px;
            background: #D32F2F;
            border-radius: 50%;
            border: 3px solid white;
        }

        .experience-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .experience-title {
            flex: 1;
        }

        .experience-position {
            font-size: 1.2rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 0.3rem;
        }

        .experience-company {
            color: #D32F2F;
            font-weight: 500;
        }

        .experience-period {
            background: linear-gradient(45deg, #D32F2F, #FF6F61);
            color: white;
            padding: 0.3rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .experience-description {
            color: #666;
            line-height: 1.6;
        }

        /* Contact Section */
        .contact {
            background: linear-gradient(135deg, #D32F2F 0%, #FF6F61 100%);
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .contact::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><circle cx="150" cy="150" r="80" fill="%23ffffff10"/><circle cx="850" cy="250" r="120" fill="%23ffffff08"/></svg>');
            animation: float 15s ease-in-out infinite;
        }

        .contact-content {
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.5rem;
            padding: 1.5rem 2rem;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .contact-item:active,
        .contact-item:focus {
            background: rgba(255, 255, 255, 0.25);
            outline: none;
        }

        .contact-item:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.25);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: #FFCDD2;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #D32F2F;
            transition: background 0.3s ease;
        }

        .contact-item:hover .contact-icon {
            background: #FF9EAA;
        }

        .contact-text {
            font-size: 1.1rem;
            color: #FFFFFF;
            font-weight: 500;
        }

        /* Footer */
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 2rem 0;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 1rem;
        }

        .social-links a {
            color: white;
            font-size: 1.5rem;
            transition: all 0.3s ease;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            text-decoration: none;
        }

        .social-links a:hover {
            color: #D32F2F;
            background: white;
            transform: translateY(-3px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .mobile-menu {
                display: block;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero .subtitle {
                font-size: 1.2rem;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .about-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .about-stats {
                grid-template-columns: 1fr;
            }

            .contact-content {
                flex-direction: column;
                gap: 2rem;
            }

            .contact-item {
                flex-direction: column;
                padding: 1rem;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }

            .project-filters {
                flex-direction: column;
                align-items: center;
            }

            .experience-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .skills-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Scroll Animation */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="container">
            <div class="logo">Portfolio</div>
            <ul class="nav-links">
                <li><a href="#home" aria-label="Home section">Home</a></li>
                <li><a href="#about" aria-label="About section">About</a></li>
                <li><a href="#skills" aria-label="Skills section">Skills</a></li>
                <li><a href="#projects" aria-label="Projects section">Projects</a></li>
                <li><a href="#experience" aria-label="Experience section">Experience</a></li>
                <li><a href="#contact" aria-label="Contact section">Contact</a></li>
            </ul>
            <div class="mobile-menu" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero animate-on-scroll">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-graduation-cap"></i> <?php echo htmlspecialchars($year); ?>
                </div>
                <h1><?php echo htmlspecialchars($name); ?></h1>
                <p class="subtitle"><?php echo htmlspecialchars($title); ?></p>
                <p class="university"><?php echo htmlspecialchars($major); ?> • <?php echo htmlspecialchars($university); ?></p>
                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary" aria-label="View my projects">
                        <i class="fas fa-code"></i> Projects
                    </a>
                    <a href="#contact" class="btn btn-secondary" aria-label="Contact me">
                        <i class="fas fa-envelope"></i> Contact
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about animate-on-scroll">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>Hello! I am a 5th-semester Informatics Engineering student at Sekolah Tinggi Teknologi Terpadu Nurul Fikri, specializing in Data Science. I have a strong interest in analytical thinking, statistics, and solving real-world data problems, demonstrated through various projects and leadership roles.</p>
                    <p>With experience in economic and company projects involving data analysis and forecasting using Python, SQL, and R, I am committed to continuous learning and delivering impactful data solutions. I also excel in public speaking, collaboration, and adaptability.</p>
                    <div class="about-stats">
                        <div class="stat-item">
                            <div class="stat-number">2</div>
                            <div class="stat-label">Campus Projects</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">10</div>
                            <div class="stat-label">Certifications from DQLab Bootcamp</div>
                        </div>
                    </div>
                </div>
                <div class="education-card">
                    <div class="education-degree"><?php echo htmlspecialchars($education[0]['degree']); ?></div>
                    <div class="education-school"><?php echo htmlspecialchars($education[0]['school']); ?></div>
                    <div class="education-period"><?php echo htmlspecialchars($education[0]['period']); ?></div>
                    <div class="education-details">
                        <div class="education-specialization"><?php echo htmlspecialchars($education[0]['specialization']); ?></div>
                        <div class="education-gpa">GPA: <?php echo htmlspecialchars($education[0]['gpa']); ?></div>
                    </div>
                    <p><?php echo htmlspecialchars($education[0]['description']); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="animate-on-scroll">
        <div class="container">
            <h2 class="section-title">Skills</h2>
            <div class="skills-grid">
                <?php foreach ($skills as $category => $items): ?>
                    <div class="skill-category">
                        <h3><?php echo htmlspecialchars($category); ?></h3>
                        <div class="skill-tags">
                            <?php foreach ($items as $tag): ?>
                                <div class="skill-tag"><?php echo htmlspecialchars($tag); ?></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects animate-on-scroll">
        <div class="container">
            <h2 class="section-title">Projects</h2>
            <div class="project-filters">
                <a href="?filter=Campus Projects" class="filter-btn <?php echo $currentFilter === 'Campus Projects' ? 'active' : ''; ?>" aria-label="Show Campus Projects">Campus Projects</a>
            </div>
            <div class="projects-grid">
                <?php foreach ($filteredProjects as $project): ?>
                    <div class="project-card">
                        <div class="project-content">
                            <h3 class="project-title"><?php echo htmlspecialchars($project['title']); ?></h3>
                            <p class="project-description"><?php echo htmlspecialchars($project['description']); ?></p>
                            <div class="project-tech">
                                <?php foreach ($project['tech'] as $tech): ?>
                                    <div class="tech-tag"><?php echo htmlspecialchars($tech); ?></div>
                                <?php endforeach; ?>
                            </div>
                            <div class="project-links">
                                <?php if (isset($project['colab']) && $project['colab']): ?>
                                    <a href="<?php echo htmlspecialchars($project['colab']); ?>" class="project-link" target="_blank" aria-label="Google Colab for <?php echo htmlspecialchars($project['title']); ?>"><i class="fab fa-google"></i> Colab</a>
                                <?php endif; ?>
                                <?php if (!empty($project['github']) && $project['github'] !== '#'): ?>
                                    <a href="<?php echo htmlspecialchars($project['github']); ?>" class="project-link" target="_blank" aria-label="GitHub repository for <?php echo htmlspecialchars($project['title']); ?>"><i class="fab fa-github"></i> GitHub</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="animate-on-scroll">
        <div class="container">
            <h2 class="section-title">Experience</h2>
            <div class="experience-timeline">
                <?php foreach ($experiences as $exp): ?>
                    <div class="experience-item">
                        <div class="experience-header">
                            <div class="experience-title">
                                <div class="experience-position"><?php echo htmlspecialchars($exp['position']); ?></div>
                                <div class="experience-company"><?php echo htmlspecialchars($exp['company']); ?></div>
                            </div>
                            <div class="experience-period"><?php echo htmlspecialchars($exp['period']); ?></div>
                        </div>
                        <p class="experience-description"><?php echo htmlspecialchars($exp['description']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact animate-on-scroll">
        <div class="container">
            <h2 class="section-title">Contact Me</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <div class="contact-text"><?php echo htmlspecialchars($email); ?></div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-phone"></i></div>
                        <div class="contact-text"><?php echo htmlspecialchars($phone); ?></div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact-text"><?php echo htmlspecialchars($location); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="social-links">
            <a href="https://www.linkedin.com/in/ananda-dafa-zaky-016b13292" aria-label="LinkedIn profile" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://github.com/DafaZaky135" aria-label="GitHub profile" target="_blank"><i class="fab fa-github"></i></a>
            <a href="mailto:<?php echo htmlspecialchars($email); ?>" aria-label="Email contact"><i class="fas fa-envelope"></i></a>
        </div>
        <p>© <?php echo date("Y"); ?> <?php echo htmlspecialchars($name); ?> - Student of Sekolah Tinggi Teknologi Terpadu Nurul Fikri.</p>
    </footer>

    <!-- JavaScript for Mobile Menu and Scroll Animation -->
    <script>
        // Mobile Menu Toggle
        const mobileMenu = document.querySelector('.mobile-menu');
        const navLinks = document.querySelector('.nav-links');

        mobileMenu.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            mobileMenu.querySelector('i').classList.toggle('fa-bars');
            mobileMenu.querySelector('i').classList.toggle('fa-times');
        });

        // Scroll Animation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>