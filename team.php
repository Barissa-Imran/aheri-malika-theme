<?php
/*
Template Name: Team Template
*/
  get_header();

  $Robert = get_template_directory_uri().'/assets/images/team/Robert Owino.jpg';
  $Barrack = get_template_directory_uri().'/assets/images/team/Barrack Otieno.jpg';
  $Mary = get_template_directory_uri().'/assets/images/team/Dr. Mary.jpg';
  $Kevit = get_template_directory_uri().'/assets/images/team/Kevit Desai.jpg';
  $Victoria = get_template_directory_uri().'/assets/images/team/Victoria Oduor.jpg';
  $Default = get_template_directory_uri().'/assets/images/aheri logo.png';

  $Chacha = get_template_directory_uri().'/assets/images/team/Prof. Chacha Nyaigoti.jpg';
  $Kevit = get_template_directory_uri().'/assets/images/team/Kevit Desai.jpg';
  $Hellen = get_template_directory_uri().'/assets/images/team/Prof. Hellen Inyega.jpg';
  $Juan = get_template_directory_uri().'/assets/images/team/Dr. Juan Advisory Board.jpg';
  $Truphie = get_template_directory_uri().'/assets/images/team/Rev Truphie.jpg';
?>

<section class="team-container">
  <h2 class="team-heading">
    Meet <br />
    the Team
  </h2>
  <p class="team-head_text">
    As a registered Non-Governmental Organization (NGO), AHERI is headed by a
    Board of Directors with an Executive Director as its head of operations and
    Secretary. The Board of Directors consists of the following five directors:
  </p>
  <h3 class="team-sub">Board of Directors</h3>
  <div class="team-members">
    <div class="wrapper">
      <div class="wrapper-img" style="background: url('<?= $Robert ?>')"></div>
      <div class="wrapper-container">
        <h4><b>Mr. Robert Owino</b></h4>
        <p>Executive Director (CEO)</p>
      </div>
    </div>
    <div class="wrapper">
      <div class="wrapper-img" style="background: url('<?= $Barrack ?>')"></div>
      <div class="wrapper-container">
        <h4><b>Mr. Barrack Otieno</b></h4>
        <p>Secretary</p>
      </div>
    </div>
    <div class="wrapper">
      <div class="wrapper-img" style="background: url('<?= $Mary ?>')"></div>
      <div class="wrapper-container">
        <h4><b>Dr. Mary Aswan</b></h4>
        <p>Treasurer</p>
      </div>
    </div>
    <div class="wrapper">
      <div
        class="wrapper-img"
        style="background: url('<?= $Victoria ?>')"
      ></div>
      <div class="wrapper-container">
        <h4><b>Ms.Victoria Oduor</b></h4>
        <p>Member</p>
      </div>
    </div>
    <div class="wrapper">
      <div class="wrapper-img" style="background: url('<?= $Default ?>')"></div>
      <div class="wrapper-container">
        <h4><b>Dr. John Obero Ogone</b></h4>
        <p>Member</p>
      </div>
    </div>
  </div>
  <div class="team-text_secondary">
    <p>The Board of Directors is responsible for</p>
    <ul>
      <li>Preparation of a Strategic Plan</li>
      <li>Overall governance</li>
      <li>Review and approval of budgets and ensures financial controls</li>
      <li>Appoints and evaluates the executive team</li>
      <li>Leads resource mobilization</li>
      <li>Leads linkages and collaboration</li>
      <li>Leads performance contracting and management</li>
      <li>Ensures statutory and ethical compliance of AHERI</li>
    </ul>
    <p>
      The Board of Directors is assisted by the Advisory Board who is
      responsible for providing guidance, expertise, experience, and support to
      AHERI in achieving its strategic objectives. AHERI’s Advisory Board
      consists of the following skilled, knowledgeable and experienced
      individuals.
    </p>
  </div>

  <div class="team-members">
    <div class="wrapper">
      <div class="wrapper-img" style="background: url('<?= $Chacha ?>')"></div>
      <div class="wrapper-container">
        <h4><b>Prof. Chacha Nyaigoti</b></h4>
        <p>Chairman</p>
      </div>
    </div>
    <div class="wrapper">
      <div class="wrapper-img" style="background: url('<?= $Kevit ?>')"></div>
      <div class="wrapper-container">
        <h4><b>Dr. Kevit Desai</b></h4>
        <p></p>
      </div>
    </div>
    <div class="wrapper">
      <div class="wrapper-img" style="background: url('<?= $Hellen ?>')"></div>
      <div class="wrapper-container">
        <h4><b>Dr. Hellen Inyega</b></h4>
        <p></p>
      </div>
    </div>
    <div class="wrapper">
      <div class="wrapper-img" style="background: url('<?= $Juan ?>')"></div>
      <div class="wrapper-container">
        <h4><b>Dr. Julius Juan</b></h4>
        <p></p>
      </div>
    </div>
    <div class="wrapper">
      <div class="wrapper-img" style="background: url('<?= $Truphie ?>')"></div>
      <div class="wrapper-container">
        <h4><b>Rev. Truphie Kwaka</b></h4>
        <p></p>
      </div>
    </div>
  </div>
  <div class="team-text_secondary">
    <p>The Advisory Board is responsible for-</p>
    <ul>
      <li>Leading public relations of AHERI</li>
      <li>Sharing their expertise, knowledge and skills</li>
      <li>Leading networking, partnerships, and collaboration</li>
      <li>Strategic guidance in implementation of AHERI's programs</li>
      <li>Ensuring good governance and accountability</li>
      <li>Monitoring and evaluating AHERI's programs</li>
    </ul>
    <p>
      Answerable to the Board of Directors is the Administrative Team
      (Departments) charged with the day-to-day operations of AHERI and
      comprising the Administrator and Human Resources Officer (Principal
      Assistant to the CEO and Head of programs), Accountant, Procurement
      Officer, Head of Security, Head of ICT, Secretaries, Receptionists etc.
    </p>
  </div>
</section>

<?php
get_footer();
?>
