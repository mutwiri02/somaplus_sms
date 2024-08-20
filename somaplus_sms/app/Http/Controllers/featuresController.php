<?php

namespace App\Http\Controllers;

use App\Models\features;
use Illuminate\Http\Request;

class featuresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $features= features::all();
        return view('features.newFeature');
    }
 public function allFeatures(){
    $features = [
        [
            'title' => 'User Management',
            'description' => 'Manage all user accounts, including students, teachers, and administrators. Features include account creation, role assignment, and permission settings.',
            'icon' => '👥',
        ],
        [
            'title' => 'Attendance Tracking',
            'description' => 'Track student attendance in real-time. Teachers can mark attendance quickly, and administrators can generate reports to monitor attendance trends.',
            'icon' => '🕒',
        ],
        [
            'title' => 'Shift Management',
            'description' => 'Easily manage and schedule shifts for teachers and staff. The system supports flexible scheduling, shift swaps, and automated notifications.',
            'icon' => '📅',
        ],
        [
            'title' => 'Automated Billing',
            'description' => 'Automate the billing process with customizable invoicing, payment reminders, and integration with payment gateways. Generate reports to track payments and outstanding balances.',
            'icon' => '💵',
        ],
        [
            'title' => 'Messaging System',
            'description' => 'Send and receive messages between students, parents, and staff. The system supports group messages, announcements, and automated reminders.',
            'icon' => '✉️',
        ],
        [
            'title' => 'Grade Management',
            'description' => 'Record and track student grades across all subjects. The system allows teachers to enter grades, and students/parents can view progress reports.',
            'icon' => '📝',
        ],
        [
            'title' => 'Library Management',
            'description' => 'Manage library resources including book checkouts, returns, and reservations. Track overdue books and send automated reminders.',
            'icon' => '📚',
        ],
        [
            'title' => 'Course Management',
            'description' => 'Create and manage courses with detailed syllabi, lesson plans, and resources. Students can enroll in courses, and teachers can track progress.',
            'icon' => '📘',
        ],
        [
            'title' => 'Event Calendar',
            'description' => 'Maintain a centralized calendar for school events, exams, holidays, and meetings. Staff, students, and parents can view and subscribe to events.',
            'icon' => '📆',
        ],
        [
            'title' => 'Parental Portal',
            'description' => 'Allow parents to monitor their child\'s progress, including attendance, grades, and communication with teachers. The portal also provides access to billing and payments.',
            'icon' => '🏫',
        ],
        [
            'title' => 'Feedback and Surveys',
            'description' => 'Create and distribute surveys to collect feedback from students, parents, and staff. Analyze responses to improve school operations and services.',
            'icon' => '🗒️',
        ],
        [
            'title' => 'Report Generation',
            'description' => 'Generate detailed reports on various aspects of school management, including student performance, attendance, and financial summaries.',
            'icon' => '📊',
        ],
        [
            'title' => 'Resource Management',
            'description' => 'Manage school resources such as classrooms, labs, and equipment. The system supports booking, maintenance tracking, and resource allocation.',
            'icon' => '🏫',
        ],
        [
            'title' => 'Notifications and Alerts',
            'description' => 'Send automated notifications and alerts for important events, deadlines, and updates. Customize alerts based on user roles and preferences.',
            'icon' => '🔔',
        ],
        [
            'title' => 'Data Analytics',
            'description' => 'Analyze data related to student performance, attendance, and resource utilization. The system provides insights and trends to inform decision-making.',
            'icon' => '📈',
        ],
        [
            'title' => 'Security and Permissions',
            'description' => 'Ensure the security of school data with role-based access control, encryption, and regular audits. Manage permissions to restrict access to sensitive information.',
            'icon' => '🔒',
        ],
        [
            'title' => 'Online Admission',
            'description' => 'Streamline the admission process with online forms, document uploads, and automated notifications. The system tracks applications and supports communication with applicants.',
            'icon' => '📝',
        ],
        [
            'title' => 'Transport Management',
            'description' => 'Manage school transportation, including route planning, vehicle tracking, and driver assignments. Communicate with parents about bus schedules and delays.',
            'icon' => '🚌',
        ],
        [
            'title' => 'Alumni Management',
            'description' => 'Maintain a database of alumni with contact information and career details. Engage alumni through newsletters, events, and donation campaigns.',
            'icon' => '🎓',
        ],
        [
            'title' => 'Health and Wellness Tracking',
            'description' => 'Monitor student health records, including vaccinations, medical history, and wellness checks. Integrate with school nurse services and track incidents.',
            'icon' => '🏥',
        ],
    ];
    
    // $features= features::all();
    return view('features',compact('features'));
 }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    //     $features=$request->validate(
    //         [
    //             'title'=>'required',
    //             'description'=>'required',
    //             'icon'=>'required',

    //         ]
    //         );
    //         $features= new features;
    //         $features->title=$request->title;
    //         $features->description=$request->description;
    //         $features->icon=$request->icon;
    //         $features->save();
            
    //         return redirect()->back()->with('success','features created successfully');

    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
