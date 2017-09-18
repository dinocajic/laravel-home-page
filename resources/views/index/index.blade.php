@extends('partials.layout', ['title' => $data['title'], 'description' => $data['description']])

@section('content')

    <!-- Main image and info -->
    <div id="main-background">
        <img src="{!! url('/images/dino-cajic.png') !!}" alt="Dino Cajic" />
        <h1>Dino Cajic</h1>
        <h2>Computer Science Student</h2>
    </div>

    <!-- About Section -->
    <div id="about">

        <!-- About Dino Cajic Header -->
        <div id="about-header">
            <h1>Choose the Dino you want to meet</h1>
        </div>

        <!-- About Dino Cajic -->
        <div id="about-dino">
            <figure>
                <img src="{!! url('/images/cajic-family.jpg') !!}" alt="Cajic Family" />
                <figcaption>
                    <h2>Family</h2>
                    <p>
                        I'm married and have a three and a half year old that means the world to me.
                        Family life has always been the most important part of my life, so lets begin here.
                    </p>
                    <a href="#dinos-family" class="fig-margin">Gallery</a>
                </figcaption>
            </figure>

            <figure>
                <img src="{!! url('/images/dino-cajic-computer-science-club.jpg') !!}" alt="Dino Cajic at Computer Science Club meeting" />
                <figcaption>
                    <h2>School</h2>
                    <p>
                        You never know how much you miss school until you're out. After achieving a number of my goals,
                        I realized that having a higher education is what matters most.
                    </p>
                    <a href="https://grid.cs.gsu.edu/~csclub/" target="_blank" class="fig-margin">CS Club</a><a href="#education" class="info">More Info</a>
                </figcaption>
            </figure>

            <figure>
                <img src="{!! url('/images/dino-cajic-at-work.jpg') !!}" alt="Dino Cajic at Import Alliance with XXR Wheels" />
                <figcaption>
                    <h2>Work</h2>
                    <p>
                        I own an aftermarket wheel and tire e-commerce business and consult numerous wheel vendors
                        on SEO, web-development, graphics design, etc.
                    </p>
                    <a href="http://dinocajic.xyz" target="_blank" class="red">Resume</a><a href="https://firstchoicewheelsandtires.com" target="_blank" class="info">FCWT</a>
                </figcaption>
            </figure>

            <figure>
                <img src="{!! url('/images/dinos-hobbies.jpg') !!}" alt="Dino Cajic's Hobbies" />
                <figcaption>
                    <h2>Hobbies</h2>
                    <p>
                        I'm a car fanatic but my hobbies range from cars to reading, hiking, mountain biking, road cycling,
                        soccer, personal computer related research, etc.
                    </p>
                    <a href="#hobbies" class="info">Gallery</a>
                </figcaption>
            </figure>
        </div>

    </div>
    <!-- End About Dino Cajic -->

    <!-- Web Programming Section -->
    <div id="web-programming">
        <h1>Fun Projects</h1>
        <h3>Listen below are a few fun projects</h3>
        <div>
            <a href="/">Home Page</a>
            <ul>
                <li>
                    You're on it right now. The purpose of the project was to create an independent homepage using only straight forward HTML and CSS
                    without the assistance of any framework; that's right, even bootstrap.
                </li>
                <li>Languages Used: HTML, CSS</li>
            </ul>
        </div>
        <div class="assignment-alt">
            <a href="http://dinocajic.xyz/projects/flip-game/">Flip Tile Guessing Game</a>
            <ul>
                <li>Flip tiles to match two images. Once all images are matched, you win.</li>
                <li>Languages Used: JavaScript, HTML, CSS</li>
                <li>See the code on <a href="https://github.com/dinocajic/javascript/tree/master/flip-game" target="_blank">GitHub</a></li>
            </ul>
        </div>
        <div>
            <a href="http://dinocajic.xyz/projects/css-super-mario/" target="_blank">CSS Super Mario</a>
            <ul>
                <li>This project's objective is to show/design the user interface/front-end and must be done in CSS only.</li>
                <li>Languages Used: HTML, CSS</li>
                <li>See the code on <a href="https://github.com/dinocajic/css-mario" target="_blank">GitHub</a>.</li>
            </ul>
        </div>
        <div class="assignment">
            <a href="http://dinocajic.xyz/projects/php-super-mario/" target="_blank">PHP Super Mario</a>
            <ul>
                <li>
                    The objective was to create a game in PHP. Restrictions included: no existing framework or database usage.
                    I ended up creating a Custom Lightweight MVC framework to handle page requests and used JSON files for the
                    database. I continued on and created a basic website in OO-PHP.
                </li>
                <li>
                    I created two games: Tic-Tac-Toe and Sudoku.
                </li>
                <li>
                    For administrative demo, login with the
                    username <strong>dinocajic</strong> and password <strong>supermario</strong>. For regular user demo,
                    create your own account by clicking on register next to the login button.
                </li>
                <li>Languages Used: PHP, JSON, HTML, CSS</li>
                <li>Download the <a href="http://dinocajic.xyz/projects/php-super-mario/powerpoint/Super-Mario.pptx" target="_blank">PowerPoint presentation</a> of the project</li>
                <li>
                    See the code on <a href="https://github.com/dinocajic/php-super-mario" target="_blank">GitHub</a>.
                </li>
            </ul>
        </div>
        <div>
            <a href="http://dinocajic.xyz/projects/fifteen/fifteen.html" target="_blank">Fifteen Game</a>
            <ul>
                <li>The object of the game is to arrange the tiles into numerical order by repeatedly sliding a square that neighbors
                    the missing square into its empty space.</li>
                <li>Languages Used: JavaScript, HTML, CSS</li>
                <li>Download the <a href="http://dinocajic.xyz/projects/fifteen/powerpoint/Super-Mario.pptx" target="_blank">PowerPoint presentation</a> of the project</li>
                <li>See the code on <a href="https://github.com/dinocajic/javascript/tree/master/fifteen" target="_blank">GitHub</a>.</li>
            </ul>
        </div>
    </div>
    <!-- End Web Programming Section -->

    <!-- Dino's Family Section -->
    <a name="dinos-family"></a>
    <div id="family">
        <h1>Dino's Family</h1>
        <h3>"Other things may change us, but we start and end with our family" - Anthony Brandt</h3>

        <div class="img-gallery">
            <img src="{!! url('/images/family/cajic-family-photoshoot.jpg') !!}"
                 alt="Cajic Family Photoshoot"
                 title="Cajic Family Photoshoot" />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/family/cajic-family-st-augustine.jpg') !!}"
                 alt="Cajic Family at St. Augustine"
                 title="Cajic Family at St. Augustine" />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/family/cajic-dino-harrison-dzeki.jpg') !!}"
                 alt="Cajic Dino, Harrison and Dzeki"
                 title="Cajic Dino, Harrison and Dzeki" />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/family/cajic-dino-haris-verina.jpg') !!}"
                 alt="Cajic Dino, Haris and Verina"
                 title="Me, my brother Haris and my mom Verina" />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/family/dino-and-amira-cajic.jpg') !!}"
                 alt="Dino and Amira Cajic"
                 title="My wife and I." />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/family/cajic-harrison-dino.jpg') !!}"
                 alt="Cajic Harrison and Dino"
                 title="My son Harrison and I" />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/family/cajic-harrison-making-deck.jpg') !!}"
                 alt="Cajic Harrison and Dino replacing the porch"
                 title="Harrison and I replacing the front porch" />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/family/dino-and-harrison.jpg') !!}"
                 alt="Dino and Harrison Cajic"
                 title="My son and I" />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/family/dzeki-and-harrison-on-the-beach.jpg') !!}"
                 alt="Dzeki and Harrison on the beach"
                 title="My son and dog at the beach in St. Augustine" />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/family/dzeki-cajic.jpg') !!}"
                 alt="Dzeki Cajic"
                 title="My German Shepherd Dzeki" />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/family/harrison-and-dzeki-cajic.jpg') !!}"
                 alt="Harrison and Dzeki Cajic"
                 title="These two are inseparable" />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/family/senad-and-harrison-cajic.jpg') !!}"
                 alt="Senad and Harrison Cajic"
                 title="My dad Senad and my son" />
        </div>
    </div>
    <!-- End Dino's Family Section -->

    <!-- Education Section -->
    <a name="education"></a>
    <div id="education">
        <h1>Education</h1>
        <h3>"Education is not preparation for life; education is life itself" - John Dewey</h3>
        <p>
            It always sounds strange to people when I say that I came back to school. I have a completed Biology Minor and
            am currently pursuing a degree in Computer Science at <a href="http://cs.gsu.edu/" target="_blank">Georgia State University</a>.
            I'm in no rush to graduate and take full advantage of each course offered. At the current speed, I'm set to graduate Fall 2018.
            I'm also involved in undergraduate research and am the current president of the Computer Science Club.
            I decided to come back to school for one simple reason: life seemed incomplete without education; I hope to
            pursue either a Masters or a PhD after completing my Bachelor degree. I knew I was ready to come back when I set
            an extremely strict schedule for myself which included:
        </p>

        <ol>
            <li>Read 20+ articles</li>
            <li>Read 50 pages of any book(s)</li>
            <li>Study a foreign language for 30 minutes</li>
            <li>Study Math for 1 hour</li>
            <li>Study any programming language for 1 hour</li>
        </ol>

        <p>
            And yes, these were done each day, Monday through Sunday, for an entire year. I kept track of the articles I
            read on my <a href="https://twitter.com/DinoCajic" target="_blank">Twitter</a> page. After one day noticing that
            I've read 7,500 articles in one year, I spoke to my wife and told her that I believed it was time for me to
            go back to school. She agreed and I started carving out the time necessary. A couple of my favorite classes so far were:
        </p>

        <ul>
            <li>
                Software Engineering
                <ul>
                    <li>Created a <a href="https://github.com/dinocajic/bookstore" target="_blank">Java Bookstore Desktop Application</a>.
                        Documentation for it was over a hundred pages and the total number of lines of code written totaled more than
                        10,000. It was done by me and one other person. I ended up receiving a 100% in the class. If Stacey Adams teaches
                        this course again, I highly recommend that you take him.
                    </li>
                </ul>
            </li>
            <li>
                Programming Language Concepts
                <ul>
                    <li>This course will force you to abandon any fears you have towards "new-language anxiety." I took the
                        course with Yuan Long. The course demands that you study a significant amount of time each day. I
                        ended up creating review guides for each test, such as the one listed on my
                        <a href="http://dinocajic.blogspot.com/2017/04/programming-language-concepts_22.html" target="_blank">blog</a>. I received
                        a high A in this class as well.
                    </li>
                </ul>
            </li>
            <li>
                Theoretical Foundations of Computer Science
                <ul>
                    <li>Although a different type of math, I see this class an absolute necessity for all programmers. I know that most
                        students take this course before they begin programming so they're not able to grasp the full benefit that the
                        course offers. In my opinion, to get the full benefit of this course, after you've worked in a programming
                        environment for a couple of years, re-read the book: it'll make a lot more sense and you'll be amazed by it. I finished this
                        class with a 97%.
                    </li>
                </ul>
            </li>
        </ul>

        <p>
            I wasn't kidding when I said that I take full advantage of each course that I take. I always try to utilize the material somehow
            to help me with my current work or research. For example, last semester (Spring 2017) I took the System Level Programming course. Most
            students wondered why we're being taught the Linux command line for the first half of the class, and when we'll ever utilize the
            bash commands when you have much better higher level languages. I saw that bash, combined with the numerous Linux utilities (awk, sed, etc),
            could be used to create an effective website crawler. Here's an outline of the problem:
        </p>

        <ul>
            <li>We sell wheels and tires through my company: <a href="https://firstchoicewheelsandtires.com" target="_blank">First Choice Wheels and Tires</a>.</li>
            <li>Most vendors that we carry do not sell direct, but will refer traffic from their website.</li>
            <li>To get the traffic coming from their site we have to adhere to the Minimum Advertised Pricing (MAP) that they set.</li>
            <li>If we don't, we don't appear on their website.</li>
            <li>Since we have an incredible discount we make sure that we're always matching the MAP price.</li>
            <li>There are two other companies that also have an incredible discount like we do and they like to match the MAP price as well.</li>
            <li>The vendor likes to change pricing sporadically and without special notice to us.</li>
            <li>The vendor does like to inform the other two companies.</li>
            <li>After we notice a dip in traffic from their website, we contact the vendor and their excuse is always the same: "oh yeah, we forgot to
                send you the updated price sheet." But you didn't forget to send it to the other two companies.</li>
            <li>My employee would spend approximately four hours each Friday to make sure that we were listed and the lowest on each item the vendor listed.</li>
            <li>If you do some quick math, 52 Fridays in a year times four hours per day is 208 hours per year; at 8 hour work days, that means my employee
                was tied up for 26 days a year doing inventory maintenance for one vendor. That's literally one month!</li>
            <li>Once I understood the bash command line, along with certain Linux utilities like awk, wget and sed, I knew how to solve my problem. There are other
                ways to do this, such as <a href="https://github.com/dinocajic/java-website-crawler" target="_blank">Java's JSoup library</a>, but bash
                is extremely effective and memory efficient.</li>
            <li>I created a bash crawler that crawls the vendor's website (with their permission) and makes sure that a) we're listed and b) that we're matching
                the MAP price.</li>
            <li>The <a href="https://github.com/dinocajic/bash-crawler" target="_blank">bash crawler</a> utilizes 27 processes and takes roughly
                10 minutes to complete once per day.</li>
            <li>After it generates a CSV file, it contacts a PHP script on my web-server and it updates the database freeing up Mr. Michael Brooks to do
                additional mundane tasks.</li>
        </ul>

        <br /><br /><br />

    </div>
    <!-- End Education Section -->

    <!-- Dino's Hobbies Section -->
    <a name="hobbies"></a>
    <div id="hobbies">
        <h1>Dino's Hobbies</h1>
        <h3>I'm all over the place. Either I get too bored or I'm just interested in many different things. Let the pictures speak for themselves.</h3>

        <div class="img-gallery">
            <img src="{!! url('/images/hobbies/dinos-c6-corvette.jpg') !!}"
                 alt="Dino's C6 Corvette"
                 title="Obsessed with driving" />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/hobbies/dino-creating-car-emblem-board.jpg') !!}"
                 alt="Car emblem board"
                 title="Creating one of seven car emblem boards" />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/hobbies/dino-growing-plants.jpg') !!}"
                 alt="Dino's Oranges"
                 title="I have numerous plants. This is my mandarin orange." />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/hobbies/dino-hiking.jpg') !!}"
                 alt="Dino, Dzeki and Harrison hiking"
                 title="Hiking Kennesaw Mountain with my family." />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/hobbies/dinos-autonomous-rc-car-project.jpg') !!}"
                 alt="Dino's Autonomous RC Car Project"
                 title="I'm building an autonomous Raspberry Pi powered RC car using OpenCV and numerous other sensors." />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/hobbies/dino-replacing-front-porch.jpg') !!}"
                 alt="Front porch replacement"
                 title="Home improvement projects. Replacing front porch with composite." />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/hobbies/dino-road-cycling.jpg') !!}"
                 alt="Dino Road Cycling"
                 title="One of my favorite exercises. I usually cycle 40 miles total each weekend." />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/hobbies/dino-working-on-c5-corvette.jpg') !!}"
                 alt="Dino working on C5 Corvette"
                 title="As you can see, I love working on my cars." />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/hobbies/dinos-c5-corvette.jpg') !!}"
                 alt="Dino's C5 Corvette upgrades"
                 title="Took everything apart on my C5 Corvette to do engine and suspension modifications." />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/hobbies/dinos-jeep-road-trip.jpg') !!}"
                 alt="Jeep Road Trip"
                 title="We love our Jeep road trips" />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/hobbies/painting-jeep-undercarriage.jpg') !!}"
                 alt="Painting Jeep Undercarriage"
                 title="It's a Jeep; it rusts. Got rid of all the rust from the undercarriage." />
        </div>

        <div class="img-gallery">
            <img src="{!! url('/images/hobbies/reading-and-car-parts.jpg') !!}"
                 alt="Reading and car parts"
                 title="This picture describes me perfectly: Reading and Car parts." />
        </div>
    </div>
    <!-- End Dino's Hobbies Section -->
@endsection