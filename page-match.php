<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>

  <!-- =========== START NEW MATCH CONTENT ========= -->
  <div class="match-page-wrapper">
    <div class="main-page-wrapper">
      <div class="main-match-page-wrapper">
        <div class="container">
          <div class="banner">
            <div class="common-list-category">
              <a href="#" target="">
                <div class="category-item">
                  <span>Champions League</span>
                </div>
              </a>
              <div class="arrow">
                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_103_3181)">
                    <path d="M4.5 3.5L7.5 6.5L4.5 9.5" stroke="#4A5568" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_103_3181">
                      <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <a href="#" target="">
                <div class="category-item">
                  <span>Barcelona - Man United</span>
                </div>
              </a>
            </div>

            <div class="match-info-wrapper">
              <div class="club-wrapper">
                <span class="club-name">Barcelona</span>
                <img src="./images/mc-club.png" alt="" class="club-image">
              </div>
              <div class="result-detail">
                <span class="score">2</span>
                <p class="time-wrapper">
                  <span class="time txt-danger">56'</span>
                  <span class="sign">HT 2-1</span>
                </p>
                <span class="score">2</span>
              </div>
              <div class="club-wrapper">
                <img src="./images/chel-club.png" alt="" class="club-image">
                <span class="club-name">Man United</span>
              </div>
            </div>
          </div>
        </div>
        <!-- ========== START LIVE MATCH ============= -->
        <div class="play-match">
          <div class="container">
            <div class="player-wrapper player-box-background">
              <div class="box-player">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/VkGzajNpNwo"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="control-wrapper">
            <div class="container control-content">
              <div class="list-server">
                <button class="btn-server active">Server 1</button>
                <button class="btn-server">Server 2</button>
              </div>
              <ul class="list-contact">
                <li class="btn-refresh-wrapper">
                  <button class="btn-refresh">
                    <span class="icon-refresh">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M12.4082 4.23333C11.6832 4.01667 10.8832 3.875 9.9999 3.875C6.00824 3.875 2.7749 7.10833 2.7749 11.1C2.7749 15.1 6.00824 18.3333 9.9999 18.3333C13.9916 18.3333 17.2249 15.1 17.2249 11.1083C17.2249 9.625 16.7749 8.24167 16.0082 7.09167"
                          stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13.4418 4.43317L11.0334 1.6665" stroke="#1A202C" stroke-width="1.5"
                          stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13.4416 4.43311L10.6333 6.48311" stroke="#1A202C" stroke-width="1.5"
                          stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </span>
                    <span class="label">Refresh</span>
                  </button>
                </li>
                <li class="dash"></li>
                <li class="contact-item">
                  <a href="#">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M18.3334 9.99984C18.3334 5.39984 14.6001 1.6665 10.0001 1.6665C5.40008 1.6665 1.66675 5.39984 1.66675 9.99984C1.66675 14.0332 4.53341 17.3915 8.33341 18.1665V12.4998H6.66675V9.99984H8.33341V7.9165C8.33341 6.30817 9.64175 4.99984 11.2501 4.99984H13.3334V7.49984H11.6667C11.2084 7.49984 10.8334 7.87484 10.8334 8.33317V9.99984H13.3334V12.4998H10.8334V18.2915C15.0417 17.8748 18.3334 14.3248 18.3334 9.99984Z"
                        fill="#1A202C" />
                    </svg>
                  </a>
                  <span class="tooltiptext">facebook</span>
                </li>
                <li class="contact-item">
                  <a href="#">

                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M20 3.83317C19.25 4.1665 18.5 4.4165 17.6667 4.49984C18.5 3.99984 19.1667 3.1665 19.5 2.24984C18.6667 2.74984 17.8333 3.08317 16.9167 3.24984C16.1667 2.4165 15.0833 1.9165 13.9167 1.9165C11.6667 1.9165 9.83333 3.74984 9.83333 5.99984C9.83333 6.33317 9.83333 6.6665 9.91667 6.9165C6.41667 6.74984 3.41667 5.08317 1.41667 2.58317C1 3.24984 0.833333 3.9165 0.833333 4.6665C0.833333 6.08317 1.58333 7.33317 2.66667 8.08317C2 8.08317 1.33333 7.9165 0.833333 7.58317C0.833333 7.58317 0.833333 7.58317 0.833333 7.6665C0.833333 9.6665 2.25 11.3332 4.08333 11.6665C3.75 11.7498 3.41667 11.8332 3 11.8332C2.75 11.8332 2.5 11.8332 2.25 11.7498C2.75 13.4165 4.25 14.5832 6.08333 14.5832C4.66667 15.6665 2.91667 16.3332 1 16.3332C0.666667 16.3332 0.333333 16.3332 0 16.2498C1.83333 17.4165 4 18.0832 6.25 18.0832C13.8333 18.0832 17.9167 11.8332 17.9167 6.4165C17.9167 6.24984 17.9167 6.08317 17.9167 5.9165C18.75 5.33317 19.4167 4.58317 20 3.83317Z"
                        fill="#1A202C" />
                    </svg>

                  </a>
                  <span class="tooltiptext">twitter</span>
                </li>
                <li class="contact-item">
                  <a href="#">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_3779_36375)">
                        <path
                          d="M8.3335 10.8335C8.69137 11.3119 9.14796 11.7078 9.67229 11.9943C10.1966 12.2807 10.7764 12.4511 11.3724 12.4937C11.9683 12.5364 12.5665 12.4504 13.1263 12.2416C13.6861 12.0328 14.1944 11.706 14.6168 11.2835L17.1168 8.78347C17.8758 7.99762 18.2958 6.94512 18.2863 5.85263C18.2768 4.76014 17.8386 3.71509 17.0661 2.94256C16.2935 2.17002 15.2485 1.73182 14.156 1.72233C13.0635 1.71283 12.011 2.13281 11.2252 2.8918L9.79183 4.3168"
                          stroke="black" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M11.6668 9.16653C11.309 8.68809 10.8524 8.29221 10.328 8.00575C9.80371 7.71928 9.22391 7.54893 8.62796 7.50625C8.03201 7.46357 7.43384 7.54956 6.87405 7.75838C6.31425 7.9672 5.8059 8.29397 5.3835 8.71653L2.8835 11.2165C2.12451 12.0024 1.70453 13.0549 1.71402 14.1474C1.72352 15.2399 2.16172 16.2849 2.93426 17.0574C3.70679 17.83 4.75184 18.2682 5.84433 18.2777C6.93681 18.2872 7.98932 17.8672 8.77517 17.1082L10.2002 15.6832"
                          stroke="black" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                      </g>
                      <defs>
                        <clipPath id="clip0_3779_36375">
                          <rect width="20" height="20" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </a>
                  <span class="tooltiptext">Copy link</span>
                </li>
                <li class="contact-item">
                  <a href="#">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_146_4888)">
                        <path
                          d="M4.77242 4.40266C4.93036 4.5557 5.14166 4.64127 5.36159 4.64127C5.58151 4.64127 5.79281 4.5557 5.95075 4.40266C6.10698 4.24638 6.19474 4.03446 6.19474 3.81349C6.19474 3.59252 6.10698 3.3806 5.95075 3.22432L4.28409 1.55766C4.12692 1.40586 3.91642 1.32186 3.69792 1.32376C3.47942 1.32566 3.27041 1.4133 3.1159 1.56781C2.9614 1.72231 2.87376 1.93133 2.87186 2.14982C2.86996 2.36832 2.95395 2.57882 3.10575 2.73599L4.77242 4.40266Z"
                          fill="#1A202C" />
                        <path
                          d="M7.91659 3.75C8.1376 3.75 8.34956 3.6622 8.50584 3.50592C8.66212 3.34964 8.74992 3.13768 8.74992 2.91667V0.833333C8.74992 0.61232 8.66212 0.400358 8.50584 0.244078C8.34956 0.0877974 8.1376 0 7.91659 0C7.69557 0 7.48361 0.0877974 7.32733 0.244078C7.17105 0.400358 7.08325 0.61232 7.08325 0.833333V2.91667C7.08325 3.13768 7.17105 3.34964 7.32733 3.50592C7.48361 3.6622 7.69557 3.75 7.91659 3.75Z"
                          fill="#1A202C" />
                        <path
                          d="M2.42415 7.50016H4.50749C4.7285 7.50016 4.94046 7.41237 5.09674 7.25608C5.25302 7.0998 5.34082 6.88784 5.34082 6.66683C5.34082 6.44582 5.25302 6.23385 5.09674 6.07757C4.94046 5.92129 4.7285 5.8335 4.50749 5.8335H2.42415C2.20314 5.8335 1.99118 5.92129 1.8349 6.07757C1.67862 6.23385 1.59082 6.44582 1.59082 6.66683C1.59082 6.88784 1.67862 7.0998 1.8349 7.25608C1.99118 7.41237 2.20314 7.50016 2.42415 7.50016Z"
                          fill="#1A202C" />
                        <path
                          d="M8.93928 14.8907L6.10595 17.724C5.70814 18.1009 5.18101 18.3109 4.63303 18.3109C4.08505 18.3109 3.55792 18.1009 3.16011 17.724L2.27595 16.8407C1.88736 16.4488 1.66933 15.9192 1.66933 15.3673C1.66933 14.8154 1.88736 14.2859 2.27595 13.894L5.10928 11.0607C5.18887 10.9838 5.25236 10.8918 5.29603 10.7902C5.3397 10.6885 5.36269 10.5792 5.36365 10.4685C5.36462 10.3579 5.34353 10.2481 5.30163 10.1457C5.25973 10.0433 5.19785 9.95025 5.11961 9.87201C5.04136 9.79376 4.94832 9.73189 4.84591 9.68999C4.74349 9.64809 4.63376 9.627 4.52311 9.62796C4.41246 9.62892 4.30311 9.65191 4.20144 9.69559C4.09977 9.73926 4.00782 9.80275 3.93095 9.88234L1.09761 12.7157C0.396376 13.42 0.00268555 14.3734 0.00268555 15.3673C0.00268555 16.3612 0.396376 17.3147 1.09761 18.019L1.98178 18.9023C2.68598 19.6035 3.63927 19.9972 4.63303 19.9972C5.62679 19.9972 6.58008 19.6035 7.28428 18.9023L10.1176 16.069C10.1972 15.9921 10.2607 15.9002 10.3044 15.7985C10.348 15.6968 10.371 15.5875 10.372 15.4768C10.3729 15.3662 10.3519 15.2565 10.31 15.154C10.2681 15.0516 10.2062 14.9586 10.1279 14.8803C10.0497 14.8021 9.95665 14.7402 9.85424 14.6983C9.75183 14.6564 9.64209 14.6353 9.53144 14.6363C9.4208 14.6373 9.31145 14.6602 9.20977 14.7039C9.1081 14.7476 9.01615 14.8111 8.93928 14.8907Z"
                          fill="#1A202C" />
                        <path
                          d="M16.1475 5.8335H12.3975C12.1765 5.8335 11.9646 5.92129 11.8083 6.07757C11.652 6.23385 11.5642 6.44582 11.5642 6.66683C11.5642 6.88784 11.652 7.0998 11.8083 7.25608C11.9646 7.41237 12.1765 7.50016 12.3975 7.50016H16.1475C16.7156 7.51578 17.2568 7.7458 17.6623 8.14401C18.0677 8.54221 18.3075 9.07911 18.3334 9.64683V11.3135C18.3007 11.871 18.052 12.3938 17.6402 12.7709C17.2283 13.148 16.6857 13.3498 16.1275 13.3335H12.3975C12.1765 13.3335 11.9646 13.4213 11.8083 13.5776C11.652 13.7339 11.5642 13.9458 11.5642 14.1668C11.5642 14.3878 11.652 14.5998 11.8083 14.7561C11.9646 14.9124 12.1765 15.0002 12.3975 15.0002H16.1275C17.1295 15.0232 18.0997 14.6481 18.8256 13.9571C19.5515 13.266 19.9738 12.3154 20 11.3135V9.64683C19.9814 8.63454 19.5683 7.66951 18.8487 6.95726C18.1292 6.245 17.16 5.84179 16.1475 5.8335Z"
                          fill="#1A202C" />
                      </g>
                      <defs>
                        <clipPath id="clip0_146_4888">
                          <rect width="20" height="20" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </a>
                  <span class="tooltiptext">tooltip text</span>
                </li>
              </ul>
            </div>
          </div>

          <div class="player-waring-message">
            <p class="message">Your 10-minute trial period for today has expired.</p>
            <div id="timer"></div>
          </div>
        </div>

        <!-- BANNER  -->
        <div class="live-banner-wrapper">
          <div class="container">
            <div class="live-banner-content">
              <div class="left-content">
                <div class="price-info-wrapper">
                  <span class="label">For just</span>
                  <div class="price-wrapper">
                    <span class="price">$7.9</span>
                    <span class="month">/month</span>
                  </div>
                </div>
                <p class="description">
                  you'll get
                  <span class="highlight">12</span>
                  <span class="bold">month </span>of Full HD lives treaming
                </p>
              </div>
              <div class="right-content">
                <button class="btn-buy-now">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <!-- BANNER -->
        <!-- ========== END LIVE MATCH ============= -->

        <!-- ========== START MATCH PRICE ============= -->
        <div class="match-plan-wrapper">
          <div class="container">
            <div class="match-plan-content">
              <h3 class="match-page-title">Choose your plan</h3>
              <div class="list-match-plan">
                <div class="plan-item">
                  <div class="plan-item-content">
                    <h4 class="plan-title">1 Months</h4>
                    <div class="price-wrapper">
                      <div class="top-price">
                        <span class="prev-price">$10.99</span>
                        <span class="save-label">Save 5%</span>
                      </div>
                      <div class="primary-price">
                        <span class="sign">$</span>
                        <span class="price">4</span>
                        <span class="month">/mo</span>
                      </div>
                    </div>

                    <p class="plan-description">
                      Your plan renews automatically. You can <a href="#">
                        <strong>
                          <u> stop automatic renewal</u>
                        </strong>
                      </a> at any time.
                    </p>
                  </div>
                  <div class="plan-btn-block">
                    <button class="btn-select-plan">Upgrade</button>
                  </div>
                </div>

                <div class="plan-item">
                  <div class="plan-item-content">
                    <span class="recomend-label">SPECIAL DEAL</span>
                    <h4 class="plan-title">
                      12 <span class="highlight"> + 3 Months Free</span>
                    </h4>
                    <div class="price-wrapper">
                      <div class="top-price">
                        <span class="prev-price">$10.99</span>
                        <span class="save-label">Save 10%</span>
                      </div>
                      <div class="primary-price">
                        <span class="sign">$</span>
                        <span class="price">3.5</span>
                        <span class="month">/mo</span>
                      </div>
                    </div>

                    <p class="plan-description">
                      Your plan renews automatically. You can <a href="#">
                        <strong>
                          <u> stop automatic renewal</u>
                        </strong>
                      </a> at any time.
                    </p>
                  </div>
                  <div class="plan-btn-block">
                    <button class="btn-select-plan">Upgrade</button>
                  </div>
                </div>

                <div class="plan-item">
                  <div class="plan-item-content">
                    <h4 class="plan-title">6 Months</h4>
                    <div class="price-wrapper">

                      <div class="top-price">
                        <span class="prev-price">$10.99</span>
                        <span class="save-label">Save 15%</span>
                      </div>
                      <div class="primary-price">
                        <span class="sign">$</span>
                        <span class="price">3</span>
                        <span class="month">/mo</span>
                      </div>
                    </div>

                    <p class="plan-description">
                      Your plan renews automatically. You can <a href="#">
                        <strong>
                          <u> stop automatic renewal</u>
                        </strong>
                      </a> at any time.
                    </p>
                  </div>

                  <div class="plan-btn-block">
                    <button class="btn-select-plan">Upgrade</button>
                  </div>
                </div>

                <div class="plan-item">

                  <div class="plan-item-content">
                    <h4 class="plan-title">6 Months</h4>
                    <div class="price-wrapper">

                      <div class="top-price">
                        <span class="prev-price">$10.99</span>
                        <span class="save-label">Save 15%</span>
                      </div>
                      <div class="primary-price">
                        <span class="sign">$</span>
                        <span class="price">3</span>
                        <span class="month">/mo</span>
                      </div>
                    </div>

                    <p class="plan-description">
                      Your plan renews automatically. You can <a href="#">
                        <strong>
                          <u> stop automatic renewal</u>
                        </strong>
                      </a> at any time.
                    </p>
                  </div>

                  <div class="plan-btn-block">
                    <button class="btn-select-plan">Upgrade</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ========== START MATCH PRICE ============= -->

        <div class="container">
          <div class="main-layout">
            <div class="middle-layout main-content-match-page">
              <div id="match-tabs">
                <ul class="sub-nav">
                  <li class="match-tab-item"><a href="#tabs-0">Match</a></li>
                  <li class="match-tab-item"><a href="#tabs-1">Overview</a></li>
                  <li class="match-tab-item"><a href="#tabs-2">Lineups</a></li>
                  <li class="match-tab-item"><a href="#tabs-3">H2H</a></li>
                  <li class="match-tab-item"><a href="#tabs-4">Standings</a></li>
                  <li class="match-tab-item"><a href="#tabs-5">Statistics</a></li>
                </ul>

                <!-- ===========START Match TABS ============= -->
                <div id="tabs-0" class="match-tab-content">
                  <h3 class="match-page-title">Other match</h3>
                  <div class="other-match-table-wrapper">
                    <div class="common-home-league-table">
                      <div class="table-row">
                        <div class="left-column">
                          <div class="league-name">Premier League Premier League Premier League Premier League Premier
                            League Premier League</div>
                          <div class="time-wrapper">
                            <span class="match-hour">00:30</span>
                            <span class="match-date">02/03/2023</span>
                            <span class="match-sign">CH</span>
                          </div>
                        </div>
                        <div class="right-column">
                          <div class="list-club-wrapper">
                            <div class="column-50 club-1">
                              <div class="club-item">
                                <span class="club-name">Man City Man</span>
                                <img src="./images/club-1.png" alt="" class="club-image">
                              </div>
                              <span class="text-highlight">1</span>
                            </div>
                            <div class="dash text-highlight"> - </div>
                            <div class="column-50 club-2">
                              <span class="text-highlight">2</span>
                              <div class="club-item">
                                <img src="./images/club-2.png" alt="" class="club-image">
                                <span class="club-name">Man City Man Man </span>
                              </div>
                            </div>
                          </div>
                          <div class="match-control">
                            <button class="btn-view">View</button>
                          </div>
                        </div>
                      </div>
                      <div class="table-row">
<<<<<<< HEAD
                        <div class="left-column">
                          <div class="league-name">Premier League</div>
                          <span class="dot"></span>
                          <div class="time-wrapper">
                            <span class="match-hour">00:30</span>
                            <span class="match-date">02/03/2023</span>
                            <span class="match-sign">CH</span>
                          </div>
=======
                      <div class="left-column">
                        <div class="league-name">Premier League</div>
                        <div class="time-wrapper">
                          <span class="match-hour">00:30</span>
                          <span class="match-date">02/03/2023</span>
                          <span class="match-sign">CH</span>
>>>>>>> master
                        </div>
                        <div class="right-column">
                          <div class="list-club-wrapper">
                            <div class="column-50 club-1">
                              <div class="club-item">
                                <span class="club-name">Man City Man Man City Man</span>
                                <img src="./images/club-1.png" alt="" class="club-image">
                              </div>
                              <span class="text-highlight">1</span>
                            </div>
                            <div class="dash text-highlight"> - </div>
                            <div class="column-50 club-2">
                              <span class="text-highlight">2</span>
                              <div class="club-item">
                                <img src="./images/club-2.png" alt="" class="club-image">
                                <span class="club-name">Man City </span>
                              </div>
                            </div>
                          </div>
                          <div class="match-control">
                            <button class="btn-view">View</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="table-row">
                      <div class="left-column">
                        <div class="league-name">Premier League</div>
                        <div class="time-wrapper">
                          <span class="match-hour">00:30</span>
                          <span class="match-date">02/03/2023</span>
                          <span class="match-sign">CH</span>
                        </div>
                        <div class="right-column">
                          <div class="list-club-wrapper">
                            <div class="column-50 club-1">
                              <div class="club-item">
                                <span class="club-name">Man City</span>
                                <img src="./images/club-1.png" alt="" class="club-image">
                              </div>
                              <span class="text-highlight">1</span>
                            </div>
                            <div class="dash text-highlight"> - </div>
                            <div class="column-50 club-2">
                              <span class="text-highlight">2</span>
                              <div class="club-item">
                                <img src="./images/club-2.png" alt="" class="club-image">
                                <span class="club-name">Man City</span>
                              </div>
                            </div>
                          </div>
                          <div class="match-control">
                            <button class="btn-view">View</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h3 class="match-page-title">Upcoming matches</h3>
                  <div class="past-match-content-wrapper">
                    <div class="column-50 match-left">
                      <div class="header-block">
                        <div class="club-wrapper">
                          <div class="club-wrapper">
                            <img src="./images/chel-club.png" alt="" class="club-image">
                            <span class="club-name">Man United</span>
                          </div>
                        </div>
                      </div>

                      <div class="list-past-match-league">
                        <div class="past-match-league-item">
                          <div class="league-info-wrapper">
                            <img src="./images/league-6.png" class="league-image" />
                            <div class="league-info">
                              <span class="group-name">Europe</span>
                              <span class="league-name">UEFA Champions League, Group E</span>
                            </div>
                          </div>

                          <div class="list-timeline">
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-primary">Manchester City
                                    </span>
                                  </div>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-secondary">Chelsea</span>
                                  </div>
                                </div>
                              </div>
                              <div class="control-block">
                                <button class="btn-view">View</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="past-match-league-item">
                          <div class="league-info-wrapper">
                            <img src="./images/league-1.png" class="league-image" />
                            <div class="league-info">
                              <span class="group-name">England</span>
                              <span class="league-name">Premier League</span>
                            </div>
                          </div>

                          <div class="list-timeline">
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name macth-text-overflow-club txt-primary">Manchester City </span>
                                  </div>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-secondary">Chelsea</span>
                                  </div>
                                </div>
                              </div>
                              <div class="control-block">
                                <button class="btn-view">View</button>
                              </div>
                            </div>
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-primary">Manchester City
                                    </span>
                                  </div>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-secondary">Chelsea</span>
                                  </div>
                                </div>
                              </div>
                              <div class="control-block">
                                <button class="btn-view">View</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="middle">
                      <div class="dash"></div>
                    </div>
                    <div class="column-50 match-right">
                      <div class="header-block">
                        <div class="club-wrapper">
                          <div class="club-wrapper">
                            <img src="./images/mu-club.png" alt="" class="club-image">
                            <span class="club-name">Man United</span>
                          </div>
                        </div>
                      </div>

                      <div class="list-past-match-league">
                        <div class="past-match-league-item">
                          <div class="league-info-wrapper">
                            <img src="./images/league-6.png" class="league-image" />
                            <div class="league-info">
                              <span class="group-name">Europe</span>
                              <span class="league-name">UEFA Champions League, Group E</span>
                            </div>
                          </div>

                          <div class="list-timeline">
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-primary">Manchester City
                                    </span>
                                  </div>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name macth-text-overflow-club txt-secondary">Chelsea</span>
                                  </div>
                                </div>
                              </div>
                              <div class="control-block">
                                <button class="btn-view">View</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="past-match-league-item">
                          <div class="league-info-wrapper">
                            <img src="./images/league-1.png" class="league-image" />
                            <div class="league-info">
                              <span class="group-name">England</span>
                              <span class="league-name">Premier League</span>
                            </div>
                          </div>

                          <div class="list-timeline">
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name macth-text-overflow-club txt-primary">Manchester City </span>
                                  </div>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-secondary">Chelsea</span>
                                  </div>
                                </div>
                              </div>
                              <div class="control-block">
                                <button class="btn-view">View</button>
                              </div>
                            </div>
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-primary">Manchester City
                                    </span>
                                  </div>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-secondary">Chelsea</span>
                                  </div>
                                </div>
                              </div>
                              <div class="control-block">
                                <button class="btn-view">View</button>
                              </div>
                            </div>
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-primary">Manchester City
                                    </span>
                                  </div>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-secondary">Chelsea</span>
                                  </div>
                                </div>
                              </div>
                              <div class="control-block">
                                <button class="btn-view">View</button>
                              </div>
                            </div>
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-primary">Manchester City
                                      Manchester City Manchester City </span>
                                  </div>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name macth-text-overflow-club txt-secondary">Chelsea Manchester
                                      City Manchester City Manchester City Manchester City </span>
                                  </div>
                                </div>
                              </div>
                              <div class="control-block">
                                <button class="btn-view">View</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- ===========END Match TABS ============= -->


                <!-- ===========START Overview TABS ============= -->
                <div id="tabs-1" class="match-tab-content ">
                  <h3 class="match-page-title">Match Info</h3>
                  <div class="list-match-info">
                    <div class="match-info-item">
                      <img src="./images/icon-match-info-1.png" alt="">
                      <div class="info-detail">
                        <span class="label">Start date</span>
                        <span class="value">2022/11/07</span>
                      </div>
                    </div>
                    <div class="match-info-item">
                      <img src="./images/icon-match-info-2.png" alt="">
                      <div class="info-detail">
                        <span class="label">Location</span>
                        <span class="value">Leicester</span>
                      </div>
                    </div>


                    <div class="match-info-item">
                      <img src="./images/icon-match-info-3.png" alt="">
                      <div class="info-detail">
                        <span class="label">Venue</span>
                        <span class="value">King Power Stadium</span>
                      </div>
                    </div>

                    <div class="match-info-item">
                      <img src="./images/icon-match-info-4.png" alt="">
                      <div class="info-detail">
                        <span class="label">Referee</span>
                        <span class="value">Craig Pawson, England</span>
                      </div>
                    </div>


                  </div>
                  <h3 class="match-page-title">Match Details</h3>
                  <div class="match-result-detail-wrapper">
                    <div class="row-club">
                      <div class="column-50 d-flex flex-start">
                        <div class="club-wrapper club-1">
                          <img src="./images/chel-club.png" alt="" class="club-image">
                          <span class="club-name">Man United</span>
                        </div>
                      </div>
                      <div class="column-50 d-flex flex-end">
                        <div class="club-wrapper club-2">
                          <img src="./images/mu-club.png" alt="" class="club-image">
                          <span class="club-name">Barcelona</span>
                        </div>
                      </div>
                    </div>

                    <div class="row-heading">FT 3 - 1</div>
                    <div class="timeline-detail-wrapper">
                      <span class="title">Additional time 4'</span>
                      <div class="list-timeline">
                        <div class="timeline-item">
                          <div class="timeline-box left-timeline">
                            <div class="list-player">
                              <div class="player-item">
                                <span class="icon">
                                  <svg id="arrow-green" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_80_638)">
                                      <path
                                        d="M7 0C5.61553 0 4.26216 0.410543 3.11101 1.17971C1.95987 1.94888 1.06266 3.04213 0.532846 4.32122C0.003033 5.6003 -0.13559 7.00776 0.134506 8.36563C0.404603 9.7235 1.07129 10.9708 2.05026 11.9497C3.02922 12.9287 4.2765 13.5954 5.63437 13.8655C6.99224 14.1356 8.3997 13.997 9.67879 13.4672C10.9579 12.9373 12.0511 12.0401 12.8203 10.889C13.5895 9.73785 14 8.38447 14 7C13.9978 5.14415 13.2597 3.36493 11.9474 2.05264C10.6351 0.740353 8.85586 0.00216138 7 0V0ZM11.1609 7.36808L10.409 8.12C10.3543 8.17468 10.2801 8.2054 10.2028 8.2054C10.1255 8.2054 10.0513 8.17468 9.99659 8.12L8.12175 6.24575C8.10133 6.2255 8.07537 6.21175 8.04715 6.20621C8.01892 6.20068 7.98969 6.20361 7.96313 6.21465C7.93657 6.22568 7.91387 6.24433 7.89788 6.26823C7.88188 6.29214 7.87332 6.32024 7.87325 6.349V10.6616C7.87325 10.7389 7.84253 10.8131 7.78783 10.8678C7.73313 10.9225 7.65894 10.9532 7.58159 10.9532H6.41667C6.33932 10.9532 6.26513 10.9225 6.21043 10.8678C6.15573 10.8131 6.125 10.7389 6.125 10.6616V6.34958C6.1251 6.32075 6.11662 6.29253 6.10063 6.26854C6.08464 6.24454 6.06187 6.22584 6.03522 6.21483C6.00857 6.20382 5.97924 6.20099 5.95097 6.20671C5.92271 6.21242 5.89679 6.22642 5.8765 6.24692L4.004 8.12C3.94931 8.17468 3.87513 8.2054 3.7978 8.2054C3.72046 8.2054 3.64628 8.17468 3.59159 8.12L2.83909 7.3675C2.78441 7.3128 2.75369 7.23863 2.75369 7.16129C2.75369 7.08395 2.78441 7.00978 2.83909 6.95508L6.79409 3.00125C6.84878 2.94657 6.92296 2.91585 7.0003 2.91585C7.07763 2.91585 7.15181 2.94657 7.2065 3.00125L11.1609 6.95508C11.1881 6.98218 11.2096 7.01436 11.2243 7.0498C11.239 7.08523 11.2466 7.12322 11.2466 7.16158C11.2466 7.19995 11.239 7.23793 11.2243 7.27337C11.2096 7.3088 11.1881 7.34099 11.1609 7.36808Z"
                                        fill="#0DC66D" />
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_80_638">
                                        <rect width="14" height="14" fill="white" />
                                      </clipPath>
                                    </defs>
                                  </svg>
                                </span>
                                <span class="player-name">C. Riad</span>
                              </div>

                              <div class="player-item">
                                <span class="icon">

                                  <svg id="arrow-red" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_80_645)">
                                      <path
                                        d="M7 14C8.38447 14 9.73784 13.5895 10.889 12.8203C12.0401 12.0511 12.9373 10.9579 13.4672 9.67878C13.997 8.3997 14.1356 6.99224 13.8655 5.63437C13.5954 4.2765 12.9287 3.02922 11.9497 2.05025C10.9708 1.07128 9.7235 0.4046 8.36563 0.134504C7.00776 -0.135593 5.6003 0.00303004 4.32121 0.532844C3.04213 1.06266 1.94888 1.95986 1.17971 3.11101C0.41054 4.26215 -4.03538e-06 5.61553 -4.15641e-06 7C0.00215766 8.85585 0.740349 10.6351 2.05264 11.9474C3.36492 13.2596 5.14414 13.9978 7 14V14ZM2.83908 6.63192L3.591 5.88C3.64569 5.82532 3.71987 5.7946 3.79721 5.7946C3.87454 5.7946 3.94872 5.82532 4.00341 5.88L5.87825 7.75425C5.89867 7.7745 5.92463 7.78825 5.95285 7.79379C5.98108 7.79932 6.01031 7.79639 6.03687 7.78535C6.06343 7.77432 6.08613 7.75567 6.10213 7.73177C6.11812 7.70786 6.12668 7.67976 6.12675 7.651L6.12675 3.33842C6.12675 3.26106 6.15748 3.18687 6.21217 3.13218C6.26687 3.07748 6.34106 3.04675 6.41841 3.04675L7.58333 3.04675C7.66069 3.04675 7.73487 3.07748 7.78957 3.13218C7.84427 3.18687 7.875 3.26106 7.875 3.33842L7.875 7.65042C7.8749 7.67925 7.88338 7.70747 7.89937 7.73146C7.91536 7.75546 7.93813 7.77416 7.96478 7.78517C7.99144 7.79618 8.02076 7.79901 8.04903 7.79329C8.07729 7.78758 8.10321 7.77358 8.1235 7.75308L9.996 5.88C10.0507 5.82532 10.1249 5.7946 10.2022 5.7946C10.2795 5.7946 10.3537 5.82532 10.4084 5.88L11.1609 6.6325C11.2156 6.6872 11.2463 6.76137 11.2463 6.83871C11.2463 6.91605 11.2156 6.99022 11.1609 7.04492L7.20591 10.9987C7.15122 11.0534 7.07704 11.0841 6.99971 11.0841C6.92237 11.0841 6.84819 11.0534 6.7935 10.9987L2.83908 7.04492C2.81192 7.01782 2.79037 6.98564 2.77566 6.9502C2.76096 6.91477 2.75339 6.87678 2.75339 6.83842C2.75339 6.80005 2.76096 6.76206 2.77566 6.72663C2.79037 6.69119 2.81192 6.65901 2.83908 6.63192Z"
                                        fill="#E53E3E" />
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_80_645">
                                        <rect width="14" height="14" fill="white"
                                          transform="translate(14 14) rotate(-180)" />
                                      </clipPath>
                                    </defs>
                                  </svg>

                                </span>
                                <span class="player-name">Pedri</span>
                              </div>
                            </div>
                          </div>
                          <div class="time-wrapper">
                            <span class="time">56'</span>
                          </div>
                          <div class="timeline-box right-timeline"></div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-box left-timeline"></div>
                          <div class="time-wrapper">
                            <span class="time">23'</span>
                          </div>
                          <div class="timeline-box right-timeline">
                            <div class="list-player">
                              <div class="player-item">
                                <span class="icon">

                                  <svg id="icon-soccer" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M5.6665 7.4165L6.83317 9.74984H9.1665L10.3332 7.4165L7.99984 5.6665L5.6665 7.4165Z"
                                      fill="#3AC5C9" />
                                    <path
                                      d="M8 1C6.61553 1 5.26216 1.41054 4.11101 2.17971C2.95987 2.94888 2.06266 4.04213 1.53285 5.32122C1.00303 6.6003 0.86441 8.00776 1.13451 9.36563C1.4046 10.7235 2.07129 11.9708 3.05026 12.9497C4.02922 13.9287 5.2765 14.5954 6.63437 14.8655C7.99224 15.1356 9.3997 14.997 10.6788 14.4672C11.9579 13.9373 13.0511 13.0401 13.8203 11.889C14.5895 10.7378 15 9.38447 15 8C14.998 6.1441 14.2599 4.36479 12.9475 3.05247C11.6352 1.74015 9.8559 1.00201 8 1V1ZM12.7063 11.4317L10.4687 11.3979L9.80834 13.5417C8.63381 13.9285 7.3662 13.9285 6.19167 13.5417L5.53134 11.3979L3.29367 11.4317C2.5619 10.4372 2.16704 9.23479 2.16667 8V7.99592L4.00534 6.70208L3.28142 4.584C4.00612 3.58303 5.02888 2.83694 6.20334 2.4525L8 3.8L9.79667 2.4525C10.9711 2.83694 11.9939 3.58303 12.7186 4.584L11.9947 6.70208L13.8333 7.99592V8C13.833 9.23479 13.4381 10.4372 12.7063 11.4317Z"
                                      fill="#3AC5C9" />
                                  </svg>

                                </span>
                                <span class="player-name">F. de Jong</span>
                              </div>

                              <div class="player-item">
                                <span class="icon">
                                  <svg id="icon-run-shoe" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="16" y="16" width="16" height="16" transform="rotate(-180 16 16)"
                                      fill="white" />
                                    <path
                                      d="M9.83701 3.92479L11.3513 8.58329L13.5593 10.2166C13.7631 10.3449 13.9397 10.512 14.0789 10.7085C14.2181 10.905 14.3173 11.127 14.3707 11.3618C14.4241 11.5967 14.4307 11.8397 14.3902 12.0771C14.3497 12.3145 14.2627 12.5416 14.1344 12.7454L13.8089 13.2628C13.6358 13.5367 13.3612 13.7309 13.0453 13.8029C12.7293 13.8748 12.3977 13.8186 12.1231 13.6466L2.15393 7.12787C1.87982 6.95478 1.68551 6.68008 1.61356 6.36398C1.54161 6.04787 1.5979 5.71614 1.7701 5.44146L4.10343 1.73262C4.35135 1.33829 5.0251 1.31554 5.15343 1.76296C5.29189 2.2103 5.52267 2.62361 5.83084 2.9762C6.13901 3.32878 6.51773 3.61279 6.94251 3.80987C7.8663 4.17575 8.88712 4.21628 9.83701 3.92479Z"
                                      fill="#2C7A7B" />
                                    <path d="M8 12.6665H1V13.8332H8V12.6665Z" fill="#2C7A7B" />
                                    <path d="M3.91667 9.75H1V10.9167H3.91667V9.75Z" fill="#2C7A7B" />
                                  </svg>
                                </span>
                                <span class="player-name">Raphinha</span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-box left-timeline"></div>
                          <div class="time-wrapper">
                            <span class="time">23'</span>
                          </div>
                          <div class="timeline-box right-timeline">
                            <div class="list-player">
                              <div class="player-item">
                                <span class="icon">


                                  <svg id="icon-yellow-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#FAC712" />
                                  </svg>


                                </span>
                                <span class="player-name">F. de Jong</span>
                              </div>

                              <div class="player-item">
                                <span class="icon">

                                  <svg id="icon-red-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#E53E3E" />
                                  </svg>

                                </span>
                                <span class="player-name">Raphinha</span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-box left-timeline">
                            <div class="list-player">
                              <div class="player-item">
                                <span class="icon">
                                  <svg id="icon-green-pen" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="3" width="14" height="14" rx="7" fill="white" />
                                    <path
                                      d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z"
                                      fill="#0DC66D" />
                                    <path
                                      d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z"
                                      fill="#0DC66D" />
                                  </svg>

                                </span>
                                <span class="player-name">F. de Jong</span>
                              </div>
                              <div class="player-item">
                                <span class="icon">
                                  <svg id="icon-red-pen" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="3" width="14" height="14" rx="7" fill="white" />
                                    <path
                                      d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z"
                                      fill="#E53E3E" />
                                    <path
                                      d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z"
                                      fill="#E53E3E" />
                                  </svg>
                                </span>
                                <span class="player-name">Raphinha</span>
                              </div>
                            </div>
                          </div>
                          <div class="time-wrapper">
                            <span class="time">23'</span>
                          </div>
                          <div class="timeline-box right-timeline">

                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-box left-timeline">
                            <div class="list-player">
                              <div class="player-item">
                                <span class="icon">

                                  <svg id="icon-red-soccer" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M5.6665 7.4165L6.83317 9.74984H9.1665L10.3332 7.4165L7.99984 5.6665L5.6665 7.4165Z"
                                      fill="#E53E3E" />
                                    <path
                                      d="M8 1C6.61553 1 5.26216 1.41054 4.11101 2.17971C2.95987 2.94888 2.06266 4.04213 1.53285 5.32122C1.00303 6.6003 0.86441 8.00776 1.13451 9.36563C1.4046 10.7235 2.07129 11.9708 3.05026 12.9497C4.02922 13.9287 5.2765 14.5954 6.63437 14.8655C7.99224 15.1356 9.3997 14.997 10.6788 14.4672C11.9579 13.9373 13.0511 13.0401 13.8203 11.889C14.5895 10.7378 15 9.38447 15 8C14.998 6.1441 14.2599 4.36479 12.9475 3.05247C11.6352 1.74015 9.8559 1.00201 8 1V1ZM12.7063 11.4317L10.4687 11.3979L9.80834 13.5417C8.63381 13.9285 7.3662 13.9285 6.19167 13.5417L5.53134 11.3979L3.29367 11.4317C2.5619 10.4372 2.16704 9.23479 2.16667 8V7.99592L4.00534 6.70208L3.28142 4.584C4.00612 3.58303 5.02888 2.83694 6.20334 2.4525L8 3.8L9.79667 2.4525C10.9711 2.83694 11.9939 3.58303 12.7186 4.584L11.9947 6.70208L13.8333 7.99592V8C13.833 9.23479 13.4381 10.4372 12.7063 11.4317Z"
                                      fill="#E53E3E" />
                                  </svg>


                                </span>
                                <span class="player-name">F. de Jong</span>
                              </div>
                              <div class="player-item">
                                <span class="icon">

                                  <svg id="icon-second-yellow" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_164_3822)">
                                      <rect x="5.9917" width="10.017" height="12.5213" rx="1"
                                        transform="rotate(9.47935 5.9917 0)" fill="#E53E3E" />
                                      <rect x="0.518555" y="3.39746" width="10.2638" height="12.8297" rx="1"
                                        transform="rotate(-8.38283 0.518555 3.39746)" fill="#FAC712" />
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_164_3822">
                                        <rect width="16" height="16" fill="white" />
                                      </clipPath>
                                    </defs>
                                  </svg>

                                </span>
                                <span class="player-name">Raphinha</span>
                              </div>
                            </div>
                          </div>
                          <div class="time-wrapper">
                            <span class="time">23'</span>
                          </div>
                          <div class="timeline-box right-timeline">

                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row-heading">HT 0 - 1</div>
                    <div class="timeline-detail-wrapper">
                      <span class="title">Additional time 2'</span>
                      <div class="list-timeline">
                        <div class="timeline-item">
                          <div class="timeline-box left-timeline">
                            <div class="list-player">
                              <div class="player-item">
                                <span class="icon">
                                  <svg id="arrow-green" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_80_638)">
                                      <path
                                        d="M7 0C5.61553 0 4.26216 0.410543 3.11101 1.17971C1.95987 1.94888 1.06266 3.04213 0.532846 4.32122C0.003033 5.6003 -0.13559 7.00776 0.134506 8.36563C0.404603 9.7235 1.07129 10.9708 2.05026 11.9497C3.02922 12.9287 4.2765 13.5954 5.63437 13.8655C6.99224 14.1356 8.3997 13.997 9.67879 13.4672C10.9579 12.9373 12.0511 12.0401 12.8203 10.889C13.5895 9.73785 14 8.38447 14 7C13.9978 5.14415 13.2597 3.36493 11.9474 2.05264C10.6351 0.740353 8.85586 0.00216138 7 0V0ZM11.1609 7.36808L10.409 8.12C10.3543 8.17468 10.2801 8.2054 10.2028 8.2054C10.1255 8.2054 10.0513 8.17468 9.99659 8.12L8.12175 6.24575C8.10133 6.2255 8.07537 6.21175 8.04715 6.20621C8.01892 6.20068 7.98969 6.20361 7.96313 6.21465C7.93657 6.22568 7.91387 6.24433 7.89788 6.26823C7.88188 6.29214 7.87332 6.32024 7.87325 6.349V10.6616C7.87325 10.7389 7.84253 10.8131 7.78783 10.8678C7.73313 10.9225 7.65894 10.9532 7.58159 10.9532H6.41667C6.33932 10.9532 6.26513 10.9225 6.21043 10.8678C6.15573 10.8131 6.125 10.7389 6.125 10.6616V6.34958C6.1251 6.32075 6.11662 6.29253 6.10063 6.26854C6.08464 6.24454 6.06187 6.22584 6.03522 6.21483C6.00857 6.20382 5.97924 6.20099 5.95097 6.20671C5.92271 6.21242 5.89679 6.22642 5.8765 6.24692L4.004 8.12C3.94931 8.17468 3.87513 8.2054 3.7978 8.2054C3.72046 8.2054 3.64628 8.17468 3.59159 8.12L2.83909 7.3675C2.78441 7.3128 2.75369 7.23863 2.75369 7.16129C2.75369 7.08395 2.78441 7.00978 2.83909 6.95508L6.79409 3.00125C6.84878 2.94657 6.92296 2.91585 7.0003 2.91585C7.07763 2.91585 7.15181 2.94657 7.2065 3.00125L11.1609 6.95508C11.1881 6.98218 11.2096 7.01436 11.2243 7.0498C11.239 7.08523 11.2466 7.12322 11.2466 7.16158C11.2466 7.19995 11.239 7.23793 11.2243 7.27337C11.2096 7.3088 11.1881 7.34099 11.1609 7.36808Z"
                                        fill="#0DC66D" />
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_80_638">
                                        <rect width="14" height="14" fill="white" />
                                      </clipPath>
                                    </defs>
                                  </svg>
                                </span>
                                <span class="player-name">C. Riad</span>
                              </div>

                              <div class="player-item">
                                <span class="icon">

                                  <svg id="arrow-red" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_80_645)">
                                      <path
                                        d="M7 14C8.38447 14 9.73784 13.5895 10.889 12.8203C12.0401 12.0511 12.9373 10.9579 13.4672 9.67878C13.997 8.3997 14.1356 6.99224 13.8655 5.63437C13.5954 4.2765 12.9287 3.02922 11.9497 2.05025C10.9708 1.07128 9.7235 0.4046 8.36563 0.134504C7.00776 -0.135593 5.6003 0.00303004 4.32121 0.532844C3.04213 1.06266 1.94888 1.95986 1.17971 3.11101C0.41054 4.26215 -4.03538e-06 5.61553 -4.15641e-06 7C0.00215766 8.85585 0.740349 10.6351 2.05264 11.9474C3.36492 13.2596 5.14414 13.9978 7 14V14ZM2.83908 6.63192L3.591 5.88C3.64569 5.82532 3.71987 5.7946 3.79721 5.7946C3.87454 5.7946 3.94872 5.82532 4.00341 5.88L5.87825 7.75425C5.89867 7.7745 5.92463 7.78825 5.95285 7.79379C5.98108 7.79932 6.01031 7.79639 6.03687 7.78535C6.06343 7.77432 6.08613 7.75567 6.10213 7.73177C6.11812 7.70786 6.12668 7.67976 6.12675 7.651L6.12675 3.33842C6.12675 3.26106 6.15748 3.18687 6.21217 3.13218C6.26687 3.07748 6.34106 3.04675 6.41841 3.04675L7.58333 3.04675C7.66069 3.04675 7.73487 3.07748 7.78957 3.13218C7.84427 3.18687 7.875 3.26106 7.875 3.33842L7.875 7.65042C7.8749 7.67925 7.88338 7.70747 7.89937 7.73146C7.91536 7.75546 7.93813 7.77416 7.96478 7.78517C7.99144 7.79618 8.02076 7.79901 8.04903 7.79329C8.07729 7.78758 8.10321 7.77358 8.1235 7.75308L9.996 5.88C10.0507 5.82532 10.1249 5.7946 10.2022 5.7946C10.2795 5.7946 10.3537 5.82532 10.4084 5.88L11.1609 6.6325C11.2156 6.6872 11.2463 6.76137 11.2463 6.83871C11.2463 6.91605 11.2156 6.99022 11.1609 7.04492L7.20591 10.9987C7.15122 11.0534 7.07704 11.0841 6.99971 11.0841C6.92237 11.0841 6.84819 11.0534 6.7935 10.9987L2.83908 7.04492C2.81192 7.01782 2.79037 6.98564 2.77566 6.9502C2.76096 6.91477 2.75339 6.87678 2.75339 6.83842C2.75339 6.80005 2.76096 6.76206 2.77566 6.72663C2.79037 6.69119 2.81192 6.65901 2.83908 6.63192Z"
                                        fill="#E53E3E" />
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_80_645">
                                        <rect width="14" height="14" fill="white"
                                          transform="translate(14 14) rotate(-180)" />
                                      </clipPath>
                                    </defs>
                                  </svg>

                                </span>
                                <span class="player-name">Pedri</span>
                              </div>
                            </div>
                          </div>
                          <div class="time-wrapper">
                            <span class="time">56'</span>
                          </div>
                          <div class="timeline-box right-timeline"></div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-box left-timeline"></div>
                          <div class="time-wrapper">
                            <span class="time">23'</span>
                          </div>
                          <div class="timeline-box right-timeline">
                            <div class="list-player">
                              <div class="player-item">
                                <span class="icon">

                                  <svg id="icon-soccer" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M5.6665 7.4165L6.83317 9.74984H9.1665L10.3332 7.4165L7.99984 5.6665L5.6665 7.4165Z"
                                      fill="#3AC5C9" />
                                    <path
                                      d="M8 1C6.61553 1 5.26216 1.41054 4.11101 2.17971C2.95987 2.94888 2.06266 4.04213 1.53285 5.32122C1.00303 6.6003 0.86441 8.00776 1.13451 9.36563C1.4046 10.7235 2.07129 11.9708 3.05026 12.9497C4.02922 13.9287 5.2765 14.5954 6.63437 14.8655C7.99224 15.1356 9.3997 14.997 10.6788 14.4672C11.9579 13.9373 13.0511 13.0401 13.8203 11.889C14.5895 10.7378 15 9.38447 15 8C14.998 6.1441 14.2599 4.36479 12.9475 3.05247C11.6352 1.74015 9.8559 1.00201 8 1V1ZM12.7063 11.4317L10.4687 11.3979L9.80834 13.5417C8.63381 13.9285 7.3662 13.9285 6.19167 13.5417L5.53134 11.3979L3.29367 11.4317C2.5619 10.4372 2.16704 9.23479 2.16667 8V7.99592L4.00534 6.70208L3.28142 4.584C4.00612 3.58303 5.02888 2.83694 6.20334 2.4525L8 3.8L9.79667 2.4525C10.9711 2.83694 11.9939 3.58303 12.7186 4.584L11.9947 6.70208L13.8333 7.99592V8C13.833 9.23479 13.4381 10.4372 12.7063 11.4317Z"
                                      fill="#3AC5C9" />
                                  </svg>

                                </span>
                                <span class="player-name">F. de Jong</span>
                              </div>

                              <div class="player-item">
                                <span class="icon">
                                  <svg id="icon-run-shoe" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="16" y="16" width="16" height="16" transform="rotate(-180 16 16)"
                                      fill="white" />
                                    <path
                                      d="M9.83701 3.92479L11.3513 8.58329L13.5593 10.2166C13.7631 10.3449 13.9397 10.512 14.0789 10.7085C14.2181 10.905 14.3173 11.127 14.3707 11.3618C14.4241 11.5967 14.4307 11.8397 14.3902 12.0771C14.3497 12.3145 14.2627 12.5416 14.1344 12.7454L13.8089 13.2628C13.6358 13.5367 13.3612 13.7309 13.0453 13.8029C12.7293 13.8748 12.3977 13.8186 12.1231 13.6466L2.15393 7.12787C1.87982 6.95478 1.68551 6.68008 1.61356 6.36398C1.54161 6.04787 1.5979 5.71614 1.7701 5.44146L4.10343 1.73262C4.35135 1.33829 5.0251 1.31554 5.15343 1.76296C5.29189 2.2103 5.52267 2.62361 5.83084 2.9762C6.13901 3.32878 6.51773 3.61279 6.94251 3.80987C7.8663 4.17575 8.88712 4.21628 9.83701 3.92479Z"
                                      fill="#2C7A7B" />
                                    <path d="M8 12.6665H1V13.8332H8V12.6665Z" fill="#2C7A7B" />
                                    <path d="M3.91667 9.75H1V10.9167H3.91667V9.75Z" fill="#2C7A7B" />
                                  </svg>
                                </span>
                                <span class="player-name">Raphinha</span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-box left-timeline"></div>
                          <div class="time-wrapper">
                            <span class="time">23'</span>
                          </div>
                          <div class="timeline-box right-timeline">
                            <div class="list-player">
                              <div class="player-item">
                                <span class="icon">


                                  <svg id="icon-yellow-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#FAC712" />
                                  </svg>


                                </span>
                                <span class="player-name">F. de Jong</span>
                              </div>

                              <div class="player-item">
                                <span class="icon">

                                  <svg id="icon-red-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#E53E3E" />
                                  </svg>

                                </span>
                                <span class="player-name">Raphinha</span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-box left-timeline">
                            <div class="list-player">
                              <div class="player-item">
                                <span class="icon">
                                  <svg id="icon-green-pen" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="3" width="14" height="14" rx="7" fill="white" />
                                    <path
                                      d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z"
                                      fill="#0DC66D" />
                                    <path
                                      d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z"
                                      fill="#0DC66D" />
                                  </svg>

                                </span>
                                <span class="player-name">F. de Jong</span>
                              </div>
                              <div class="player-item">
                                <span class="icon">
                                  <svg id="icon-red-pen" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="3" width="14" height="14" rx="7" fill="white" />
                                    <path
                                      d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z"
                                      fill="#E53E3E" />
                                    <path
                                      d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z"
                                      fill="#E53E3E" />
                                  </svg>
                                </span>
                                <span class="player-name">Raphinha</span>
                              </div>
                            </div>
                          </div>
                          <div class="time-wrapper">
                            <span class="time">23'</span>
                          </div>
                          <div class="timeline-box right-timeline">

                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-box left-timeline">
                            <div class="list-player">
                              <div class="player-item">
                                <span class="icon">

                                  <svg id="icon-red-soccer" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M5.6665 7.4165L6.83317 9.74984H9.1665L10.3332 7.4165L7.99984 5.6665L5.6665 7.4165Z"
                                      fill="#E53E3E" />
                                    <path
                                      d="M8 1C6.61553 1 5.26216 1.41054 4.11101 2.17971C2.95987 2.94888 2.06266 4.04213 1.53285 5.32122C1.00303 6.6003 0.86441 8.00776 1.13451 9.36563C1.4046 10.7235 2.07129 11.9708 3.05026 12.9497C4.02922 13.9287 5.2765 14.5954 6.63437 14.8655C7.99224 15.1356 9.3997 14.997 10.6788 14.4672C11.9579 13.9373 13.0511 13.0401 13.8203 11.889C14.5895 10.7378 15 9.38447 15 8C14.998 6.1441 14.2599 4.36479 12.9475 3.05247C11.6352 1.74015 9.8559 1.00201 8 1V1ZM12.7063 11.4317L10.4687 11.3979L9.80834 13.5417C8.63381 13.9285 7.3662 13.9285 6.19167 13.5417L5.53134 11.3979L3.29367 11.4317C2.5619 10.4372 2.16704 9.23479 2.16667 8V7.99592L4.00534 6.70208L3.28142 4.584C4.00612 3.58303 5.02888 2.83694 6.20334 2.4525L8 3.8L9.79667 2.4525C10.9711 2.83694 11.9939 3.58303 12.7186 4.584L11.9947 6.70208L13.8333 7.99592V8C13.833 9.23479 13.4381 10.4372 12.7063 11.4317Z"
                                      fill="#E53E3E" />
                                  </svg>


                                </span>
                                <span class="player-name">F. de Jong</span>
                              </div>
                              <div class="player-item">
                                <span class="icon">

                                  <svg id="icon-second-yellow" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_164_3822)">
                                      <rect x="5.9917" width="10.017" height="12.5213" rx="1"
                                        transform="rotate(9.47935 5.9917 0)" fill="#E53E3E" />
                                      <rect x="0.518555" y="3.39746" width="10.2638" height="12.8297" rx="1"
                                        transform="rotate(-8.38283 0.518555 3.39746)" fill="#FAC712" />
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_164_3822">
                                        <rect width="16" height="16" fill="white" />
                                      </clipPath>
                                    </defs>
                                  </svg>

                                </span>
                                <span class="player-name">Raphinha</span>
                              </div>
                            </div>
                          </div>
                          <div class="time-wrapper">
                            <span class="time">23'</span>
                          </div>
                          <div class="timeline-box right-timeline">

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <h3 class="match-page-title">Past Matches</h3>
                  <div class="past-match-content-wrapper">
                    <div class="column-50 match-left">
                      <div class="header-block">
                        <div class="club-wrapper">
                          <div class="club-wrapper">
                            <img src="./images/chel-club.png" alt="" class="club-image">
                            <span class="club-name">Man United</span>
                          </div>
                        </div>
                      </div>

                      <div class="list-past-match-league">
                        <div class="past-match-league-item">
                          <div class="league-info-wrapper">
                            <img src="./images/league-6.png" class="league-image" />
                            <div class="league-info">
                              <span class="group-name">Europe</span>
                              <span class="league-name">UEFA Champions League, Group E</span>
                            </div>
                          </div>

                          <div class="list-timeline">
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name text-overflow-club txt-primary">Manchester City </span>
                                  </div>
                                  <span class="score txt-primary">1</span>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name text-overflow-club txt-secondary">Chelsea</span>
                                  </div>
                                  <span class="score txt-secondary">2</span>
                                </div>
                              </div>
                              <span class="icon-star">
                                <span class="league-sign league-sign-danger">L</span>
                              </span>
                            </div>
                          </div>
                        </div>

                        <div class="past-match-league-item">
                          <div class="league-info-wrapper">
                            <img src="./images/league-1.png" class="league-image" />
                            <div class="league-info">
                              <span class="group-name">England</span>
                              <span class="league-name">Premier League</span>
                            </div>
                          </div>

                          <div class="list-timeline">
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name text-overflow-club txt-primary">Manchester City </span>
                                  </div>
                                  <span class="score txt-primary">1</span>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name text-overflow-club txt-secondary">Chelsea</span>
                                  </div>
                                  <span class="score txt-secondary">2</span>
                                </div>
                              </div>
                              <span class="icon-star">
                                <span class="league-sign league-sign-default">D</span>
                              </span>
                            </div>
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name text-overflow-club txt-primary">Manchester City </span>
                                  </div>
                                  <span class="score txt-primary">1</span>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name text-overflow-club txt-secondary">Chelsea</span>
                                  </div>
                                  <span class="score txt-secondary">2</span>
                                </div>
                              </div>
                              <span class="icon-star">
                                <span class="league-sign league-sign-success">W</span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="middle">
                      <div class="dash"></div>
                    </div>
                    <div class="column-50 match-right">
                      <div class="header-block">
                        <div class="club-wrapper">
                          <div class="club-wrapper">
                            <img src="./images/mu-club.png" alt="" class="club-image">
                            <span class="club-name">Man United</span>
                          </div>
                        </div>
                      </div>

                      <div class="list-past-match-league">
                        <div class="past-match-league-item">
                          <div class="league-info-wrapper">
                            <img src="./images/league-6.png" class="league-image" />
                            <div class="league-info">
                              <span class="group-name">Europe</span>
                              <span class="league-name">UEFA Champions League, Group E</span>
                            </div>
                          </div>

                          <div class="list-timeline">
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name text-overflow-club txt-primary">Manchester City </span>
                                  </div>
                                  <span class="score txt-primary">1</span>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name text-overflow-club txt-secondary">Chelsea</span>
                                  </div>
                                  <span class="score txt-secondary">2</span>
                                </div>
                              </div>
                              <span class="icon-star">
                                <span class="league-sign league-sign-danger">L</span>
                              </span>
                            </div>
                          </div>
                        </div>

                        <div class="past-match-league-item">
                          <div class="league-info-wrapper">
                            <img src="./images/league-1.png" class="league-image" />
                            <div class="league-info">
                              <span class="group-name">England</span>
                              <span class="league-name">Premier League</span>
                            </div>
                          </div>

                          <div class="list-timeline">
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name text-overflow-club txt-primary">Manchester City </span>
                                  </div>
                                  <span class="score txt-primary">1</span>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name text-overflow-club txt-secondary">Chelsea</span>
                                  </div>
                                  <span class="score txt-secondary">2</span>
                                </div>
                              </div>
                              <span class="icon-star">
                                <span class="league-sign league-sign-default">D</span>
                              </span>
                            </div>
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name text-overflow-club txt-primary">Manchester City </span>
                                  </div>
                                  <span class="score txt-primary">1</span>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name text-overflow-club txt-secondary">Chelsea</span>
                                  </div>
                                  <span class="score txt-secondary">2</span>
                                </div>
                              </div>
                              <span class="icon-star">
                                <span class="league-sign league-sign-success">W</span>
                              </span>
                            </div>
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name text-overflow-club txt-primary">Manchester City </span>
                                  </div>
                                  <span class="score txt-primary">1</span>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name text-overflow-club txt-secondary">Chelsea</span>
                                  </div>
                                  <span class="score txt-secondary">2</span>
                                </div>
                              </div>
                              <span class="icon-star">
                                <span class="league-sign league-sign-success">W</span>
                              </span>
                            </div>
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name text-overflow-club txt-primary">Manchester City </span>
                                  </div>
                                  <span class="score txt-primary">1</span>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name text-overflow-club txt-secondary">Chelsea</span>
                                  </div>
                                  <span class="score txt-secondary">2</span>
                                </div>
                              </div>
                              <span class="icon-star">
                                <span class="league-sign league-sign-success">W</span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>


                </div>
                <!-- ===========END Overview TABS ============= -->


                 <!-- ===========START Lineups TABS ============= -->
              <div id="tabs-2" class="match-tab-content">
                <div class="visual-match-wrapper">
                  <div class="visual-club-wrapper">
                    <div class="visual-club visual-club-1">
                      <div class="visual-row visual-row-1">
                        <div class="player-wrapper">
                          <span class="number info">13</span>
                          <span class="player-name">Ederson</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="arrow-green" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_80_638)">
                                  <path
                                    d="M7 0C5.61553 0 4.26216 0.410543 3.11101 1.17971C1.95987 1.94888 1.06266 3.04213 0.532846 4.32122C0.003033 5.6003 -0.13559 7.00776 0.134506 8.36563C0.404603 9.7235 1.07129 10.9708 2.05026 11.9497C3.02922 12.9287 4.2765 13.5954 5.63437 13.8655C6.99224 14.1356 8.3997 13.997 9.67879 13.4672C10.9579 12.9373 12.0511 12.0401 12.8203 10.889C13.5895 9.73785 14 8.38447 14 7C13.9978 5.14415 13.2597 3.36493 11.9474 2.05264C10.6351 0.740353 8.85586 0.00216138 7 0V0ZM11.1609 7.36808L10.409 8.12C10.3543 8.17468 10.2801 8.2054 10.2028 8.2054C10.1255 8.2054 10.0513 8.17468 9.99659 8.12L8.12175 6.24575C8.10133 6.2255 8.07537 6.21175 8.04715 6.20621C8.01892 6.20068 7.98969 6.20361 7.96313 6.21465C7.93657 6.22568 7.91387 6.24433 7.89788 6.26823C7.88188 6.29214 7.87332 6.32024 7.87325 6.349V10.6616C7.87325 10.7389 7.84253 10.8131 7.78783 10.8678C7.73313 10.9225 7.65894 10.9532 7.58159 10.9532H6.41667C6.33932 10.9532 6.26513 10.9225 6.21043 10.8678C6.15573 10.8131 6.125 10.7389 6.125 10.6616V6.34958C6.1251 6.32075 6.11662 6.29253 6.10063 6.26854C6.08464 6.24454 6.06187 6.22584 6.03522 6.21483C6.00857 6.20382 5.97924 6.20099 5.95097 6.20671C5.92271 6.21242 5.89679 6.22642 5.8765 6.24692L4.004 8.12C3.94931 8.17468 3.87513 8.2054 3.7978 8.2054C3.72046 8.2054 3.64628 8.17468 3.59159 8.12L2.83909 7.3675C2.78441 7.3128 2.75369 7.23863 2.75369 7.16129C2.75369 7.08395 2.78441 7.00978 2.83909 6.95508L6.79409 3.00125C6.84878 2.94657 6.92296 2.91585 7.0003 2.91585C7.07763 2.91585 7.15181 2.94657 7.2065 3.00125L11.1609 6.95508C11.1881 6.98218 11.2096 7.01436 11.2243 7.0498C11.239 7.08523 11.2466 7.12322 11.2466 7.16158C11.2466 7.19995 11.239 7.23793 11.2243 7.27337C11.2096 7.3088 11.1881 7.34099 11.1609 7.36808Z"
                                    fill="#0DC66D" />
                                </g>
                                <defs>
                                  <clipPath id="clip0_80_638">
                                    <rect width="14" height="14" fill="white" />
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="visual-row visual-row-2">
                        <div class="player-wrapper">
                          <span class="number info">14</span>
                          <span class="player-name">Joao Cancelo</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-soccer" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M5.6665 7.4165L6.83317 9.74984H9.1665L10.3332 7.4165L7.99984 5.6665L5.6665 7.4165Z"
                                  fill="#3AC5C9" />
                                <path
                                  d="M8 1C6.61553 1 5.26216 1.41054 4.11101 2.17971C2.95987 2.94888 2.06266 4.04213 1.53285 5.32122C1.00303 6.6003 0.86441 8.00776 1.13451 9.36563C1.4046 10.7235 2.07129 11.9708 3.05026 12.9497C4.02922 13.9287 5.2765 14.5954 6.63437 14.8655C7.99224 15.1356 9.3997 14.997 10.6788 14.4672C11.9579 13.9373 13.0511 13.0401 13.8203 11.889C14.5895 10.7378 15 9.38447 15 8C14.998 6.1441 14.2599 4.36479 12.9475 3.05247C11.6352 1.74015 9.8559 1.00201 8 1V1ZM12.7063 11.4317L10.4687 11.3979L9.80834 13.5417C8.63381 13.9285 7.3662 13.9285 6.19167 13.5417L5.53134 11.3979L3.29367 11.4317C2.5619 10.4372 2.16704 9.23479 2.16667 8V7.99592L4.00534 6.70208L3.28142 4.584C4.00612 3.58303 5.02888 2.83694 6.20334 2.4525L8 3.8L9.79667 2.4525C10.9711 2.83694 11.9939 3.58303 12.7186 4.584L11.9947 6.70208L13.8333 7.99592V8C13.833 9.23479 13.4381 10.4372 12.7063 11.4317Z"
                                  fill="#3AC5C9" />
                              </svg>

                            </div>
                          </div>
                        </div>

                        <div class="player-wrapper">
                          <span class="number info">15</span>
                          <span class="player-name">Aymeric Laporte</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="arrow-red" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_80_645)">
                                  <path
                                    d="M7 14C8.38447 14 9.73784 13.5895 10.889 12.8203C12.0401 12.0511 12.9373 10.9579 13.4672 9.67878C13.997 8.3997 14.1356 6.99224 13.8655 5.63437C13.5954 4.2765 12.9287 3.02922 11.9497 2.05025C10.9708 1.07128 9.7235 0.4046 8.36563 0.134504C7.00776 -0.135593 5.6003 0.00303004 4.32121 0.532844C3.04213 1.06266 1.94888 1.95986 1.17971 3.11101C0.41054 4.26215 -4.03538e-06 5.61553 -4.15641e-06 7C0.00215766 8.85585 0.740349 10.6351 2.05264 11.9474C3.36492 13.2596 5.14414 13.9978 7 14V14ZM2.83908 6.63192L3.591 5.88C3.64569 5.82532 3.71987 5.7946 3.79721 5.7946C3.87454 5.7946 3.94872 5.82532 4.00341 5.88L5.87825 7.75425C5.89867 7.7745 5.92463 7.78825 5.95285 7.79379C5.98108 7.79932 6.01031 7.79639 6.03687 7.78535C6.06343 7.77432 6.08613 7.75567 6.10213 7.73177C6.11812 7.70786 6.12668 7.67976 6.12675 7.651L6.12675 3.33842C6.12675 3.26106 6.15748 3.18687 6.21217 3.13218C6.26687 3.07748 6.34106 3.04675 6.41841 3.04675L7.58333 3.04675C7.66069 3.04675 7.73487 3.07748 7.78957 3.13218C7.84427 3.18687 7.875 3.26106 7.875 3.33842L7.875 7.65042C7.8749 7.67925 7.88338 7.70747 7.89937 7.73146C7.91536 7.75546 7.93813 7.77416 7.96478 7.78517C7.99144 7.79618 8.02076 7.79901 8.04903 7.79329C8.07729 7.78758 8.10321 7.77358 8.1235 7.75308L9.996 5.88C10.0507 5.82532 10.1249 5.7946 10.2022 5.7946C10.2795 5.7946 10.3537 5.82532 10.4084 5.88L11.1609 6.6325C11.2156 6.6872 11.2463 6.76137 11.2463 6.83871C11.2463 6.91605 11.2156 6.99022 11.1609 7.04492L7.20591 10.9987C7.15122 11.0534 7.07704 11.0841 6.99971 11.0841C6.92237 11.0841 6.84819 11.0534 6.7935 10.9987L2.83908 7.04492C2.81192 7.01782 2.79037 6.98564 2.77566 6.9502C2.76096 6.91477 2.75339 6.87678 2.75339 6.83842C2.75339 6.80005 2.76096 6.76206 2.77566 6.72663C2.79037 6.69119 2.81192 6.65901 2.83908 6.63192Z"
                                    fill="#E53E3E" />
                                </g>
                                <defs>
                                  <clipPath id="clip0_80_645">
                                    <rect width="14" height="14" fill="white"
                                      transform="translate(14 14) rotate(-180)" />
                                  </clipPath>
                                </defs>
                              </svg>

                            </div>
                          </div>
                        </div>

                        <div class="player-wrapper">
                          <span class="number info">15</span>
                          <span class="player-name">Aymeric Laporte</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-run-shoe" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="16" y="16" width="16" height="16" transform="rotate(-180 16 16)"
                                  fill="white" />
                                <path
                                  d="M9.83701 3.92479L11.3513 8.58329L13.5593 10.2166C13.7631 10.3449 13.9397 10.512 14.0789 10.7085C14.2181 10.905 14.3173 11.127 14.3707 11.3618C14.4241 11.5967 14.4307 11.8397 14.3902 12.0771C14.3497 12.3145 14.2627 12.5416 14.1344 12.7454L13.8089 13.2628C13.6358 13.5367 13.3612 13.7309 13.0453 13.8029C12.7293 13.8748 12.3977 13.8186 12.1231 13.6466L2.15393 7.12787C1.87982 6.95478 1.68551 6.68008 1.61356 6.36398C1.54161 6.04787 1.5979 5.71614 1.7701 5.44146L4.10343 1.73262C4.35135 1.33829 5.0251 1.31554 5.15343 1.76296C5.29189 2.2103 5.52267 2.62361 5.83084 2.9762C6.13901 3.32878 6.51773 3.61279 6.94251 3.80987C7.8663 4.17575 8.88712 4.21628 9.83701 3.92479Z"
                                  fill="#2C7A7B" />
                                <path d="M8 12.6665H1V13.8332H8V12.6665Z" fill="#2C7A7B" />
                                <path d="M3.91667 9.75H1V10.9167H3.91667V9.75Z" fill="#2C7A7B" />
                              </svg>

                            </div>
                          </div>
                        </div>

                        <div class="player-wrapper">
                          <span class="number info">16</span>
                          <span class="player-name">Manuel Akanji</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-yellow-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#FAC712" />
                              </svg>

                            </div>
                          </div>
                        </div>

                        <div class="player-wrapper">
                          <span class="number info">17</span>
                          <span class="player-name">Joao Cancelo</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">

                              <svg id="icon-red-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#E53E3E" />
                              </svg>

                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="visual-row visual-row-3">
                        <div class="player-wrapper">
                          <span class="number info">18</span>
                          <span class="player-name">Manuel Akanji</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-yellow-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#FAC712" />
                              </svg>

                            </div>
                            <div class="card-item">

                              <svg id="icon-red-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#E53E3E" />
                              </svg>

                            </div>
                          </div>
                        </div>

                        <div class="player-wrapper">
                          <span class="number info">19</span>
                          <span class="player-name">Joao Cancelo</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">

                              <svg id="icon-green-pen" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="3" width="14" height="14" rx="7" fill="white" />
                                <path
                                  d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z"
                                  fill="#0DC66D" />
                                <path
                                  d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z"
                                  fill="#0DC66D" />
                              </svg>

                            </div>
                          </div>
                        </div>
                        <div class="player-wrapper">
                          <span class="number info">30</span>
                          <span class="player-name">Joao Cancelo</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">

                              <svg id="icon-red-pen" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="3" width="14" height="14" rx="7" fill="white" />
                                <path
                                  d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z"
                                  fill="#E53E3E" />
                                <path
                                  d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z"
                                  fill="#E53E3E" />
                              </svg>

                            </div>
                          </div>
                        </div>
                        <div class="player-wrapper">
                          <span class="number info">32</span>
                          <span class="player-name">Joao Cancelo</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-red-soccer" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M5.6665 7.4165L6.83317 9.74984H9.1665L10.3332 7.4165L7.99984 5.6665L5.6665 7.4165Z"
                                  fill="#E53E3E" />
                                <path
                                  d="M8 1C6.61553 1 5.26216 1.41054 4.11101 2.17971C2.95987 2.94888 2.06266 4.04213 1.53285 5.32122C1.00303 6.6003 0.86441 8.00776 1.13451 9.36563C1.4046 10.7235 2.07129 11.9708 3.05026 12.9497C4.02922 13.9287 5.2765 14.5954 6.63437 14.8655C7.99224 15.1356 9.3997 14.997 10.6788 14.4672C11.9579 13.9373 13.0511 13.0401 13.8203 11.889C14.5895 10.7378 15 9.38447 15 8C14.998 6.1441 14.2599 4.36479 12.9475 3.05247C11.6352 1.74015 9.8559 1.00201 8 1V1ZM12.7063 11.4317L10.4687 11.3979L9.80834 13.5417C8.63381 13.9285 7.3662 13.9285 6.19167 13.5417L5.53134 11.3979L3.29367 11.4317C2.5619 10.4372 2.16704 9.23479 2.16667 8V7.99592L4.00534 6.70208L3.28142 4.584C4.00612 3.58303 5.02888 2.83694 6.20334 2.4525L8 3.8L9.79667 2.4525C10.9711 2.83694 11.9939 3.58303 12.7186 4.584L11.9947 6.70208L13.8333 7.99592V8C13.833 9.23479 13.4381 10.4372 12.7063 11.4317Z"
                                  fill="#E53E3E" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="visual-row visual-row-4">
                        <div class="player-wrapper">
                          <span class="number info">20</span>
                          <span class="player-name">Manuel Akanji</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">

                              <svg id="icon-second-yellow" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_164_3822)">
                                  <rect x="5.9917" width="10.017" height="12.5213" rx="1"
                                    transform="rotate(9.47935 5.9917 0)" fill="#E53E3E" />
                                  <rect x="0.518555" y="3.39746" width="10.2638" height="12.8297" rx="1"
                                    transform="rotate(-8.38283 0.518555 3.39746)" fill="#FAC712" />
                                </g>
                                <defs>
                                  <clipPath id="clip0_164_3822">
                                    <rect width="16" height="16" fill="white" />
                                  </clipPath>
                                </defs>
                              </svg>

                            </div>
                          </div>
                        </div>

                        <div class="player-wrapper">
                          <span class="number info">21</span>
                          <span class="player-name">Joao Cancelo</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">

                              <svg id="icon-red-soccer" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M5.6665 7.4165L6.83317 9.74984H9.1665L10.3332 7.4165L7.99984 5.6665L5.6665 7.4165Z"
                                  fill="#E53E3E" />
                                <path
                                  d="M8 1C6.61553 1 5.26216 1.41054 4.11101 2.17971C2.95987 2.94888 2.06266 4.04213 1.53285 5.32122C1.00303 6.6003 0.86441 8.00776 1.13451 9.36563C1.4046 10.7235 2.07129 11.9708 3.05026 12.9497C4.02922 13.9287 5.2765 14.5954 6.63437 14.8655C7.99224 15.1356 9.3997 14.997 10.6788 14.4672C11.9579 13.9373 13.0511 13.0401 13.8203 11.889C14.5895 10.7378 15 9.38447 15 8C14.998 6.1441 14.2599 4.36479 12.9475 3.05247C11.6352 1.74015 9.8559 1.00201 8 1V1ZM12.7063 11.4317L10.4687 11.3979L9.80834 13.5417C8.63381 13.9285 7.3662 13.9285 6.19167 13.5417L5.53134 11.3979L3.29367 11.4317C2.5619 10.4372 2.16704 9.23479 2.16667 8V7.99592L4.00534 6.70208L3.28142 4.584C4.00612 3.58303 5.02888 2.83694 6.20334 2.4525L8 3.8L9.79667 2.4525C10.9711 2.83694 11.9939 3.58303 12.7186 4.584L11.9947 6.70208L13.8333 7.99592V8C13.833 9.23479 13.4381 10.4372 12.7063 11.4317Z"
                                  fill="#E53E3E" />
                              </svg>


                            </div>
                          </div>
                        </div>

                        <div class="player-wrapper">
                          <span class="number info">22</span>
                          <span class="player-name">Joao Cancelo</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-red-soccer" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M5.6665 7.4165L6.83317 9.74984H9.1665L10.3332 7.4165L7.99984 5.6665L5.6665 7.4165Z"
                                  fill="#E53E3E" />
                                <path
                                  d="M8 1C6.61553 1 5.26216 1.41054 4.11101 2.17971C2.95987 2.94888 2.06266 4.04213 1.53285 5.32122C1.00303 6.6003 0.86441 8.00776 1.13451 9.36563C1.4046 10.7235 2.07129 11.9708 3.05026 12.9497C4.02922 13.9287 5.2765 14.5954 6.63437 14.8655C7.99224 15.1356 9.3997 14.997 10.6788 14.4672C11.9579 13.9373 13.0511 13.0401 13.8203 11.889C14.5895 10.7378 15 9.38447 15 8C14.998 6.1441 14.2599 4.36479 12.9475 3.05247C11.6352 1.74015 9.8559 1.00201 8 1V1ZM12.7063 11.4317L10.4687 11.3979L9.80834 13.5417C8.63381 13.9285 7.3662 13.9285 6.19167 13.5417L5.53134 11.3979L3.29367 11.4317C2.5619 10.4372 2.16704 9.23479 2.16667 8V7.99592L4.00534 6.70208L3.28142 4.584C4.00612 3.58303 5.02888 2.83694 6.20334 2.4525L8 3.8L9.79667 2.4525C10.9711 2.83694 11.9939 3.58303 12.7186 4.584L11.9947 6.70208L13.8333 7.99592V8C13.833 9.23479 13.4381 10.4372 12.7063 11.4317Z"
                                  fill="#E53E3E" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="visual-row visual-row-5">
                        <div class="player-wrapper">
                          <span class="number info">20</span>
                          <span class="player-name">Manuel Akanji</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-run-shoe" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="16" y="16" width="16" height="16" transform="rotate(-180 16 16)"
                                  fill="white" />
                                <path
                                  d="M9.83701 3.92479L11.3513 8.58329L13.5593 10.2166C13.7631 10.3449 13.9397 10.512 14.0789 10.7085C14.2181 10.905 14.3173 11.127 14.3707 11.3618C14.4241 11.5967 14.4307 11.8397 14.3902 12.0771C14.3497 12.3145 14.2627 12.5416 14.1344 12.7454L13.8089 13.2628C13.6358 13.5367 13.3612 13.7309 13.0453 13.8029C12.7293 13.8748 12.3977 13.8186 12.1231 13.6466L2.15393 7.12787C1.87982 6.95478 1.68551 6.68008 1.61356 6.36398C1.54161 6.04787 1.5979 5.71614 1.7701 5.44146L4.10343 1.73262C4.35135 1.33829 5.0251 1.31554 5.15343 1.76296C5.29189 2.2103 5.52267 2.62361 5.83084 2.9762C6.13901 3.32878 6.51773 3.61279 6.94251 3.80987C7.8663 4.17575 8.88712 4.21628 9.83701 3.92479Z"
                                  fill="#2C7A7B" />
                                <path d="M8 12.6665H1V13.8332H8V12.6665Z" fill="#2C7A7B" />
                                <path d="M3.91667 9.75H1V10.9167H3.91667V9.75Z" fill="#2C7A7B" />
                              </svg>

                            </div>
                          </div>
                        </div>

                        <div class="player-wrapper">
                          <span class="number info">21</span>
                          <span class="player-name">Joao Cancelo</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-run-shoe" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="16" y="16" width="16" height="16" transform="rotate(-180 16 16)"
                                  fill="white" />
                                <path
                                  d="M9.83701 3.92479L11.3513 8.58329L13.5593 10.2166C13.7631 10.3449 13.9397 10.512 14.0789 10.7085C14.2181 10.905 14.3173 11.127 14.3707 11.3618C14.4241 11.5967 14.4307 11.8397 14.3902 12.0771C14.3497 12.3145 14.2627 12.5416 14.1344 12.7454L13.8089 13.2628C13.6358 13.5367 13.3612 13.7309 13.0453 13.8029C12.7293 13.8748 12.3977 13.8186 12.1231 13.6466L2.15393 7.12787C1.87982 6.95478 1.68551 6.68008 1.61356 6.36398C1.54161 6.04787 1.5979 5.71614 1.7701 5.44146L4.10343 1.73262C4.35135 1.33829 5.0251 1.31554 5.15343 1.76296C5.29189 2.2103 5.52267 2.62361 5.83084 2.9762C6.13901 3.32878 6.51773 3.61279 6.94251 3.80987C7.8663 4.17575 8.88712 4.21628 9.83701 3.92479Z"
                                  fill="#2C7A7B" />
                                <path d="M8 12.6665H1V13.8332H8V12.6665Z" fill="#2C7A7B" />
                                <path d="M3.91667 9.75H1V10.9167H3.91667V9.75Z" fill="#2C7A7B" />
                              </svg>

                            </div>
                          </div>
                        </div>

                        <div class="player-wrapper">
                          <span class="number info">22</span>
                          <span class="player-name">Joao Cancelo</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-soccer" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M5.6665 7.4165L6.83317 9.74984H9.1665L10.3332 7.4165L7.99984 5.6665L5.6665 7.4165Z"
                                  fill="#3AC5C9" />
                                <path
                                  d="M8 1C6.61553 1 5.26216 1.41054 4.11101 2.17971C2.95987 2.94888 2.06266 4.04213 1.53285 5.32122C1.00303 6.6003 0.86441 8.00776 1.13451 9.36563C1.4046 10.7235 2.07129 11.9708 3.05026 12.9497C4.02922 13.9287 5.2765 14.5954 6.63437 14.8655C7.99224 15.1356 9.3997 14.997 10.6788 14.4672C11.9579 13.9373 13.0511 13.0401 13.8203 11.889C14.5895 10.7378 15 9.38447 15 8C14.998 6.1441 14.2599 4.36479 12.9475 3.05247C11.6352 1.74015 9.8559 1.00201 8 1V1ZM12.7063 11.4317L10.4687 11.3979L9.80834 13.5417C8.63381 13.9285 7.3662 13.9285 6.19167 13.5417L5.53134 11.3979L3.29367 11.4317C2.5619 10.4372 2.16704 9.23479 2.16667 8V7.99592L4.00534 6.70208L3.28142 4.584C4.00612 3.58303 5.02888 2.83694 6.20334 2.4525L8 3.8L9.79667 2.4525C10.9711 2.83694 11.9939 3.58303 12.7186 4.584L11.9947 6.70208L13.8333 7.99592V8C13.833 9.23479 13.4381 10.4372 12.7063 11.4317Z"
                                  fill="#3AC5C9" />
                              </svg>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="club-info club-info-1">
                      <div class="info-wrapper">
                        <span class="club-name">Man United</span>
                        <span class="detail">First XI average age <strong>27.7 yrs</strong></span>
                      </div>
                      <span class="score info">4-3-3</span>
                    </div>
                  </div>
                  <div class="visual-club-wrapper">
                    <div class="visual-club visual-club-2">
                      <div class="visual-row visual-row-1">
                        <div class="player-wrapper">
                          <span class="number primary">23</span>
                          <span class="player-name">Ilkay Gundogan</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-soccer" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M5.6665 7.4165L6.83317 9.74984H9.1665L10.3332 7.4165L7.99984 5.6665L5.6665 7.4165Z"
                                  fill="#3AC5C9" />
                                <path
                                  d="M8 1C6.61553 1 5.26216 1.41054 4.11101 2.17971C2.95987 2.94888 2.06266 4.04213 1.53285 5.32122C1.00303 6.6003 0.86441 8.00776 1.13451 9.36563C1.4046 10.7235 2.07129 11.9708 3.05026 12.9497C4.02922 13.9287 5.2765 14.5954 6.63437 14.8655C7.99224 15.1356 9.3997 14.997 10.6788 14.4672C11.9579 13.9373 13.0511 13.0401 13.8203 11.889C14.5895 10.7378 15 9.38447 15 8C14.998 6.1441 14.2599 4.36479 12.9475 3.05247C11.6352 1.74015 9.8559 1.00201 8 1V1ZM12.7063 11.4317L10.4687 11.3979L9.80834 13.5417C8.63381 13.9285 7.3662 13.9285 6.19167 13.5417L5.53134 11.3979L3.29367 11.4317C2.5619 10.4372 2.16704 9.23479 2.16667 8V7.99592L4.00534 6.70208L3.28142 4.584C4.00612 3.58303 5.02888 2.83694 6.20334 2.4525L8 3.8L9.79667 2.4525C10.9711 2.83694 11.9939 3.58303 12.7186 4.584L11.9947 6.70208L13.8333 7.99592V8C13.833 9.23479 13.4381 10.4372 12.7063 11.4317Z"
                                  fill="#3AC5C9" />
                              </svg>

                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="visual-row visual-row-2">
                        <div class="player-wrapper">
                          <span class="number primary">25</span>
                          <span class="player-name">Joao Cancelo</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-soccer" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M5.6665 7.4165L6.83317 9.74984H9.1665L10.3332 7.4165L7.99984 5.6665L5.6665 7.4165Z"
                                  fill="#3AC5C9" />
                                <path
                                  d="M8 1C6.61553 1 5.26216 1.41054 4.11101 2.17971C2.95987 2.94888 2.06266 4.04213 1.53285 5.32122C1.00303 6.6003 0.86441 8.00776 1.13451 9.36563C1.4046 10.7235 2.07129 11.9708 3.05026 12.9497C4.02922 13.9287 5.2765 14.5954 6.63437 14.8655C7.99224 15.1356 9.3997 14.997 10.6788 14.4672C11.9579 13.9373 13.0511 13.0401 13.8203 11.889C14.5895 10.7378 15 9.38447 15 8C14.998 6.1441 14.2599 4.36479 12.9475 3.05247C11.6352 1.74015 9.8559 1.00201 8 1V1ZM12.7063 11.4317L10.4687 11.3979L9.80834 13.5417C8.63381 13.9285 7.3662 13.9285 6.19167 13.5417L5.53134 11.3979L3.29367 11.4317C2.5619 10.4372 2.16704 9.23479 2.16667 8V7.99592L4.00534 6.70208L3.28142 4.584C4.00612 3.58303 5.02888 2.83694 6.20334 2.4525L8 3.8L9.79667 2.4525C10.9711 2.83694 11.9939 3.58303 12.7186 4.584L11.9947 6.70208L13.8333 7.99592V8C13.833 9.23479 13.4381 10.4372 12.7063 11.4317Z"
                                  fill="#3AC5C9" />
                              </svg>

                            </div>
                          </div>
                        </div>

                        <div class="player-wrapper">
                          <span class="number primary">26</span>
                          <span class="player-name">Aymeric Laporte</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-run-shoe" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="16" y="16" width="16" height="16" transform="rotate(-180 16 16)"
                                  fill="white" />
                                <path
                                  d="M9.83701 3.92479L11.3513 8.58329L13.5593 10.2166C13.7631 10.3449 13.9397 10.512 14.0789 10.7085C14.2181 10.905 14.3173 11.127 14.3707 11.3618C14.4241 11.5967 14.4307 11.8397 14.3902 12.0771C14.3497 12.3145 14.2627 12.5416 14.1344 12.7454L13.8089 13.2628C13.6358 13.5367 13.3612 13.7309 13.0453 13.8029C12.7293 13.8748 12.3977 13.8186 12.1231 13.6466L2.15393 7.12787C1.87982 6.95478 1.68551 6.68008 1.61356 6.36398C1.54161 6.04787 1.5979 5.71614 1.7701 5.44146L4.10343 1.73262C4.35135 1.33829 5.0251 1.31554 5.15343 1.76296C5.29189 2.2103 5.52267 2.62361 5.83084 2.9762C6.13901 3.32878 6.51773 3.61279 6.94251 3.80987C7.8663 4.17575 8.88712 4.21628 9.83701 3.92479Z"
                                  fill="#2C7A7B" />
                                <path d="M8 12.6665H1V13.8332H8V12.6665Z" fill="#2C7A7B" />
                                <path d="M3.91667 9.75H1V10.9167H3.91667V9.75Z" fill="#2C7A7B" />
                              </svg>

                            </div>
                          </div>
                        </div>

                        <div class="player-wrapper">
                          <span class="number primary">27</span>
                          <span class="player-name">Manuel Akanji</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-run-shoe" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="16" y="16" width="16" height="16" transform="rotate(-180 16 16)"
                                  fill="white" />
                                <path
                                  d="M9.83701 3.92479L11.3513 8.58329L13.5593 10.2166C13.7631 10.3449 13.9397 10.512 14.0789 10.7085C14.2181 10.905 14.3173 11.127 14.3707 11.3618C14.4241 11.5967 14.4307 11.8397 14.3902 12.0771C14.3497 12.3145 14.2627 12.5416 14.1344 12.7454L13.8089 13.2628C13.6358 13.5367 13.3612 13.7309 13.0453 13.8029C12.7293 13.8748 12.3977 13.8186 12.1231 13.6466L2.15393 7.12787C1.87982 6.95478 1.68551 6.68008 1.61356 6.36398C1.54161 6.04787 1.5979 5.71614 1.7701 5.44146L4.10343 1.73262C4.35135 1.33829 5.0251 1.31554 5.15343 1.76296C5.29189 2.2103 5.52267 2.62361 5.83084 2.9762C6.13901 3.32878 6.51773 3.61279 6.94251 3.80987C7.8663 4.17575 8.88712 4.21628 9.83701 3.92479Z"
                                  fill="#2C7A7B" />
                                <path d="M8 12.6665H1V13.8332H8V12.6665Z" fill="#2C7A7B" />
                                <path d="M3.91667 9.75H1V10.9167H3.91667V9.75Z" fill="#2C7A7B" />
                              </svg>

                            </div>
                          </div>
                        </div>

                        <div class="player-wrapper">
                          <span class="number primary">28</span>
                          <span class="player-name">Joao Cancelo</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-run-shoe" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="16" y="16" width="16" height="16" transform="rotate(-180 16 16)"
                                  fill="white" />
                                <path
                                  d="M9.83701 3.92479L11.3513 8.58329L13.5593 10.2166C13.7631 10.3449 13.9397 10.512 14.0789 10.7085C14.2181 10.905 14.3173 11.127 14.3707 11.3618C14.4241 11.5967 14.4307 11.8397 14.3902 12.0771C14.3497 12.3145 14.2627 12.5416 14.1344 12.7454L13.8089 13.2628C13.6358 13.5367 13.3612 13.7309 13.0453 13.8029C12.7293 13.8748 12.3977 13.8186 12.1231 13.6466L2.15393 7.12787C1.87982 6.95478 1.68551 6.68008 1.61356 6.36398C1.54161 6.04787 1.5979 5.71614 1.7701 5.44146L4.10343 1.73262C4.35135 1.33829 5.0251 1.31554 5.15343 1.76296C5.29189 2.2103 5.52267 2.62361 5.83084 2.9762C6.13901 3.32878 6.51773 3.61279 6.94251 3.80987C7.8663 4.17575 8.88712 4.21628 9.83701 3.92479Z"
                                  fill="#2C7A7B" />
                                <path d="M8 12.6665H1V13.8332H8V12.6665Z" fill="#2C7A7B" />
                                <path d="M3.91667 9.75H1V10.9167H3.91667V9.75Z" fill="#2C7A7B" />
                              </svg>

                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="visual-row visual-row-3">
                        <div class="player-wrapper">
                          <span class="number primary">29</span>
                          <span class="player-name">Aymeric Laporte</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-yellow-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#FAC712" />
                              </svg>

                            </div>
                            <div class="card-item">

                              <svg id="icon-red-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#E53E3E" />
                              </svg>

                            </div>
                          </div>
                        </div>

                        <div class="player-wrapper">
                          <span class="number primary">30</span>
                          <span class="player-name">Manuel Akanji</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-yellow-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#FAC712" />
                              </svg>

                            </div>
                            <div class="card-item">

                              <svg id="icon-red-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#E53E3E" />
                              </svg>

                            </div>
                          </div>
                        </div>

                        <div class="player-wrapper">
                          <span class="number primary">31</span>
                          <span class="player-name">Joao Cancelo</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-yellow-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#FAC712" />
                              </svg>

                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="visual-row visual-row-4">
                        <div class="player-wrapper">
                          <span class="number primary">32</span>
                          <span class="player-name">Aymeric Laporte</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">

                              <svg id="icon-red-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#E53E3E" />
                              </svg>

                            </div>
                          </div>
                        </div>

                        <div class="player-wrapper">
                          <span class="number primary">33</span>
                          <span class="player-name">Ederson</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-yellow-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#FAC712" />
                              </svg>

                            </div>
                            <div class="card-item">

                              <svg id="icon-red-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#E53E3E" />
                              </svg>

                            </div>
                          </div>
                        </div>

                        <div class="player-wrapper">
                          <span class="number primary">34</span>
                          <span class="player-name">Kevin DeBruyne</span>
                          <span class="value">8.34</span>
                          <div class="list-card">
                            <div class="card-item">
                              <svg id="icon-yellow-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#FAC712" />
                              </svg>

                            </div>
                            <div class="card-item">

                              <svg id="icon-red-card" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.3999" y="1" width="11.2" height="14" rx="3" fill="#E53E3E" />
                              </svg>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="club-info club-info-2">
                      <div class="info-wrapper">
                        <span class="club-name">Barcelona</span>
                        <span class="detail">First XI average age <strong>27.7 yrs</strong></span>
                      </div>
                      <span class="score primary">4-3-3</span>
                    </div>
                  </div>
                </div>

                <div class="list-match-player">
                  <div class="list-player-wrapper">
                    <div class="top-list-player">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Man United</span>
                      </div>
                    </div>

                    <div class="list-player">
                      <div class="player-item">
                        <img src="./images/avatar-user.png" alt="" class="avatar-user">
                        <div class="user-info-wrapper">
                          <span class="username">Pep Guardiola Pep Guardiola Pep Guardiola Pep Guardiola Pep Guardiola
                            Pep Guardiola</span>
                          <div class="major">Manager</div>
                        </div>
                      </div>

                      <div class="player-item">
                        <img src="./images/avatar-user.png" alt="" class="avatar-user">
                        <div class="user-info-wrapper">
                          <span class="username">18 Stefan Ortega Pep Guardiola Pep Guardiola Pep Guardiola</span>
                        </div>
                      </div>

                      <div class="player-item">
                        <img src="./images/avatar-user.png" alt="" class="avatar-user">
                        <div class="user-info-wrapper">
                          <span class="username">21 Sergio Gomez Pep Guardiola Pep Guardiola Pep Guardiola Pep
                            Guardiola Pep Guardiola</span>
                          <div class="major">
                            <span class="icon">

                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.96672 5.47998L3.48669 3L1.00671 5.47998" stroke="#0DC66D" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.48669 13V3" stroke="#0DC66D" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" />
                                <path d="M10.0333 10.52L12.5133 13L14.9933 10.52" stroke="#E53E3E" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.5134 3V13" stroke="#E53E3E" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>86’ Out: J.Cancelo</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="miss-player-label">Missing players</div>
                    <div class="list-player">
                      <div class="player-item">
                        <img src="./images/avatar-user.png" alt="" class="avatar-user">
                        <div class="user-info-wrapper">
                          <span class="username">21 Sergio Gomez</span>
                          <div class="major">
                            <span class="icon">
                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M12.5833 5.91667H10.0833V3.41667C10.0833 3.16667 9.91667 3 9.66667 3H6.33333C6.08333 3 5.91667 3.16667 5.91667 3.41667V5.91667H3.41667C3.16667 5.91667 3 6.08333 3 6.33333V9.66667C3 9.91667 3.16667 10.0833 3.41667 10.0833H5.91667V12.5833C5.91667 12.8333 6.08333 13 6.33333 13H9.66667C9.91667 13 10.0833 12.8333 10.0833 12.5833V10.0833H12.5833C12.8333 10.0833 13 9.91667 13 9.66667V6.33333C13 6.08333 12.8333 5.91667 12.5833 5.91667Z"
                                  fill="#E53E3E" />
                              </svg>
                            </span>
                            <span class="txt-danger">Out</span>
                          </div>
                        </div>
                      </div>

                      <div class="player-item">
                        <img src="./images/avatar-user.png" alt="" class="avatar-user">
                        <div class="user-info-wrapper">
                          <span class="username">21 Sergio Gomez</span>
                          <div class="major">
                            <span class="icon">
                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M12.5833 5.91667H10.0833V3.41667C10.0833 3.16667 9.91667 3 9.66667 3H6.33333C6.08333 3 5.91667 3.16667 5.91667 3.41667V5.91667H3.41667C3.16667 5.91667 3 6.08333 3 6.33333V9.66667C3 9.91667 3.16667 10.0833 3.41667 10.0833H5.91667V12.5833C5.91667 12.8333 6.08333 13 6.33333 13H9.66667C9.91667 13 10.0833 12.8333 10.0833 12.5833V10.0833H12.5833C12.8333 10.0833 13 9.91667 13 9.66667V6.33333C13 6.08333 12.8333 5.91667 12.5833 5.91667Z"
                                  fill="#E53E3E" />
                              </svg>
                            </span>
                            <span class="txt-danger">Out</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="middle">
                    <div class="dash"></div>
                  </div>
                  <div class="list-player-wrapper">
                    <div class="top-list-player">
                      <div class="club-wrapper">
                        <img src="./images/chel-club.png" alt="" class="club-image">
                        <span class="club-name">Barcelona</span>
                      </div>
                    </div>

                    <div class="list-player">
                      <div class="player-item">
                        <img src="./images/avatar-user.png" alt="" class="avatar-user">
                        <div class="user-info-wrapper">
                          <span class="username">Pep Guardiola</span>
                          <div class="major">Manager</div>
                        </div>
                      </div>

                      <div class="player-item">
                        <img src="./images/avatar-user.png" alt="" class="avatar-user">
                        <div class="user-info-wrapper">
                          <span class="username">18 Stefan Ortega</span>
                        </div>
                      </div>

                      <div class="player-item">
                        <img src="./images/avatar-user.png" alt="" class="avatar-user">
                        <div class="user-info-wrapper">
                          <span class="username">21 Sergio Gomez</span>
                          <div class="major">
                            <span class="icon">

                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.96672 5.47998L3.48669 3L1.00671 5.47998" stroke="#0DC66D" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.48669 13V3" stroke="#0DC66D" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" />
                                <path d="M10.0333 10.52L12.5133 13L14.9933 10.52" stroke="#E53E3E" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.5134 3V13" stroke="#E53E3E" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>86’ Out: J.Cancelo</span>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="miss-player-label miss-player-label-2">Missing players</div>
                    <div class="list-player">
                      <div class="player-item">
                        <img src="./images/avatar-user.png" alt="" class="avatar-user">
                        <div class="user-info-wrapper">
                          <span class="username">21 Sergio Gomez</span>
                          <div class="major">
                            <span class="icon">
                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M12.5833 5.91667H10.0833V3.41667C10.0833 3.16667 9.91667 3 9.66667 3H6.33333C6.08333 3 5.91667 3.16667 5.91667 3.41667V5.91667H3.41667C3.16667 5.91667 3 6.08333 3 6.33333V9.66667C3 9.91667 3.16667 10.0833 3.41667 10.0833H5.91667V12.5833C5.91667 12.8333 6.08333 13 6.33333 13H9.66667C9.91667 13 10.0833 12.8333 10.0833 12.5833V10.0833H12.5833C12.8333 10.0833 13 9.91667 13 9.66667V6.33333C13 6.08333 12.8333 5.91667 12.5833 5.91667Z"
                                  fill="#E53E3E" />
                              </svg>
                            </span>
                            <span class="txt-danger">Out</span>
                          </div>
                        </div>
                      </div>
                      <div class="player-item">
                        <img src="./images/avatar-user.png" alt="" class="avatar-user">
                        <div class="user-info-wrapper">
                          <span class="username">21 Sergio Gomez</span>
                          <div class="major">
                            <span class="icon">
                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M12.5833 5.91667H10.0833V3.41667C10.0833 3.16667 9.91667 3 9.66667 3H6.33333C6.08333 3 5.91667 3.16667 5.91667 3.41667V5.91667H3.41667C3.16667 5.91667 3 6.08333 3 6.33333V9.66667C3 9.91667 3.16667 10.0833 3.41667 10.0833H5.91667V12.5833C5.91667 12.8333 6.08333 13 6.33333 13H9.66667C9.91667 13 10.0833 12.8333 10.0833 12.5833V10.0833H12.5833C12.8333 10.0833 13 9.91667 13 9.66667V6.33333C13 6.08333 12.8333 5.91667 12.5833 5.91667Z"
                                  fill="#E53E3E" />
                              </svg>
                            </span>
                            <span class="txt-danger">Out</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ===========END Lineups TABS ============= -->


                <!-- ===========START H2H TABS ============= -->
                <div id="tabs-3" class="match-tab-content">
                  <h3 class="match-page-title">H2H</h3>
                  <div class="h2h-table-wrapper">
                    <div class="table-row table-heading d-flex">
                      <div class="column-18 txt-center">Leagues</div>
                      <div class="column-18 txt-center">Date</div>
                      <div class="column-18 txt-center">Home</div>
                      <div class="column-10 txt-center">Score</div>
                      <div class="column-18 txt-center">Away</div>
                      <div class="column-10 txt-center">Score Half</div>
                      <div class="column-10 txt-center">Result</div>
                    </div>

                    <div class="table-row d-flex">
                      <div class="column-18 txt-center league-name">Premier League</div>
                      <div class="column-18 txt-center">13/11/2022</div>
                      <div class="column-18 txt-center league-name">Man City</div>
                      <div class="column-10 txt-center">
                        <span class="txt-success">1 - 0</span>
                      </div>
                      <div class="column-18 txt-center league-name">Chelsea</div>
                      <div class="column-10 txt-center">0 - 0</div>
                      <div class="column-10 txt-center d-flex flex-center">
                        <span class="league-sign league-sign-success">W</span>
                      </div>
                    </div>

                    <div class="table-row d-flex">
                      <div class="column-18 txt-center league-name">Champions League</div>
                      <div class="column-18 txt-center">13/11/2022</div>
                      <div class="column-18 txt-center">Man City</div>
                      <div class="column-10 txt-center">
                        <span class="txt-danger">1 - 0</span>
                      </div>
                      <div class="column-18 txt-center">Chelsea</div>
                      <div class="column-10 txt-center">0 - 0</div>
                      <div class="column-10 txt-center d-flex flex-center">
                        <span class="league-sign league-sign-danger">L</span>
                      </div>
                    </div>

                    <div class="table-row d-flex">
                      <div class="column-18 txt-center league-name">Champions League</div>
                      <div class="column-18 txt-center">13/11/2022</div>
                      <div class="column-18 txt-center league-name">Man City</div>
                      <div class="column-10 txt-center">
                        <span class="txt-primary">1 - 0</span>
                      </div>
                      <div class="column-18 txt-center league-name">Chelsea</div>
                      <div class="column-10 txt-center">0 - 0</div>
                      <div class="column-10 txt-center d-flex flex-center">
                        <span class="league-sign league-sign-default">D</span>
                      </div>
                    </div>
                  </div>
                  <p class="suggestion-txt">Last 15 , Newcastle United Win <span class="txt-success">3</span>, Draw 1 ,
                    Lose <span class="txt-danger">11</span>, Score Win Prob : 20.00%</p>
                  <h3 class="match-page-title">Scheduled matches</h3>
                  <div class="past-match-content-wrapper">
                    <div class="column-50 match-left">
                      <div class="header-block">
                        <div class="club-wrapper">
                          <div class="club-wrapper">
                            <img src="./images/chel-club.png" alt="" class="club-image">
                            <span class="club-name">Man United</span>
                          </div>
                        </div>
                      </div>

                      <div class="list-past-match-league">
                        <div class="past-match-league-item">
                          <div class="league-info-wrapper">
                            <img src="./images/league-6.png" class="league-image" />
                            <div class="league-info">
                              <span class="group-name">Europe</span>
                              <span class="league-name">UEFA Champions League, Group E</span>
                            </div>
                          </div>

                          <div class="list-timeline">
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-primary">Manchester City
                                    </span>
                                  </div>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-secondary">Chelsea</span>
                                  </div>
                                </div>
                              </div>
                              <span class="icon-star">

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7141 3.44083L15.0301 8.09983C15.1461 8.33483 15.3701 8.49883 15.6301 8.53683L20.8151 9.28583C21.0251 9.31383 21.2141 9.42383 21.3431 9.59183C21.5851 9.90683 21.5481 10.3528 21.2581 10.6238L17.5001 14.2578C17.3091 14.4378 17.2241 14.7018 17.2741 14.9588L18.1741 20.0868C18.2371 20.5118 17.9471 20.9098 17.5221 20.9788C17.3461 21.0058 17.1661 20.9778 17.0061 20.8988L12.3881 18.4778C12.1561 18.3518 11.8781 18.3518 11.6461 18.4778L6.99413 20.9118C6.60513 21.1098 6.12913 20.9628 5.91713 20.5818C5.83613 20.4278 5.80813 20.2528 5.83613 20.0818L6.73613 14.9538C6.78113 14.6978 6.69613 14.4348 6.51013 14.2538L2.73213 10.6208C2.42413 10.3148 2.42213 9.81683 2.72913 9.50883C2.73013 9.50783 2.73113 9.50583 2.73213 9.50483C2.85913 9.38983 3.01513 9.31283 3.18413 9.28283L8.37013 8.53383C8.62913 8.49283 8.85213 8.33083 8.97013 8.09583L11.2841 3.44083C11.3771 3.25183 11.5421 3.10683 11.7421 3.04083C11.9431 2.97383 12.1631 2.98983 12.3521 3.08483C12.5071 3.16183 12.6341 3.28683 12.7141 3.44083Z"
                                    stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                              </span>
                            </div>
                          </div>
                        </div>

                        <div class="past-match-league-item">
                          <div class="league-info-wrapper">
                            <img src="./images/league-1.png" class="league-image" />
                            <div class="league-info">
                              <span class="group-name">England</span>
                              <span class="league-name">Premier League</span>
                            </div>
                          </div>

                          <div class="list-timeline">
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name macth-text-overflow-club txt-primary">Manchester City </span>
                                  </div>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-secondary">Chelsea</span>
                                  </div>
                                </div>
                              </div>
                              <span class="icon-star">

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7141 3.44083L15.0301 8.09983C15.1461 8.33483 15.3701 8.49883 15.6301 8.53683L20.8151 9.28583C21.0251 9.31383 21.2141 9.42383 21.3431 9.59183C21.5851 9.90683 21.5481 10.3528 21.2581 10.6238L17.5001 14.2578C17.3091 14.4378 17.2241 14.7018 17.2741 14.9588L18.1741 20.0868C18.2371 20.5118 17.9471 20.9098 17.5221 20.9788C17.3461 21.0058 17.1661 20.9778 17.0061 20.8988L12.3881 18.4778C12.1561 18.3518 11.8781 18.3518 11.6461 18.4778L6.99413 20.9118C6.60513 21.1098 6.12913 20.9628 5.91713 20.5818C5.83613 20.4278 5.80813 20.2528 5.83613 20.0818L6.73613 14.9538C6.78113 14.6978 6.69613 14.4348 6.51013 14.2538L2.73213 10.6208C2.42413 10.3148 2.42213 9.81683 2.72913 9.50883C2.73013 9.50783 2.73113 9.50583 2.73213 9.50483C2.85913 9.38983 3.01513 9.31283 3.18413 9.28283L8.37013 8.53383C8.62913 8.49283 8.85213 8.33083 8.97013 8.09583L11.2841 3.44083C11.3771 3.25183 11.5421 3.10683 11.7421 3.04083C11.9431 2.97383 12.1631 2.98983 12.3521 3.08483C12.5071 3.16183 12.6341 3.28683 12.7141 3.44083Z"
                                    stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                              </span>
                            </div>
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-primary">Manchester City
                                    </span>
                                  </div>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-secondary">Chelsea</span>
                                  </div>
                                </div>
                              </div>
                              <span class="icon-star">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7141 3.44083L15.0301 8.09983C15.1461 8.33483 15.3701 8.49883 15.6301 8.53683L20.8151 9.28583C21.0251 9.31383 21.2141 9.42383 21.3431 9.59183C21.5851 9.90683 21.5481 10.3528 21.2581 10.6238L17.5001 14.2578C17.3091 14.4378 17.2241 14.7018 17.2741 14.9588L18.1741 20.0868C18.2371 20.5118 17.9471 20.9098 17.5221 20.9788C17.3461 21.0058 17.1661 20.9778 17.0061 20.8988L12.3881 18.4778C12.1561 18.3518 11.8781 18.3518 11.6461 18.4778L6.99413 20.9118C6.60513 21.1098 6.12913 20.9628 5.91713 20.5818C5.83613 20.4278 5.80813 20.2528 5.83613 20.0818L6.73613 14.9538C6.78113 14.6978 6.69613 14.4348 6.51013 14.2538L2.73213 10.6208C2.42413 10.3148 2.42213 9.81683 2.72913 9.50883C2.73013 9.50783 2.73113 9.50583 2.73213 9.50483C2.85913 9.38983 3.01513 9.31283 3.18413 9.28283L8.37013 8.53383C8.62913 8.49283 8.85213 8.33083 8.97013 8.09583L11.2841 3.44083C11.3771 3.25183 11.5421 3.10683 11.7421 3.04083C11.9431 2.97383 12.1631 2.98983 12.3521 3.08483C12.5071 3.16183 12.6341 3.28683 12.7141 3.44083Z"
                                    stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="middle">
                      <div class="dash"></div>
                    </div>
                    <div class="column-50 match-right">
                      <div class="header-block">
                        <div class="club-wrapper">
                          <div class="club-wrapper">
                            <img src="./images/mu-club.png" alt="" class="club-image">
                            <span class="club-name">Man United</span>
                          </div>
                        </div>
                      </div>

                      <div class="list-past-match-league">
                        <div class="past-match-league-item">
                          <div class="league-info-wrapper">
                            <img src="./images/league-6.png" class="league-image" />
                            <div class="league-info">
                              <span class="group-name">Europe</span>
                              <span class="league-name">UEFA Champions League, Group E</span>
                            </div>
                          </div>

                          <div class="list-timeline">
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-primary">Manchester City
                                    </span>
                                  </div>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name macth-text-overflow-club txt-secondary">Chelsea</span>
                                  </div>
                                </div>
                              </div>
                              <span class="icon-star">

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7141 3.44083L15.0301 8.09983C15.1461 8.33483 15.3701 8.49883 15.6301 8.53683L20.8151 9.28583C21.0251 9.31383 21.2141 9.42383 21.3431 9.59183C21.5851 9.90683 21.5481 10.3528 21.2581 10.6238L17.5001 14.2578C17.3091 14.4378 17.2241 14.7018 17.2741 14.9588L18.1741 20.0868C18.2371 20.5118 17.9471 20.9098 17.5221 20.9788C17.3461 21.0058 17.1661 20.9778 17.0061 20.8988L12.3881 18.4778C12.1561 18.3518 11.8781 18.3518 11.6461 18.4778L6.99413 20.9118C6.60513 21.1098 6.12913 20.9628 5.91713 20.5818C5.83613 20.4278 5.80813 20.2528 5.83613 20.0818L6.73613 14.9538C6.78113 14.6978 6.69613 14.4348 6.51013 14.2538L2.73213 10.6208C2.42413 10.3148 2.42213 9.81683 2.72913 9.50883C2.73013 9.50783 2.73113 9.50583 2.73213 9.50483C2.85913 9.38983 3.01513 9.31283 3.18413 9.28283L8.37013 8.53383C8.62913 8.49283 8.85213 8.33083 8.97013 8.09583L11.2841 3.44083C11.3771 3.25183 11.5421 3.10683 11.7421 3.04083C11.9431 2.97383 12.1631 2.98983 12.3521 3.08483C12.5071 3.16183 12.6341 3.28683 12.7141 3.44083Z"
                                    stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                              </span>
                            </div>
                          </div>
                        </div>

                        <div class="past-match-league-item">
                          <div class="league-info-wrapper">
                            <img src="./images/league-1.png" class="league-image" />
                            <div class="league-info">
                              <span class="group-name">England</span>
                              <span class="league-name">Premier League</span>
                            </div>
                          </div>

                          <div class="list-timeline">
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name macth-text-overflow-club txt-primary">Manchester City </span>
                                  </div>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-secondary">Chelsea</span>
                                  </div>
                                </div>
                              </div>
                              <span class="icon-star">

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7141 3.44083L15.0301 8.09983C15.1461 8.33483 15.3701 8.49883 15.6301 8.53683L20.8151 9.28583C21.0251 9.31383 21.2141 9.42383 21.3431 9.59183C21.5851 9.90683 21.5481 10.3528 21.2581 10.6238L17.5001 14.2578C17.3091 14.4378 17.2241 14.7018 17.2741 14.9588L18.1741 20.0868C18.2371 20.5118 17.9471 20.9098 17.5221 20.9788C17.3461 21.0058 17.1661 20.9778 17.0061 20.8988L12.3881 18.4778C12.1561 18.3518 11.8781 18.3518 11.6461 18.4778L6.99413 20.9118C6.60513 21.1098 6.12913 20.9628 5.91713 20.5818C5.83613 20.4278 5.80813 20.2528 5.83613 20.0818L6.73613 14.9538C6.78113 14.6978 6.69613 14.4348 6.51013 14.2538L2.73213 10.6208C2.42413 10.3148 2.42213 9.81683 2.72913 9.50883C2.73013 9.50783 2.73113 9.50583 2.73213 9.50483C2.85913 9.38983 3.01513 9.31283 3.18413 9.28283L8.37013 8.53383C8.62913 8.49283 8.85213 8.33083 8.97013 8.09583L11.2841 3.44083C11.3771 3.25183 11.5421 3.10683 11.7421 3.04083C11.9431 2.97383 12.1631 2.98983 12.3521 3.08483C12.5071 3.16183 12.6341 3.28683 12.7141 3.44083Z"
                                    stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                              </span>
                            </div>
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-primary">Manchester City
                                    </span>
                                  </div>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-secondary">Chelsea</span>
                                  </div>
                                </div>
                              </div>
                              <span class="icon-star">

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7141 3.44083L15.0301 8.09983C15.1461 8.33483 15.3701 8.49883 15.6301 8.53683L20.8151 9.28583C21.0251 9.31383 21.2141 9.42383 21.3431 9.59183C21.5851 9.90683 21.5481 10.3528 21.2581 10.6238L17.5001 14.2578C17.3091 14.4378 17.2241 14.7018 17.2741 14.9588L18.1741 20.0868C18.2371 20.5118 17.9471 20.9098 17.5221 20.9788C17.3461 21.0058 17.1661 20.9778 17.0061 20.8988L12.3881 18.4778C12.1561 18.3518 11.8781 18.3518 11.6461 18.4778L6.99413 20.9118C6.60513 21.1098 6.12913 20.9628 5.91713 20.5818C5.83613 20.4278 5.80813 20.2528 5.83613 20.0818L6.73613 14.9538C6.78113 14.6978 6.69613 14.4348 6.51013 14.2538L2.73213 10.6208C2.42413 10.3148 2.42213 9.81683 2.72913 9.50883C2.73013 9.50783 2.73113 9.50583 2.73213 9.50483C2.85913 9.38983 3.01513 9.31283 3.18413 9.28283L8.37013 8.53383C8.62913 8.49283 8.85213 8.33083 8.97013 8.09583L11.2841 3.44083C11.3771 3.25183 11.5421 3.10683 11.7421 3.04083C11.9431 2.97383 12.1631 2.98983 12.3521 3.08483C12.5071 3.16183 12.6341 3.28683 12.7141 3.44083Z"
                                    stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                              </span>
                            </div>
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-primary">Manchester City
                                    </span>
                                  </div>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-secondary">Chelsea</span>
                                  </div>
                                </div>
                              </div>
                              <span class="icon-star">

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7141 3.44083L15.0301 8.09983C15.1461 8.33483 15.3701 8.49883 15.6301 8.53683L20.8151 9.28583C21.0251 9.31383 21.2141 9.42383 21.3431 9.59183C21.5851 9.90683 21.5481 10.3528 21.2581 10.6238L17.5001 14.2578C17.3091 14.4378 17.2241 14.7018 17.2741 14.9588L18.1741 20.0868C18.2371 20.5118 17.9471 20.9098 17.5221 20.9788C17.3461 21.0058 17.1661 20.9778 17.0061 20.8988L12.3881 18.4778C12.1561 18.3518 11.8781 18.3518 11.6461 18.4778L6.99413 20.9118C6.60513 21.1098 6.12913 20.9628 5.91713 20.5818C5.83613 20.4278 5.80813 20.2528 5.83613 20.0818L6.73613 14.9538C6.78113 14.6978 6.69613 14.4348 6.51013 14.2538L2.73213 10.6208C2.42413 10.3148 2.42213 9.81683 2.72913 9.50883C2.73013 9.50783 2.73113 9.50583 2.73213 9.50483C2.85913 9.38983 3.01513 9.31283 3.18413 9.28283L8.37013 8.53383C8.62913 8.49283 8.85213 8.33083 8.97013 8.09583L11.2841 3.44083C11.3771 3.25183 11.5421 3.10683 11.7421 3.04083C11.9431 2.97383 12.1631 2.98983 12.3521 3.08483C12.5071 3.16183 12.6341 3.28683 12.7141 3.44083Z"
                                    stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                              </span>
                            </div>
                            <div class="block-club-common">
                              <div class="time-wrapper">
                                <span class="time txt-secondary">03/10/22</span>
                                <span class="type hour txt-secondary">FT</span>
                              </div>
                              <div class="list-club-wrapper">
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-1.png" alt="">
                                    <span class="club-name macth-text-overflow-club  txt-primary">Manchester City
                                      Manchester City Manchester City </span>
                                  </div>
                                </div>
                                <div class="club-item">
                                  <div class="club-info-wrapper">
                                    <img src="./images/club-2.png" alt="">
                                    <span class="club-name macth-text-overflow-club txt-secondary">Chelsea Manchester
                                      City Manchester City Manchester City Manchester City </span>
                                  </div>
                                </div>
                              </div>
                              <span class="icon-star">

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7141 3.44083L15.0301 8.09983C15.1461 8.33483 15.3701 8.49883 15.6301 8.53683L20.8151 9.28583C21.0251 9.31383 21.2141 9.42383 21.3431 9.59183C21.5851 9.90683 21.5481 10.3528 21.2581 10.6238L17.5001 14.2578C17.3091 14.4378 17.2241 14.7018 17.2741 14.9588L18.1741 20.0868C18.2371 20.5118 17.9471 20.9098 17.5221 20.9788C17.3461 21.0058 17.1661 20.9778 17.0061 20.8988L12.3881 18.4778C12.1561 18.3518 11.8781 18.3518 11.6461 18.4778L6.99413 20.9118C6.60513 21.1098 6.12913 20.9628 5.91713 20.5818C5.83613 20.4278 5.80813 20.2528 5.83613 20.0818L6.73613 14.9538C6.78113 14.6978 6.69613 14.4348 6.51013 14.2538L2.73213 10.6208C2.42413 10.3148 2.42213 9.81683 2.72913 9.50883C2.73013 9.50783 2.73113 9.50583 2.73213 9.50483C2.85913 9.38983 3.01513 9.31283 3.18413 9.28283L8.37013 8.53383C8.62913 8.49283 8.85213 8.33083 8.97013 8.09583L11.2841 3.44083C11.3771 3.25183 11.5421 3.10683 11.7421 3.04083C11.9431 2.97383 12.1631 2.98983 12.3521 3.08483C12.5071 3.16183 12.6341 3.28683 12.7141 3.44083Z"
                                    stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                              </span>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- ===========END H2H TABS ============= -->

                <!-- ===========START Standings TABS ============= -->
                <div id="tabs-4" class="match-tab-content">
                  <div id="match-standing-tabs">
                    <ul class="pill-nav">
                      <li><a href="#tabs-1">All</a></li>
                      <li><a href="#tabs-2">Home</a></li>
                      <li><a href="#tabs-3">Away</a></li>
                    </ul>
                    <div id="tabs-1" class="match-sub-tabs">
                      <div class="match-standing-table-wrapper">
                        <div class="match-standing-table">
                          <div class="table-row table-heading d-flex">
                            <div class="column-10 txt-center">#</div>
                            <div class="column-30 txt-left">Team</div>
                            <div class="column-5 txt-center">P</div>
                            <div class="column-5 txt-center">W</div>
                            <div class="column-5 txt-center">D</div>
                            <div class="column-5 txt-center">L</div>
                            <div class="column-10 txt-center">Goals</div>
                            <div class="column-20 txt-center">Last 5</div>
                            <div class="column-10 txt-center">Pts</div>
                          </div>

                          <div class="table-row  d-flex">
                            <div class="column-10 txt-center d-flex flex-center">
                              <span class="number number-primary">1</span>
                            </div>
                            <div class="column-30 txt-left">
                              <div class="club-wrapper">
                                <img src="./images/mc-club.png" alt="">
                                <span class="club-name">Arsenal</span>
                              </div>
                            </div>
                            <div class="column-5 txt-center">14</div>
                            <div class="column-5 txt-center">12</div>
                            <div class="column-5 txt-center">1</div>
                            <div class="column-5 txt-center">1</div>
                            <div class="column-10 txt-center">33.11</div>
                            <div class="column-20 txt-center list-league-sign">
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-default">D</span>
                              <span class="league-sign league-sign-danger">L</span>
                            </div>
                            <div class="column-10 txt-center">37</div>
                          </div>

                          <div class="table-row  d-flex row-info">
                            <div class="column-10 txt-center d-flex flex-center">
                              <span class="number number-secondary">2</span>
                            </div>
                            <div class="column-30 txt-left">
                              <div class="club-wrapper">
                                <img src="./images/mc-club.png" alt="">
                                <span class="club-name">Arsenal</span>
                              </div>
                            </div>
                            <div class="column-5 txt-center">14</div>
                            <div class="column-5 txt-center">12</div>
                            <div class="column-5 txt-center">1</div>
                            <div class="column-5 txt-center">1</div>
                            <div class="column-10 txt-center">33.11</div>
                            <div class="column-20 txt-center list-league-sign">
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-default">D</span>
                              <span class="league-sign league-sign-danger">L</span>
                            </div>
                            <div class="column-10 txt-center">37</div>
                          </div>

                          <div class="table-row  d-flex">
                            <div class="column-10 txt-center d-flex flex-center">
                              <span class="number number-danger">3</span>
                            </div>
                            <div class="column-30 txt-left">
                              <div class="club-wrapper">
                                <img src="./images/mc-club.png" alt="">
                                <span class="club-name">Arsenal</span>
                              </div>
                            </div>
                            <div class="column-5 txt-center">14</div>
                            <div class="column-5 txt-center">12</div>
                            <div class="column-5 txt-center">1</div>
                            <div class="column-5 txt-center">1</div>
                            <div class="column-10 txt-center">33.11</div>
                            <div class="column-20 txt-center list-league-sign">
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-default">D</span>
                              <span class="league-sign league-sign-danger">L</span>
                            </div>
                            <div class="column-10 txt-center">37</div>
                          </div>

                          <div class="table-row  d-flex  row-danger">
                            <div class="column-10 txt-center d-flex flex-center">
                              <span class="number">4</span>
                            </div>
                            <div class="column-30 txt-left">
                              <div class="club-wrapper">
                                <img src="./images/mc-club.png" alt="">
                                <span class="club-name">Arsenal</span>
                              </div>
                            </div>
                            <div class="column-5 txt-center">14</div>
                            <div class="column-5 txt-center">12</div>
                            <div class="column-5 txt-center">1</div>
                            <div class="column-5 txt-center">1</div>
                            <div class="column-10 txt-center">33.11</div>
                            <div class="column-20 txt-center list-league-sign">
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-default">D</span>
                              <span class="league-sign league-sign-danger">L</span>
                            </div>
                            <div class="column-10 txt-center">37</div>
                          </div>

                          <div class="table-row  d-flex">
                            <div class="column-10 txt-center d-flex flex-center">
                              <span class="number">5</span>
                            </div>
                            <div class="column-30 txt-left">
                              <div class="club-wrapper">
                                <img src="./images/mc-club.png" alt="">
                                <span class="club-name">Arsenal</span>
                              </div>
                            </div>
                            <div class="column-5 txt-center">14</div>
                            <div class="column-5 txt-center">12</div>
                            <div class="column-5 txt-center">1</div>
                            <div class="column-5 txt-center">1</div>
                            <div class="column-10 txt-center">33.11</div>
                            <div class="column-20 txt-center list-league-sign">
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-default">D</span>
                              <span class="league-sign league-sign-danger">L</span>
                            </div>
                            <div class="column-10 txt-center">37</div>
                          </div>

                          <div class="table-row  d-flex">
                            <div class="column-10 txt-center d-flex flex-center">
                              <span class="number number-danger">6</span>
                            </div>
                            <div class="column-30 txt-left">
                              <div class="club-wrapper">
                                <img src="./images/mc-club.png" alt="">
                                <span class="club-name">Arsenal</span>
                              </div>
                            </div>
                            <div class="column-5 txt-center">14</div>
                            <div class="column-5 txt-center">12</div>
                            <div class="column-5 txt-center">1</div>
                            <div class="column-5 txt-center">1</div>
                            <div class="column-10 txt-center">33.11</div>
                            <div class="column-20 txt-center list-league-sign">
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-default">D</span>
                              <span class="league-sign league-sign-danger">L</span>
                            </div>
                            <div class="column-10 txt-center">37</div>
                          </div>

                          <div class="table-row  d-flex">
                            <div class="column-10 txt-center d-flex flex-center">
                              <span class="number number-danger">7</span>
                            </div>
                            <div class="column-30 txt-left">
                              <div class="club-wrapper">
                                <img src="./images/mc-club.png" alt="">
                                <span class="club-name">Arsenal</span>
                              </div>
                            </div>
                            <div class="column-5 txt-center">14</div>
                            <div class="column-5 txt-center">12</div>
                            <div class="column-5 txt-center">1</div>
                            <div class="column-5 txt-center">1</div>
                            <div class="column-10 txt-center">33.11</div>
                            <div class="column-20 txt-center list-league-sign">
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-success">W</span>
                              <span class="league-sign league-sign-default">D</span>
                              <span class="league-sign league-sign-danger">L</span>
                            </div>
                            <div class="column-10 txt-center">37</div>
                          </div>
                        </div>
                        <ul class="match-standing-suggesstion">
                          <li>
                            <span class="dot dot-primary"></span>
                            <span class="label">UEFA CL group stage</span>
                          </li>
                          <li>
                            <span class="dot dot-secondary"></span>
                            <span class="label">UEFA EL group stage</span>
                          </li>
                          <li>
                            <span class="dot dot-danger"></span>
                            <span class="label">Relegation</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div id="tabs-2" class="match-sub-tabs">
                      tab2
                    </div>
                    <div id="tabs-3" class="match-sub-tabs">
                      tab3
                    </div>
                  </div>
                </div>
                <!-- ===========END Standings TABS ============= -->



                <!-- ===========START Statistics TABS ============= -->
                <div id="tabs-5" class="match-tab-content">
                  <div id="match-statistics-tabs">
                    <ul class="pill-nav">
                      <li><a href="#tabs-1">All</a></li>
                      <li><a href="#tabs-2">1st</a></li>
                      <li><a href="#tabs-3">2st</a></li>
                    </ul>
                    <div id="tabs-1" class="match-sub-tabs">
                      <div class="statistics-tab-content-wrapper">
                        <div class="table-row">
                          <div class="table-column d-flex flex-start">49%</div>
                          <div class="table-column d-flex flex-center">Ball possession</div>
                          <div class="table-column d-flex flex-end statistics-danger">51%</div>
                        </div>
                        <div class="table-row">
                          <div class="table-column d-flex flex-start statistics-info">10</div>
                          <div class="table-column d-flex flex-center">Total shots</div>
                          <div class="table-column d-flex flex-end">5</div>
                        </div>
                        <div class="table-row">
                          <div class="table-column d-flex flex-start statistics-info">10</div>
                          <div class="table-column d-flex flex-center">Shots on target</div>
                          <div class="table-column d-flex flex-end">5</div>
                        </div>
                        <div class="table-row">
                          <div class="table-column d-flex flex-start statistics-info">10</div>
                          <div class="table-column d-flex flex-center">Shots off target</div>
                          <div class="table-column d-flex flex-end">5</div>
                        </div>
                        <div class="table-row">
                          <div class="table-column d-flex flex-start statistics-info">10</div>
                          <div class="table-column d-flex flex-center">Blocked shots</div>
                          <div class="table-column d-flex flex-end">5</div>
                        </div>
                        <div class="table-row">
                          <div class="table-column d-flex flex-start statistics-info">10</div>
                          <div class="table-column d-flex flex-center">Corner kicks</div>
                          <div class="table-column d-flex flex-end">5</div>
                        </div>

                        <div class="table-row">
                          <div class="table-column d-flex flex-start statistics-info">10</div>
                          <div class="table-column d-flex flex-center">Offsides</div>
                          <div class="table-column d-flex flex-end">5</div>
                        </div>


                        <div class="table-row">
                          <div class="table-column d-flex flex-start statistics-info">10</div>
                          <div class="table-column d-flex flex-center">Fouls</div>
                          <div class="table-column d-flex flex-end">5</div>
                        </div>


                        <div class="table-row">
                          <div class="table-column d-flex flex-start statistics-info">10</div>
                          <div class="table-column d-flex flex-center">Yellow cards</div>
                          <div class="table-column d-flex flex-end">5</div>
                        </div>



                        <div class="table-row">
                          <div class="table-column d-flex flex-start statistics-info">10</div>
                          <div class="table-column d-flex flex-center">Big chances</div>
                          <div class="table-column d-flex flex-end">5</div>
                        </div>


                        <div class="table-row">
                          <div class="table-column d-flex flex-start statistics-info">10</div>
                          <div class="table-column d-flex flex-center">Big chances</div>
                          <div class="table-column d-flex flex-end">5</div>
                        </div>


                        <div class="table-row">
                          <div class="table-column d-flex flex-start">10</div>
                          <div class="table-column d-flex flex-center">Big chances missed</div>
                          <div class="table-column d-flex flex-end">5</div>
                        </div>


                        <div class="table-row">
                          <div class="table-column d-flex flex-start">10</div>
                          <div class="table-column d-flex flex-center">Shots inside box</div>
                          <div class="table-column d-flex flex-end">5</div>
                        </div>


                        <div class="table-row">
                          <div class="table-column d-flex flex-star">10</div>
                          <div class="table-column d-flex flex-center">Shots outside box</div>
                          <div class="table-column d-flex flex-end">5</div>
                        </div>


                        <div class="table-row">
                          <div class="table-column d-flex flex-start statistics-info">451</div>
                          <div class="table-column d-flex flex-center">Passes</div>
                          <div class="table-column d-flex flex-end">451</div>
                        </div>


                        <div class="table-row">
                          <div class="table-column d-flex flex-start">373 (83%)</div>
                          <div class="table-column d-flex flex-center">Acc. passes</div>
                          <div class="table-column d-flex flex-end statistics-danger">396 (84%)</div>
                        </div>

                        <div class="table-row">
                          <div class="table-column d-flex flex-start">373 (83%)</div>
                          <div class="table-column d-flex flex-center">Long balls</div>
                          <div class="table-column d-flex flex-end statistics-danger">396 (84%)</div>
                        </div>

                        <div class="table-row">
                          <div class="table-column d-flex flex-start">373 (83%)</div>
                          <div class="table-column d-flex flex-center">Crosses</div>
                          <div class="table-column d-flex flex-end statistics-danger">396 (84%)</div>
                        </div>
                      </div>
                    </div>
                    <div id="tabs-2" class="match-sub-tabs">
                      tab2
                    </div>
                    <div id="tabs-3" class="match-sub-tabs">
                      tab3
                    </div>
                  </div>
                </div>
                <!-- ===========END Statistics TABS ============= -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- =========== END NEW MATCH CONTENT ========= -->
  <div class="match-body">
    <div class="container">
      <div class="row">
        <div class="match-news">
          <div class="item-news">
            <h5>Overal Information</h5>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
              rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
              explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
              consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
              dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
              incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
              exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem
              vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui
              dolorem eum fugiat quo voluptas nulla pariatur?</p>
          </div>
          <div class="item-news">
            <h5>Overal Information</h5>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
              rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
              explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
              consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
              dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
              incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
              exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem
              vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui
              dolorem eum fugiat quo voluptas nulla pariatur?</p>
          </div>
          <div class="item-news">
            <h5>Overal Information</h5>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
              rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
              explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
              consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
              dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
              incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
              exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem
              vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui
              dolorem eum fugiat quo voluptas nulla pariatur?</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
</body>
<script>
$("#match-tabs").tabs({
  active: 0,
})

$("#match-standing-tabs").tabs({
  active: 0
})

$("#match-statistics-tabs").tabs({
  active: 0
})

$(".match-tab-item").on('click', function(event) {
  const listPlanElement = $('.match-plan-wrapper')
  const index = $(this).index()
  if (index === 0) {
    listPlanElement.show()
  } else {
    listPlanElement.hide()
  }
})


// handle counter timer
function countdown(elementName, minutes, seconds) {
  var element, endTime, hours, mins, msLeft, time;

  function twoDigits(n) {
    return (n <= 9 ? "0" + n : n);
  }

  function updateTimer() {
    msLeft = endTime - (+new Date);
    if (msLeft < 1000) {
      element.innerHTML = "Time is up!";
    } else {
      time = new Date(msLeft);
      hours = time.getUTCHours();
      mins = time.getUTCMinutes();
      element.innerHTML = (hours ? twoDigits(hours) + ':' + twoDigits(mins) : twoDigits(mins)) + ':' + twoDigits(time
        .getUTCSeconds());
      setTimeout(updateTimer, time.getUTCMilliseconds() + 500);
    }
  }

  element = document.getElementById(elementName);
  endTime = (+new Date) + 1000 * (60 * minutes + seconds) + 500;
  updateTimer();
}

countdown("timer", 1, 0);
</script>

</html>