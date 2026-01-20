<?php
// ==========================================
// TEAM DATA CONFIGURATION
// ==========================================

// 1. CORE TEAM (The Main Board)
$core_members = [
    ['name' => 'Adil',     'role' => 'Chairperson'],
    ['name' => 'Shamma',   'role' => 'Vice Chairperson'],
    ['name' => 'Sufiyan',   'role' => 'Secretary'],
    ['name' => 'Annam',    'role' => 'Jt. Secretary'],
    ['name' => 'Madiha',   'role' => 'Convenor'],
    ['name' => 'Nabeela',  'role' => 'Co-Convenor'],
    ['name' => 'Mohammed',  'role' => 'Treasurer'],
    ['name' => 'Atik',     'role' => 'Jt. Treasurer'],
];

// 2. COMMITTEES (Heads, Jt. Heads & Members)
$committees = [
    'Creative Team' => [
        'leads' => [
            ['name' => 'Midhat',  'role' => 'Head'],
            ['name' => 'Tehzeeb', 'role' => 'Jt. Head']
        ],
        'members' => ['Fatima', 'Ismail', 'Ayaan']
    ],
    'Social Media' => [
        'leads' => [
            ['name' => 'Mohammed', 'role' => 'Head'],
            ['name' => 'Tania',    'role' => 'Jt. Head']
        ],
        'members' => ['Sohail', 'Mariya', 'Uzair']
    ],
    'Web & Tech' => [
        'leads' => [
            ['name' => 'Tabrez', 'role' => 'Head'],
            ['name' => 'Faizan', 'role' => 'Jt. Head']
        ],
        'members' => ['Bilal', 'Mosaad', 'Prem']
    ],
    'Content & Documentation' => [
        'leads' => [
            ['name' => 'Fouziya', 'role' => 'Head'],
            ['name' => 'Amina',   'role' => 'Jt. Head']
        ],
        'members' => ['Shams', 'Hamza', 'Mansoor']
    ],
    'Logistics & Hospitality' => [
        'leads' => [
            ['name' => 'Faazil', 'role' => 'Head'],
            ['name' => 'Bazgha', 'role' => 'Jt. Head']
        ],
        'members' => ['Furqan', 'Sulaim', 'Shayan']
    ],
    'Operation' => [
        'leads' => [
            ['name' => 'Yasir',   'role' => 'Head'],
            ['name' => 'Afsheen', 'role' => 'Jt. Head']
        ],
        'members' => ['Naverah', 'Saif', 'Madiha']
    ],
    'PR & Sponsors' => [
        'leads' => [
            ['name' => 'Yash',    'role' => 'Head'],
            ['name' => 'Mariyam', 'role' => 'Jt. Head']
        ],
        'members' => ['Kaseeb', 'Samiksha', 'RamAshish']
    ],
];

// Helper function to generate image paths automatically
// Format: assets/img/team/role-name.jpg (e.g., chairperson-adil.jpg, web-head-tabrez.jpg)
function getTeamImage($name, $role, $context = '') {
    $cleanRole = strtolower(str_replace(['.', ' '], ['','-'], $role));
    $cleanName = strtolower($name);
    $prefix = $context ? strtolower(explode(' ', $context)[0]) . '-' : ''; 
    return "assets/img/team/" . $prefix . $cleanRole . "-" . $cleanName . ".jpg";
}

include 'includes/header.php';
include 'includes/navbar.php';
?>

<style>
    /* PRESERVING YOUR ORIGINAL CSS STYLES */
    .team-section { margin-bottom: 4rem; }
    .team-section-title {
        font-size: 2rem;
        color: var(--neon-cyan);
        margin-bottom: 3rem;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 2px;
        position: relative;
    }
    .team-section-title::after {
        content: '';
        display: block;
        width: 60px;
        height: 3px;
        background: var(--neon-blue);
        margin: 10px auto 0;
        box-shadow: 0 0 10px var(--neon-blue);
    }
    
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        justify-content: center;
    }

    .team-card {
        background: var(--glass-bg);
        border: 1px solid var(--glass-border);
        border-radius: var(--radius-md);
        padding: 2rem;
        text-align: center;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        backdrop-filter: blur(5px);
    }

    .team-card:hover {
        transform: translateY(-10px);
        border-color: var(--neon-blue);
        box-shadow: 0 10px 30px rgba(0, 243, 255, 0.2);
    }

    .team-photo {
        width: 140px;
        height: 140px;
        margin: 0 auto 1.5rem;
        position: relative;
    }

    .team-photo img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid var(--neon-cyan);
        box-shadow: 0 0 15px rgba(0, 243, 255, 0.3);
    }

    .team-name {
        font-size: 1.3rem;
        color: var(--text-primary);
        margin-bottom: 0.3rem;
        font-family: 'Orbitron', sans-serif;
    }

    .team-role {
        color: var(--neon-cyan);
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 1rem;
    }

    .team-social {
        display: flex;
        justify-content: center;
        gap: 0.8rem;
    }

    .social-icon {
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255,255,255,0.05);
        border-radius: 50%;
        color: var(--neon-cyan);
        transition: all 0.3s;
        border: 1px solid transparent;
    }

    .social-icon:hover {
        background: var(--neon-cyan);
        color: #000;
        box-shadow: 0 0 10px var(--neon-cyan);
    }

    /* Styles for the Members Text List */
    .members-list {
        grid-column: 1 / -1;
        background: rgba(0, 243, 255, 0.05);
        border: 1px solid rgba(0, 243, 255, 0.1);
        padding: 1.5rem;
        border-radius: var(--radius-sm);
        margin-top: 1rem;
        text-align: center;
    }
    
    .members-list h4 {
        font-size: 1.1rem;
        color: var(--neon-violet);
        margin-bottom: 1rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .member-pill {
        display: inline-block;
        padding: 0.5rem 1.2rem;
        margin: 0.3rem;
        background: rgba(0,0,0,0.4);
        border: 1px solid var(--glass-border);
        border-radius: 50px;
        font-size: 0.95rem;
        color: var(--text-secondary);
        transition: all 0.3s ease;
    }

    .member-pill:hover {
        border-color: var(--neon-blue);
        color: var(--neon-cyan);
        transform: translateY(-2px);
    }
</style>

<div class="page-header">
    <div class="container">
        <h1 class="fade-in-down">Our Team</h1>
        <p class="fade-in-up">Meet the brilliant minds behind ISTE Student Chapter</p>
    </div>
</div>

<section class="section">
    <div class="container">

        <div class="team-section reveal">
            <h2 class="team-section-title">Faculty Coordinator</h2>
            <div class="team-card faculty-card" style="max-width: 400px; margin: 0 auto;">
                <div class="team-photo">
                    <img src="assets/images/placeholder-team/faculty.jpg" alt="Faculty"
                        onerror="this.src='https://ui-avatars.com/api/?name=Faculty+Coordinator&background=0D1117&color=00f3ff&size=150&bold=true'">
                </div>
                <h3 class="team-name">Er. Samana Jafri</h3>
                <p class="team-role">Faculty Coordinator</p>
                <div class="team-social">
                    <a href="#" class="social-icon"><i class="fas fa-envelope"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <div class="team-section reveal">
            <h2 class="team-section-title">Core Committee</h2>
            <div class="team-grid">
                <?php foreach($core_members as $member): ?>
                <div class="team-card">
                    <div class="team-photo">
                        <img src="<?php echo getTeamImage($member['name'], $member['role']); ?>" 
                             alt="<?php echo $member['name']; ?>"
                             onerror="this.src='https://ui-avatars.com/api/?name=<?php echo urlencode($member['name']); ?>&background=0D1117&color=00f3ff&size=150&bold=true'">
                    </div>
                    <h3 class="team-name"><?php echo $member['name']; ?></h3>
                    <p class="team-role"><?php echo $member['role']; ?></p>
                    
                    <div class="team-social">
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <?php foreach($committees as $teamName => $data): ?>
        <div class="team-section reveal">
            <h2 class="team-section-title"><?php echo $teamName; ?></h2>
            
            <div class="team-grid">
                <?php foreach($data['leads'] as $lead): ?>
                <div class="team-card">
                    <div class="team-photo">
                        <img src="<?php echo getTeamImage($lead['name'], $lead['role'], $teamName); ?>" 
                             alt="<?php echo $lead['name']; ?>"
                             onerror="this.src='https://ui-avatars.com/api/?name=<?php echo urlencode($lead['name']); ?>&background=0D1117&color=b000ff&size=150&bold=true'">
                    </div>
                    <h3 class="team-name"><?php echo $lead['name']; ?></h3>
                    <p class="team-role"><?php echo $lead['role']; ?></p>
                    
                    <div class="team-social">
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <?php endforeach; ?>

                <?php if(!empty($data['members'])): ?>
                <div class="members-list">
                    <h4>Team Members</h4>
                    <?php foreach($data['members'] as $memberName): ?>
                        <span class="member-pill"><?php echo $memberName; ?></span>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>

        <div class="text-center mt-3 reveal">
            <h3 style="margin-bottom: 1.5rem; color: var(--text-primary);">Want to Join Our Team?</h3>
            <a href="contact.php" class="btn btn-primary btn-pulse">
                <i class="fas fa-user-plus"></i> Get Involved
            </a>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
