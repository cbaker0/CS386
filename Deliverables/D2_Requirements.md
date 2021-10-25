Requirements
Group 06 – Project Jacks
Date and location: September 26, 2021
Group Members: Carlea Baker, Alenn Wright, Matthew Martinez, Ricardo Chairez

1. Positioning

1.1 Problem statement
	The problem of an Innadiquit and lacking jacks scheduler affecting college students; the impact of which is impossible schedules, Classes being scheduled without regards to the class prerequisites, and no time planned out to travel to the next classes.

1.2. Product Position Statement
	For college students who have trouble making their schedule and want the ease to have a generated schedule, MyScheduler is a web application that will generate an appropriate schedule respective of distance and requirements; unlike Jack’s Scheduler, our product will not just cram the planner classes for the semester where it sees space.

1.3. Value proposition and Consumer Segment
Value Proposition: MyScheduler is a web based class schedule generation tool that allows college students to save the hassle over having to fix and recreate their class schedule, considering the break time between classes and classes needed for your degree so that the core classes are planned before trying to shove in the liberal art classes.

Consumer Segment: College students who don’t understand their schedule and/or trying to generate their own schedule.

2. Stakeholders

Student
Counselor
Developer
Jacks Scheduler


3. Functional requirements (features)
Travel Distance Padding in Scheduler
Core class schedule priority
Hover Details for classes
Professor Preferences for classes
Preferred free time padding option
Information notes (ie. Help pointers, why specific things were done)

4. Non-functional requirements
Simplistic and Intuitive GUI for users, We want to make the UI of the web page to be simple and friendly, we wish the users to not be overloaded with information. However, if the user explores, they can find more information and more functionality for users who want more information.

5. MVP
The features we plan on implementing at the beginning would be a simple and intuitive UI and a database that is linked with our site.
Our UI is going to be nice and simple. We’re thinking about a UI so easy and clean that every student/advisor can navigate it with no issues.
We are planning on slowly adding functional requirements as we go, including things like professor preferences and travel distance padding.

6. Use cases

6.1. Use case diagram


6.2. Use case descriptions

Use Case: Add classes
Actor: Student
Description: The student will add classes to a list of desired classes.
Preconditions: The user has an NAU Louie account and is on the website.
Postconditions: The website can now make schedules using the created list.
Main Flow:

The user searches for courses to add to their schedule.
The system finds courses that match the search criteria.
The user selects the desired course.
The system adds the selected course to a list of selected courses.
The user continues to add more courses, looping through steps 1-4.
The system loops through steps 1-4.

Alternative Flow:
*User wants to remove an already selected course
The user selects a course from the list of added courses to remove
The system removes the course from the list

*User wants to prioritize a course to be included in their schedule
The user selects a star symbol next to the course they would like to prioritize
The system marks the class as priority.

Use Case:Specify Preferences
Actor: Student
Description: The student has the option to say if they prefer specific professors or have to black out time if possible.
Preconditions: The user is a student and has a choice of 2 or more professors or a core class does not overlap break time.
Postconditions: The website will now generate the schedule with the user preferences
Main Flow:
The user makes a list of classes to have in the semester
The system will find if more than one professor exists for a class and an option will be given.
The user will be able to specify what times they would like to have with/without classes
The System will generate the schedule
The user can continue to add courses repeating steps 2 and 3 for each.
Alternative Flow:
User wants to specify break time
The user has a table to enter times for each day classes are available.
The system will see if there are multiple course options, it will choose one that doesn't overlap the specified break time. 

User wants to specify a professor
The user adds a class
The system checks if there are multiple professors for the class
The system prioritizes the professor preference

Use Case: See details of classes
Actor: Student
Description: The student can see the specific details of every class
Preconditions: The user is a NAU student with access to LOUIE, the website, and is curious about a class
Postconditions: The website will show all the specific details about the class the student is curious about.
Main Flow:
The student logs into the website
The system generates the sort of classes the student needs
The student clicks on a specific class
The website shows the student all of the details about that specific class
Steps 3 and 4 can be repeated for as long as the student wants
Alternative Flow: NONE

Use Case: View Generated Schedules
Actor: Student
Description: Once the student has a working list of classes, the website will generate a sample class schedule.
Preconditions: The user is a student, has access to the website and desires to see their schedule.
Postconditions: The website will produce a visual and list type schedule.
Main Flow:
The user makes a list of classes
The user sets their preferences if they are applicable
The user chooses to generate the schedule
The website will produce a schedule respecting as much as possible of the user preferences
Alternative Flow:None


7. User stories
As a student, I want to specify what classes I need to have in my schedule so that I can guarantee that I have that desired course in my schedule. Priority: 2 Estimated hours: 15
As a student, I want to see descriptions of features so that I understand what I can do on the website. Priority: 1 Estimated hours: 10
As a student, I want to have more time to travel to my next class so I can be on time. Priority: 6 Estimated hours: 15
As a student, I want the auto scheduler to not place a class before a prerequisite so I do not waste another semester and have to learn how to rearrange my schedule. Priority: 3 Estimated hours: 12
As a student, I want to see a rating of the available professors so I know what I’m getting into by selecting a class. Priority: 8 Estimated hours: 10
As a student, I want to be able to hover over classes and see a small description so I don’t have to waste my time by clicking every single class. Priority: 7 Estimated hours: 5
As a student, I want to be able to specify a specific time where I want to be free so I don’t have to worry about getting auto-scheduled a class at a time I didn’t want to be in class. Priority: 4 Estimated hours: 20
As a student, I want to see multiple auto-completed schedules with different times and sections so I have options. Priority: 5 Estimated hours: 25

8. Trello
https://trello.com/b/Z6UFQSKY/requirements-list

