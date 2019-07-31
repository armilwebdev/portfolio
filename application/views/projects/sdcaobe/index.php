<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="material-icons">arrow_upward</i></button>

<div class="container projects-container">
    <div class="page-title">
       SDCA OBE (Outcome Based Education) Assessment and Validation Exams
    </diV>
    <div class="section-description" >
    <p>
        <ul>
            <li style="font-weight:bold;">Contents</li>
            <li><a href="#professor-section" style=" font-weight:600;">Professor's Portal</a></li>
            <li><a href="#student-section" style=" font-weight:600;"> Student's Portal</a></li>

        </ul>
        </p>
        <p>
        This system was created as a capstone project during my senior year at St. Dominic College of Asia (SDCA)
        in 2017-2018. Professor's could create exams, quizzes, create assessments offline on excel and upload it later or other types of assessments, as well as an auto-generated 
        validating examination from all previous assessments. What made this special was that it adheres to the Department of Education's 
        OBE guidelines. Professors could create and assign a category or course intended learning outcome per question. When students take the assessment,
        professors could quickly see what categories the students excelled at or struggled with. </p>

        <p>
        This LMS (Learning Management System) as far as we knew was the first examination system in the Philippines that 
        incorporated OBE. The system and documentation was completed by 3 students (myself included), where it was best 
        decided that I would take the role
        in coding the development of the system while the rest of the group focused on the documentation. 
        </p>

        <p>
        This system won <b>"Best in Capstone"</b> and awarded 1st Place during an international presentation at <b>Acer Headquarters in Taipei, Taiwan</b>. 
        </p>


    </div>
    <div class="row prof-section" id="professor-section">
        <div class="col s12">
            <span class="project-page-title col s12">
                Professor's Portal
            </span>
            <span class="img col s12">
                <img class="materialboxed col s12 z-depth-2" src="<?php echo base_url();?>assets/sdcaobe/images/prof-index.png">
            </span>
            <span class="project-description col s12">
                <span class="photo-title">Professor's Main Page: </span>
                    After a professor logs in, they're brought to their dashboard and greeted with an overview of their handled subjects.
            </span>
        </div>
        <div class="col s12 margin-top">
            <span class="img col s12">
                <img class="materialboxed col s12 z-depth-2" src="<?php echo base_url();?>assets/sdcaobe/images/prof-create-test.png">
            </span>
            <span class="project-description col s12">
                <span class="photo-title">Create Test: </span>
                 Professor's can create different types of assessments and specify for what date it will start/end, what time it will start/end, 
                 and they can specify a time limit. All questions and choices will be randomized to prevent students cheating off of one another.
            </span>
        </div>
        <div class="col s12 margin-top">
            <span class="img col s12">
                <img class="materialboxed col s12 z-depth-2" src="<?php echo base_url();?>assets/sdcaobe/images/prof-quiz-creation.png">
            </span>
            <span class="project-description col s12">
                <span class="photo-title">Creating the Questions: </span>
                 When creating an assessment, you can choose to have multiple choice, true/false, identification, or a multiple choice photo question. 
                 Points can be assigned for each question, and CILO/CO (Course Intended Learning Outcome and Course Outcome) can be assigned and be given points.
                 This allows for better assessing students and how to improve their weaknesses. 
            </span>
        </div>
        <div class="col s12 margin-top">
            <span class="img col s12">
                <img class="materialboxed col s12 z-depth-2" src="<?php echo base_url();?>assets/sdcaobe/images/prof-autogenerate-exam.png">
            </span>
            <span class="project-description col s12">
                <span class="photo-title">Auto-Generated Assessments: </span>
                This feature allows for professors to auto-generate assessments from previous assessments. The professor just needs to 
                enter the number of questions they'd like and questions will be randomly chosen for the assessment.
            </span>
        </div>
        <div class="col s12 margin-top">
            <span class="img col s12">
                <img class="materialboxed col s12 z-depth-2" src="<?php echo base_url();?>assets/sdcaobe/images/prof-upload-from-excel.png">
            </span>
            <span class="project-description col s12">
                <span class="photo-title">Upload Tests: </span>
                We understood that assessments can take time to create, and aren't usually created in 1 sitting.
                Therefore we implemented a feature where professors can download an excel template that I created which they can fill up to 
                create their assessment, then later upload it when it was most convenient to them. 
            </span>
        </div>
        <div class="col s12 margin-top">
            <span class="img col s12">
                <img class="materialboxed col s12 z-depth-2" src="<?php echo base_url();?>assets/sdcaobe/images/prof-student-info.png">
            </span>
            <span class="project-description col s12">
                <span class="photo-title">General Overview of Students: </span>
                Professors can click on one of their students to get an overall view of how they are performing during their assessments.
            </span>
        </div>
        <div class="col s12 margin-top">
            <span class="img col s12">
                <img class="materialboxed col s12 z-depth-2" src="<?php echo base_url();?>assets/sdcaobe/images/prof-view-student-stats-answers.png">
            </span>
            <span class="project-description col s12">
                <span class="photo-title">Student Stats: </span>
                After a student has taken an assessment, profs can dig deeper into how they answered.
                Since each question has a category or Course Intended Learning Outcome, the professor can quickly
                analyze for what types of question categories they struggle with, or do well with. 
            </span>
        </div>
        <div class="col s12 margin-top">
            <span class="img col s12">
                <img class="materialboxed col s12 z-depth-2" src="<?php echo base_url();?>assets/sdcaobe/images/prof-view-school-assessments.png">
            </span>
            <span class="project-description col s12">
                <span class="photo-title">Overall School Analysis: </span>
                Since data is gathered from all subjects, students and professors, I was able to produce an overview of 
                the student body's overall performance as well as each professor's performance. This allows school officials to 
                quickly get an overview of how everyone is performing. 
            </span>
        </div>
    </div>


    <div class="row prof-section" style="margin-top:75px;" id="student-section">
        <div class="col s12">
            <span class="project-page-title col s12">
                Student's Portal
            </span>
            <span class="img col s12">
                <img class="materialboxed col s12 z-depth-2" src="<?php echo base_url();?>assets/sdcaobe/images/stud-index.png">
            </span>
            <span class="project-description col s12">
                <span class="photo-title">Student Dashboard: </span>
                    After students log in, they're greeted with an overview of their previous scores and how they compare to other students to 
                    instill competitiveness and motivation to study harder.
            </span>
            <span class="img col s12 margin-top">
                <img class="materialboxed col s12 z-depth-2" src="<?php echo base_url();?>assets/sdcaobe/images/stud-awards.png">
            </span>
            <span class="project-description col s12">
                <span class="photo-title">Student Awards: </span>
                    To stay up to par with modern day trends, we instilled the concept of gamification with student performance.
                    Depending on their score, students can earn awards.
            </span>
            <span class="img col s12 margin-top">
                <img class="materialboxed col s12 z-depth-2" src="<?php echo base_url();?>assets/sdcaobe/images/stud-quizscore.png">
            </span>
            <span class="project-description col s12">
                <span class="photo-title">Assessment Scores: </span>
                    After completing an assessment, students will be able to view their score as well as any other previous tests that they've taken.
            </span>
        </div>
    </div>
    
</div>