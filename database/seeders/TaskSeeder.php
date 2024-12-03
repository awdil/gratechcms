<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // DB::table('tasks')->insert([
        //     [
        //         'order_id' => 1,
        //         'assigned_to' => NULL,
        //         'name' => 'Seo Task',
        //         'description' => 'This task involves optimizing the website for search engines to improve visibility and rankings. The focus will be on conducting keyword research, enhancing on-page SEO elements (such as meta tags, headers, and content optimization), and analyzing website performance metrics',
        //         'attachment' => NULL,
        //         'progress' => 0,
        //         'start_date' => '2024-10-23',
        //         'due_date' => '2024-10-30',
        //         'priority' => 'medium',
        //         'status' => 'pending',
        //         'created_at' => '2024-10-22 22:14:42',
        //         'updated_at' => '2024-10-22 22:23:54',
        //     ],
        //     [
        //         'order_id' => 1,
        //         'assigned_to' => NULL,
        //         'name' => 'Content Optimization Task',
        //         'description' => 'This task focuses on reviewing and optimizing existing website content to enhance its relevance and quality for target keywords. The process includes analyzing current page performance, updating headlines and subheadings for better readability,',
        //         'attachment' => NULL,
        //         'progress' => 33,
        //         'start_date' => '2024-10-23',
        //         'due_date' => '2024-11-02',
        //         'priority' => 'high',
        //         'status' => 'in_progress',
        //         'created_at' => '2024-10-22 22:23:35',
        //         'updated_at' => '2024-10-22 22:24:02',
        //     ],
        //     [
        //         'order_id' => 1,
        //         'assigned_to' => NULL,
        //         'name' => 'Technical SEO Audit',
        //         'description' => 'This task involves conducting a comprehensive technical SEO audit of the website to identify and rectify issues affecting search engine crawling and indexing. Key areas to focus on include checking site speed, ensuring mobile-friendliness, evaluating the site’s URL structure, fixing broken links, and optimizing XML sitemaps',
        //         'attachment' => NULL,
        //         'progress' => 100,
        //         'start_date' => '2024-10-23',
        //         'due_date' => '2024-11-09',
        //         'priority' => 'low',
        //         'status' => 'completed',
        //         'created_at' => '2024-10-22 22:24:53',
        //         'updated_at' => '2024-10-22 22:25:00',
        //     ],
        //     [
        //         'order_id' => 1,
        //         'assigned_to' => NULL,
        //         'name' => 'Keyword Research and Strategy Development',
        //         'description' => 'This task focuses on performing in-depth keyword research to identify high-potential keywords for targeting in future content and campaigns. Utilizing tools like Google Keyword Planner and SEMrush, the objective is to analyze search volume, competition,',
        //         'attachment' => NULL,
        //         'progress' => 0,
        //         'start_date' => '2024-10-23',
        //         'due_date' => '2024-11-06',
        //         'priority' => 'low',
        //         'status' => 'pending',
        //         'created_at' => '2024-10-22 22:25:31',
        //         'updated_at' => '2024-10-22 22:25:31',
        //     ],
        //     [
        //         'order_id' => 1,
        //         'assigned_to' => NULL,
        //         'name' => 'Backlink Building Campaign',
        //         'description' => 'This task is centered on developing and executing a backlink building campaign to enhance the website\'s authority and search engine rankings. Activities will include identifying potential high-quality websites for guest posting',
        //         'attachment' => NULL,
        //         'progress' => 0,
        //         'start_date' => '2024-10-23',
        //         'due_date' => '2024-10-31',
        //         'priority' => 'low',
        //         'status' => 'pending',
        //         'created_at' => '2024-10-22 22:25:55',
        //         'updated_at' => '2024-10-22 22:25:55',
        //     ],
        //     [

        //         'order_id' => 2,
        //         'assigned_to' => NULL,
        //         'name' => 'Database Access Control Review',
        //         'description' => 'This task involves reviewing the current access control policies for the database to ensure that only authorized personnel have access to sensitive data.',
        //         'attachment' => NULL,
        //         'progress' => 13,
        //         'start_date' => '2024-10-23',
        //         'due_date' => '2024-10-31',
        //         'priority' => 'low',
        //         'status' => 'in_progress',
        //         'created_at' => '2024-10-22 22:32:21',
        //         'updated_at' => '2024-10-22 22:33:54',
        //     ],
        //     [

        //         'order_id' => 2,
        //         'assigned_to' => NULL,
        //         'name' => 'Data Encryption Implementation',
        //         'description' => 'This task focuses on implementing data encryption for sensitive information stored in the database. The process will include identifying data types that require encryption (such as personal identification information and financial records),',
        //         'attachment' => NULL,
        //         'progress' => 0,
        //         'start_date' => '2024-10-23',
        //         'due_date' => '2024-11-09',
        //         'priority' => 'medium',
        //         'status' => 'pending',
        //         'created_at' => '2024-10-22 22:32:44',
        //         'updated_at' => '2024-10-22 22:32:44',
        //     ],
        //     [
               
        //         'order_id' => 2,
        //         'assigned_to' => NULL,
        //         'name' => 'Database Backup and Recovery Plan',
        //         'description' => 'This task involves developing and testing a comprehensive backup and recovery plan for the database to safeguard against data loss.',
        //         'attachment' => NULL,
        //         'progress' => 54,
        //         'start_date' => '2024-10-23',
        //         'due_date' => '2024-11-07',
        //         'priority' => 'low',
        //         'status' => 'in_progress',
        //         'created_at' => '2024-10-22 22:33:05',
        //         'updated_at' => '2024-10-22 22:34:18',
        //     ],
        //     [
               
        //         'order_id' => 2,
        //         'assigned_to' => NULL,
        //         'name' => 'SQL Injection Vulnerability Assessment',
        //         'description' => 'This task focuses on conducting a vulnerability assessment to identify and remediate SQL injection risks within the application. The assessment will involve reviewing existing code',
        //         'attachment' => NULL,
        //         'progress' => 100,
        //         'start_date' => '2024-10-23',
        //         'due_date' => '2024-11-07',
        //         'priority' => 'high',
        //         'status' => 'completed',
        //         'created_at' => '2024-10-22 22:33:26',
        //         'updated_at' => '2024-10-22 22:34:07',
        //     ],
        //     [
               
        //         'order_id' => 2,
        //         'assigned_to' => NULL,
        //         'name' => 'Regular Security Updates and Patching',
        //         'description' => 'This task involves establishing a schedule for regular updates and patching of the database management system (DBMS) and related software.',
        //         'attachment' => NULL,
        //         'progress' => 0,
        //         'start_date' => '2024-10-23',
        //         'due_date' => '2024-11-09',
        //         'priority' => 'low',
        //         'status' => 'pending',
        //         'created_at' => '2024-10-22 22:33:43',
        //         'updated_at' => '2024-10-22 22:33:43',
        //     ]
        // ]);
    }
}
