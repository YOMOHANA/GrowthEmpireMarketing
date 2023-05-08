<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Growth Empire Marketing - Contact</title>

  <link rel="icon" type="image/x-icon" href="public/img/favicon.ico" />
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://kit.fontawesome.com/b5e2506554.js" crossorigin="anonymous"></script>

  <!-- Custom styles for this template -->
  <link href="public/css/main.css" rel="stylesheet">
</head>
<body>

<!-- header -->
<?php
// Header
require_once('header.php');
?>

<section id="openings_section" style="background: url('public/img/bg-shape-1.png'); background-position: bottom center; background-size: cover">
  <div class="openings_container">
    <h1>Our Openings</h1>
    <ul>
      <li>
        <div>
          <h5>Junior Sales Agent</h5>
          <span><i class="fas fa-map-marker-alt" ></i> 68 Westbourne Rd, Port Elizabeth Central, Gqeberha, 6001 </span><br>
          <div class="job_1">
            <span><i class="fas fa-info-circle"></i> Job Details</span>
          </div><br>
        </div>
      </li>
      <li>
        <div>
          <h5>Sales Assistant</h5>
          <span><i class="fas fa-map-marker-alt" ></i> 68 Westbourne Rd, Port Elizabeth Central, Gqeberha, 6001 </span><br>
          <div class="job_2">
            <span><i class="fas fa-info-circle"></i> Job Details</span>
          </div>
        </div>
      </li>
    </ul>

    <div class="description_1">
      <h4>Junior Sales Agent</h4>
      <p>G.E.M has launched an exciting new campaign, and we are currently seeking to employ a Highly motivated, driven  long term insurance Junior Sales Agent.The Junior sales agent is an experienced sales individual. This individual will be responsible for successfully executing on direct sales whilst supporting the upskilling of less experienced sales agents.<br>
        <br>
        This candidates duties include:
        <br>
        -Executing and closing sales
        <br>
        Understanding the product and its respective features and benefits.<br>
        Initiate sales with potential customers in person<br>
        Building a rapport with customers<br>
        Effectively answering customer questions.<br>
        Accurately capturing information that customers provide.<br>
        Understand and operate within the regulatory frameworks for financial service providers.<br>
        Maximizing sales performance<br>
        <br>
        Monitoring sales performance and identifying improvement opportunities.<br>
        Actively seeking customer feedback and raising reasons for not buying the product with the team leader.<br>
        Make suggestions to the team leader on improvements to the script that can improve sales without detail.<br>
        Coaching less experienced staff on effective sales strategies.<br>
        <br>
        *Requirements*<br>
        This role has the following requirements:<br>
        <br>
        Qualifications<br>
        <br>
        Matric Certificate.<br>
        Credit and Criminal Clear<br>
        A minimum of 1 year selling long-term insurance.<br>
        Experience in selling money-market instruments is advantageous.<br>
        Working Hours: <br>
        <br>
        Monday to Wednesday – 8am to 5pm<br>
        <br>
        Thursdays are Marathon Days – 8 am to 8 pm with FREE LUNCH PROVIDED<br>
        <br>
        Friday - 8am to 3:30pm<br>
        <br>
        You will be required to work 1 Saturday per month - 8am to 1:30pm<br>
        <br>
        <br>
        Remuneration:<br>
        <br>
        Monthly basic: R8000<br>
        <br>
        Additional commission and incentive earnings.<br>
        <br>
        Benefits:<br>
        <br>
        • Medical Insurance<br>
        <br>
        • YouAssist – Access to emergency response, trauma, and home assist<br>
        <br>
        • Internal LMS – access to online courses to aid with professional, writing, and personal development<br>
        <br>
        Please note that due to the high volume of CVs received only shortlisted applicants will be contacted. Should you not receive communication from our office within two weeks of submission, kindly consider your application unsuccessful for this position.<br>
        <br>
        We will keep your CV on file and re-establish contact with you should opportunities in line with your expertise become available in the future.<br>
        <br>
        Work Level: Skilled<br>
        Job Type: Permanent<br>
        Salary: 8,000.00 - 10,000.00
      </p>
      <div class="apply_now">
        <h4>join our team</h4>
        <a href="/application.php">apply now</a>
      </div>
    </div>
    <div class="description_2">
      <h4>Sales Agent Assistant</h4>
      <p>
        The company’s rapid growth from 5 core staff, to the current 50+ employees can be directly attributed to the relationships we have built with our retailers and customers, and as we continue to work towards bringing in new ranges and building new relationships, we do not see any slowing down.<br>
        <br>
        We are looking for young energetic reliable candidates to make sure key lines are promoted and sales targets are achieved. Candidates will be required to work in specified retail stores representing and promoting selected brands and products.<br>
        <br>
        <br>
        *Requirements:*<br>
        <br>
        Great communication skills<br>
        Matric pass<br>
        Under 29<br>
        Able to work weekends<br>
        Job Specification:<br>
        <br>
        Merchandising<br>
        Promoting<br>
        Reporting on in-store activates and general feedback<br>
        Building relationships with store management<br>
        Reaching targets<br>
        Sales Driven<br>
        Retail hours 6 days per week<br>
        Salary: Commission based on achieved targets<br>
        <br>
        Job Type: Full-time
      </p>
      <div class="apply_now">
        <h4>join our team</h4>
        <a href="/application.php">apply now</a>
      </div>
    </div>
    <i class="fas fa-long-arrow-alt-left back_button"></i>
  </div>
</section>

<!-- Footer -->
<?php
// Footer
require_once('footer.php');
?>
<!-- Footer -->
<script src="public/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  const jobDetailsOne = document.querySelector(".job_1");
  const jobDetailsTwo = document.querySelector(".job_2");
  const jobDescriptionOne = document.querySelector(".description_1");
  const jobDescriptionTwo = document.querySelector(".description_2");
  const back = document.querySelector(".back_button");

  let t1 = gsap.timeline({ paused:true, reversed: true });
  let t2 = gsap.timeline({ paused:true, reversed: true });

  jobDetailsOne.addEventListener("click", (e) => {
    jobDescriptionOne.classList.add('active');
    jobDescriptionTwo.classList.remove('active');
    t2.play();
  })

  back.addEventListener("click", (e) => {
    t2.reverse();
  })

  t1.play();

  t1.to(".openings_container h1",
          {
            ease: "elastic.out(1, .8)",
            top: "5%",
            duration: 1.5
          },
          0.3
  );

  t1.to(".openings_container p",
          {
            ease: "elastic.out(1, .8)",
            bottom: "-14%",
            duration: 1.5
          },
          0.4
  );

  t1.from(".job_1",
          {
            ease: "elastic.out(1, .8)",
            scale: 0,
            duration: 1.5
          },
          0.4
  );

  t2.to(".openings_container h1",
          {
            ease: "elastic.out(1, .8)",
            top: "5%",
          },
          0
  );

  t2.to(".openings_container p",
          {
            ease: "elastic.out(1, .8)",
            bottom: "-14%",
          },
          0
  );

  t2.to(".job_1 i",
          {
            ease: "power1.inOut",
            scale: 0,
            duration: 0.3,
          },
          0
  );

  t2.to(".job_1",
          {
            ease: "elastic.out(1, .8)",
            scaleY: 100,
            width: "100%",
            duration: 0.3,
          },
          0.3
  );

  t2.to(".back_button",
          {
            ease: "elastic.out(1, .8)",
            bottom: "5%",
            duration: 1.5,
          },
          0.7
  );

  t2.to(".openings_container h2",
          {
            ease: "elastic.out(1, .8)",
            left: "60%",
            duration: 1.5,
          },
          0.5
  );

  t2.to(".description_1",
          {
            ease: "elastic.out(1, .8)",
            left: "52%",
            duration: 1.5,
          },
          0.6
  );

  jobDetailsTwo.addEventListener("click", (e) => {
    jobDescriptionTwo.classList.add('active');
    jobDescriptionOne.classList.remove('active');
    t2.play();
  })

  back.addEventListener("click", (e) => {
    t2.reverse();
  })

  t1.play();

  t1.to(".openings_container h1",
          {
            ease: "elastic.out(1, .8)",
            top: "5%",
            duration: 1.5
          },
          0.3
  );

  t1.to(".openings_container p",
          {
            ease: "elastic.out(1, .8)",
            bottom: "-14%",
            duration: 1.5
          },
          0.4
  );

  t1.from(".job_2",
          {
            ease: "elastic.out(1, .8)",
            scale: 0,
            duration: 1.5
          },
          0.4
  );

  t2.to(".openings_container h1",
          {
            ease: "elastic.out(1, .8)",
            top: "5%",
          },
          0
  );

  t2.to(".openings_container p",
          {
            ease: "elastic.out(1, .8)",
            bottom: "-14%",
          },
          0
  );

  t2.to(".job_2 i",
          {
            ease: "power1.inOut",
            scale: 0,
            duration: 0.3,
          },
          0
  );

  t2.to(".job_2",
          {
            ease: "elastic.out(1, .8)",
            scaleY: 100,
            width: "100%",
            duration: 0.3,
          },
          0.3
  );

  t2.to(".back_button",
          {
            ease: "elastic.out(1, .8)",
            bottom: "5%",
            duration: 1.5,
          },
          0.7
  );

  t2.to(".openings_container h2",
          {
            ease: "elastic.out(1, .8)",
            left: "60%",
            duration: 1.5,
          },
          0.5
  );

  t2.to(".description_2",
          {
            ease: "elastic.out(1, .8)",
            left: "52%",
            duration: 1.5,
          },
          0.7
  );
</script>
</body>
</html>