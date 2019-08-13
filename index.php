<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Blinker&display=swap"
      rel="stylesheet"
    />

    <script src="https://use.fontawesome.com/02bffa94b1.js"></script>

    <link rel="stylesheet" href="css/normailize.css" />
    <link rel="stylesheet" href="css/main.css" />
    <title>Ryan Rukab - Portfolio</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145644627-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-145644627-1');
    </script>
  </head>

  <body id="app">
    <div class="container">
      <div class="profile" id="profile">
        <div class="img"></div>
        <div class="info">
          <h1>Hi, I'm Ryan Rukab.</h1>
          <h3>A Web Developer based out of Jacksonville, Florida.</h3>
          <div class="nav">
            <p><a href="#about">About Me</a></p>
            <p><a href="#education">Education</a></p>
            <p><a href="#experience">Experience</a></p>
            <p><a href="#projects">Projects</a></p>
            <p><a href="#contact">Contact</a></p>
          </div>
          <div class="socials">
            <div class="social-icons">
              <a href="https://github.com/333ryan18" target="_blank">
                <svg
                  class="fill-white"
                  role="img"
                  height="32"
                  width="32"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <title>GitHub icon</title>
                  <path
                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                  />
                </svg>
              </a>
              <a
                href="https://www.linkedin.com/in/francis-rukab-69903b153/"
                target="_blank"
              >
                <svg
                  class="fill-white"
                  role="img"
                  height="32"
                  width="32"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <title>LinkedIn icon</title>
                  <path
                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                  />
                </svg>
              </a>
            </div>
            <div id="scroll" class="visible">
              <a href="#about">
                <svg
                  class="fill-white scroll-arrow"
                  xmlns="http://www.w3.org/2000/svg"
                  width="32"
                  height="32"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"
                  />
                  <path fill="none" d="M0 0h24v24H0V0z" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="main">
        <div id="about" class="section">
          <h1>About Me</h1>
          <p>
            Early on in my career I enjoyed
            <b>front-end development</b> exclusively. However, as I moved into
            my Junior and Senior years at the Univeristy of North Florida (UNF)
            I learned to love <b>PHP Back End development</b> as well. One of my
            personal passions include home automation. Over the last 3 years my
            smart home has been controlled with a <b>Raspberry Pi</b> running
            <b>Home Assistant</b>.
          </p>
        </div>
        <div id="education" class="section">
          <h1>Education</h1>
          <h2>Univeristy of North Florida</h2>
          <h3>June 2015 - August 2019</h3>
          <p>
            I graduated on August 2nd, 2019 with a
            <b>Bachelor of Science Degree</b> in
            <b>Computing and Information Sciences</b> student with a
            concentration in <b>Information Technology</b>. Notable course work
            can be
            <a href="https://github.com/333ryan18/CourseWork" target="_blank"
              >here</a
            >.
          </p>
          <h2>Mandarin High School, Jacksonville Florida</h2>
          <h3>August 2012 - June 2015</h3>
          <p>
            I graduated on June 5th, 2015 with a <b>High School Diploma</b> from
            Duval County Public Schools. I graduated with
            <b>12 college credits</b> varying from <b>Microeconomics</b> to
            <b>Aeronautical</b> studies.
          </p>
        </div>
        <div id="experience" class="section">
          <h1>Experience</h1>
          <h3>C Programming</h3>
          <p>
            While at UNF I had two classes that utilized C Programming:
            <a
              href="https://github.com/333ryan18/CourseWork/tree/master/COP%202202%20(Computer%20Science%20I)"
              target="_blank"
              ><b>Computer Science I</b></a
            >
            and
            <a
              href="https://github.com/333ryan18/CourseWork/tree/master/COP%203530%20(Data%20Structures)/a2"
              target="_blank"
              ><b>Data Structures</b></a
            >. Tasks included understanding and demonstrating data types,
            operations, expressions, flow control, I/O, functions, program
            structure, software design techniques, and memory allocation with
            the completion of various projects.
          </p>
          <h3>Java Programming</h3>
          <p>
            UNF included three courses that satisfied my requirements for Java
            Programming:
            <a
              href="https://github.com/333ryan18/CourseWork/tree/master/COP%203503%20(Computer%20Science%20II)"
              target="_blank"
              ><b>Computer Science II</b></a
            >,
            <a
              href="https://github.com/333ryan18/CourseWork/tree/master/COP%203530%20(Data%20Structures)"
              target="_blank"
              ><b>Data Structures</b></a
            >, and
            <a
              href="https://github.com/333ryan18/CourseWork/tree/master/CNT%204504%20(Computer%20Networks)"
              target="_blank"
              ><b>Computer Networks</b></a
            >. In these classes we learned about the following: classes,
            interfaces, objects, class types, events, exceptions, control
            structures, polymorphism, inheritance, linked lists, arrays, stacks,
            queues, and deques.
          </p>
          <h3>SQL Programming</h3>
          <p>
            UNF taught all students with a concentration in Information
            Technology SQL in a
            <a
              href="https://github.com/333ryan18/CourseWork/tree/master/CGS%204307%20(Databases)/Project"
              target="_blank"
              ><b>database</b></a
            >
            course. In this course we examined the organizational requirements
            of information processing in support of administrative decision
            processes. This involves the examination and use of information
            processing models in business to transform organizational memory
            into appropriate designs. We normalized our tables up to 3rd normal
            form.
          </p>
          <h3>Front End Web Development</h3>
          <p>
            At UNF Information Technology students were required to take
            <a
              href="https://github.com/333ryan18/CourseWork/tree/master/COP%204813%20(Internet%20Programming)"
              target="_blank"
              ><b>Internet Programming</b></a
            >
            and
            <a
              href="https://github.com/333ryan18/CourseWork/tree/master/CDA%204010%20(User%20Interface%20Design)/Project"
              target="_blank"
              ><b>User Interface Design</b></a
            >
            .The first course covered the basics of Web Development from HTML,
            CSS, Javascript, and PHP. While the second course covered the
            fundamentals of user interface design.
          </p>
          <h3>Back End Web Development</h3>
          <p>
            The final project in UNF's
            <a
              href="https://github.com/333ryan18/CourseWork/tree/master/COP%204813%20(Internet%20Programming)/project5"
              target="_blank"
              ><b>Internet Programming</b></a
            >
            course included back end web development using PHP and AJAX. The
            project done in the course had the full functionality of a movie
            shopping cart website including: authentication, password reset,
            movie search, and purchase notification.
          </p>
          <h3>Bash Scripting</h3>
          <p>
            UNF's
            <a
              href="https://github.com/333ryan18/CourseWork/tree/master/COP%204640%20(Operating%20Systems)"
              target="_blank"
              ><b>Operating Systems</b></a
            >
            course included lab assignments that had students create differing
            Bash scripts.
          </p>
        </div>
        <div id="projects" class="section">
          <h1>Projects</h1>
          <h3>The Brick Coffee House - 2016</h3>
          <p>
            I was the lead designer and developer for the
            <a href="https://brickcoffeehouse.com" target="_blank"
              ><b>brickcoffeehouse.com</b></a
            >.
          </p>
          <h3>User Interface Design Project - Fall 2018</h3>
          <p>
            I designed and developed a website for a employment application for
            my User Interface Design class. I was tasked with digitizing a paper
            form of an employment application into a website that follows
            industry standards in accessibility. A mock-up version of the
            website can be seen
            <a href="https://333ryan18.github.io/CDA4010/" target="_blank"
              ><b>here</b></a
            >.
          </p>
        </div>
        <div id="contact">
          <h1>Contact</h1>
          <?php 
            if (isset($_GET['error']) && !empty($_GET['error'])) {
              if ($_GET['error'] == 'mail') {
                echo "<span class='red'>There was an error sending your request. Please try again.</span>";
              }
              else if ($_GET['error'] == 'contact') {
                echo "<span class='red'>Please fill in all the fields below.</span>";
              }
              else {
                echo "<span class='red'>Something went wrong. Please try again.</span>";
              }
            }
            if (isset($_GET['success']) && !empty($_GET['success'])) {
              if ($_GET['success'] == 'mail') {
                echo "<span class='green'>We will be in contact soon!</span>";
              }
            }
          ?>
          <form action="./includes/mailer.php" method="POST">
            <label for="name">
              Name
            </label>
            <input type="text" name="name" value="<?php echo $_GET['name'] ?>" required/>
            <label for="email">
              Email
            </label>
            <input type="email" name="email" value="<?php echo $_GET['email'] ?>" required/>
            <label for="subject">
              Subject
            </label>
            <input type="text" name="subject" value="<?php echo $_GET['subject'] ?>" required/>
            <label for="message">
              Message
            </label>
            <textarea rows="10" cols="30" name="message" required><?php echo $_GET['message'] ?></textarea>
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>
