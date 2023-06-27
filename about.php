<?php
/*
Template Name: About Template
*/

get_header();

$vision_img = get_template_directory_uri() . "/assets/about/aheri-about-1.jpg";
$mission_img = get_template_directory_uri() . "/assets/about/aheri-about-2.jpg";
$ourWork_img = get_template_directory_uri() . "/assets/about/aheri-about-3.jpg";

?>
      <section class="about-primary">
        <div class="about-header">
          <h2 class="about-heading">About Us</h2>
          <p class="about-text">
            Africa higher education research institute (AHERI)
          </p>
        </div>
        <article class="about-vision row">
          <div class=".about-vision_description col-md-6">
            <h2 class="about-heading_sub">Our Vision</h2>
            <p class="about-text">
              Our vision is to support sustainable and transformational
              development in Africa through higher education.
            </p>
          </div>
          <div class="about-vision_img col-md-6">
            <img
              class="img-fluid"
              src="<?=$vision_img ?>"
              alt="about image 1"
            />
          </div>
        </article>
        <article class="about-mission row">
          <div class="about-mission_img col-md-6">
            <img
              class="img-fluid"
              src="<?=$mission_img ?>"
              alt="about image 2"
            />
          </div>
          <div class="about-mission_description col-md-6">
            <h2 class="about-heading_sub">Our Mission</h2>
            <ul class="about-text">
              <li class="">
                To promote and support networking among higher education
                researchers in the region
              </li>
              <li>To identify pertinent issues affecting higher education</li>
              <li>
                To carry out relevant research aimed at improving higher
                education
              </li>
              <li>To publish and document information on higher education</li>
              <li>
                To advocate for implementation of the research findings through
                influencing
              </li>
              <li>
                Decision making within the higher education sector towards
                general development in African states
              </li>
            </ul>
          </div>
        </article>
        <article class="about-ourWork row">
          <div class="about-ourWork_description col-md-6">
            <h2 class="about-heading_sub">Our Work</h2>
            <p class="about-text">
              Convening high-level stakeholder engagements/conferences and
              colloquia.
            </p>
            <p class="about-text">
              Africa Higher Education Research Institute (AHERI) organizes
              annual conferences that brings together higher education
              institutions, researchers, policy actors and industry players to
              reflect on the contributions, challenges and opportunities for
              innovation geared towards achievement of sustainable development
              in line with SDG 4 - Quality Education.
            </p>
          </div>
          <div class="about-ourWork_img col-md-6">
            <img
              class="img-fluid"
              src="<?=$ourWork_img ?>"
              alt=""
            />
          </div>
        </article>
      </section>
      <section class="about-thematic">
        <h2 class="about-heading_sub text-center">Thematic Areas</h2>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne"
                aria-expanded="false"
                aria-controls="flush-collapseOne"
              >
                GOVERNANCE IN HIGHER EDUCATION INSTITUTIONS.
              </button>
            </h2>
            <div
              id="flush-collapseOne"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                The term governance refers to the procedures and structures
                through which higher education institutions are organized and
                managed. Most of the governance are formal in nature though
                informal processes and influences exist through which higher
                education institutions to make decisions. Whereas the
                arrangements are official and explicit, their informal
                equivalents refer to unwritten rules governing how people within
                higher education institutions relate to each other.<br />
                The Governance of higher education institutions typically
                encompasses all aspects of the institution but in the context of
                AHERI and to enhance focus we look at statutes and regulations.
                The governance reform of higher education is one of the major
                reforms that universities face to be relevant to the building up
                of a knowledge society and sustainable development.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo"
                aria-expanded="false"
                aria-controls="flush-collapseTwo"
              >
                QUALITY ASSUARANCE IN HIGHER EDUCATION.
              </button>
            </h2>
            <div
              id="flush-collapseTwo"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                Higher education is increasingly competitive and quality of
                education defines institutions and systems that are desirable.
                However, the challenge of access and cost demands a nuanced
                balancing act to define the suitable ratio that maintains
                functionality of higher education. Quality is difficult to
                define due to its contextual nature and the heterogeneity of
                higher education systems and the countries. Appreciatively due
                to internationalization and globalization there are common
                grounds which may be used to identify agreeable standards of
                quality but in the minimum develop code of best practice. AHERI
                seeks to interrogate quality of higher education in reference to
                its level of relevance to local challenges of the society the
                universities serve.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree"
                aria-expanded="false"
                aria-controls="flush-collapseThree"
              >
                ACCESS TO HIGHER EDUCATION.
              </button>
            </h2>
            <div
              id="flush-collapseThree"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                Access to higher education is a topic of high interest, with
                direct consequences on national educational policies, the
                development of labor market and quality of life. AHERI aims to
                identify factors which influence the interest of high-school
                students and graduates to get higher education (HE) and examine
                policies and strategies that promote access or hinder access to
                higher education.<br />
                Factors that influence access like geographical mobility for
                both student and faculty, debates on education as a public good
                and effects of neoliberalism, industrialization, government
                policy and constitution’s, shall inform inquisition and AHERI
                research design. Phenomena such as “massification in higher
                education, harmonization of higher education and regional
                integration are some of the areas of interest for AHERI.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFour"
                aria-expanded="false"
                aria-controls="flush-collapseFour"
              >
                TRANSITION FROM SCHOOL TO WORK.
              </button>
            </h2>
            <div
              id="flush-collapseFour"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                According to the European Union skills mismatch is a situation
                in the labour market where the level of skills of individuals
                does not match the level of skills required in the jobs.
                Mismatches could be vertical (when the level of skills or
                education is more or less than the level of skills or education
                required to perform a job), horizontal (when the type of
                education or skills is not appropriate for the current job, but
                the level of education or skills matches the requirements of the
                job) or geographical (where the workers with types and levels of
                skills or education required are based in a country or region
                different from where such skills are needed). Source: EU
                commission (Skills panorama) 2015, Europe <br />
                The situation can obtain in Africa labour markets as well, being
                that desirable work experience is the ultimate goal of higher
                education. AHERI will endeavor to predict and advocate for the
                right set of skills and competence to make higher education
                relevant to the demands of world of work.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFive"
                aria-expanded="false"
                aria-controls="flush-collapseFive"
              >
                RESEARCH FUNDING.
              </button>
            </h2>
            <div
              id="flush-collapseFive"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                Investing in research can lead to economic development,
                countries like South Korea, Singapore, and Taiwan deliberately
                increased funds towards research institutions and projects to
                attain the spirited economic development. Currently, many
                countries in sub-Saharan Africa spend less than 1% of their
                gross domestic product on research. AHERI will seek to find
                answers as to If and how governments should contribute to
                funding of research? How do African institutions reposition
                themselves to demands of cofounding to secure funding
                opportunities? Can higher education institutions carry out
                collaborative research with industry?
              </div>
            </div>
          </div>
        </div>
      </section>

    <?php
    get_footer();
    ?>
