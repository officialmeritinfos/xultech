<?php

namespace Database\Seeders;

use App\Models\Career;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            [
                'title' => 'Backend Developer',
                'slug' => 'backend-developer',
                'department' => 'Development',
                'description' => 'As a Backend Developer at XulTech, you will be responsible for creating and maintaining the server-side logic, ensuring high performance and responsiveness to requests from the frontend. This role involves building scalable APIs and integrating them with various databases and services. You will be working with a team of skilled developers to develop applications that are secure, reliable, and efficient. Your role will not only include coding but also collaborating with frontend developers, ensuring smooth data flow between the client side and server side of the applications. This position requires a deep understanding of backend architecture, server-side programming languages such as Node.js, PHP, or Python, and a solid grasp of database design. You should be comfortable working in a team-oriented environment where code quality, collaboration, and communication are key to delivering great software solutions. The ideal candidate will be detail-oriented, passionate about problem-solving, and committed to staying current with industry trends and technologies. As a member of the backend team, you will play a critical role in designing the architecture and implementing new features for large-scale projects, ensuring that all solutions are robust, secure, and scalable for future development. You will also be responsible for writing and maintaining comprehensive documentation for your code and ensuring that any technical debt is regularly addressed.',
                'responsibilities' => '1. Design and implement scalable backend services and APIs.
                                      2. Maintain and optimize existing systems for performance and scalability.
                                      3. Collaborate with frontend developers to integrate user-facing elements with server-side logic.
                                      4. Write reusable, testable, and efficient code.
                                      5. Implement data security and protection practices to safeguard sensitive information.
                                      6. Develop database schemas that represent and support business processes.
                                      7. Troubleshoot and debug applications to ensure the smooth operation of the backend.
                                      8. Monitor and improve system performance, and address any bottlenecks or bugs.
                                      9. Stay up to date with emerging technologies and apply them to improve backend processes.
                                      10. Participate in code reviews to ensure code quality and consistency across the team.',
                'requirements' => '1. Proven experience as a Backend Developer or in a similar role.
                                   2. Strong knowledge of server-side programming languages such as Node.js, PHP, Python, or Ruby on Rails.
                                   3. Experience with database management systems like MySQL, PostgreSQL, MongoDB, or Redis.
                                   4. Solid understanding of RESTful API design and development.
                                   5. Familiarity with version control systems, particularly Git.
                                   6. Ability to work in a collaborative team environment with good communication skills.
                                   7. Experience with containerization technologies such as Docker is a plus.
                                   8. Understanding of cloud services and infrastructure (AWS, GCP, or Azure) is a bonus.
                                   9. Strong problem-solving skills, with attention to detail and a commitment to quality.
                                   10. A proactive mindset and willingness to take ownership of projects and tasks.',
                'salary_range' => '60,000 - 80,000 USD',
                'employment_type' => 'Remote',
                'experience_level' => 'Mid-level',
            ],
            [
                'title' => 'Frontend Developer',
                'slug' => 'frontend-developer',
                'department' => 'Development',
                'description' => 'As a Frontend Developer at XulTech, you will play a pivotal role in translating UI/UX designs into responsive, interactive, and high-performance web applications. You will collaborate closely with designers and backend developers to ensure a seamless user experience. In this role, you will be responsible for writing clean, maintainable, and efficient code using modern frontend technologies like React.js, Vue.js, or Angular. You will also be expected to optimize applications for maximum speed and scalability, ensuring that they work smoothly across different devices and browsers. Your day-to-day tasks will involve working on multiple projects, ensuring that each meets the design specifications and provides an intuitive user interface. You will be required to stay up to date with the latest industry trends and best practices to continuously improve frontend development processes. The role requires a strong understanding of HTML, CSS, and JavaScript, along with a keen eye for detail and a passion for creating excellent user experiences. If you are passionate about frontend development and enjoy working in a dynamic and collaborative environment, this is the perfect role for you.',
                'responsibilities' => '1. Develop user-friendly web interfaces using HTML, CSS, and JavaScript.
                                      2. Work closely with UI/UX designers to translate visual designs into functional code.
                                      3. Optimize applications for speed and scalability, ensuring a responsive design across different devices and browsers.
                                      4. Collaborate with backend developers to integrate APIs and ensure smooth functionality.
                                      5. Debug and troubleshoot frontend issues, ensuring that all components function as expected.
                                      6. Write reusable, efficient code and implement best practices for performance optimization.
                                      7. Ensure cross-browser compatibility and consistency in user experience.
                                      8. Stay current with the latest trends and technologies in frontend development.
                                      9. Participate in code reviews and provide feedback to improve code quality.
                                      10. Contribute to the continuous improvement of the frontend development process and the tools used.',
                'requirements' => '1. Proven experience as a Frontend Developer or in a similar role.
                                   2. Strong proficiency in HTML, CSS, JavaScript, and frontend frameworks such as React, Vue, or Angular.
                                   3. Knowledge of responsive design principles and experience building mobile-first web applications.
                                   4. Familiarity with version control systems, particularly Git.
                                   5. Experience with testing and debugging tools for frontend development.
                                   6. Good understanding of SEO principles and how to ensure that applications adhere to them.
                                   7. Ability to work in a fast-paced environment and manage multiple projects simultaneously.
                                   8. Excellent communication skills and ability to work in a collaborative team setting.
                                   9. Attention to detail and a passion for creating great user experiences.
                                   10. Familiarity with build tools such as Webpack or Gulp is a plus.',
                'salary_range' => '50,000 - 70,000 USD',
                'employment_type' => 'Remote',
                'experience_level' => 'Mid-level',
            ],
            // Add similar details for other roles (Laravel Developer, NodeJs Developer, Content Writer)
        ];

        foreach ($jobs as $job) {
            Career::create($job);
        }
    }
}
