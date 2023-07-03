<?php
/*
Template Name: Front-page Template
*/

  get_header();
?>
      <section id="hero" class="hero_section">
        <div class="row">
          <div
            class="col-md-12 col-lg-6 d-flex flex-column hero_section-left justify-content-center align-center"
          >
            <p>IDEAS INTO ACTION</p>
            <p>
              Supporting sustainable and transformational development in Africa
              through higher education.
            </p>
            <p>
              We organize conferences, develop and carry out research projects
              for clients, facilitate and promote publications on higher
              education research, organize public debates and produce position
              papers on current and critical affairs of the society, facilitate
              scholarship and support for masters and doctoral studies for
              Africans.
            </p>
            <p class="">EXPLORE AHERI</p>
            <i class="bi bi-arrow-down"></i>
          </div>
          <div class="col-md-6 hero_section-right d-none d-lg-block">
            <img
              class="img-fluid"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/home/heroimage1.png"
              alt="hero image"
            />

          </div>
        </div>
      </section>
      <section class="content-primary">
        <div class="content-green_deco"></div>
        <div id="ourStory" class="content-story">
          <h1 class="content-story_header">
            <svg
              width="89"
              height="89"
              viewBox="0 0 89 89"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M54.2171 8.33508C51.1577 8.33508 48.2026 8.45676 45.404 8.75749L42.5184 16.253L41.6667 9.29288C41.2321 9.37284 40.7975 9.45627 40.363 9.5484C38.7811 9.88563 37.7382 10.8034 36.8342 12.1332C35.9303 13.463 35.2872 15.1752 34.7309 16.7571C33.2012 21.1201 31.9844 25.7266 31.011 30.4199C32.054 31.3065 33.0969 32.2104 34.1225 33.0969L39.4591 30.0375L45.3344 34.5744L54.3561 31.15L64.9596 35.4088L63.7776 38.3117L54.3214 34.5223L44.813 38.1205L39.2157 33.7922L36.6257 35.2698C40.0327 38.277 43.3354 41.2494 46.4469 44.1698L48.8805 43.0573L54.7733 45.8559L60.1967 43.5787L64.4034 47.6289L62.2479 49.8887L59.5014 47.2639L54.7038 49.2977L48.9675 46.5512C50.1669 47.7158 51.3315 48.8457 52.4614 49.9756L52.7569 50.2885L56.1466 63.5516L54.7907 62.5608L45.5778 62.6303L38.955 59.5362L31.5846 62.0741L30.5764 59.119L39.1288 56.1639L46.2731 59.5014L50.5667 59.4666L38.277 50.4797C34.8526 51.2793 31.4282 50.9664 28.1776 49.8366C27.4475 57.5545 27.152 64.7336 26.9608 70.47C26.8913 72.3299 27.4301 74.468 28.2645 76.1194C29.1163 77.7707 30.2983 78.7963 30.8719 78.918C31.7759 79.1266 34.1747 79.4743 37.4253 79.8045L39.5807 73.0252L42.9009 80.2739C45.8038 80.4825 48.9848 80.6215 52.2007 80.6563C57.1026 80.7084 62.1262 80.4998 66.4546 79.8393C69.201 79.4395 71.5999 78.7963 73.5294 78.0315C71.4782 77.145 69.7747 76.1889 68.471 75.1459C66.5415 73.5989 65.3073 71.791 65.4637 69.7746V69.8094C66.4024 53.0524 67.3411 36.9907 70.7307 20.0946L70.7481 20.025L70.7655 19.9555C71.6868 16.844 73.877 13.0267 77.0407 10.2507C74.6245 9.89258 72.0692 9.55536 69.4444 9.2668L65.568 13.6647L65.1856 8.84961C61.8829 8.56454 58.5106 8.37854 55.2079 8.34204H54.2171V8.33508ZM80.0305 11.8881C79.2135 12.5296 78.4313 13.284 77.7186 14.101C79.8219 15.5229 81.4385 18.1651 81.5081 20.5291C81.5602 21.885 81.1778 23.1192 80.1696 24.2491C79.1614 25.3616 77.4579 26.4045 74.6766 26.9955L75.3372 30.0549C78.5704 29.3596 80.9518 28.0559 82.4989 26.335C84.0634 24.6141 84.7065 22.476 84.637 20.4248C84.5327 17.0699 82.7075 13.8906 80.0305 11.8881ZM4.42226 12.5C4.38054 12.7799 4.3562 13.0962 4.3562 13.4769C4.37358 14.8137 4.70907 16.6354 5.36962 18.7213C5.96237 20.5813 6.80718 22.6324 7.86405 24.7705C9.71185 23.8492 11.4432 22.8584 12.8025 21.6242C12.0342 23.7971 11.0382 25.9178 9.56931 27.969C10.289 29.2205 11.0694 30.4721 11.9073 31.7063C13.7568 30.785 15.509 29.4465 17.0387 27.1694C16.4651 29.9506 15.5664 32.4885 13.8629 34.4354C14.998 35.9129 16.2095 37.3557 17.4698 38.6942C18.9821 37.0776 20.1815 35.0438 21.068 32.6276C21.7286 35.8434 21.52 38.7637 20.0772 41.2147C21.4678 42.4662 22.9106 43.5961 24.3882 44.5348C25.4485 42.1012 25.9352 39.2157 25.8657 35.8955C27.4649 40.0153 27.83 43.3528 27.5344 46.2383C31.0458 47.8375 34.6266 48.3242 38.1901 47.2987L38.9202 47.0727L50.9665 55.8684L49.9409 51.9051C37.2514 39.2504 19.4514 24.6662 4.42226 12.5ZM54.3735 21.5373L60.1446 23.9362L65.5854 22.2153L66.5241 25.2051L60.0055 27.2737L54.1649 24.8401L49.1587 26.2481L48.3243 23.2235L54.3735 21.5373ZM73.0253 62.5955C72.9036 62.5955 72.7993 62.6129 72.6776 62.6129C72.0692 62.6303 71.426 62.6998 70.7481 62.8389L71.3391 65.8983C73.4598 65.4985 74.8157 65.8287 75.5979 66.3328C76.3628 66.8369 76.693 67.5149 76.7104 68.5057C76.7278 70.1223 75.4936 72.5037 72.6602 74.1551C73.5989 74.6592 74.7288 75.1807 76.0151 75.6674C78.5182 73.651 79.8567 71.0088 79.8393 68.4709C79.8219 66.611 78.9354 64.7858 77.3014 63.708C76.1368 62.9606 74.694 62.5782 73.0253 62.5955Z"
                fill="#3A1F54"
              />
            </svg>
            Our Story
          </h1>
          <article class="content-story_text">
            The overriding goal of
            <span class="org"
              >Africa higher education research institute (AHERI)</span
            >
            is to take stock of emerging issues in higher education in Africa with a view to addressing them through innovative approaches, collaborative practice, and action research. This is achieved through experienced practitioners (academics), early career researchers, relevant governmental and non-governmental agencies, and the industry working closely to identify, characterize, and remedy challenges and trends that undermine the potential of higher education in Africa.<br />
          </article>
          <div class="content-line_deco"></div>
        </div>
      </section>
      <section class="content-secondary">
        <div class="content-spot_found">
          <p>
            <span>2012</span><br />
            Aheri was Founded
          </p>
        </div>
        <div class="content-spot_conf">
          <i class="bi bi-people"></i>
          <p>
            <span>4</span><br />
            High-level Conferences Held
          </p>
        </div>
        <div class="content-spot_ngo">
          <i class="bi bi-globe-europe-africa"></i>
          <p>
            <span>NGO</span><br />
            Non-Governmental Organization
          </p>
        </div>
        <div class="social">
          <a href="mailto:aheri@cisskisumu.org" title="Email">
            <i class="bi bi-envelope"></i>
          </a>
          <a href="tel:+254704382897" title="Call us">
            <i class="bi bi-telephone"></i>
          </a>
          <a href="#contact" title="Address">
            <i class="bi bi-geo-alt"></i>
          </a>
        </div>
      </section>
      <section class="content-tertiary">
        <div class="content-green_deco2"></div>
        <div class="content-who row">
          <div class="content-who_container col-md-6">
            <h1 class="content-who_header">What we do</h1>
            <p class="content-who_text">
              <ol type="I">
                <li>Convene workshops, seminars, and conferences on African higher education</li>
                <li>Conduct action research on higher education issues</li>
                <li>Provide consultancy services (see focus areas below)</li>
                <li>Train fellows on Research Methodology and Grant Writing</li>
                <li>Publish a biennial peer reviewed issue of AHERI Journal</li>
              </ol>
            </p>
            <span class="subs"><b>Focus Areas</b></span>
            <ul>
              <li>
                Funding and resource management in Higher Education (HE)
              </li>
              <li>
                Access and equity issues in HE
              </li>
              <li>
                Quality and relevance in HE
              </li>
              <li>
                Research activities in HE
              </li>
              <li>
                Access to technology
              </li>
              <li>
                Opportunities for collaboration and partnership
              </li>
              <li>
                Curriculum formulation and implementation in HE
              </li>
              <li>Program specialization, orientation, and differentiation</li>
              <li>Entrenching African epistemologies in African universities</li>
              <li>Governance systems in HE</li>
              <li>The theory-practice divide</li>
              <li>Skills-competencies match/mismatch</li>
              <li>Transition from school to work</li>
              <li>Regionalization and internationalization</li>
              <li>Sector reforms in HE</li>
            </ul>
            <span><b>Objectives</b></span
            ><br />
            <span
              >AHERI set up the below objectives to achieve its mission in
              solving problems identified in Higher Education:</span
            >
            <ol>
              <li>
                Support local solutions to higher education challenges through action research
              </li>
              <li>Build research capacity of targeted fellows and their institutions through seminars, workshops, and conferences</li>
              <li>
                Organize and coordinate intersectoral engagement involving industry, governmental and non-governmental agencies and the academia.
              </li>
              <li>Deepen knowledge on various aspects of higher education in Africa</li>
              <li>
                Inform policy formulation, planning, implementation, and monitoring in the context of higher education in Africa.
              </li>
              <li>Provide an institutional forum for debating, disseminating, and communicating research findings on emerging issues in higher education.</li>
              <li>Entrench and intensify multidisciplinary research initiatives</li>
              <li>Provide training and support services to early career researchers</li>
              <li>Publish a biennial peer reviewed issue of AHERI Journal</li>
            </ol>
            <span><b>At station support services</b></span>
            <ol>
              <li>English language editing and proofreading</li>
              <li>Academic writing</li>
            </ol>
          </div>
          <div class="content-who_img col-md-12 col-lg-4 ">
            <img
              class="img-fluid"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/home/who.png"
              title="who we are"
              alt="who we are"
            />
          </div>
        </div>
      </section>
      <section class="vid-container row">
        <div class="col-md-9">
          <div class="col-lg-12 vid-wrapper">
            <video
              id="aheriVid"
              src="<?php echo get_template_directory_uri(); ?>/assets/videos/Our-Impact.mp4"
              preload="auto"
              poster="<?php echo get_template_directory_uri(); ?>/assets/images/home/aheri-poster.jpg"
              loop
            ></video>
            <div id="vidOverlay" class="vid-wrapper_overlay">
              <div
                id="player"
                class="vid-wrapper_overlay-circle"
                title="Play"
                onclick="toggleVideo()"
              >
                <i id="playBtn"><i class="bi bi-play-fill"></i></i>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="vid-description">
              <i class="bi bi-plus-lg"></i>
              <p class="vid-description_header">
                AHERI in the community, watch our journey.
              </p>
              <p class="vid-description_text">
                Our vision is to support sustainable and transformational
                development in Africa through higher education.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 event-container d-none d-lg-block" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/home/event-banner.jpg)">
          <div class="event-overlay">
            <p class="event-text">
              We advocate for the implementation of the research findings
              through influencing decision making within the higher education
              sector towards general development in African States.
            </p>
            <a href="<?php echo get_post_type_archive_link('malika_event'); ?>" class="event-button">View Events</a>
          </div>
        </div>
      </section>
      <section class="sponsors-container">
        <h2 class="sponsors-header">Sponsors</h2>
        <div class="sponsors-logos row">
          <img
            class="img-fluid col-md-4 col-lg-4"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/BIF.png"
            alt="Basic Internet Foundation"
            title="Basic Internet Foundation"
          />
          <img
            class="img-fluid col-md-4 col-lg-4"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/CISS.png"
            alt="CISS"
            title="CISS"
          />
          <img
            class="img-fluid col-md-4 col-lg-4"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/AHERI.png"
            alt="AHERI"
            title="AHERI"
          />
        </div>
      </section>
<?php
  get_footer();
?>
