<?php
$title = "Counseling Services for Students";
$services = [
    "Academic Counseling" => [
        "Purpose" => "To assist students in making informed academic decisions, selecting courses, managing their workload, and improving their study habits.",
        "Key Areas" => [
            "Course selection and scheduling advice.",
            "Academic performance review and goal setting.",
            "Strategies for time management, note-taking, and study techniques.",
            "Help with academic challenges such as difficulty with specific subjects or assignments.",
            "Guidance for overcoming procrastination and managing exam stress.",
            "Information on resources like tutoring, workshops, and study groups."
        ]
    ],
    "Career Counseling" => [
        "Purpose" => "To help students explore career options, understand their strengths, and prepare for the job market after graduation.",
        "Key Areas" => [
            "Identifying personal skills, interests, and strengths for career planning.",
            "Guidance on internships, job placements, and professional networking.",
            "Resume building, interview preparation, and job search strategies.",
            "Identifying opportunities for skills development and certifications.",
            "Exploration of graduate programs, professional courses, and industry trends.",
            "Assistance with career fairs and recruitment drives."
        ]
    ],
    "Personal Counseling" => [
        "Purpose" => "To offer emotional support and help students deal with personal challenges affecting their well-being.",
        "Key Areas" => [
            "Providing a safe and confidential space to talk about personal struggles such as anxiety, depression, family issues, or relationship problems.",
            "Counseling for students dealing with stress, loneliness, homesickness, or adjustment to college life.",
            "Support for students facing issues related to self-esteem, identity, and personal growth.",
            "Helping students develop coping mechanisms for managing difficult emotions.",
            "Providing referrals to external mental health professionals if needed."
        ]
    ],
    "Psychological Counseling" => [
        "Purpose" => "To address mental health concerns and provide support for students with psychological issues.",
        "Key Areas" => [
            "Offering psychological assessments for conditions such as anxiety, depression, and other mental health disorders.",
            "Counseling for students dealing with trauma, PTSD, and abuse.",
            "Providing treatment for eating disorders, substance abuse, and other psychological challenges.",
            "Creating personalized mental health plans and interventions.",
            "Organizing workshops and stress-relief activities (yoga, meditation, etc.).",
            "Crisis intervention and providing immediate support during emotional breakdowns or severe distress."
        ]
    ],
    "Group Counseling" => [
        "Purpose" => "To offer a sense of community and shared experiences for students going through similar challenges.",
        "Key Areas" => [
            "Support groups for students dealing with grief, loss, or major life changes.",
            "Workshops focused on social skills, conflict resolution, and communication.",
            "Peer counseling and mentoring programs to offer mutual support.",
            "Group therapy for specific issues such as stress management or self-esteem."
        ]
    ],
    "Crisis Counseling" => [
        "Purpose" => "To provide immediate help during critical situations, helping students manage intense emotions and thoughts.",
        "Key Areas" => [
            "Providing support during times of personal crisis, such as family emergencies, breakups, or loss of a loved one.",
            "Immediate intervention in cases of severe mental distress, self-harm, or thoughts of suicide.",
            "Referring students to emergency mental health services when needed.",
            "Offering guidance and support for students undergoing acute stress from academic pressure or social difficulties."
        ]
    ],
    "Health and Wellness Counseling" => [
        "Purpose" => "To promote overall well-being and a healthy lifestyle.",
        "Key Areas" => [
            "Advice on maintaining a balanced life, including managing academic, social, and personal life stress.",
            "Wellness programs focused on nutrition, exercise, and sleep hygiene.",
            "Providing resources for dealing with physical health issues affecting academic performance.",
            "Workshops on developing healthy habits and preventing burnout."
        ]
    ],
    "Relationship Counseling" => [
        "Purpose" => "To help students navigate their relationships with family, friends, and partners.",
        "Key Areas" => [
            "Counseling for students dealing with family pressures, conflicts, or expectations.",
            "Guidance for romantic relationships, including communication issues, conflict resolution, and setting boundaries.",
            "Providing advice on friendships, social anxiety, and peer pressure."
        ]
    ],
    "Conflict Resolution Counseling" => [
        "Purpose" => "To help students manage and resolve conflicts, whether with peers, faculty, or staff.",
        "Key Areas" => [
            "Facilitating discussions between conflicting parties to reach a mutual understanding.",
            "Offering mediation services to resolve interpersonal conflicts.",
            "Providing tools for effective communication, empathy, and active listening."
        ]
    ],
    "Online Counseling and Remote Support" => [
        "Purpose" => "To ensure students who are unable to attend in-person counseling due to location, time, or other constraints still have access to support.",
        "Key Areas" => [
            "Providing virtual counseling through video calls, phone calls, or text/chat.",
            "Offering flexible scheduling to accommodate students with different time zones or tight schedules.",
            "Access to online resources, mental health assessments, and virtual support groups."
        ]
    ]
];

$benefits = [
    "Improved Mental Health",
    "Increased Academic Success",
    "Better Coping Strategies",
    "Holistic Development",
    "Preventive Measures"
];

$access_methods = [
    "Walk-in Counseling" => "Most institutions provide walk-in sessions where students can visit the counseling center for immediate help.",
    "Appointment-Based Sessions" => "Students can schedule appointments in advance for more in-depth counseling.",
    "Emergency Counseling" => "For urgent situations, many institutions provide emergency counseling services during regular hours or after-hours hotlines.",
    "Online Platforms" => "Some universities offer virtual counseling or counseling via email, chat, or video conferencing for students who cannot attend in person."
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 0; margin: 0; }
        .container { width: 80%; margin: 20px auto; background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        h1 { color: #4CAF50; text-align: center; }
        h2, h3 { color: #333; }
        ul { list-style-type: square; padding-left: 20px; }
        li { font-size: 16px; line-height: 1.6; }
        .section { margin-bottom: 30px; }
        footer { text-align: center; padding: 20px; background-color: #333; color: white; margin-top: 20px; }
    </style>
</head>
<body>

    <div class="container">
        <h1><?php echo $title; ?></h1>

        <?php foreach ($services as $service => $details) { ?>
            <div class="section">
                <h2><?php echo $service; ?></h2>
                <p><strong>Purpose:</strong> <?php echo $details['Purpose']; ?></p>
                <h3>Key Areas:</h3>
                <ul>
                    <?php foreach ($details['Key Areas'] as $area) { ?>
                        <li><?php echo $area; ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>

        <div class="section">
            <h2>Benefits of Counseling Services</h2>
            <ul>
                <?php foreach ($benefits as $benefit) { ?>
                    <li><?php echo $benefit; ?></li>
                <?php } ?>
            </ul>
        </div>

        <div class="section">
            <h2>How to Access Counseling Services</h2>
            <ul>
                <?php foreach ($access_methods as $method => $description) { ?>
                    <li><strong><?php echo $method; ?>:</strong> <?php echo $description; ?></li>
                <?php } ?>
            </ul>
        </div>

    </div>

    <footer>
        <p>&copy; 2025 Counseling Services. All Rights Reserved.</p>
    </footer>

</body>
</html>
