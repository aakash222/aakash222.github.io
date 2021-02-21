<?php 

$name = "Sample Name";
$currentDesignation = "M.Tech. (Research) Student";
/* 
 * You can add your image on the img/ directory
 * and add the link below. 
 */

$profileImg = "img/profile.jpg"; 

/*
 * If you leave the link option blank, the webpage will work 
 * fine but will not link the team to the webpage 
 */
$currentTeam = [
	'name' => "Computer Systems Lab",
	'link' => "https://csl.csa.iisc.ac.in"
];

/*
 * If you leave the link option blank, the webpage will work 
 * fine but will not link the team to the webpage 
 */
$currentAssociation = [
	'name' => "Indian Institute of Science",
	'link' => "https://iisc.ac.in/"
];
$workemail = "sampleemail [at] iisc [dot] ac [dot] in";

/*
 * You may add the social links you have and make it blank for 
 * the links you do not have or do not want to display
 */
$socialLinks = [
	"linkedin" => "http://www.linkedin.com",
	"twitter" => "http://www.twitter.com",
	"googlescholar" => "https://www.google.com",
	"instagram" => "https://www.instagram.com",
	"facebook" => "https://www.facebook.com"
];

/*
 * Add the address as you would like to display it in the webpage
 * */
$address = "
	Room no 324
	Computer Systems Lab,
	Department of Computer Science and Automation,
	Indian Institute of Science
	Bangalore - 560012
";

/*
 * This will be the order in which the sections will be displayed in 
 * the webpage.
 * The sections added to this list will be visible on the website, 
 * and in the order mentioned
 */
//$order = ['projects' , 'courses' , 'experience' , 'education'];

$order = ['projects' , 'courses' , 'publications' ,  'experience' , 'education'];
//$order = ['experience' , 'education' , 'publications' , 'projects' , 'courses'];

/*
 * Do not change the below lines. These are the file names which has the viewing 
 * logic.
 */
$filename = [
	'projects' => "projects.php",
	'courses' => "courses.php" ,
	'publications' => "publications.php" ,
	'experience' => "experience.php" ,
	'education' => "education.php"
];

$headings = [
        'projects' => "Projects",
        'courses' => "Courses" ,
        'publications' => "Publications" ,
        'experience' => "Experience" ,
        'education' => "Education"
];

$menuItems = [
	'projects' => [ 'name' => "Projects"  , "link" => "#projects"],
        'courses' => [ 'name' => "Courses"  , "link" => "#courses"] ,
        'publications' => [ 'name' => "Publications"  , "link" => "#publications"] ,
        'experience' => [ 'name' => "Experience"  , "link" => "#experience"] ,
        'education' => [ 'name' => "Education"  , "link" => "#education"]
];
/*************************************************************************************/

/*
 * Mention the list of projects as you would like to have it displayed in the webpage. 
 */
$projects = [
	[
		'title' => "Sample Name",
		'projectUrl' => "https://www.google.com" ,
		'technologiesUsed' => "Flex, Bison, C++",
		'description' => "Description of the project Description of the project
 Description of the project
You can include html tags also in this like <strong>bold text</strong>
Description of the project
Description of the project
Description of the project
"
	],
	[
                'title' => "Sample Name",
                'projectUrl' => "https://www.google.com" ,
                'technologiesUsed' => "Flex, Bison, C++",
                'description' => "Description of the project"
	],
	[
                'title' => "Sample Name",
                'projectUrl' => "https://www.google.com" ,
                'technologiesUsed' => "Flex, Bison, C++",
                'description' => "Description of the project"
	],
	[
                'title' => "Sample Name",
                'projectUrl' => "https://www.google.com" ,
                'technologiesUsed' => "Flex, Bison, C++",
                'description' => "Description of the project"
        ],
];

/*
 * Mention the list of courses as you would like to have it displayed in the webpage. 
 */
$courses = [
	[
		"name" => "Sample Course Name",
		"attendedon" => "Jan-Apr 2019"
	],
	[
		"name" => "Sample Course Name 2",
                "attendedon" => "Jan-Apr 2020"
	]	
];

/*
 * Mention the list of publications as you would like to have it displayed in the webpage. 
 * You can upload the paper/slides to the docs/ folder and provide the link as docs/sample.pdf 
 * You can leave the paper / slide option  blank to not show those links on the webpage. 
 */
$publications = [
	[
		'title' => "Sample title, author name 1 ,author name 2 ,  author name 3",
		'paper' => "http://www.google.com",
		'slide' => "http://www.google.com"
	],
	[
                'title' => "Sample title, author name 1 ,author name 2 ,  author name 3",
                'paper' => "http://www.google.com",
                'slide' => ""
        ]
];

/*
 * Mention the education details as you would like to have it displayed in the webpage. 
 */
$education = [
	[
		'title' => "M.Tech. (Res)",
		'stream' => "Computer Science and Automation",
		'institute' => "Indian Institute of Science",
		'score' => "8.3 / 10",
		'scoreText' => "CGPA",
		'duration' => "2018-2021",
		'description' => "Sample description you would like to add
			you can add any number of lines here",
		'notable_mentions' => [
			"Sample notable mention",
			"Sample notable mention 2"
		],
	],
	[       
		'title' => "B.Tech.",
                'stream' => "Computer Science and Engineering",
		'institute' => "National Institute of Technology Agartala",
		'score' => "8.66 / 10",
		'scoreText' => "",
                'duration' => "2011-2015",
                'description' => "",
                'notable_mentions' => [
                ],
	],
];

/*
 * Mention the experience details as you would like to have it displayed in the webpage. 
 * You may leave the description field empty
 */
$experience = [
	[
		'jobtitle' => "Lead Engineer",
		'company' => "Info Edge India Ltd.",
		'duration' => "May 2015 - july 2017",
		'description' => "
			Sample description you would like to add.
			you can add any number of lines here.
			You can also use html tags as <a href='http://www.google.com'>Link</a>
			You can also use html tahs as <strong>boldtext</strong> , etc
		",
		"notable_mentions" => [
			"You can add multiple notable mentions here",
			"The order in which you add here will be displayed on the webpage."
		]
	],
	[
                'jobtitle' => "Software Development Intern",
                'company' => "Connection Software Systems Ltd.",
                'duration' => "Summer 2014",
                'description' => "",
                "notable_mentions" => [
                        "You can add multiple notable mentions here",
                        "The order in which you add here will be displayed on the webpage."
                ]
        ],
];
