<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#142D4E">

  <title>AeroReads | Rent. Read. Repeat.</title>
  <meta name="description" content="Discover AeroReads, a smarter way to enjoy books through flexible book rental plans. Explore our idea and request a callback.">
  <meta property="og:title" content="AeroReads | Rent. Read. Repeat.">
  <meta property="og:description" content="Discover a better way to read with AeroReads. Explore our book rental plans.">
  <link rel="icon" type="image/png" href="{{ asset('assets/aeroreads-icon-color.png') }}">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600&display=swap" rel="stylesheet">

  <!-- External Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

  <!-- SEPARATED HEADER PARTIAL -->
  @include('partials.header')

  <main>

    <!-- HERO -->
    <section class="hero" id="home">
      <div class="container hero-grid">
        <div>
          <span class="eyebrow">A new way to enjoy books</span>

          <h1>Your Next Favourite Book Is <span>Just a Rental Away.</span></h1>

          <p class="hero-copy">
            Discover a smarter way to enjoy books with AeroReads.
            Explore flexible rental plans, read more, and avoid buying
            every book you want to read.
          </p>

          <div class="hero-actions">
            <a href="#plans" class="btn btn-primary">Explore Rental Plans →</a>
            <a href="#how-it-works" class="btn btn-outline">How It Works</a>
          </div>

          <p class="hero-note">
            A book-rental concept built around readers and the joy of discovering new stories.
          </p>
        </div>

        <div class="hero-art" aria-label="Illustration of colourful books">
          <div class="art-circle"></div>

          <div class="book-stack">
            <div class="book book-1">
              <div><b>Read More.</b><small>DISCOVER NEW STORIES</small></div>
            </div>
            <div class="book book-2">
              <div><b>Explore.</b><small>FIND YOUR NEXT FAVOURITE</small></div>
            </div>
            <div class="book book-3">
              <div><b>Repeat.</b><small>MAKE READING A HABIT</small></div>
            </div>
            <div class="book book-4">
              <div><b>AeroReads</b><small>RENT. READ. REPEAT.</small></div>
            </div>
          </div>

          <div class="floating-note note-top">📚 More stories to discover</div>
          <div class="floating-note note-bottom">✨ Your reading journey starts here</div>
        </div>
      </div>
    </section>

    <!-- IDEA -->
    <section class="section" id="idea">
      <div class="container intro-grid">
        <div class="intro-copy">
          <span class="eyebrow">The idea behind AeroReads</span>
          <h2>A Better Way to Read More</h2>

          <p>
            Great books can inspire us, teach us, and take us to new worlds.
            But buying every book we want to read may not be practical.
          </p>

          <p>
            AeroReads aims to make reading more accessible through book-rental
            plans that give readers another way to enjoy the books they love.
          </p>

          <p>
            Our vision is simple: help readers explore more books with a plan
            that suits their reading habits and budget.
          </p>
        </div>

        <div class="idea-card">
          <h3>Why explore book rentals?</h3>

          <ul class="check-list">
            <li><span class="check">✓</span><span>Enjoy books without buying every title.</span></li>
            <li><span class="check">✓</span><span>Discover authors, stories, and new genres.</span></li>
            <li><span class="check">✓</span><span>Explore plans designed around different reading habits.</span></li>
            <li><span class="check">✓</span><span>Make more room for reading without owning every book.</span></li>
          </ul>
        </div>
      </div>
    </section>

    <!-- HOW IT WORKS -->
    <section class="section soft-section" id="how-it-works">
      <div class="container">
        <div class="section-heading">
          <span class="eyebrow">Simple by design</span>
          <h2>How AeroReads Works</h2>
          <p>Explore the proposed rental journey and contact us to discuss availability and plan details.</p>
        </div>

        <div class="steps">
          <article class="step">
            <div class="step-number">01</div>
            <h3>Explore the Plans</h3>
            <p>Compare rental options and understand their pricing and conditions.</p>
          </article>

          <article class="step">
            <div class="step-number">02</div>
            <h3>Choose Your Plan</h3>
            <p>Find a plan that fits your reading habits and budget.</p>
          </article>

          <article class="step">
            <div class="step-number">03</div>
            <h3>Request a Callback</h3>
            <p>Tell us your interests so you can discuss availability and next steps.</p>
          </article>

          <article class="step">
            <div class="step-number">04</div>
            <h3>Start Reading</h3>
            <p>Once rental arrangements are confirmed, begin your reading journey.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- RENTAL PLANS -->
    <section class="section" id="plans">
      <div class="container">
        <div class="section-heading">
          <span class="eyebrow">Find your reading plan</span>
          <h2>Rental Plans for Every Reader</h2>
          <p>
            Explore these example plan formats. Final prices, book limits,
            and rental conditions will be confirmed by AeroReads.
          </p>
        </div>

        <div class="plans-grid">
          <article class="plan">
            <h3>Starter Reader</h3>
            <p class="plan-description">For readers who want to try book rentals.</p>

            <div class="plan-price">Let's Talk</div>
            <p class="price-note">Pricing to be confirmed</p>

            <ul>
              <li>Entry-level rental option</li>
              <li>Discuss eligible books</li>
              <li>Understand rental conditions</li>
              <li>Help choosing a suitable plan</li>
            </ul>

            <button type="button" class="btn btn-outline plan-button"
                    data-plan="Starter Reader">Ask About This Plan</button>
          </article>

          <article class="plan featured">
            <span class="popular">POPULAR OPTION</span>

            <h3>Regular Reader</h3>
            <p class="plan-description">For readers who want to make books part of their routine.</p>

            <div class="plan-price">Let's Talk</div>
            <p class="price-note">Pricing to be confirmed</p>

            <ul>
              <li>Plan designed for regular reading</li>
              <li>Discuss book allowance</li>
              <li>Understand rental duration</li>
              <li>Ask about delivery options</li>
            </ul>

            <button type="button" class="btn btn-primary plan-button"
                    data-plan="Regular Reader">Ask About This Plan</button>
          </article>

          <article class="plan">
            <h3>Book Lover</h3>
            <p class="plan-description">For enthusiastic readers ready to explore more titles.</p>

            <div class="plan-price">Let's Talk</div>
            <p class="price-note">Pricing to be confirmed</p>

            <ul>
              <li>Discuss a suitable rental plan</li>
              <li>Explore different genres</li>
              <li>Ask about exchange options</li>
              <li>Understand all applicable fees</li>
            </ul>

            <button type="button" class="btn btn-outline plan-button"
                    data-plan="Book Lover">Ask About This Plan</button>
          </article>
        </div>

        <p class="plans-disclaimer">
          These are illustrative plan names, not confirmed offers. Confirm prices,
          deposits, delivery fees, book limits, and terms before accepting bookings.
        </p>
      </div>
    </section>

    <!-- BENEFITS -->
    <section class="section soft-section" id="benefits">
      <div class="container">
        <div class="section-heading">
          <span class="eyebrow">The AeroReads vision</span>
          <h2>More Reading. More Possibilities.</h2>
          <p>A book-rental concept designed around the needs of modern readers.</p>
        </div>

        <div class="benefits-grid">
          <div class="benefit">
            <div class="benefit-icon">📖</div>
            <h3>Read More</h3>
            <p>Explore a wider reading journey through rental options.</p>
          </div>

          <div class="benefit">
            <div class="benefit-icon">💡</div>
            <h3>Discover Ideas</h3>
            <p>Find inspiration across different authors and subjects.</p>
          </div>

          <div class="benefit">
            <div class="benefit-icon">🔄</div>
            <h3>Flexible Reading</h3>
            <p>Explore a rental approach instead of purchasing every title.</p>
          </div>

          <div class="benefit">
            <div class="benefit-icon">❤️</div>
            <h3>Made for Readers</h3>
            <p>Choose a reading journey that fits your interests.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- AUDIENCE -->
    <section class="section">
      <div class="container">
        <div class="section-heading">
          <span class="eyebrow">For everyone who loves learning</span>
          <h2>Who Is AeroReads For?</h2>
          <p>We want to make exploring books easier for readers at different stages of life.</p>
        </div>

        <div class="audience-grid">
          <div class="audience"><span>🎓</span>Students</div>
          <div class="audience"><span>💼</span>Working Professionals</div>
          <div class="audience"><span>📚</span>Book Lovers</div>
          <div class="audience"><span>🌱</span>Curious Minds</div>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section class="section" id="about">
      <div class="container">
        <div class="about-box">
          <div>
            <span class="eyebrow" style="color:#8BE0D1">About AeroReads</span>
            <h2>Our Goal Is Simple: Help More People Read.</h2>

            <p>
              AeroReads is built around a simple idea: enjoying books should
              have more options than buying every book you want to read.
            </p>

            <p>
              We are developing a book-rental concept focused on accessibility,
              discovery, and a reading experience that works for different readers.
            </p>
          </div>

          <div class="about-quote">
            “Rent a book. Discover a world. Repeat the joy of reading.”
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="section soft-section" id="faq">
      <div class="container">
        <div class="section-heading">
          <span class="eyebrow">Questions and answers</span>
          <h2>Frequently Asked Questions</h2>
          <p>Have a question? Request a callback to discuss the details.</p>
        </div>

        <div class="faq-list">
          <details>
            <summary>What is AeroReads?</summary>
            <p>AeroReads is a book-rental concept intended to help readers enjoy books through rental plans instead of purchasing every title.</p>
          </details>

          <details>
            <summary>How does book rental work?</summary>
            <p>Explore the plans and request a callback. Our team can discuss available books, rental duration, and the next steps.</p>
          </details>

          <details>
            <summary>How much do the rental plans cost?</summary>
            <p>Final plan prices are being confirmed. Request a callback to ask about the latest plan details.</p>
          </details>

          <details>
            <summary>Can I request a particular book?</summary>
            <p>You can mention books or genres that interest you in the callback form. Availability will need to be confirmed.</p>
          </details>

          <details>
            <summary>Are delivery charges or deposits required?</summary>
            <p>Delivery charges, deposits, and other terms will depend on the final rental plans and will be explained before you commit.</p>
          </details>

          <details>
            <summary>How do I get started?</summary>
            <p>Choose a plan that interests you and submit the callback form. This enquiry does not itself create an order or subscription.</p>
          </details>
        </div>
      </div>
    </section>

    <!-- CALLBACK -->
    <section class="section callback-section" id="callback">
      <div class="container callback-grid">
        <div class="callback-copy">
          <span class="eyebrow">Let's connect</span>
          <h2>Ready to Explore a Better Way to Read?</h2>

          <p>
            Interested in AeroReads? Share your contact details and the plan
            you are considering. Tell us which books or genres interest you.
          </p>

          <p>
            This is an enquiry form only. Submitting it does not confirm
            a rental, payment, or delivery.
          </p>

          <div class="contact-point">📚 AeroReads — Rent. Read. Repeat.</div>
        </div>

        <!--
          CALLBACK SETUP:
          Replace YOUR_EMAIL with an email address you control.
          Verify the address with FormSubmit before accepting real enquiries.
          Documentation: https://formsubmit.co/
        -->
        <form class="callback-form" id="callbackForm"
              action="https://formsubmit.co/YOUR_EMAIL"
              method="POST">

          <input type="hidden" name="_subject" value="New AeroReads Callback Request">
          <input type="hidden" name="_template" value="table">
          <input type="hidden" name="_captcha" value="true">

          <!-- Honeypot field -->
          <input type="text" name="_honey" tabindex="-1"
                 autocomplete="off" aria-hidden="true"
                 style="position:absolute;left:-9999px;">

          <div class="form-grid">
            <div class="field">
              <label for="name">Full Name *</label>
              <input id="name" name="name" type="text" required
                     maxlength="100" autocomplete="name"
                     placeholder="Enter your name">
            </div>

            <div class="field">
              <label for="phone">Phone Number *</label>
              <input id="phone" name="phone" type="tel" required
                     maxlength="20" autocomplete="tel"
                     pattern="[+0-9() -]{8,20}"
                     placeholder="+91 98765 43210">
            </div>

            <div class="field">
              <label for="email">Email Address</label>
              <input id="email" name="email" type="email"
                     maxlength="150" autocomplete="email"
                     placeholder="you@example.com">
            </div>

            <div class="field">
              <label for="city">Your City</label>
              <input id="city" name="city" type="text"
                     maxlength="100" autocomplete="address-level2"
                     placeholder="Enter your city">
            </div>

            <div class="field full">
              <label for="plan">Interested Rental Plan</label>
              <select id="plan" name="interested_plan">
                <option value="">Not sure yet</option>
                <option value="Starter Reader">Starter Reader</option>
                <option value="Regular Reader">Regular Reader</option>
                <option value="Book Lover">Book Lover</option>
                <option value="Other / Business Enquiry">Other / Business Enquiry</option>
              </select>
            </div>

            <div class="field full">
              <label for="time">Preferred Callback Time</label>
              <select id="time" name="preferred_callback_time">
                <option value="">No preference</option>
                <option value="Morning">Morning</option>
                <option value="Afternoon">Afternoon</option>
                <option value="Evening">Evening</option>
              </select>
            </div>

            <div class="field full">
              <label for="message">What would you like to know?</label>
              <textarea id="message" name="message" maxlength="1000"
                        placeholder="Tell us about your reading interests or questions..."></textarea>
            </div>
          </div>

          <label class="consent">
            <input type="checkbox" name="consent" value="yes" required>
            <span>I agree to be contacted by AeroReads regarding my enquiry. *</span>
          </label>

          <button type="submit" class="btn btn-primary">
            Request My Callback →
          </button>

          <p class="form-note">
            Do not submit payment information or other sensitive information in this form.
            Publish a privacy policy before collecting real customer details.
          </p>

          <p id="formMessage" role="status" aria-live="polite"
             style="display:none;margin-top:14px;font-size:13px;color:#0F766E;">
            Your browser is submitting your enquiry. Please wait for the form service's confirmation.
          </p>
        </form>
      </div>
    </section>
  </main>

  <!-- SEPARATED FOOTER PARTIAL -->
  @include('partials.footer')

  <script>
    // Mobile navigation
    const menuToggle = document.getElementById("menuToggle");
    const navLinks = document.getElementById("navLinks");

    menuToggle.addEventListener("click", () => {
      const isOpen = navLinks.classList.toggle("open");

      menuToggle.setAttribute("aria-expanded", String(isOpen));
      menuToggle.setAttribute(
        "aria-label",
        isOpen ? "Close navigation" : "Open navigation"
      );
      menuToggle.textContent = isOpen ? "✕" : "☰";
    });

    navLinks.querySelectorAll("a").forEach(link => {
      link.addEventListener("click", () => {
        navLinks.classList.remove("open");
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.setAttribute("aria-label", "Open navigation");
        menuToggle.textContent = "☰";
      });
    });

    // Automatically select a plan when its callback button is clicked
    document.querySelectorAll(".plan-button").forEach(button => {
      button.addEventListener("click", () => {
        document.getElementById("plan").value = button.dataset.plan;

        document.getElementById("callback").scrollIntoView({
          behavior: "smooth"
        });

        setTimeout(() => {
          document.getElementById("name").focus({ preventScroll: true });
        }, 450);
      });
    });

    // Current year
    document.getElementById("year").textContent = new Date().getFullYear();

    // Callback form setup check
    const callbackForm = document.getElementById("callbackForm");
    const formMessage = document.getElementById("formMessage");

    callbackForm.addEventListener("submit", event => {
      const action = callbackForm.getAttribute("action");

      if (action.includes("YOUR_EMAIL")) {
        event.preventDefault();

        alert(
          "Callback form setup is incomplete. Replace YOUR_EMAIL in the form action with your email address first."
        );

        return;
      }

      if (!callbackForm.reportValidity()) {
        event.preventDefault();
        return;
      }

      // This message means submission is starting, not that delivery succeeded.
      formMessage.style.display = "block";
    });
  </script>
</body>
</html>
